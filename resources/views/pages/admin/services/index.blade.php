<x-base-layout>
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <x-alert>
        </x-alert>
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                {{-- <span class="svg-icon svg-icon-1 position-absolute ms-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
													</svg>
												</span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="بحث ..." />
                            --}}
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                                    <option></option>
                                    <option value="all">الكل</option>
                                    <option value="published">منشورة</option>
                                    <option value="scheduled">مجدولة</option>
                                    <option value="inactive">اكتملت</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--begin::Add product-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_customer">إضافة حدمة جديدة
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    {{-- <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                                    </div> --}}
                                </th>
                                <th class="min-w-200px">اسم الخدمة</th>
                                <th class=" min-w-100px">نوع الخدمة</th>
                                <th class=" min-w-70px">وصف الخدمة</th>
                                <th class=" min-w-100px">الكمية</th>
                                <th class=" min-w-100px">الجهة المقدمة</th>
                                <th class="min-w-70px">خيارات</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                            <!--begin::Table row-->   
                            @foreach($services as $key=>$value) 
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <td class="w-10px pe-2">
                                    {{-- <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                                    </div> --}}
                                </td>
                                <td class="min-w-200px">{{ $value->service_name }}</td>
                                <td class="min-w-100px"><span class="badge badge-light-warning fs-8 fw-bolder">
                                    {{ $value->serviceType->name }}</span></td>
                                <td class=" min-w-70px">{{ $value->description }}</td>
                                <td class=" min-w-100px">{{ $value->quantity }}</td>
                                <td class=" min-w-100px">{{ $value->organization->name }}</td>
                                <td class="min-w-70px">
                                <form method="post" class="form"
                                            action="{{  route('services.destroy', $value->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" value="{{ $value->id }}" name="id">
                                            <button class="btn btn-danger" type="submit" value="مسح">مسح</button>
                                        </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                 <!--begin::Modal - Customers - Add-->
                 <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="{{route('services.store')}}" id="kt_modal_add_customer_form"
                                method="post" data-kt-redirect="../../demo8/dist/apps/customers/list.html">
                                @csrf
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_add_customer_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">إضافة خدمة جديدة</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div id="kt_modal_add_customer_close"
                                        class="btn btn-icon btn-sm btn-active-icon-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Scroll-->
                                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll"
                                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                        data-kt-scroll-max-height="auto"
                                        data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                        data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                        data-kt-scroll-offset="300px">

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold mb-2">اسم الخدمة</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="service_name" value="دورة تعليمية في ..." />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                         <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Input-->
                                            <label class="required fs-6 fw-bold mb-2">نوع الخدمة</label>

                                            <select name="serviceType_id" aria-label="{{ __('نوع الخدمة') }}"
                                                data-control="select2" data-placeholder="{{ __('قم باختيار نوع الخدمة') }}"
                                                class="form-select form-select-solid form-select-lg">
                                                <option value="">{{ __('اختر نوع الخدمة ...') }}</option>
                                                @foreach(\App\Models\ServiceType::all() as $value)
                                                <option value="{{ $value->id}}">{{ $value->name.' - '.$value->descriptoin}}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Col-->

                                         <!--begin::Input group-->
                                         <div class="fv-row mb-7">
                                            <!--begin::Input-->
                                            <label class="required fs-6 fw-bold mb-2">الجهة المقدمة للخدمة</label>

                                            <select name="organization_id" aria-label="{{ __('الجهة المقدمة للخدمة') }}"
                                                data-control="select2" data-placeholder="{{ __('قم باختيار الجهة') }}"
                                                class="form-select form-select-solid form-select-lg">
                                                <option value="">{{ __('اختر الجهة المقدمة للخدمة ...') }}</option>
                                                @foreach(\App\Models\Organization::all() as $value)
                                                <option value="{{ $value->id}}">{{ $value->name.' - '.$value->description}}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Col-->


                                        

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">وصف الخدمة</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="service_description" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">الكمية</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" class="form-control form-control-solid" placeholder=""
                                                name="quantity" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->


                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_add_customer_cancel"
                                        class="btn btn-light me-3">إلغاء</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                        <span class="indicator-label">حفظ</span>
                                        <span class="indicator-progress">الرجاء الانتظار ...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - Customers - Add-->
                <!--end::Products-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->


    @section('scripts')
    <script src="{{asset('demo8/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--begin::Page Custom Javascript(used by this page)-->
    <script type="text/javascript">
        $(function () {
          
          var table = $('#kt_ecommerce_products_table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('service.list') }}",
              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'name', name: 'name'},
                  {data: 'service_name', name: 'service_name'},
                  {data: 'description', name: 'description'},
                  {data: 'quantity', name: 'quantity'},
                  {data: 'organiz_name', name: 'organiz_name'},
                  {
                      data: 'action', 
                      name: 'action', 
                      orderable: true, 
                      searchable: true
                  },
              ]
          });
          
        });
      </script>
      @endsection


</x-base-layout>
