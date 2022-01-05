<?php
use Source\Support\Language;
$language = new Language();
?>
<?php if(isset($v)):endif; ?>
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <!--TODO[Layout]layout/main/root/aside/_base.php-->
        <?= $v->insert("layout/main/root/aside/_base"); ?>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <!--TODO[Layout]layout/main/root/wrapper/_base.php-->
        <?= $v->insert("layout/main/root/wrapper/_base"); ?>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
