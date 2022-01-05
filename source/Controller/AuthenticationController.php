<?php

namespace Source\Controller;

use Source\Core\Controller;
use Source\Core\Session;
use Source\Models\Auth;
use Source\Models\Category;
use Source\Models\Faq\Question;
use Source\Models\Post;
use Source\Models\Report\Access;
use Source\Models\Report\Online;
use Source\Models\User;
use Source\Support\Pager;

/**
 * AuthenticationController Controller
 * @package Source\Controller
 */
class AuthenticationController extends Controller
{
    /**
     * AuthenticationController constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_AUTH . "/");
    }

    /**
     * SITE HOME
     */
    public function signIn(): void
    {
        $session = new Session();

        /**
         * LANGUAGE TRANSLATOR
         */
        if($session->has("SessionLanguage")):
            $lang = $_SESSION["SessionLanguage"];
        else:
            $lang = get_local_language();
            langsession($lang);
        endif;

        $session->unset("SessionConfView");
        $SessionConfView = "";
        $session->set("SessionConfView", $SessionConfView);
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url("/login"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("sign-in", [
            "head" => $head,
            "video" => "lDZGl9Wdc7Y",
            "lang" => $lang
        ]);
    }
}