<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('تأثيرات الداعم') }}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Content-->
        <div id="kt_account_profile_details" class="collapse show">


            <!--begin::Card body-->
            <div class="card-body border-top p-9">


                <?php $init = 0; ?>
                @foreach($info->supporter->supporter_influence as $key=>$value)
                <div class="col-xl-3" style="float:right;padding-bottom:1%">
                    <!--begin::Card widget 3-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="
                    <?php if ($init == 0) echo "background-color:#F1416C;";
                    else if ($init == 1) echo "background-color:#7239ea;";
                    else if ($init == 2) echo "background-color:#fd8703;";
                    else echo "background-color:#50cd89;"; ?>
                    background-image:url('/metronic8/demo1/assets/media/svg/shapes/wave-bg-red.svg')">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-3">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color:#ffffff;">
                                @if($init==0)
                                {!! theme()->getSvgIcon("icons/duotune/general/gen020.svg", "svg-icon-1 svg-icon-danger") !!}
                                @elseif($init==1)
                                {!! theme()->getSvgIcon("icons/duotune/abstract/abs025.svg", "svg-icon-1 ") !!}
                                @elseif($init==2)
                                {!! theme()->getSvgIcon("icons/duotune/abstract/abs026.svg", "svg-icon-1 ") !!}
                                @else
                                {!! theme()->getSvgIcon("icons/duotune/general/gen002.svg", "svg-icon-1 ") !!}
                                @endif
                            </div>
                            <!--end::Icon-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end mb-3">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <span class="fs-2hx text-white fw-bold me-6">{{ $value->influenceType->name }}</span>

                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->
                        <div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                            <!--begin::Progress-->
                            <div class="fw-bold text-white py-2">
                                <span class="fs-3 d-block">ثم تحققيه منذ تاريخ </span>
                                <span class="opacity-50"> {{ ($value->created_at!=null)? date('d-m-Y', strtotime($value->created_at)) :'-' }}</span>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Card widget 3-->
                </div>
                <?php $init = $init + 1;  ?>



                @endforeach






            </div>
            <!--end::Card body-->

        </div>
        <!--end::Content-->
    </div>
    <!--end::Basic info-->


</x-base-layout>