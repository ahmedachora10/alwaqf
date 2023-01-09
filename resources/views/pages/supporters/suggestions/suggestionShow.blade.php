<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Inbox App - Compose -->
                <div class="d-flex flex-column flex-lg-row">

                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center py-5 gap-5">
                                <div class="d-flex">
                                    <a href="{{ url('supporter/suggestions') }}" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive">

                                        <span class="svg-icon svg-icon-2 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                            </svg>
                                        </span>
                                    </a>

                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="{{ url('supporter/suggestion') }}" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Next message">
                                        {!! theme()->getSvgIcon("icons/duotune/communication/com012.svg", "svg-icon-2") !!}
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--begin::Title-->
                                <div class="d-flex flex-wrap gap-2 justify-content-between mb-8">
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <!--begin::Heading-->
                                        <h2 class="fw-bold me-3 my-1">{{ $suggestion->title }}</h2>
                                        @if($suggestion->urgent!=null)
                                        <span class="badge badge-light-danger my-1">مستعجل</span>
                                        @endif
                                    </div>

                                </div>
                                <!--end::Title-->
                                <!--begin::Message accordion-->
                                <div data-kt-inbox-message="message_wrapper">
                                    <!--begin::Message header-->
                                    <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                                        <!--begin::Author-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50 me-4">
                                                <div class="symbol symbol-35px me-3">
                                                    <div class="symbol-label bg-light-danger">
                                                        <span class="text-danger"><?php echo substr($suggestion->infoSender->user->first_name, 0, 2); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="pe-5">
                                                <!--begin::Author details-->
                                                <div class="d-flex align-items-center flex-wrap gap-1">
                                                    <a href="#" class="fw-bolder text-dark text-hover-primary">{{ $suggestion->infoSender->user->first_name.' '.$suggestion->infoSender->user->last_name }}</a>

                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Author details-->
                                                <!--begin::Message details-->
                                                <div data-kt-inbox-message="details">

                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-300px p-4" data-kt-menu="true">
                                                        <!--begin::Table-->
                                                        <table class="table mb-0">
                                                            <tbody>
                                                                <!--begin::From-->
                                                                <tr>
                                                                    <td class="w-75px text-muted">From</td>
                                                                    <td>Emma Bold</td>
                                                                </tr>
                                                                <!--end::From-->
                                                                <!--begin::Date-->
                                                                <tr>
                                                                    <td class="text-muted">Date</td>
                                                                    <td>10 Mar 2022, 10:10 pm</td>
                                                                </tr>
                                                                <!--end::Date-->
                                                                <!--begin::Subject-->
                                                                <tr>
                                                                    <td class="text-muted">Subject</td>
                                                                    <td>Trip Reminder. Thank you for flying with us!</td>
                                                                </tr>
                                                                <!--end::Subject-->
                                                                <!--begin::Reply-to-->
                                                                <tr>
                                                                    <td class="text-muted">Reply-to</td>
                                                                    <td>emma@intenso.com</td>
                                                                </tr>
                                                                <!--end::Reply-to-->
                                                            </tbody>
                                                        </table>
                                                        <!--end::Table-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Message details-->
                                                <!--begin::Preview message-->
                                                <div class="text-muted fw-bold mw-450px d-none" data-kt-inbox-message="preview">With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part....</div>
                                                <!--end::Preview message-->
                                            </div>
                                        </div>
                                        <!--end::Author-->
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <!--begin::Date-->
                                            <span class="fw-bold text-muted text-end me-3">{{ date(' H:i:s d-m-Y', strtotime($suggestion->created_at)) }}</span>

                                            @if($suggestion->attachment!=null)
                                                        <a target="_blank" href="{{ url(asset('storage/attachments/suggestion/'.$suggestion->attachment)) }}">
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
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Message header-->
                                    <!--begin::Message content-->
                                    <div class="collapse fade show" data-kt-inbox-message="message">
                                        <div class="py-5" style="font-size: initial;padding-left: 1%;padding-right: 1%;">
                                            <?php echo htmlspecialchars_decode($suggestion->message); ?>

                                        </div>
                                    </div>
                                    <!--end::Message content-->
                                </div>

                            </div>
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