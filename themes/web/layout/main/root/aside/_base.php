<?php
use Source\Support\Language;
$language = new Language();
?>
<?php if(isset($v)):endif; ?>
<!--begin::Aside-->
<div id="kt_aside" class="aside aside-extended bg-white" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Primary-->
    <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
        <!--begin::Logo-->
        <!--TODO[Layout]layout/main/root/aside/primary/_logo.php-->
        <?= $v->insert("layout/main/root/aside/primary/_logo"); ?>
        <!--end::Logo-->
        <!--begin::Nav-->
        <!--TODO[Layout]layout/main/root/aside/primary/_nav.php-->
        <?= $v->insert("layout/main/root/aside/primary/_nav"); ?>
        <!--end::Nav-->
        <!--begin::Footer-->
        <!--TODO[Layout]layout/main/root/aside/primary/_footer.php-->
        <?= $v->insert("layout/main/root/aside/primary/_footer"); ?>
        <!--end::Footer-->
    </div>
    <!--end::Primary-->
    <!--begin::Secondary-->
    <!--TODO[Layout]layout/main/root/aside/secundary/_secundary.php-->
    <?= $v->insert("layout/main/root/aside/secundary/_secundary"); ?>
    <!--end::Secondary-->
    <!--begin::Aside Toggle-->
    <button class="btn btn-sm btn-icon bg-body btn-color-gray-600 btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize" style="margin-bottom: 1.35rem">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
        <span class="svg-icon svg-icon-2 rotate-180">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
								<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
							</svg>
						</span>
        <!--end::Svg Icon-->
    </button>
    <!--end::Aside Toggle-->
</div>
<!--end::Aside-->
