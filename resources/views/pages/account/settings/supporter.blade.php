<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    <!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('بيانات الداعم') }}</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->

    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_profile_supporter_form" class="form" method="POST" action="{{ route('settings.editSupporterInfo') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!--begin::Card body-->
            <div class="card-body border-top p-9">
                

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('رقم العضوية / نوع العضوية ') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <input type="text" disabled name="membership_id" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" 
                                placeholder="رقم العضوية" value="{{ old('membership_id', $info->supporter->membership_id ?? '') }}"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <div class="col-lg-4">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" 
                                placeholder="نوع العضوية" value="{{ old('name', $info->supporter->membershipType->name ?? '') }}"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __(' الوصف') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <textarea name="description" class="form-control form-control-lg form-control-solid" >{{ old('description', $info->supporter->description ?? '') }}</textarea>
                    </div>
                </div>
                <!--end::Input group-->
                
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('  التخصص \ الاحالة ( نوع , قيمة , مُعرِّف المستخدم المُحيل)') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-2 fv-row">
                        <select name="specialty_id" aria-label="{{ __('اختر التخصص') }}" data-control="select2" data-placeholder="{{ __('اختر التخصص..') }}" class="form-select form-select-solid form-select-lg">
                            <option value="">{{ __('اختر التخصص..') }}</option>
                            @foreach($specialties as $key => $value)
                                <option data-kt-flag="{{ $value['id'] }}" value="{{ $value['id'] }}" 
                                {{ $value['id'] === old('specialty_id', $info->supporter->specialty_id ?? '') ? 'selected' :'' }}>
                                <b>{{ $value['id'] }}</b>&nbsp;-&nbsp;{{ $value['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2 fv-row">
                        <input type="text" disabled class="form-control form-control-lg form-control-solid" 
                        placeholder="نوع الاحالة" value="{{ $info->supporter->referral->type  }}"/>
                    </div>
                    <div class="col-lg-2 fv-row">
                        <input type="text" disabled class="form-control form-control-lg form-control-solid" 
                        placeholder="الاحالة" value="{{ $info->supporter->referral->value  }}"/>
                    </div>
                    <div class="col-lg-2 fv-row">
                        <input type="text" disabled class="form-control form-control-lg form-control-solid" 
                        placeholder="معرف المستخدم المحيل" value="{{ $info->supporter->referral->referrer_user_id  }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

             

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('الحساب البنكي / المهنة') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-5 fv-row">
                        <input type="text" name="bank_account" class="form-control form-control-lg form-control-solid" 
                        placeholder="الحساب البنكي" value="{{ old('bank_account', $info->supporter->bank_account ?? '') }}"/>
                    </div>
                    <div class="col-lg-3 fv-row">
                        <input type="text" name="work" class="form-control form-control-lg form-control-solid" 
                        placeholder="المهنة" value="{{ old('work', $info->supporter->work ?? '') }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

            </div>
            <!--end::Card body-->

            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-white btn-active-light-primary me-2">{{ __('إلغاء') }}</button>

                <button type="submit" class="btn btn-primary" id="kt_account_profile_supporter_submit">
                    @include('partials.general._button-indicator', ['label' => __('حفظ التغييرات')])
                </button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
<!--end::Basic info-->

@if (session('editSupporterInfo')!=null)
    <input type="hidden" value="{{ session('editSupporterInfo') }}" id="editSupporterInfo" />
@endif
</x-base-layout>

