<div {{ $attributes->merge(['class' => 'card']) }}>
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">{{ $title }}</span>

            <span class="text-muted mt-1 fw-bold fs-7">{{ $userCount }}</span>
        </h3>

        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
            title="اضغط لإضافة {{ $buttonName }}">
            <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                data-bs-target="#kt_modal_invite_friends">
                {!! theme()->getSvgIcon('icons/duotune/arrows/arr075.svg', 'svg-icon-3') !!}
                {{ $buttonName }}
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
                        @foreach ($columns as $col)
                            <th class="min-w-150px">{{ $col }}</th>
                        @endforeach
                        {{-- <th class="min-w-140px">العنوان</th> --}}
                        {{-- <th class="min-w-120px">نسبة الخدمات</th> --}}
                        {{-- <th class="min-w-100px text-end">خدمات</th> --}}
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                    {{ $slot }}
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
