@php
$nav_beneficiarie = array(
array('title' => 'ملخص الحساب', 'view' => 'account/settings/overview'),
array('title' => 'تعديل المعلومات الشخصية', 'view' => 'account/settings'),
array('title' => 'بيانات المستفيد', 'view' => 'account/settings/beneficiarie'),
array('title' => 'الشهادات', 'view' => 'account/settings/certificates'),
array('title' => 'المهارات', 'view' => 'account/settings/skills'),
array('title' => 'الاحتياجات', 'view' => 'account/settings/necessities'),
array('title' => 'الخبرات المهنية', 'view' => 'account/settings/experiences'),
array('title' => 'قائمة الخدمات', 'view' => 'account/services'),
);
$nav_supporter = array(
array('title' => 'ملخص الحساب', 'view' => 'account/settings/overview'),
array('title' => 'تعديل المعلومات الشخصية', 'view' => 'account/settings'),
array('title' => 'بيانات الداعم', 'view' => 'account/settings/supporter'),
array('title' => 'تأثيرات الداعم', 'view' => 'account/settings/supporter/influences'),

);
@endphp

<!--begin::Navbar-->
<div class="card {{ $class }}">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
{{--                    <img src="{{ asset('storage/app/public/avatars/'.auth()->user()->info->avatar) }}" alt="image" />--}}
                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
                </div>

            </div>
            <!--end::Pic-->

            <!--begin::Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::User-->
                    <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <div class="d-flex align-items-center mb-2">
                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1">{{ auth()->user()->name}} </a>
                            <a href="#">
                                {!! theme()->getSvgIcon("icons/duotune/general/gen026.svg", "svg-icon-1 svg-icon-primary") !!}
                            </a>

                            <a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                @hasrole('superadmin')
                                إدارة النظام
                                @endhasrole
                                @hasrole('volunteer')
                                متطوع
                                @endhasrole
                                @hasrole('beneficiary')
                                مستفيد
                                @endhasrole
                                @hasrole('supporter')
                                داعم
                                @endhasrole
                                @hasrole('admin')
                                إداري
                                @endhasrole
                            </a>
                        </div>
                        <!--end::Name-->

                        <!--begin::Info-->
                        <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                {!! theme()->getSvgIcon("icons/duotune/communication/com006.svg", "svg-icon-4 me-1") !!}
                                @hasrole('superadmin')
                                إدارة النظام
                                @endhasrole
                                @hasrole('volunteer')
                                متطوع
                                @endhasrole
                                @hasrole('beneficiary')
                                مستفيد
                                @endhasrole
                                @hasrole('supporter')
                                داعم
                                @endhasrole
                                @hasrole('admin')
                                إداري
                                @endhasrole
                            </a>

                            @if( auth()->user()->info->district!=null)
                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary  me-5   mb-2">
                                {!! theme()->getSvgIcon("icons/duotune/general/gen018.svg", "svg-icon-4 me-1") !!}
                                {{ auth()->user()->info->district->distric ." ".auth()->user()->info->district->city  }}
                            </a>
                            @endif

                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primarymb-2">
                                {!! theme()->getSvgIcon("icons/duotune/communication/com011.svg", "svg-icon-4 me-1") !!}
                                {{ auth()->user()->email }}
                            </a>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->

                    <!--begin::Actions-->
                    <div class="d-flex my-4">
                        {{-- <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">--}}
                        {{-- {!! theme()->getSvgIcon("icons/duotune/arrows/arr012.svg", "svg-icon-3 d-none") !!}--}}
                        {{-- {{ theme()->getView('partials/general/_button-indicator', array('label' => 'Follow')) }}--}}
                        {{-- </a>--}}

                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-trigger="hover" title="قريباً">إرسال رسالة</a>

                        @if($info->volunteer==null)
                        <button href="#" class="btn btn-sm btn-success me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_volunteer" title="قريباً">الانضمام كمتطوع</button>
                        @else
                        <button href="#" class="btn btn-sm btn-danger me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="حساب متطوع">عضو متطوع</button>
                        @endif
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Title-->

                <!--begin::Stats-->
                <div class="d-flex flex-wrap flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1 pe-8">
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    {!! theme()->getSvgIcon("icons/duotune/arrows/arr066.svg", "svg-icon-3 svg-icon-success me-2") !!}
                                    <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-bold fs-6 text-gray-400">{{ __(' إجمالي التبرعات المستفاد منها') }}</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    {!! theme()->getSvgIcon("icons/duotune/arrows/arr065.svg", "svg-icon-3 svg-icon-danger me-2") !!}
                                    <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-bold fs-6 text-gray-400">{{ __('تنبيهات الادارة') }}</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->


                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Progress
                    <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                            <span class="fw-bold fs-6 text-gray-400">{{ __('نسبة إكمال البيانات') }}</span>
                            <span class="fw-bolder fs-6">50%</span>
                        </div>

                        <div class="h-5px mx-3 w-100 bg-light mb-3">
                            <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    end::Progress-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Details-->

        <!--begin::Navs-->
        <div class="d-flex overflow-auto h-55px">
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                @hasrole('beneficiary')
                @foreach($nav_beneficiarie as $each)
                <!--begin::Nav item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary me-6 {{ theme()->getPagePath() === $each['view'] ? 'active' : '' }}" href="{{ $each['view'] ? theme()->getPageUrl($each['view']) : '#' }}">
                        {{ $each['title'] }}
                    </a>
                </li>
                <!--end::Nav item-->
                @endforeach
                @endhasrole
                @hasrole('supporter')
                @foreach($nav_supporter as $each)
                <!--begin::Nav item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary me-6 {{ theme()->getPagePath() === $each['view'] ? 'active' : '' }}" href="{{ $each['view'] ? theme()->getPageUrl($each['view']) : '#' }}">
                        {{ $each['title'] }}
                    </a>
                </li>
                <!--end::Nav item-->
                @endforeach
                @endhasrole
            </ul>
        </div>
        <!--begin::Navs-->
        <!--begin::Modal - volunteer - Add-->
        <div class="modal fade" id="kt_modal_add_volunteer" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->
                    <form class="form" method="POST" action="{{ route('settings.addvolunteer') }}" id="kt_modal_add_volunteer_form">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="user_info_id" value="{{ $info->id }}" />
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_volunteer_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">تفعيل خاصية التطوع</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_modal_add_volunteer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17">
                            <!--begin::Scroll-->
                            <div class="scroll-y me-n7 pe-7" id="kt_modal_add_volunteer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_volunteer_header" data-kt-scroll-wrappers="#kt_modal_add_volunteer_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">نوع التطوع</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="volunteer_type" placeholder="نوع التطوع" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">ملاحظة</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="note" placeholder="ملاحظة" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->


                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->
                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                            <!--begin::Button-->
                            <button type="reset" id="kt_modal_add_volunteer_cancel" class="btn btn-light me-3">الغاء</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_modal_add_volunteer_submit" class="btn btn-primary">
                                <span class="indicator-label">تم</span>
                                <span class="indicator-progress">المرجو الانتظار ...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
        <!--end::Modal - volunteer - Add-->
    </div>
</div>
<!--end::Navbar-->
@if (session('addvolunteer')!=null)
<input type="hidden" value="{{ session('addvolunteer') }}" id="addvolunteer" />
@endif
