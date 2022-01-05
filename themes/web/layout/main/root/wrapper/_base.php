<?php
use Source\Support\Language;
$language = new Language();
?>
<?php if(isset($v)):endif; ?>
<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <!--begin::Header-->
    <!--TODO[Layout]layout/main/root/wrapper/header/_header.php-->
    <?= $v->insert("layout/main/root/wrapper/header/_header"); ?>
    <!--end::Header-->
    <!--begin::Content-->
    <!--TODO[Layout]layout/main/root/wrapper/content/_content.php-->
    <?= $v->insert("layout/main/root/wrapper/content/_content"); ?>
    <!--end::Content-->
    <!--begin::Footer-->
    <!--TODO[Layout]layout/main/root/wrapper/footer/_footer.php-->
    <?= $v->insert("layout/main/root/wrapper/footer/_footer"); ?>
    <!--end::Footer-->
</div>
<!--end::Wrapper-->
