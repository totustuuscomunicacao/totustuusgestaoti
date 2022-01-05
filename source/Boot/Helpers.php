<?php
use Source\Core\Session;

/**
 * ####################
 * ###   VALIDATE   ###
 * ####################
 */

/**
 * @param string $email
 * @return bool
 */
function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * @param string $password
 * @return bool
 */
function is_passwd(string $password): bool
{
    if (password_get_info($password)['algo'] || (mb_strlen($password) >= CONF_PASSWD_MIN_LEN && mb_strlen($password) <= CONF_PASSWD_MAX_LEN)) {
        return true;
    }

    return false;
}

/**
 * ##################
 * ###   STRING   ###
 * ##################
 */

/**
 * @param string $string
 * @return string
 */
function str_slug(string $string): string
{
    $string = filter_var(mb_strtolower($string), FILTER_SANITIZE_STRIPPED);
    $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

    $slug = str_replace(["-----", "----", "---", "--"], "-",
        str_replace(" ", "-",
            trim(strtr(utf8_decode($string), utf8_decode($formats), $replace))
        )
    );
    return $slug;
}

/**
 * @param string $string
 * @return string
 */
function str_studly_case(string $string): string
{
    $string = str_slug($string);
    $studlyCase = str_replace(" ", "",
        mb_convert_case(str_replace("-", " ", $string), MB_CASE_TITLE)
    );

    return $studlyCase;
}

/**
 * @param string $string
 * @return string
 */
function str_camel_case(string $string): string
{
    return lcfirst(str_studly_case($string));
}

/**
 * @param string $string
 * @return string
 */
function str_title(string $string): string
{
    return mb_convert_case(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS), MB_CASE_TITLE);
}

/**
 * @param string $text
 * @return string
 */
function str_textarea(string $text): string
{
    $text = filter_var($text, FILTER_SANITIZE_STRIPPED);
    $arrayReplace = ["&#10;", "&#10;&#10;", "&#10;&#10;&#10;", "&#10;&#10;&#10;&#10;", "&#10;&#10;&#10;&#10;&#10;"];
    return "<p>" . str_replace($arrayReplace, "</p><p>", $text) . "</p>";
}

/**
 * @param string $string
 * @param int $limit
 * @param string $pointer
 * @return string
 */
function str_limit_words(string $string, int $limit, string $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    $arrWords = explode(" ", $string);
    $numWords = count($arrWords);

    if ($numWords < $limit) {
        return $string;
    }

    $words = implode(" ", array_slice($arrWords, 0, $limit));
    return "{$words}{$pointer}";
}

/**
 * @param string $string
 * @param int $limit
 * @param string $pointer
 * @return string
 */
function str_limit_chars(string $string, int $limit, string $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    if (mb_strlen($string) <= $limit) {
        return $string;
    }

    $chars = mb_substr($string, 0, mb_strrpos(mb_substr($string, 0, $limit), " "));
    return "{$chars}{$pointer}";
}

/**
 * @param string $price
 * @return string
 */
function str_price(?string $price): string
{
    return number_format((!empty($price) ? $price : 0), 2, ",", ".");
}

/**
 * @param string|null $search
 * @return string
 */
function str_search(?string $search): string
{
    if (!$search) {
        return "all";
    }

    $search = preg_replace("/[^a-z0-9A-Z\@\ ]/", "", $search);
    return (!empty($search) ? $search : "all");
}

/**
 * ###############
 * ###   URL   ###
 * ###############
 */

/**
 * @param string $path
 * @return string
 */
function url(string $path = null): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
        if ($path) {
            return CONF_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_TEST;
    }

    if ($path) {
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE;
}

/**
 * @return string
 */
function url_back(): string
{
    return ($_SERVER['HTTP_REFERER'] ?? url());
}

/**
 * @param string $url
 */
function redirect(string $url): void
{
    header("HTTP/1.1 302 Redirect");
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: {$url}");
        exit;
    }

    if (filter_input(INPUT_GET, "route", FILTER_DEFAULT) != $url) {
        $location = url($url);
        header("Location: {$location}");
        exit;
    }
}

/**
 * ##################
 * ###   ASSETS   ###
 * ##################
 */

/**
 * @return \Source\Models\User|null
 */
function user(): ?\Source\Models\User
{
    return \Source\Models\Auth::user();
}

/**
 * @return \Source\Core\Session
 */
function session(): \Source\Core\Session
{
    return new \Source\Core\Session();
}

/**
 * @param string|null $path
 * @param string $theme
 * @return string
 */
