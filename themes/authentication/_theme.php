<?php
use Source\Support\Language;
$language = new Language();
?>
<?php if(isset($head)):endif; ?>
<?php if(isset($v)):endif; ?>
<!DOCTYPE html>
<!--
Street: Keenthemes
Product Name: Seven HTML Free  - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme
Upgrade to Pro: https://keenthemes.com/products/seven-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="<?= $_SESSION["SessionLanguage"]; ?>">
<!--begin::Head-->
<head>
    <base href="">
    <meta charset="UTF-8">
    <meta name="mit" content="2021-10-29T16:05:55-03:00+189573">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?= $head; ?>

    <link id="kt_favicon" rel="shortcut icon" type="image/png" href="<?= url("storage/images/developer/favicon.svg"); ?>"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="<?= url("assets/fonts/fontawesome-v5/css/pro.min.css"); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= url("assets/fonts/fontawesome-v6/css/all.css.css"); ?>" rel="stylesheet" type="text/css" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="<?= url("assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"); ?>" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= url("assets/plugins/global/plugins.bundle.css"); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= url("assets/css/style.bundle.css"); ?>" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="bg-body">
<!--begin::Main-->
<?= $v->section("content"); ?>
<!--end::Main-->
<script>var hostUrl = "assets/";</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?= url("assets/plugins/global/plugins.bundle.js"); ?>"></script>
<script src="<?= url("assets/js/scripts.bundle.js"); ?>"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?= url("assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"); ?>"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="<?= url("assets/js/custom/widgets.js"); ?>"></script>
<!--end::Page Custom Javascript-->
</body>
<!--end::Body-->
</html>