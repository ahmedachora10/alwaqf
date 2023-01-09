<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
   <!--begin::Post-->
   <div class="post d-flex flex-column-fluid" id="kt_post">
      <!--begin::Container-->
      <div id="kt_content_container" class="container-xxl">
         <!--begin::Card-->
         <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
               <!--begin::Card title-->
               <div class="card-title">
                  <!--begin::Search-->
                  <div class="d-flex align-items-center position-relative my-1">
                     <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                     <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                           <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                     <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="بحث" />
                  </div>
                  <!--end::Search-->
               </div>
               <!--begin::Card title-->
               <!--begin::Card toolbar-->
               <div class="card-toolbar">
                  <!--begin::Toolbar-->
                  <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                     <!--begin::Add customer-->
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">وظيفة جديدة</button>
                     <!--end::Add customer-->
                  </div>
                  <!--end::Toolbar-->
                  <!--begin::Group actions-->
                  <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                     <div class="fw-bolder me-5">
                        <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                     </div>
                     <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
                  </div>
                  <!--end::Group actions-->
               </div>
               <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
               <!--begin::Table-->
               <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                  <!--begin::Table head-->
                  <thead>
                     <!--begin::Table row-->
                     <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                           <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                              <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                           </div>
                        </th>
                        <th class="min-w-125px">المسمى الوظيفي</th>
                        <th class="min-w-125px">الشركة</th>
                        <th class="min-w-125px">تاريخ البدء</th>
                        <th class="min-w-125px">تاريخ الانتهاء</th>
                        <th class="min-w-125px">ملاحظة</th>
                        <th class="min-w-125px">مرفق</th>
                        <th class="min-w-70px">أجراءات</th>
                     </tr>
                     <!--end::Table row-->
                  </thead>
                  <!--end::Table head-->
                  <!--begin::Table body-->
                  <tbody class="fw-bold text-gray-600">
                     @foreach($info->beneficiaryProfile->experience as $key => $value)
                     <tr>
                        <!--begin::Checkbox-->
                        <td>
                           <div class="form-check form-check-sm form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="1" />
                           </div>
                        </td>
                        <!--end::Checkbox-->
                        <!--begin::Name=-->
                        <td>
                           <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $value->job_title }}</a>
                        </td>
                        <td>{{ $value->company }}</td>
                        <td>{{ $value->start_date }}</td>
                        <td>{{ $value->end_date }}</td>
                        <td>{{ $value->note }}</td>
                        <td><a target="_blank" href="{{ url(asset('storage/attachments/experience/'.$value->attachment)) }}" >{{ $value->attachment }} </a></td>
                        <!--begin::Action=-->
                        <td class="">
                           <div class="menu-item px-3">
                              <a href="{{route('settings.deleteexperience',$value->id) }}"  class="menu-link px-3" data-kt-customer-table-filter="delete_row">حذف</a>
                           </div>
                        </td>
                        <!--end::Action=-->
                     </tr>
                     @endforeach
                  </tbody>
                  <!--end::Table body-->
               </table>
               <!--end::Table-->
            </div>
            <!--end::Card body-->
         </div>
         <!--end::Card-->
         <!--begin::Modals-->
         <!--begin::Modal - Customers - Add-->
         <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
               <!--begin::Modal content-->
               <div class="modal-content">
                  <!--begin::Form-->
                  <form class="form" method="POST"  enctype="multipart/form-data"  
                     action="{{ route('settings.addexperience') }}" 
                     id="kt_modal_add_customer_form">
                     @csrf
                     @method('PUT')
                     <!--begin::Modal header-->
                     <div class="modal-header" id="kt_modal_add_customer_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">وظيفة جديدة</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                           <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                           <span class="svg-icon svg-icon-1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                 <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                 <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
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
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" 
                           data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="required fs-6 fw-bold mb-2">المسمى الوظيفي</label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="text" class="form-control form-control-solid"  name="job_title" placeholder="المسمى الوظيفي" />
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="required fs-6 fw-bold mb-2">الشركة</label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="text" class="form-control form-control-solid"  name="company" placeholder="الشركة" />
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="required fs-6 fw-bold mb-2">تاريخ البدء</label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="date" class="form-control form-control-solid"  name="start_date" placeholder="تاريخ البدء" />
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="required fs-6 fw-bold mb-2">تاريخ الانتهاء</label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="date" class="form-control form-control-solid"  name="end_date" placeholder="تاريخ الانتهاء" />
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="fs-6 fw-bold mb-2">ملاحظة</label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="text" class="form-control form-control-solid" name="note" placeholder="note" />
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->
                           <!--begin::Input group-->
                           <div class="row mb-6">
                              <!--begin::Label-->
                              <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('مرفق') }}</label>
                              <!--end::Label-->
                              <!--begin::Col-->
                              <div class="col-lg-8">
                                 <!--begin::Image input-->
                                 <div >
                                    <!--begin::Inputs-->
                                    <input type="file" name="attachment" accept=".png, .jpg, .jpeg, .pdf"/>
                                 </div>
                                 <!--end::Image input-->
                                 <!--begin::Hint-->
                                 <div class="form-text">أنواع الملفات المسموح بها: png، jpg، jpeg، pdf</div>
                                 <!--end::Hint-->
                              </div>
                              <!--end::Col-->
                           </div>
                           <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                     </div>
                     <!--end::Modal body-->
                     <!--begin::Modal footer-->
                     <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">الغاء</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                        <span class="indicator-label">اضافة</span>
                        <span class="indicator-progress">المرجو الانتظار ...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
         <!--end::Modals-->
      </div>
      <!--end::Container-->
   </div>
   <!--end::Post-->
</div>
<!--end::Content-->
@if (session('addBeneficiarieExperience')!=null)
<input type="hidden" value="{{ session('addBeneficiarieExperience') }}" id="addBeneficiarieExperience" />
@endif
@if (session('destroyBeneficiarieExperience')!=null)
<input type="hidden" value="{{ session('destroyBeneficiarieExperience') }}" id="destroyBeneficiarieExperience" />
@endif