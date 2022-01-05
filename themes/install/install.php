<?php
use Source\Support\Language;
$language = new Language();

function login_ldap(){

    $domain = 'pmi.dns.com';
    $username = 'administrador';
    $password = 'Ti@Pmi#2017';
    $ldapconfig['host'] = '191.168.200.1';
    $ldapconfig['port'] = 389;//389;
    $ldapconfig['basedn'] = 'dc=pmi,dc=dns,dc=com';

    $ds=ldap_connect($ldapconfig['host'], $ldapconfig['port']);
    ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);

    $dn="ou=PMI,".$ldapconfig['basedn'];
    $bind=ldap_bind($ds, $username .'@' .$domain, $password);
    $user_active = getenv("USERNAME");
    if(true === $bind):
        $ldap_base_dn = 'DC=XXXX,DC=XXXX';
        $search_filter = '(&(objectCategory=person)(samaccountname='.$user_active.'))';
        $attributes = array();
        $attributes[] = 'givenname';
        $attributes[] = 'mail';
        $attributes[] = 'samaccountname';
        $attributes[] = 'sn';
        $result = ldap_search($ds, $ldapconfig['basedn'], $search_filter, $attributes);
        if (false !== $result):
            $entries = ldap_get_entries($ds, $result);
            for ($x=0; $x<$entries['count']; $x++):
                if (!empty($entries[$x]['givenname'][0]) &&
                    !empty($entries[$x]['mail'][0]) &&
                    !empty($entries[$x]['samaccountname'][0]) &&
                    !empty($entries[$x]['sn'][0]) &&
                    'Shop' !== $entries[$x]['sn'][0] &&
                    'Account' !== $entries[$x]['sn'][0]):
                    $ad_users[strtoupper(trim($entries[$x]['samaccountname'][0]))] = array('email' => strtolower(trim($entries[$x]['mail'][0])),'first_name' => trim($entries[$x]['givenname'][0]),'last_name' => trim($entries[$x]['sn'][0]));
                endif;
            endfor;
        endif;
        ldap_unbind($ds); // Clean up after ourselves.
        echo "Recuperado ". count($ad_users) ." Usuários do Active Directory\n";
        foreach($ad_users as $ad_users_item):
        endforeach;
        var_dump($ad_users_item);

    endif;

}
?>

<?php if(isset($v)):endif; ?>
<?php $v->layout("_theme"); ?>