function theme(string $path = null, string $theme = CONF_VIEW_THEME): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
        if ($path) {
            return CONF_URL_TEST . "/themes/{$theme}/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }

        return CONF_URL_TEST . "/themes/{$theme}";
    }

    if ($path) {
        return CONF_URL_BASE . "/themes/{$theme}/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE . "/themes/{$theme}";
}

/**
 * @param string $image
 * @param int $width
 * @param int|null $height
 * @return string
 */
function image(?string $image, int $width, int $height = null): ?string
{
    if ($image) {
        return url() . "/" . (new \Source\Support\Thumb())->make($image, $width, $height);
    }

    return null;
}

/**
 * ################
 * ###   DATE   ###
 * ################
 */

/**
 * @param string $date
 * @param string $format
 * @return string
 * @throws Exception
 */
function date_fmt(?string $date, string $format = "d/m/Y H\hi"): string
{
    $date = (empty($date) ? "now" : $date);
    return (new DateTime($date))->format($format);
}

/**
 * @param string $date
 * @return string
 * @throws Exception
 */
function date_fmt_br(?string $date): string
{
    $date = (empty($date) ? "now" : $date);
    return (new DateTime($date))->format(CONF_DATE_BR);
}

/**
 * @param string $date
 * @return string
 * @throws Exception
 */
function date_fmt_app(?string $date): string
{
    $date = (empty($date) ? "now" : $date);
    return (new DateTime($date))->format(CONF_DATE_APP);
}

/**
 * @param string|null $date
 * @return string|null
 */
function date_fmt_back(?string $date): ?string
{
    if (!$date) {
        return null;
    }

    if (strpos($date, " ")) {
        $date = explode(" ", $date);
        return implode("-", array_reverse(explode("/", $date[0]))) . " " . $date[1];
    }

    return implode("-", array_reverse(explode("/", $date)));
}

/**
 * ####################
 * ###   PASSWORD   ###
 * ####################
 */

/**
 * @param string $password
 * @return string
 */
function passwd(string $password): string
{
    if (!empty(password_get_info($password)['algo'])) {
        return $password;
    }

    return password_hash($password, CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);
}

/**
 * @param string $password
 * @param string $hash
 * @return bool
 */
function passwd_verify(string $password, string $hash): bool
{
    return password_verify($password, $hash);
}

/**
 * @param string $hash
 * @return bool
 */
function passwd_rehash(string $hash): bool
{
    return password_needs_rehash($hash, CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);
}

/**
 * ###################
 * ###   REQUEST   ###
 * ###################
 */

/**
 * @return string
 */
function csrf_input(): string
{
    $session = new \Source\Core\Session();
    $session->csrf();
    return "<input type='hidden' name='csrf' value='" . ($session->csrf_token ?? "") . "'/>";
}

/**
 * @param $request
 * @return bool
 */
function csrf_verify($request): bool
{
    $session = new \Source\Core\Session();
    if (empty($session->csrf_token) || empty($request['csrf']) || $request['csrf'] != $session->csrf_token) {
        return false;
    }
    return true;
}

/**
 * @return null|string
 */
function flash(): ?string
{
    $session = new \Source\Core\Session();
    if ($flash = $session->flash()) {
        return $flash;
    }
    return null;
}

/**
 * @param string $key
 * @param int $limit
 * @param int $seconds
 * @return bool
 */
function request_limit(string $key, int $limit = 5, int $seconds = 60): bool
{
    $session = new \Source\Core\Session();
    if ($session->has($key) && $session->$key->time >= time() && $session->$key->requests < $limit) {
        $session->set($key, [
            "time" => time() + $seconds,
            "requests" => $session->$key->requests + 1
        ]);
        return false;
    }

    if ($session->has($key) && $session->$key->time >= time() && $session->$key->requests >= $limit) {
        return true;
    }

    $session->set($key, [
        "time" => time() + $seconds,
        "requests" => 1
    ]);

    return false;
}

/**
 * @param string $field
 * @param string $value
 * @return bool
 */
function request_repeat(string $field, string $value): bool
{
    $session = new \Source\Core\Session();
    if ($session->has($field) && $session->$field == $value) {
        return true;
    }

    $session->set($field, $value);
    return false;
}



/**
 * @param string $url
 * @return null|string
 */
function getIconSvg(string $url): ?string
{
    $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );

    //$response = my_file_get_contents("{$url}", false, stream_context_create($arrContextOptions));

    $response = file_get_contents("{$url}", false, stream_context_create($arrContextOptions));


    return $response;
}
function my_file_get_contents( $site_url ){
    $ch = curl_init();
    $timeout = 5; // set to zero for no timeout
    curl_setopt ($ch, CURLOPT_URL, $site_url);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    ob_start();
    curl_exec($ch);
    curl_close($ch);
    $file_contents = ob_get_contents();
    ob_end_clean();
    return $file_contents;
}


