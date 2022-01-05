<?php

use Source\Support\Language;

$language = new Language();
?>
<?php if (isset($v)):endif; ?>
<!--begin::Nav-->
<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0"
     id="kt_aside_nav">
    <!--begin::Wrapper-->
    <div class="hover-scroll-y mb-10"
         data-kt-scroll="true"
         data-kt-scroll-activate="{default: false, lg: true}"
         data-kt-scroll-height="auto"
         data-kt-scroll-wrappers="#kt_aside_nav"
         data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
         data-kt-scroll-offset="0px">
        <!--begin::Nav-->
        <ul class="nav flex-column">
            <!--begin::Nav item-->
            <li class="nav-item mb-2"
                data-bs-toggle="tooltip"
                data-bs-trigger="hover"
                data-bs-placement="right"
                data-bs-dismiss="click"
                title="Instalação">
                <!--begin::Nav link-->
                <a class="nav-link btn btn-custom btn-icon active"
                   data-bs-toggle="tab"
                   href="#kt_aside_nav_tab_install">
                    <!--begin::TODO[Svg Icon] | path: storage/icons/install.svg-->
                    <span class="svg-icon svg-icon-3x">
                        <?= getIconSvg("storage/icons/install.svg"); ?>
                    </span>
                    <!--end::Svg Icon-->
                </a>
                <!--end::Nav link-->
            </li>
            <!--end::Nav item-->
        </ul>
        <!--end::Tabs-->
    </div>
    <!--end::Nav-->
</div>
<!--end::Nav-->
