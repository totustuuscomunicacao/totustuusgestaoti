<?php
use Source\Support\Language;
$language = new Language();
?>
<?php if(isset($v)):endif; ?>
<?php if(isset($error)):endif; ?>
<?php $v->layout("_theme"); ?>

<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - 404 Page-->
    <div class="d-flex flex-column flex-center flex-column-fluid p-10">
        <!--begin::Illustration "{$error->icon}-->
        <img src="<?= url("storage/icons/error/icon-error-404.svg"); ?>"
             alt="<?= "[ ERROR ] ".$error->code; ?>"
             class="mw-100 mb-10 h-lg-450px" />
        <!--end::Illustration-->

        <!--begin::Title-->
        <a href="#" class="card-title m-0 pt-7 pb-1"
           style="
                color:#313131;
               font-weight: bold;
               font-size: 3rem;
                text-shadow: -0.06em 0 var(--bs-error-rose),  0.06em 0 var(--bs-error-cyan);
                letter-spacing: 0.08em;">
            [ ERROR ]  <?= $error->code; ?>
        </a>
        <!--end::Title-->
        <!--begin::Message-->
        <h1 class="fw-bold mb-10" style="color: #A3A3C7"><?= $error->title; ?></h1>
        <p class="fw-normal mb-10" style="color: #A3A3C7"><?= $error->message;?></p>
        <!--end::Message-->
        <!--end::Text-->
        <?php if ($error->link): ?>
            <a class="btn btn-danger fw-bold px-6 py-3"
               title="<?= $error->linkTitle; ?>" href="<?= $error->link; ?>"><?= $error->linkTitle; ?></a>
        <?php endif; ?>
    </div>
    <!--end::Authentication - 404 Page-->
</div>
<!--end::Root-->
