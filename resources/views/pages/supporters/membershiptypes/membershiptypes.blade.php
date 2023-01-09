<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    <!--begin::Alert-->
    <div class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
        <!--begin::Close-->
        <button type="b
    utton" class="position-absolute top-0 end-0 m-2 btn btn-icon btn-icon-danger" data-bs-dismiss="alert">
            <span class="svg-icon svg-icon-1">...</span>
        </button>
        <!--end::Close-->

        <!--begin::Icon-->
        <span class="svg-icon svg-icon-5tx svg-icon-danger mb-5">
            {!! theme()->getSvgIcon("icons/duotune/general/gen020.svg", "svg-icon-2x svg-icon-danger") !!}
        </span>
        <!--end::Icon-->

        <!--begin::Wrapper-->
        <div class="text-center">
            <!--begin::Title-->
            <h1 class="fw-bold mb-5">فئة العضوية : {{ $info->supporter->membershipType->name }}
            </h1>
            <!--end::Title-->

            <!--begin::Separator-->
            <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
            <!--end::Separator-->

            <!--begin::Content-->
            <div class="mb-9 text-dark">
                هاته الصفحة مخصصة لمشاهدة فئة العضوية و طلب ترقية لادارة النظام 
                <br>
            </div>
            <!--end::Content-->

            <!--begin::Buttons-->
            
            @if($promotionPermit==1)
            <div class="d-flex flex-center flex-wrap">
                <a href="{{ url('supporter/membershiptypes/promotion') }}" class="btn btn-danger m-2">طلب ترقية عضوية</a>
            </div>
            @else
                @if($promotionPermit==2)
                <button type="button" class="btn btn-success m-2" data-bs-toggle="popover" data-bs-placement="top" title=" طلب الترقية" 
                data-bs-content="لا يمكنكم طلب الترقية, انتم في اعلى فئة عضوية">
                    طلب ترقية عضوية
                </button>
                @else
                <button type="button" class="btn btn-warning m-2" data-bs-toggle="popover" data-bs-placement="top" title=" طلب الترقية" 
                data-bs-content="لا يمكنكم طلب الترقية, المرجو المحاولة لاحقا">
                    طلب ترقية عضوية
                </button>
                @endif
            @endif
            <!--end::Buttons-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Alert-->


</x-base-layout>