/**
 * ############################
 * ###   LANGUAGE SESSION   ###
 * ###########################
 */

/**
 * @param string $lang
 * @return string
 */

function langsession(string $lang): bool
{
    $session = new Session();

    setcookie("SessionLanguage", true, time() + 86400, "/");
    $session->set("SessionLanguage", $lang);

    return true;
}

/**
 * @param string $locallanguage
 * @return string
 */
function get_local_language()
{
    $locallanguage = null;
    $locallanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,5);
    return $locallanguage;
}

/**
 * @param string $sessiontargets
 * @return string
 */

function TargetSliderBannerSession(string $sessiontargets): bool
{
    $session = new Session();

    setcookie("TargetSliderBanner", true, time() + 86400, "/");
    $session->set("TargetSliderBanner", $sessiontargets);

    return true;
}

/**
 * @param string|null $caracter
 * @return string|null
 */
function convertCaracterToNumber(?string $caracter):string
{

    switch (mb_strtoupper($caracter)) {

        case "A":
            $newcaracter = "1";
            break;
        case "B":
            $newcaracter = "2";
            break;
        case "C":
            $newcaracter = "3";
            break;
        case "D":
            $newcaracter = "4";
            break;
        case "E":
            $newcaracter = "5";
            break;
        case "F":
            $newcaracter = "6";
            break;
        case "G":
            $newcaracter = "7";
            break;
        case "H":
            $newcaracter = "8";
            break;
        case "I":
            $newcaracter = "9";
            break;
        case "J":
            $newcaracter = "10";
            break;
        case "K":
            $newcaracter = "11";
            break;
        case "L":
            $newcaracter = "12";
            break;
        case "M":
            $newcaracter = "13";
            break;
        case "N":
            $newcaracter = "14";
            break;
        case "O":
            $newcaracter = "15";
            break;
        case "P":
            $newcaracter = "16";
            break;
        case "Q":
            $newcaracter = "17";
            break;
        case "R":
            $newcaracter = "18";
            break;
        case "S":
            $newcaracter = "19";
            break;
        case "T":
            $newcaracter = "20";
            break;
        case "U":
            $newcaracter = "21";
            break;
        case "V":
            $newcaracter = "22";
            break;
        case "W":
            $newcaracter = "23";
            break;
        case "X":
            $newcaracter = "24";
            break;
        case "Y":
            $newcaracter = "25";
            break;
        case "Z":
            $newcaracter = "26";
            break;
    }
    return $newcaracter;
}

/**
 * @param string|null $numero
 * @return string|null
 */
function formatPhone(?string $numero):string{
    if(strlen($numero) == 10):
        $formata = substr($numero, 0, 2);
        $formata_2 = substr($numero, 2, 4);
        $formata_3 = substr($numero, 6, 4);
    elseif(strlen($numero) == 11):
        if(substr($numero, 0, 1) == 0 && substr($numero, 2, 1) == 0 && substr($numero, 3, 1) == 0):
            $formata = substr($numero, 0, 4);
            $formata_2 = substr($numero, 4, 3);
            $formata_3 = substr($numero, 7, 4);
        else:
            $formata = substr($numero, 0, 2);
            $formata_2 = substr($numero, 2, 5);
            $formata_3 = substr($numero, 7, 4);
        endif;
    endif;

    return "(".$formata.") " . $formata_2 . "-". $formata_3;
}

/**
 * @param string|null $name_description
 * @return string|null
 */
function twoName(?string $name_description):string{
    $name_array = explode(" ",$name_description);
    if($name_array[1] == "da" || $name_array[1] == "das" ||$name_array[1] == "de" || $name_array[1] == "do" || $name_array[1] == "du"):
        $name_return = $name_array[0]." ".$name_array[1]." ".$name_array[2];
    else:
        $name_return = $name_array[0]." ".$name_array[1];
    endif;
    return $name_return;
}

/**
 * @param string|null $name_description
 * @return string|null
 */
function oneName(?string $name_description):string{
    $name_array = explode(" ",$name_description);
    return $name_array[0];
}

/**
 * @param string|null $titleBreadcrumbValue
 * @return array|null
 */
function titleBreadcrumb(?string $titleBreadcrumbValue): ?array{
    $title_array = explode("|",$titleBreadcrumbValue);
    if(isset($title_array)):
        return $title_array;
    endif;
    return null;
}

