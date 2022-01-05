<?php
/**
 * DATABASE
 */

define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "bdtotustuusigreja");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.cafecontrol3.com.br");
define("CONF_URL_TEST", "https://www.localhost/totustuusgestaoti");

/**
 * SITE
 */

define("CONF_SITE_NAME", "TotusTuus TI Cloud");
define("CONF_SITE_TITLE", "Gerencie sua TI com a TotusTuus TI Cloud");
define("CONF_SITE_DESC", "O TotusTuus TI Cloud é um gerenciador de contas simples, poderoso. O prazer gerencia a tecnologia da informação e ter o controle total de suas tecnologias.");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "cloud.totustuus.com.br");
define("CONF_SITE_ADDR_STREET", "Rua Leniz Nogueira Silveira, Santa Aguida");
define("CONF_SITE_ADDR_NUMBER", "81");
define("CONF_SITE_ADDR_COMPLEMENT", "Escritorio Virtual");
define("CONF_SITE_ADDR_CITY", "Azurita - Mateus Leme");
define("CONF_SITE_ADDR_STATE", "MG");
define("CONF_SITE_ADDR_ZIPCODE", "35672-000");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@creator");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@creator");
define("CONF_SOCIAL_FACEBOOK_APP", "5555555555");
define("CONF_SOCIAL_FACEBOOK_PAGE", "pagename");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "author");
define("CONF_SOCIAL_GOOGLE_PAGE", "5555555555");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "5555555555");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "insta");
define("CONF_SOCIAL_YOUTUBE_PAGE", "youtube");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../assets/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "web");
define("CONF_VIEW_AUTH", "authentication");
define("CONF_VIEW_ERROR", "errors");
define("CONF_VIEW_INSTALL", "install");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "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");
define("CONF_MAIL_SENDER", ["name" => "Robson V. Leite", "address" => "sender@email.com"]);
define("CONF_MAIL_SUPPORT", "sender@support.com");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");

/**
 * PAGAR.ME
 */
define("CONF_PAGARME_MODE", "test");
define("CONF_PAGARME_LIVE", "ak_live_*****");
define("CONF_PAGARME_TEST", "ak_test_*****");
define("CONF_PAGARME_BACK", CONF_URL_BASE . "/pay/callback");

/**
 * CRYPTOGRAPHY
 */
define("CONF_ENCRYPTION_METHOD", "AES-256-CBC");
define("CONF_ENCRYPTION_SECRET_HASH", "TT-Encry::hash[GTI]");
define("CONF_ENCRYPTION_IV", "[}#T@t@s-tuus!{]");
define("CONF_DEV_ENT_TOKEN","WJIs5BajrM+k2dJ9C8c+yuKCjAUl2iUIzNfScGbUAHLZZndeJsyI8rJH5hBgOProhFMwMTcHdemm19HIEpvJKQ==");
define("CONF_FOLLOW_UP_ID", 1);

//$iv = mcrypt_create_iv(16, MCRYPT_RAND); minas gerais token i61/HO6485EEu7LsXA9gvTkQkR5c0WjzLEtFKv613Y3JgBIzDTD1dYFJfcNO8VJXK2BYYA/FcWYBfk+Dnn+P/g==