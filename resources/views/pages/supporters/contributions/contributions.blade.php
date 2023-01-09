<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('شراء تكاليف سلع الخدمات (  مساهمات مسجلة )') }}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Row-->
                <div class="row g-5 g-xl-12">
                    <!--begin::Col-->

                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Tables Widget 2-->
                        <div class="card card-xl-stretch mb-5 mb-xl-12">
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-5">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr>
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-125px"></th>
                                                <th class="p-0 min-w-40px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>

                                            @foreach($contributionTypes as $key => $value)
                                            @foreach($Supporter_contribution as $k => $v)
                                            @if($value->id == $v->contributionType_id )
                                            @if($info->supporter->id==$v->supporter_id)
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            {!! theme()->getSvgIcon("icons/duotune/ecommerce/ecm001.svg", "svg-icon-2x svg-icon-danger") !!}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $value->name }}</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">{{ $value->note }}</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-danger ">تمت المساهمة </span>
                                                </td>
                                                <td class="text-end">
                                                    <!-- <span class="text-muted fw-bold">4600 Users</span> -->
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ url('supporter/contributions/dislink/'.$value->id) }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-danger">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        {!! theme()->getSvgIcon("icons/duotune/arrows/arr061.svg", "svg-icon-2") !!}
                                                    </a>
                                                </td>
                                            </tr>
                                            @endif
                                            @else

                                            @endif
                                            @endforeach
                                            @endforeach

                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Tables Widget 2-->
                    </div>
                    <!--end::Col-->
                    
                </div>
                <!--end::Row-->
                <!--begin::Row-->

                <!--end::Tables Widget 13-->
            </div>
            <!--end::Content container-->
        </div>
    </div>
    <!--end::Basic info-->
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('شراء تكاليف سلع الخدمات (  مساهمات متاحة )   ') }}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Row-->
                <div class="row g-5 g-xl-12">
                    <!--begin::Col-->

                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Tables Widget 2-->
                        <div class="card card-xl-stretch mb-5 mb-xl-12">
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-5">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr>
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-125px"></th>
                                                <th class="p-0 min-w-40px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            @foreach($contributionTypes as $key => $value)
                                                @if($value->supporter_contribution->isEmpty())
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                {!! theme()->getSvgIcon("icons/duotune/ecommerce/ecm002.svg", "svg-icon-2x svg-icon-success") !!}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $value->name }}</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">{{ $value->note }}</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success ">متاحة للمساهمة</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <!-- <span class="text-muted fw-bold">4600 Users</span> -->
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="{{ url('supporter/contributions/'.$value->id) }}"
                                                             class="btn btn-sm btn-icon btn-bg-light btn-active-color-danger">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            {!! theme()->getSvgIcon("icons/duotune/arrows/arr063.svg", "svg-icon-2") !!}
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach

                                            @foreach($arra as $key => $value)
                                            @if($value!=null)
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                {!! theme()->getSvgIcon("icons/duotune/ecommerce/ecm002.svg", "svg-icon-2x svg-icon-success") !!}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $value->name }}</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">{{ $value->note }}</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success ">متاحة للمساهمة</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <!-- <span class="text-muted fw-bold">4600 Users</span> -->
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="{{ url('supporter/contributions/'.$value->id) }}"
                                                             class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            {!! theme()->getSvgIcon("icons/duotune/arrows/arr063.svg", "svg-icon-2") !!}
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Tables Widget 2-->
                    </div>
                    <!--end::Col-->
                    
                </div>
                <!--end::Row-->
                <!--begin::Row-->

                <!--end::Tables Widget 13-->
            </div>
            <!--end::Content container-->
        </div>
    </div>
    <!--end::Basic info-->

</x-base-layout>