<x-base-layout>

    <x-admin.tables.table1 class="card-xxl-stretch mb-5 mb-xl-8" title="عرض الداعمين"
        userCount="اكثر من {{ count($supporters) }} داعم" buttonName="داعم جديد" :columns="['اسم الكامل', 'رقم العضوية', 'نوع العضوية', 'نوع التأثير', 'عضو متطوع؟', 'نوع المساهمة']">
        @foreach ($supporters as $row)
            <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                    </div>
                </td>

                <td>
                    @php
                        $avatar = $row->info->avatar ?: 'avatars/blank.png';
                    @endphp
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-45px me-5">
                            <img src="{{ asset(theme()->getMediaUrlPath() . $avatar) }}" alt="" />
                        </div>
                        <div class="d-flex justify-content-start flex-column">
                            <a href="#"
                                class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->info->user->name }}</a>

                            <span
                                class="text-muted fw-bold text-muted d-block fs-7">{{ $row->info->user->email }}</span>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                        {{ $row->membership_id }}</div>
                </td>

                <td>
                    <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                        {{ $row->membershipType->name }}</div>
                </td>

                <td class="min-w-125px">
                    @foreach ($row->supporter_influence as $v)
                        <span class="badge badge-light-danger fs-8 fw-bolder">{{ $v->influenceType->name }} </span>
                    @endforeach
                </td>

                <td class="min-w-125px">
                    @if ($row->info->volunteer != null)
                        <span
                            class="badge badge-light-success fs-8 fw-bolder">{{ $row->info->volunteer->volunteer_type }}</span>
                    @else
                        <span class="badge badge-light-danger fs-8 fw-bolder">لا</span>
                    @endif
                </td>

                <td class="min-w-125px">نوع المساهمة</td>

                <td class="text-end">
                    <a href="{{ route('admin.settings.overview', $row->info->user->id) }}"
                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                        {!! theme()->getSvgIcon('icons/duotune/general/gen019.svg', 'svg-icon-3') !!}
                    </a>
                    <form method="post" class="d-inline-block" action="{{ route('supporters.destroy', $row->id) }}">
                        @csrf
                        @method('DELETE')
                        {{-- <input type="hidden" value="{{ $row->id }}" name="id"> --}}
                        <a href="{{ route('supporters.destroy', $row->id) }}"
                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                            onclick="if(confirm('هل تود حذف هذا العنصر؟')) { event.preventDefault();
                            this.closest('form').submit();} else { return false }"
                            type="submit" value="حذف">
                            {!! theme()->getSvgIcon('icons/duotune/general/gen027.svg', 'svg-icon-3') !!}
                        </a>
                    </form>
                </td>
            </tr>
        @endforeach
    </x-admin.tables.table1>

    {{ $supporters->links() }}


    {{-- @section('scripts') --}}
    {{-- <script src="{{ asset('demo8/plugins/custom/datatables/datatables.bundle.js') }}"></script> --}}
    <!--begin::Page Custom Javascript(used by this page)-->
    {{-- <script type="text/javascript">
        $(function() {

            var table = $('#kt_table_users').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('supporter.list') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'membership',
                        name: 'membership'
                    },
                    {
                        data: 'membership_id',
                        name: 'membership_id'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'specialty',
                        name: 'specialty'
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
    {{-- @endsection --}}

</x-base-layout>
