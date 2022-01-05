<?php

namespace Source\Controller;

use Source\Core\Controller;

/**
 * ErrorController Controller
 * @package Source\Controller
 */
class ErrorController extends Controller
{
    /**
     * ErrorController constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_ERROR . "/");
    }

    /**
     * SITE NAV ERROR
     * @param array $data
     */
    public function error(array $data): void
    {
        $error = new \stdClass();

        switch ($data['errcode']) {
            case "problemas":
                $error->code = "OPS";
                $error->title = "Estamos enfrentando problemas!";
                $error->message = "Parece que nosso serviço não está diponível no momento. Já estamos vendo isso mas caso precise, envie um e-mail :)";
                $error->linkTitle = "ENVIAR E-MAIL";
                $error->link = "mailto:" . CONF_MAIL_SUPPORT;
                $error->icon = "storage/icons/error/";
                break;

            case "manutencao":
                $error->code = "OPS";
                $error->title = "Desculpe. Estamos em manutenção!";
                $error->message = "Voltamos logo! Por hora estamos trabalhando para melhorar nosso conteúdo para você controlar melhor as suas contas :P";
                $error->linkTitle = null;
                $error->link = null;
                $error->icon = "storage/icons/error/";
                break;
            case "301":
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indispinível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, indica que uma página foi movida para outro endereço.";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                $error->icon = "storage/icons/error/icon-error-301.svg";
                break;
            case "302":
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indispinível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, indica que uma página foi movida temporariamente.";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                $error->icon = "storage/icons/error/icon-error-302.svg";
                break;
            case "400":
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indispinível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, indica que a solicitação está incorreta.";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                $error->icon = "storage/icons/error/icon-error-400.svg";
                break;
            case "403":
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indispinível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, indica que o acesso é proibido.";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                $error->icon = "storage/icons/error/icon-error-403.svg";
                break;
            case "404":
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indispinível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, indica que a página não foi encontrada.";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                $error->icon = "storage/icons/error/icon-error-404.svg";
                break;
            case "410":
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indispinível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, indica que o recurso não está mais disponível.";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                $error->icon = "storage/icons/error/icon-error-410.svg";
                break;
            case "500":
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indispinível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, indica um erro interno do servidor.";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                $error->icon = "storage/icons/error/icon-error-500.svg";
                break;
            default:
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indispinível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, está indisponível no momento ou foi removido :/";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                $error->icon = "storage/icons/error/icon-error-404.svg";
                break;
        }

        $head = $this->seo->render(
            "{$error->code} | {$error->title}",
            $error->message,
            url("/ops/{$error->code}"),
            theme("/assets/images/share.jpg"),
            false
        );

        echo $this->view->render("error", [
            "head" => $head,
            "error" => $error
        ]);
    }
}