<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Inbox App - Compose -->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 w-lg-275px mb-10 mb-lg-0">
                        <!--begin::Sticky aside-->
                        <div class="card card-flush mb-0" data-kt-sticky="false" data-kt-sticky-name="inbox-aside-sticky" data-kt-sticky-offset="{default: false, xl: '0px'}" data-kt-sticky-width="{lg: '275px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                            <!--begin::Aside content-->
                            <div class="card-body">
                                <!--begin::Button-->
                                <a href="#" class="btn btn-primary text-uppercase w-100 mb-10">المرسلة</a>
                                <!--end::Button-->
                                <!--begin::Menu-->
                                <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">


                                    <!--begin::Menu item-->
                                    <div class="menu-item mb-3">
                                        <a href="{{ url('admin/suggestion') }}">
                                            <!--begin::Inbox-->
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                                    <span class="svg-icon svg-icon-2 me-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black"></path>
                                                            <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <span class="menu-title fw-bolder">رسالة جديدة</span>
                                            </span>
                                            <!--end::Inbox-->
                                        </a>
                                    </div>
                                    <!--end::Menu item-->


                                    <!--begin::Menu item-->
                                    <div class="menu-item mb-3">
                                        <!--begin::Sent-->
                                        <a href="{{ url('admin/suggestions') }}">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
                                                    <span class="svg-icon svg-icon-2 me-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="black"></path>
                                                            <path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <span class="menu-title fw-bolder">صندوق الوارد</span>
                                            </span>
                                        </a>
                                        <!--end::Sent-->
                                    </div>
                                    <!--end::Menu item-->

                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Aside content-->
                        </div>
                        <!--end::Sticky aside-->
                    </div>
                    <!--end::Sidebar-->
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                        <div class="card">
                            @if(count($info->suggestionsSender)==0)
                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
                                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
                                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
                                    </svg>
                                </span>
                                <div class="d-flex flex-stack flex-grow-1">
                                    <div class="fw-bold">
                                        <h4 class="text-gray-900 fw-bolder">صندوق الرسائل فارغ</h4>
                                        <div class="fs-6 text-gray-700">لا توجد اي رسالة في صندوق المرسل
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="card-body p-0">
                                <!--begin::Table-->
                                <div id="kt_inbox_listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-row-dashed fs-6 gy-5 my-0 dataTable no-footer" id="kt_inbox_listing">
                                            <!--begin::Table head-->
                                            <thead class="d-none">
                                                <tr>
                                                    <th class="sorting" tabindex="0" aria-controls="kt_inbox_listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 0px;">Actions</th>
                                                    <th class="sorting" tabindex="0" aria-controls="kt_inbox_listing" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending" style="width: 0px;">Title</th>
                                                    <th class="sorting" tabindex="0" aria-controls="kt_inbox_listing" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                @foreach($info->suggestionsSender->sortByDesc('created_at') as $ley=>$value)
                                                <tr class="odd">
                                                    <td class="ps-9">
                                                        <a href="{{ url('admin/suggestionShow/'.$value->id)}}" class="d-flex align-items-center text-dark">
                                                            <div class="symbol symbol-35px me-3">
                                                                <div class="symbol-label bg-light-danger">
                                                                <span class="text-danger"><?php echo substr( $value->infoReceiver->user->first_name, 0, 2); ?></span>
                                                                </div>
                                                            </div>
                                                            <span class="fw-bold">{{ $value->infoReceiver->user->first_name.' '.$value->infoReceiver->user->last_name }} </span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark mb-1">
                                                            <a href="{{ url('admin/suggestionShow/'.$value->id)}}" class="text-dark">
                                                                <span class="fw-bolder">{{ $value->title}}</span>
                                                                <span class="fw-bolder d-none d-md-inine">-</span>
                                                            </a>
                                                        </div>
                                                        @if($value->urgent==1)
                                                        <div class="badge badge-light-danger">مستعجل</div>
                                                        @endif
                                                    </td>
                                                    <td class="w-100px text-end fs-7 pe-9">
                                                        <span class="fw-bold">{{ date('d-m-Y', strtotime($value->created_at)) }}</span>
                                                        @if($value->attachment!=null)
                                                        <a target="_blank" href="{{ url(asset('storage/attachments/suggestion/'.$value->attachment)) }}">
                                                            <div class="symbol symbol-35px me-3">
                                                                <div class="symbol-label bg-light-danger">
                                                                    <span class="svg-icon svg-icon-2 m-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="black"></path>
                                                                            <path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>

                                </div>
                                <!--end::Table-->
                            </div>
                            @endif
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Inbox App - Compose -->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>


</x-base-layout>