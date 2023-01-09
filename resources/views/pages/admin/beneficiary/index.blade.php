<x-base-layout>


    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <x-alert>
        </x-alert>

        <!-- Display All Eneficiaries -->
        <x-admin.tables.table1 class="card-xxl-stretch mb-5 mb-xl-8" title="عرض المستفيدين"
            userCount="اكثر من {{ count($beneficiaries) }} مستفيد" buttonName="مستفيد جديد" :columns="['اسم المستفيد', 'تاريخ الازدياد', 'المهنة', 'عضو متطوع؟', 'تاريخ الانضمام']">
            @foreach ($beneficiaries as $row)
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
                            {{ $row->date_of_birth ? $row->date_of_birth->format('Y-m-d') : $row->date_of_birth }}</div>
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

        <!-- Pagination links -->
        {{ $beneficiaries->links() }}
    </div>
    <!--end::Content-->



    @section('scripts')
        <!--begin::Javascript-->
        <script>
            var hostUrl = "assets/";
        </script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="{{ asset('demo8/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('demo8/js/scripts.bundle.js') }}"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        {{-- <script src="{{ asset('demo8/plugins/custom/datatables/datatables.bundle.js') }}"></script> --}}
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        {{-- <script src="{{ asset('demo8/js/custom/apps/user-management/users/list/table.js') }}"></script>
        <script src="{{ asset('demo8/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
        <script src="{{ asset('demo8/js/custom/apps/user-management/users/list/add.js') }}"></script>
        <script src="{{ asset('demo8/js/widgets.bundle.js') }}"></script>
        <script src="{{ asset('demo8/js/custom/widgets.js') }}"></script>
        <script src="{{ asset('demo8/js/custom/apps/chat/chat.js') }}"></script>
        <script src="{{ asset('demo8/js/custom/utilities/modals/users-search.js') }}"></script> --}}


        {{-- <script type="text/javascript">
            $(function() {

                var table = $('#kt_table_users').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('beneficiry.list') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'major',
                            name: 'major'
                        },
                        {
                            data: 'names',
                            name: 'names'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: true,
                            searchable: true
                        },
                    ]
                });

            });
        </script> --}}
    @endsection
</x-base-layout>
