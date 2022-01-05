<?php

use Source\Support\Language;

$language = new Language();
$ldap_dn = "cn=pmi\jefferson.augusto,ou=PMI,dc=pmi,dc=dns,dc=com";
$ldap_password = "5085426";

$ldap_con = ldap_connect("191.168.200.1");

ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

if(@ldap_bind($ldap_con,$ldap_dn,$ldap_password))
    echo "Authenticated";
else
    echo "Invalid Credential";
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
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
<!--begin::Main-->
<!--begin::Root-->
<!--TODO[Layout]layout/main/root/_base.php-->
<?= $v->insert("layout/main/root/_base"); ?>
<!--end::Root-->
<!--begin::Scrolltop-->
<!--TODO[Layout]layout/scrolltop/_base.php-->
<?= $v->insert("layout/scrolltop/_base"); ?>
<!--end::Scrolltop-->
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
<script type="text/javascript">
    var linkArray = [];
    function init(){
        // Create an XMLHttp object so we can fetch the XML from the server.
        // Keep in mind that you can't do this with local files on your harddrive, they must be on a server and this request must come from the SAME DOMAIN
        // Security rules in effect
        var xmlHttp = window.ActiveXObject ? new ActiveXObject("Microsoft.XMLHTTP") :  new XMLHttpRequest();
        //xmlHttp.async = false;
        xmlHttp.open("GET","source/xml/entity.xml",false);
        xmlHttp.send(null);

        var xmlDoc = xmlHttp.responseXML;
        // Pull out the Name and Street elements
        var nName = xmlDoc.getElementsByTagName('name');
        var nStreet = xmlDoc.getElementsByTagName('street');

        // Create our two arrays
        var arrName=new Array();
        var arrStreet=new Array();
        
        // Loop through each Name elements yanking out the values and pushing them into the array
        for (i=0; i<nName.length; i++)
        {
            arrName.push(nName[i].childNodes[0].nodeValue);
        }

        // So the same with Street elements
        for (i=0; i<nStreet.length; i++)
        {
            arrStreet.push(nStreet[i].childNodes[0].nodeValue);
        }

        // Loop through arrays and print their Name and Street
        for (var s in arrName) {
            //alert(arrName[s]);
            //alert(arrStreet[s]);
        }
    }
    navigator.appName == "Microsoft Internet Explorer" ? attachEvent('onload', init, false) : addEventListener('load', init, false);

</script>
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>