<x-base-layout>
    <!--begin::Content-->
    <x-admin.tables.table1 class="card-xxl-stretch mb-5 mb-xl-8" title="عرض المتطوعون"
        userCount="اكثر من {{ count($volunteers) }} متطوع" buttonName="متطوع جديد" :columns="['اسم الكامل', 'البريد الالكتروني', 'نوع التطوع', 'ملاحظة', 'السجلات']">
        @foreach ($volunteers as $row)
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
                        </div>
                    </div>
                </td>

                <td>
                    <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                        {{ $row->info->user->email }}</div>
                </td>

                <td>
                    <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                        {{ $row->volunteer_type }}</div>
                </td>

                <td class="min-w-125px">{{ $row->note }}</td>

                <td class="min-w-125px">
                    @foreach ($row->logs as $log)
                        <div class="mb-2">
                            <span class="badge badge-light-success fs-8 fw-bolder">{{ $log->name }} </span>
                            :
                            <span class="badge badge-light-danger fs-8 fw-bolder">{{ $log->hours }} ساعة
                            </span>
                            <span class="badge badge-light-warning fs-8 fw-bolder">{{ $log->note }} </span>
                        </div>
                    @endforeach
                </td>

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

    {{ $volunteers->links() }}
    <!--end::Content-->
</x-base-layout>
