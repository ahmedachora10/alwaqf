<x-base-layout>
    <!--begin::Row-->
    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xxl-4">
            {{ theme()->getView('partials/widgets/mixed/_widget-2', [
                'class' => 'card-xxl-stretch
                                                                                                                                                ',
                'chartColor' => 'danger',
                'chartHeight' => '200px',
                'beneficiaries' => $beneficiaries,
                'volunteers' => $volunteers,
                'supporters' => $supporters,
                'projects' => $projects,
            ]) }}
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xxl-4">
            {{ theme()->getView('partials/widgets/lists/_widget-5', ['class' => 'card-xxl-stretch', 'activities' => $activities]) }}
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xxl-4">
            {{ theme()->getView('partials/widgets/mixed/_widget-7', ['class' => 'card-xxl-stretch-50 mb-5 mb-xl-8', 'chartColor' => 'primary', 'chartHeight' => '150px', 'financialSupport' => $financialSupport]) }}

            {{ theme()->getView('partials/widgets/mixed/_widget-10', ['class' => 'card-xxl-stretch-50 mb-5 mb-xl-8', 'chartColor' => 'primary', 'chartHeight' => '175px', 'financialSupport' => $financialSupport]) }}
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row gy-5 gx-xl-8">
        <!--begin::Col-->
        <div class="col-xxl-4">
            {{ theme()->getView('partials/widgets/lists/_widget-3', ['class' => 'card-xxl-stretch mb-xl-3', 'latestProjects' => $latestProjects]) }}
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        @if (auth()->check() &&
            auth()->user()->hasRole('admin'))
            <div class="col-xl-8">
                {{-- {{ theme()->getView('partials/widgets/tables/_widget-9', ['class' => 'card-xxl-stretch mb-5 mb-xl-8']) }} --}}
                <!-- Display All Eneficiaries -->
                <x-admin.tables.table1 class="card-xxl-stretch mb-5 mb-xl-8" title="احصائيات المستفيدين"
                    userCount="اكثر من {{ count($latestBeneficiaries) }} مستفيد" buttonName="مستفيد جديد"
                    :columns="['اسم المستفيد', 'تاريخ الازدياد', 'المهنة', 'عضو متطوع؟', 'تاريخ الانضمام']">
                    @foreach ($latestBeneficiaries as $row)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                                </div>
                            </td>

                            <td>
                                @php
                                    $avatar = $row->User->avatar ?: 'avatars/blank.png';
                                @endphp
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset(theme()->getMediaUrlPath() . $avatar) }}" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->User->user->name }}</a>

                                        <span
                                            class="text-muted fw-bold text-muted d-block fs-7">{{ $row->User->user->email }}</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                    {{ $row->date_of_birth ? $row->date_of_birth->format('Y-m-d') : $row->date_of_birth }}
                                </div>
                                <span class="text-muted fw-bold text-muted d-block fs-7">{{ $row->age }} سنة</span>
                            </td>

                            <td>
                                <a href="#"
                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $row->id_occupation ?? '-' }}</a>
                                {{-- <span class="text-muted fw-bold text-muted d-block fs-7 text-right" lang="en"
                            dir="ltr">
                            الهاتف :: {{ $row->User->phone }}</span> --}}
                            </td>

                            <td class="min-w-125px">
                                @if ($row->User->volunteer != null)
                                    <span
                                        class="badge badge-light-success fs-8 fw-bolder">{{ $row->User->volunteer->volunteer_type }}</span>
                                @else
                                    <span class="badge badge-light-danger fs-8 fw-bolder">لا</span>
                                @endif
                            </td>

                            <td>
                                <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                    {{ $row->User->user->created_at ? $row->User->user->created_at->format('Y-m-d') : $row->User->user->created_at }}
                                </div>
                                <span
                                    class="text-muted fw-bold text-muted d-block fs-7">{{ $row->User->user->created_at ? $row->User->user->created_at->diffForHumans() : $row->User->user->created_at }}</span>
                            </td>

                            <td class="text-end">
                                <a href="{{ route('admin.settings.overview', $row->User->user->id) }}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon('icons/duotune/general/gen019.svg', 'svg-icon-3') !!}
                                </a>

                                {{-- <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            {!! theme()->getSvgIcon('icons/duotune/art/art005.svg', 'svg-icon-3') !!}
                        </a>

                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                            {!! theme()->getSvgIcon('icons/duotune/general/gen027.svg', 'svg-icon-3') !!}
                        </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </x-admin.tables.table1>
            </div>
        @endif
        <!--end::Col-->
    </div>
    <!--end::Row-->

    {{--    <!--begin::Row--> --}}
    {{--    <div class="row gy-5 g-xl-8"> --}}
    {{--        <!--begin::Col--> --}}
    {{--        <div class="col-xl-4"> --}}
    {{--            {{ theme()->getView('partials/widgets/lists/_widget-2', array('class' => 'card-xl-stretch mb-xl-8')) }} --}}
    {{--        </div> --}}
    {{--        <!--end::Col--> --}}

    {{--        <!--begin::Col--> --}}
    {{--        <div class="col-xl-4"> --}}
    {{--            {{ theme()->getView('partials/widgets/lists/_widget-6', array('class' => 'card-xl-stretch mb-xl-8')) }} --}}
    {{--        </div> --}}
    {{--        <!--end::Col--> --}}

    {{--        <!--begin::Col--> --}}
    {{--        <div class="col-xl-4"> --}}
    {{--            {{ theme()->getView('partials/widgets/lists/_widget-4', array('class' => 'card-xl-stretch mb-5 mb-xl-8', 'items' => '5')) }} --}}
    {{--        </div> --}}
    {{--        <!--end::Col--> --}}
    {{--    </div> --}}
    {{--    <!--end::Row--> --}}



</x-base-layout>
