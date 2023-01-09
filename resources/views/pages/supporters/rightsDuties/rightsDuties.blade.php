<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('حقوق الداعم') }}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Content-->
        <div id="kt_account_profile_details" class="collapse show">
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <!--begin::FAQ card-->
                    <div class="card">
                        <!--begin::Body-->
                        <div class="card-body p-lg-3">
                            <!--begin::Classic content-->
                            <div class="mb-13">
                                <!--begin::Intro-->
                                <div class="mb-15">
                                    <!--begin::Text-->
                                    <p class="fw-semibold fs-4 text-gray-600 mb-2">لائحة حقوق الداعم</p>
                                    <!--end::Text-->
                                </div>
                                <!--end::Intro-->
                                <!--begin::Row-->
                                <div class="row mb-12">
                                    <!--begin::Col-->
                                    <div class="col-md-6 pe-md-10 mb-10 mb-md-0">
                                        <!--begin::Accordion-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_1">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">حق 1</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_4_1" class="collapse show fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">1 -الاطلاع على أحكام وشروط وتفاصيل المنتج أو الخدمة وطلب الإيضاحات الوافية عنها للتأكّد من فهمها والقدرة على االلتزام بها.</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_2">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">حق 2</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_4_2" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">1 -االطالع على أحكام وشروط وتفاصيل المنتج أو الخدمة وطلب اإليضاحات الوافية عنها للتأكّد من فهمها والقدرة على االلتزام بها.</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        <!--end::Accordion-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 ps-md-10">
                                        <!--begin::Accordion-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_1">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">حق 3</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_1" class="collapse show fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">1 -االطالع على أحكام وشروط وتفاصيل المنتج أو الخدمة وطلب اإليضاحات الوافية عنها للتأكّد من فهمها والقدرة على االلتزام بها.</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_2">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">حق 4</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_2" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">1 -االطالع على أحكام وشروط وتفاصيل المنتج أو الخدمة وطلب اإليضاحات الوافية عنها للتأكّد من فهمها والقدرة على االلتزام بها.</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        <!--end::Accordion-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Classic content-->

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::FAQ card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Basic info-->

    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details1" aria-expanded="true" aria-controls="kt_account_profile_details1">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('واجبات الداعم') }}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Content-->
        <div id="kt_account_profile_details1" class="collapse show">
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <!--begin::FAQ card-->
                    <div class="card">
                        <!--begin::Body-->
                        <div class="card-body p-lg-3">
                            <!--begin::Classic content-->
                            <div class="mb-13">
                                <!--begin::Intro-->
                                <div class="mb-15">
                                    <!--begin::Text-->
                                    <p class="fw-semibold fs-4 text-gray-600 mb-2">لائحة واجبات الداعم</p>
                                    <!--end::Text-->
                                </div>
                                <!--end::Intro-->
                                <!--begin::Row-->
                                <div class="row mb-12">
                                    <!--begin::Col-->
                                    <div class="col-md-6 pe-md-10 mb-10 mb-md-0">
                                        <!--begin::Accordion-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_1">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">واجب 1</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_4_1" class="collapse show fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">1 -االطالع على أحكام وشروط وتفاصيل المنتج أو الخدمة وطلب اإليضاحات الوافية عنها للتأكّد من فهمها والقدرة على االلتزام بها.</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_2">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">واجب 2</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_4_2" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">1 -االطالع على أحكام وشروط وتفاصيل المنتج أو الخدمة وطلب اإليضاحات الوافية عنها للتأكّد من فهمها والقدرة على االلتزام بها.</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        <!--end::Accordion-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 ps-md-10">
                                        <!--begin::Accordion-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_1">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">واجب 3</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_1" class="collapse show fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">1 -االطالع على أحكام وشروط وتفاصيل المنتج أو الخدمة وطلب اإليضاحات الوافية عنها للتأكّد من فهمها والقدرة على االلتزام بها.</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_2">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">واجب 4</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_2" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">1 -االطالع على أحكام وشروط وتفاصيل المنتج أو الخدمة وطلب اإليضاحات الوافية عنها للتأكّد من فهمها والقدرة على االلتزام بها.</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        <!--end::Accordion-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Classic content-->

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::FAQ card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Basic info-->

</x-base-layout>
