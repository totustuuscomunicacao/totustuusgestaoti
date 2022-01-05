<?php
use Source\Support\Language;
$language = new Language();
?>
<?php if(isset($v)):endif; ?>

<!--begin::Tab pane-->
<div class="tab-pane fade active show"
     id="kt_aside_nav_tab_help_desk"
     role="tabpanel">
    <!--begin::Wrapper-->
    <div class="m-0">
        <div class="text-center px-4">
            <!--img class="mw-100 mh-300px" alt="" src="< ?= url("storage/icons/halpdesk.svg"); ? >"-->
            <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
            <span class="svg-icon svg-icon-lg-11tx">
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 466.5 512"
                     fill="none">
                    <path fill="black"
                          opacity=".3"
                          d="M389.1,18.7A27.4,27.4,0,0,0,361.6,46,27.3,27.3,0,0,0,307,46H220.3a59.9,59.9,0,0,0-59.9,59.9v75.8c34.8.7,29.2-41.6,29.2-41.6H322.2A94,94,0,0,0,416.3,47C416.4,31.8,404.2,18.7,389.1,18.7Z"
                          transform="translate(-23 0.4)"/>
                    <path fill="black"
                          d="M435.1,45.1H423.9a36.6,36.6,0,0,0-10.3-23.7A34.6,34.6,0,0,0,389.1,11H389a35,35,0,0,0-24.7,10.2,25.2,25.2,0,0,0-2.7,3,34.8,34.8,0,0,0-44.4-8.7A130.3,130.3,0,0,0,155.9,45.1H77.4A54.5,54.5,0,0,0,23,99.5V378.2a54.5,54.5,0,0,0,54.4,54.5h89.4l-18,23.6H98.4a27.7,27.7,0,0,0,0,55.3h52a7.7,7.7,0,1,0,0-15.3h-52a12.3,12.3,0,1,1,0-24.6H414.1a12.3,12.3,0,0,1,0,24.6h-233a7.7,7.7,0,0,0,0,15.3h233a27.7,27.7,0,0,0,0-55.3H363.7l-18-23.6h89.4a54.5,54.5,0,0,0,54.4-54.5V99.5A54.5,54.5,0,0,0,435.1,45.1Zm-267,411.2,18.1-23.6H326.3l18.1,23.6ZM354,46a7.7,7.7,0,1,0,15.3,0,19.7,19.7,0,0,1,5.8-13.9A19.4,19.4,0,0,1,389,26.4h0a19.2,19.2,0,0,1,13.6,5.8,20.5,20.5,0,0,1,6,14.7,86.6,86.6,0,0,1-86.4,85.6H189.6a7.7,7.7,0,0,0-7.6,8.6c.6,5,.8,19.7-6.1,27.4a17.3,17.3,0,0,1-7.8,4.7V105.9a52.2,52.2,0,0,1,52.2-52.2H307a7.7,7.7,0,0,0,7.7-7.7A19.7,19.7,0,0,1,354,46Zm-6.2,240.9a23.5,23.5,0,0,0-2.5-5.3,109.9,109.9,0,0,0,4.9-11.1,27.2,27.2,0,0,0,18.5,7.2h.9v4a5.2,5.2,0,0,1-5.2,5.2ZM170.3,60.5a66.4,66.4,0,0,0-8.8,12.2h-6.4a113,113,0,0,1,8.2-12.2ZM155.1,88.1a69.5,69.5,0,0,0-2.4,17.8v61.6a27.7,27.7,0,0,0-11.9-2.7h-.9v-35a115.3,115.3,0,0,1,7.8-41.7Zm-21.9,92.1h7.6a11.9,11.9,0,0,1,11.9,11.9v58.3a11.9,11.9,0,0,1-11.9,12h-7.6a11.9,11.9,0,0,1-11.9-12V192.1A11.9,11.9,0,0,1,133.2,180.2Zm34.9,11.9v-3.3a31.4,31.4,0,0,0,19.2-10.1c8.3-9.3,10.1-22.3,10.3-30.9H322.2a102.4,102.4,0,0,0,19.2-1.8v88.5a86.5,86.5,0,0,1-8.4,37.2,25.4,25.4,0,0,0-8.3-1.4h-5.5a24.3,24.3,0,0,0-24.3,24.3,24,24,0,0,0,4.5,14.2,86.7,86.7,0,0,1-131.3-74.3ZM319.2,303.6a9,9,0,1,1,0-18h5.5a9,9,0,0,1,0,18Zm57.1-41.2h-7.6a11.9,11.9,0,0,1-11.9-12V192.1a11.9,11.9,0,0,1,11.9-11.9h7.6a11.9,11.9,0,0,1,11.9,11.9v58.3A11.9,11.9,0,0,1,376.3,262.4Zm-6.7-97.6h-.9a27.7,27.7,0,0,0-11.9,2.7V141.8a97.8,97.8,0,0,0,12.8-5.7ZM254.8,15a115.3,115.3,0,0,1,50.4,11.6,32.6,32.6,0,0,0-5,11.8H220.3a67.2,67.2,0,0,0-29.4,6.7H177.3A114.3,114.3,0,0,1,254.8,15ZM474.2,378.2a39.2,39.2,0,0,1-39.1,39.1H77.4a39.1,39.1,0,0,1-39-39.1V99.5a39.1,39.1,0,0,1,39-39h67.2a132.2,132.2,0,0,0-6.9,12.2H77.4A26.8,26.8,0,0,0,50.6,99.5V346a26.8,26.8,0,0,0,26.8,26.8H435.1A26.8,26.8,0,0,0,461.9,346V166.1a7.7,7.7,0,1,0-15.4,0V346a11.5,11.5,0,0,1-11.4,11.5H77.4A11.5,11.5,0,0,1,66,346V99.5A11.4,11.4,0,0,1,77.4,88.1h54a128,128,0,0,0-6.9,41.7v36.4a27.4,27.4,0,0,0-18.6,25.9v58.3a27.3,27.3,0,0,0,27.3,27.3h7.6a26.8,26.8,0,0,0,18.4-7.2,102.6,102.6,0,0,0,23.4,36.1,102.1,102.1,0,0,0,130.5,11.6,24.9,24.9,0,0,0,6.1.8h5.5a24.3,24.3,0,0,0,23.1-16.7h16.6A20.6,20.6,0,0,0,385,281.7v-5.4a27.4,27.4,0,0,0,18.6-25.9V192.1A27.4,27.4,0,0,0,385,166.2V129.8c0-1.2,0-2.4-.1-3.6a94.8,94.8,0,0,0,8.9-7.9,99.3,99.3,0,0,0,21.1-30.2h20.2a11.4,11.4,0,0,1,11.4,11.4v35.9a7.7,7.7,0,1,0,15.4,0V99.5a26.8,26.8,0,0,0-26.8-26.8H420.5c1-4,1.9-8.1,2.5-12.2h12.1a39.1,39.1,0,0,1,39.1,39Z"
                          transform="translate(-23 0.4)"/>
                    <path fill="black"
                          d="M254.8,279.8a38.9,38.9,0,0,0,27.8-11.5,7.6,7.6,0,0,0,0-10.8,7.7,7.7,0,0,0-10.9,0,24,24,0,0,1-33.9,0,7.7,7.7,0,0,0-10.9,0,7.6,7.6,0,0,0,0,10.8A38.9,38.9,0,0,0,254.8,279.8Z"
                          transform="translate(-23 0.4)"/>
                    <path fill="black"
                          d="M296.5,226.7a7.7,7.7,0,0,0,7.7-7.7V197.7a7.7,7.7,0,0,0-15.4,0V219A7.8,7.8,0,0,0,296.5,226.7Z"
                          transform="translate(-23 0.4)"/>
                    <path fill="black"
                          d="M213,226.7a7.8,7.8,0,0,0,7.7-7.7V197.7a7.7,7.7,0,0,0-15.4,0V219A7.7,7.7,0,0,0,213,226.7Z"
                          transform="translate(-23 0.4)"/>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--begin::Projects-->
        <div class="m-0">
            <!--begin::Heading-->
            <div class="text-center mt-3 px-4">
                <h1 class="text-gray-800 fw-bold mb-6 mx-5">Gestão de TI</h1>
            </div>
            <!--end::Heading-->
            <!--begin::Items-->
            <div class="mb-10">
                <!--begin::Item-->
                <a href="<?= url("/"); ?>" class="custom-list d-flex align-items-center px-5 py-4">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Description-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">
                            Gestão de Chamados
                        </h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">Halp Dask</span>
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
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Gestão de Usuários</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">User Management</span>
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
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Gestão de Hardware</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">Hardware Management</span>
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
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Gestão de Software</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">By SIA Team</span>
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
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">RGB Cloud System</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">By Andrei</span>
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
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Disqus Forum</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">By Disqus Inc.</span>
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
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Proove Quick CRM</h5>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <span class="text-gray-400 fw-bold">By Proove Limited</span>
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