/**
 * @param string|null $url
 * @return string|null
 */
function extensionIcon(?string $url):string{
    $extensionReturn = pathinfo($url, PATHINFO_EXTENSION);
    return $extensionReturn;
}

/**
 * @param string $DataUserID
 * @return string
 */

function datauseridsession(string $DataUserID): bool
{
    $session = new Session();

    setcookie("SessionUserID", true, time() + 86400, "/");
    $session->set("SessionUserID", $DataUserID);

    return true;
}

/**
 * CRIOPTOGRAFIA DUPLA POR EDUARDO BORGES
 * @param string $DataCription
 * @param int $DataType
 * @return string
 */
function encripta(string $DataCription, int $DataType){
    // VEJA QUE PRIMEIRO EU VOU GERAR UM SALT JÁ ENCRIPTADO EM MD5
    switch ($DataType):
        case(1):
            $DataSalt = md5(CONF_ENCRYPTION_SECRET_HASH."Developer");
            break;
        case(2):
            $DataSalt = md5(CONF_ENCRYPTION_SECRET_HASH."Entity");
            break;
        case(3):
            $DataSalt = md5(CONF_ENCRYPTION_SECRET_HASH."People");
            break;
    endswitch;

    //PRIMEIRA ENCRIPTAÇÃO ENCRIPTANDO COM crypt
    $DataCodification = crypt($DataCription,$DataSalt);

    // SEGUNDA ENCRIPTAÇÃO COM sha512 (128 bits)
    $DataCriptionResult = hash('sha512',$DataCodification);

    //AGORA RETORNO O VALOR FINAL ENCRIPTADO
    return $DataCriptionResult;

}

/**
 * INVOICE ID
 * @param string $DataInvoiceID
 * @return string
 */
function invoiceIDConvert($DataInvoiceID){
    $DataInvoiceIDResult = str_pad((string)$DataInvoiceID, 5, '0', STR_PAD_LEFT);
    return $DataInvoiceIDResult;
}

/**
 * ENCRYPTION MCRYPT
 * @param string $DataEncryptionMcrypt
 * @return string
 */
function encryptionMcrypt($DataEncryptionMcrypt){
    $DataEncryptionMcryptResult = openssl_encrypt($DataEncryptionMcrypt,CONF_ENCRYPTION_METHOD,CONF_ENCRYPTION_SECRET_HASH, 0, CONF_ENCRYPTION_IV);
    return $DataEncryptionMcryptResult;
}

/**
 * DENCRYPTION MCRYPT
 * @param string $DataDencryptionMcrypt
 * @return string
 */
function dencryptionMcrypt($DataDencryptionMcrypt){
    $DataDencryptionMcryptResult = openssl_decrypt($DataDencryptionMcrypt,CONF_ENCRYPTION_METHOD,CONF_ENCRYPTION_SECRET_HASH, 0, CONF_ENCRYPTION_IV);
    return $DataDencryptionMcryptResult;
}




/**
 * @param string|null $url
 * @param string|null $params
 * @return string|null
 */
function getUrlAPI(?string $url,string $params):string{

    $arrContextOptions = array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
        ),
    );

    $apiReturn = file_get_contents("{$url}{$params}", false, stream_context_create($arrContextOptions));

    return $apiReturn;
}


/**
 * @param string|null $url
 * @param string|null $token
 * @return string|null
 */
function getTokenAPI(?string $url, string $token):string{

    $arrContextOptions = array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
        ),
    );
    $apiReturn = null;
    if($token == ""):
        $apiReturn = "error_token";
    endif;

    $apiReturn = file_get_contents("{$url}{$token}", false, stream_context_create($arrContextOptions));

    return $apiReturn;
}

/**
 * @param string|null $description
 * @return string|null
 */
function firstLetters(?string $description):string{
    $nome = preg_split("/((de|da|do|dos|das)?)[\s,_-]+/", "{$description}");
    $iniciais = "";
    foreach($nome as $n)
    {
        if (strlen($n) > 0)
        {
            $iniciais .= $n[0];
        }
    }

    return $iniciais;
}


/**
 * @param string|null $description
 * @param string|null $mask
 * @return string|null
 */
function maskString(?string $description, string $mask):string{
    $maskared = '';
    $k = 0;
    for($i = 0; $i<=strlen($mask)-1; $i++) {
        if($mask[$i] == '#') {
            if(isset($description[$k])) $maskared .= $description[$k++];
        } else {
            if(isset($mask[$i])) $maskared .= $mask[$i];
        }
    }
    return $maskared;
}
