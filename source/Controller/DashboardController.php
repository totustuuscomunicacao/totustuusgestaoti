<?php

namespace Source\Controller;
use Source\Core\Controller;
use Source\Core\Session;

/**
 * DashboardController Controller
 * @package Source\Controller
 */
class DashboardController extends Controller
{
    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");

    }

    /**
     * SITE Dashboard
     */
    public function dashboard(): void
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
            url(),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("dashboard", [
            "head" => $head,
            "video" => "lDZGl9Wdc7Y",
            "lang" => $lang
        ]);
    }

}