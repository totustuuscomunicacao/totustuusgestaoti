<?php
use Source\Support\Language;
$language = new Language();
?>
<?php if(isset($v)):endif; ?>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <?= $v->section("content"); ?>
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
