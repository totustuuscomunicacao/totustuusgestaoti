<?php
use Source\Support\Language;
$language = new Language();
?>
<?php if(isset($v)):endif; ?>

<!--begin::Tab pane-->
<div class="tab-pane fade active show"
     id="kt_aside_nav_tab_install"
     role="tabpanel">
    <!--begin::Wrapper-->
    <div class="m-0">
        <div class="text-center px-4">
            <!--begin::TODO[Svg Icon] | path: storage/icons/install.svg-->
            <span class="svg-icon svg-icon-lg-11tx">
                <?= getIconSvg("storage/icons/install.svg"); ?>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--begin::Projects-->
        <div class="m-0">
            <!--begin::Heading-->
            <div class="text-center mt-3 px-4">
                <h1 class="text-gray-800 fw-bold mb-6 mx-5">Instalação</h1>
            </div>
            <!--end::Heading-->
            <!--begin::Items-->
            <div class="mb-10">
                <!--begin::Item-->
                <a href="<?= url("/"); ?>" class="custom-list d-flex align-items-center px-5 py-4">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-5">
                        <span class="symbol-label">
                            <i class="fad fa-database fs-xxl-10"></i>
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Description-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">
                            Banco de Dados
                        </h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">Configuração</span>
                        <!--end::Link-->
                    </div>
                    <!--begin::Description-->
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="<?= url("/"); ?>" class="custom-list d-flex align-items-center px-5 py-4">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Description-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Criptografia</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">Configuração</span>
                        <!--end::Link-->
                    </div>
                    <!--begin::Description-->
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="<?= url("/"); ?>" class="custom-list d-flex align-items-center px-5 py-4">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Description-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Entidade</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">Configuração</span>
                        <!--end::Link-->
                    </div>
                    <!--begin::Description-->
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="<?= url("/"); ?>" class="custom-list d-flex align-items-center px-5 py-4">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/beats-electronics.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Description-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Login</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">Configuração</span>
                        <!--end::Link-->
                    </div>
                    <!--begin::Description-->
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="<?= url("/"); ?>" class="custom-list d-flex align-items-center px-5 py-4">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/rgb.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Description-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Servidor de E-mail</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">Configuração</span>
                        <!--end::Link-->
                    </div>
                    <!--begin::Description-->
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="<?= url("/"); ?>" class="custom-list d-flex align-items-center px-5 py-4">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/disqus.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Description-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Notificação</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">Configuração</span>
                        <!--end::Link-->
                    </div>
                    <!--begin::Description-->
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="<?= url("/"); ?>" class="custom-list d-flex align-items-center px-5 py-4">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Description-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Modulos</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">Configuração</span>
                        <!--end::Link-->
                    </div>
                    <!--begin::Description-->
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="<?= url("/"); ?>" class="custom-list d-flex align-items-center px-5 py-4">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Description-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Token</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">Configuração</span>
                        <!--end::Link-->
                    </div>
                    <!--begin::Description-->
                </a>
                <!--end::Item-->
            </div>
            <!--end::Items-->
        </div>
        <!--end::Projects-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Tab pane-->
