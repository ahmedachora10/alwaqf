<?php
// List items
// $listRows = [
//     [
//         'color' => 'success',
//         'title' => 'برنامج جدارة الصيفي',
//         'text' => 'متبقي 25 يوم',
//     ],
//     [
//         'color' => 'primary',
//         'title' => 'توزيع أضاحي الحج',
//         'text' => 'متبقي 10 أيام',
//     ],
//     [
//         'color' => 'warning',
//         'title' => 'برنامج إدارة المشاريع',
//         'text' => 'متبقي 30 يوم',
//     ],
//     [
//         'color' => 'primary',
//         'title' => 'ورشة عمل مع مؤسسة مكيون',
//         'text' => 'متبقي 155 يوم',
//     ],
//     [
//         'color' => 'danger',
//         'title' => 'إطلاق النسخة الثانية من البوابة',
//         'text' => 'متبقي 300 يوم',
//     ],
//     [
//         'color' => 'success',
//         'title' => 'ورشة الخطة السنوية',
//         'text' => 'متبقي 320 يوم',
//     ],
// ];

$listRows = $latestProjects;
$colors = ['primary', 'secondary', 'success', 'warning', 'dark', 'info', 'danger'];
// dd(rand(count($colors)));
$randColor = fn() => $colors[rand(0, count($colors) - 1)];

?>


<!--begin::List Widget 3-->
<div class="card {{ $class }}">
    <!--begin::Header-->
    <div class="card-header border-0">
        <h3 class="card-title fw-bolder text-dark">المشاريع القادمة</h3>

        <div class="card-toolbar">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                {!! theme()->getSvgIcon('icons/duotune/general/gen024.svg', 'svg-icon-2') !!}
            </button>
            {{ theme()->getView('partials/menus/_menu-3') }}
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-2">
        @foreach ($listRows as $row)
            @php
                $color = $randColor();
            @endphp
            <!--begin::Item-->
            <div class="d-flex align-items-center @if (count($listRows) > 0) mb-8 @endif ">
                {{-- {{ util()->putIf(next($listRows), 'mb-8') }} --}}
                <!--begin::Bullet-->
                <span class="bullet bullet-vertical h-40px bg-{{ $color }}"></span>
                <!--end::Bullet-->

                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid mx-5">
                    <input class="form-check-input" type="checkbox" value="" />
                </div>
                <!--end::Checkbox-->

                <!--begin::Description-->
                <div class="flex-grow-1">
                    <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">{{ $row->name }}</a>

                    <span class="text-muted fw-bold d-block">
                        @if ($row->duration == 0)
                            انتهت المدة
                        @else
                            متبقي {{ $row->duration }} يوم
                        @endif
                    </span>
                </div>
                <!--end::Description-->

                <span class="badge badge-light-{{ $color }} fs-8 fw-bolder">New</span>
            </div>
            <!--end:Item-->
        @endforeach
    </div>
    <!--end::Body-->
</div>
<!--end:List Widget 3-->
