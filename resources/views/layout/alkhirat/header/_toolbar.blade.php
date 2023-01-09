<!--begin::Toolbar-->
<div class="{{ theme()->printHtmlClasses('header-container', false) }} py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
    {{ theme()->getView('layout/_page-title') }}

    <!--begin::Action group-->
    <div class="d-flex align-items-center overflow-auto pt-3 pt-lg-0">


        <!--begin::Action wrapper-->
        <div class="d-flex align-items-center">

            <!--begin::Separartor-->
            <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
            <!--end::Separartor-->
        </div>
        <!--end::Action wrapper-->

        <!--begin::Action wrapper-->
        <div class="d-flex align-items-center">
            <!--begin::Label-->
            <span class="fs-7 text-gray-700 fw-bolder pe-3 d-none d-xxl-block">تسجيل الخروج</span>
            <!--end::Label-->

            <!--begin::Actions-->
            <div class="d-flex">
                <!--begin::Action-->
                <form class="form" method="POST"   action="{{ route('logout') }}" >
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" >
                    {!! theme()->getSvgIcon("icons/duotune/general/gen049.svg", "svg-icon-1") !!}
                </button>
                </form>
                <!--end::Action-->



                <!--begin::Notifications-->
{{--                <div class="d-flex align-items-center">--}}
{{--                    <!--begin::Menu- wrapper-->--}}
{{--                    <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">--}}
{{--                        {!! theme()->getSvgIcon("icons/duotune/general/gen022.svg", "svg-icon-1") !!}--}}
{{--                    </a>--}}
{{--                    {{ theme()->getView('partials/topbar/_notifications-menu')  }}--}}
{{--                    <!--end::Menu wrapper-->--}}
{{--                </div>--}}
                <!--end::Notifications-->



            </div>
            <!--end::Actions-->
        </div>
        <!--end::Action wrapper-->
    </div>
    <!--end::Action group-->
</div>
<!--end::Toolbar-->
