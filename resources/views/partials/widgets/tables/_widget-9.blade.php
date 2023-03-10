<?php
// Table rows
$tableRows = [
    [
        'user' => [
            'image' => 'avatars/blank.png',
            'name' => 'محمد سالم عمر',
            'skills' => '050505050',
        ],
        'company' => [
            'name' => 'مكة',
            'skills' => 'شارع المنصور',
        ],
        'progress' => [
            'value' => '50',
            'color' => 'primary',
        ],
    ],
    [
        'user' => [
            'image' => 'avatars/blank.png',
            'name' => 'Jessie Clarcson',
            'skills' => 'C#, ASP.NET, MS SQL',
        ],
        'company' => [
            'name' => 'Agoda',
            'skills' => 'Houses & Hotels',
        ],
        'progress' => [
            'value' => '70',
            'color' => 'danger',
        ],
    ],
    [
        'user' => [
            'image' => 'avatars/blank.png',
            'name' => 'Lebron Wayde',
            'skills' => 'PHP, Laravel, VueJS',
        ],
        'company' => [
            'name' => 'RoadGee',
            'skills' => 'Transportation',
        ],
        'progress' => [
            'value' => '60',
            'color' => 'success',
        ],
    ],
    [
        'user' => [
            'image' => 'avatars/blank.png',
            'name' => 'Natali Goodwin',
            'skills' => 'Python, PostgreSQL, ReactJS',
        ],
        'company' => [
            'name' => 'The Hill',
            'skills' => 'Insurance',
        ],
        'progress' => [
            'value' => '50',
            'color' => 'warning',
        ],
    ],
    [
        'user' => [
            'image' => 'avatars/blank.png',
            'name' => 'Kevin Leonard',
            'skills' => 'HTML, JS, ReactJS',
        ],
        'company' => [
            'name' => 'RoadGee',
            'skills' => 'Art Director',
        ],
        'progress' => [
            'value' => '90',
            'color' => 'info',
        ],
    ],
];

// dd($tableRows);

?>

<!--begin::Tables Widget 9-->
<div class="card {{ $class }}">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">إحصائيات المستفيدين</span>

            <span class="text-muted mt-1 fw-bold fs-7">أكثر من 500 مستفيد</span>
        </h3>

        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
            title="اضغط لإضافة مستفيد جديد">
            <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                data-bs-target="#kt_modal_invite_friends">
                {!! theme()->getSvgIcon('icons/duotune/arrows/arr075.svg', 'svg-icon-3') !!}
                مستفيد جديد
            </a>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bolder text-muted">
                        <th class="w-25px">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" data-kt-check="true"
                                    data-kt-check-target=".widget-9-check" />
                            </div>
                        </th>
                        <th class="min-w-150px">المستفيد</th>
                        <th class="min-w-140px">العنوان</th>
                        <th class="min-w-120px">نسبة الخدمات</th>
                        <th class="min-w-100px text-end">خدمات</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                    @foreach ($tableRows as $row)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset(theme()->getMediaUrlPath() . $row['user']['image']) }}"
                                            alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $row['user']['name'] }}</a>

                                        <span
                                            class="text-muted fw-bold text-muted d-block fs-7">{{ $row['user']['skills'] }}</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <a href="#"
                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $row['company']['name'] }}</a>
                                <span
                                    class="text-muted fw-bold text-muted d-block fs-7">{{ $row['company']['skills'] }}</span>
                            </td>

                            {{-- <td class="text-end">
                                <div class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <span class="text-muted me-2 fs-7 fw-bold">
                                            {{ $row['progress']['value'] }}%
                                        </span>
                                    </div>

                                    <div class="progress h-6px w-100">
                                        <div class="progress-bar bg-{{ $row['progress']['color'] }}" role="progressbar"
                                            style="width: {{ $row['progress']['value'] }}%"
                                            aria-valuenow="{{ $row['progress']['value'] }}" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td> --}}

                            <td class="text-end">
                                <a href=""
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon('icons/duotune/general/gen019.svg', 'svg-icon-3') !!}
                                </a>

                                <a href="#"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon('icons/duotune/art/art005.svg', 'svg-icon-3') !!}
                                </a>

                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    {!! theme()->getSvgIcon('icons/duotune/general/gen027.svg', 'svg-icon-3') !!}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Tables Widget 9-->
