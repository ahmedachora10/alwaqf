<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    <!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('نموذج بيانات المستفيد') }}</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->

    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_profile_beneficiarie_form" class="form" method="POST" action="{{ route('settings.editBeneficiarieInfo') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!--begin::Card body-->
            <div class="card-body border-top p-9">


                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('رقم العضوية / رقم الهوية / تاريخ ') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-2">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row"> رقم العضوية
                                <input type="text" name="membership_id" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                placeholder="رقم العضوية" value="{{ old('membership_id', $info->beneficiaryProfile->membership_id ?? '') }}"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <div class="col-lg-3">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">رقم الهوية
                                <input type="text" name="id_number" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                placeholder="رقم الهوية" value="{{ old('id_number', $info->beneficiaryProfile->id_number ?? '') }}"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <div class="col-lg-3">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">تاريخ الهوية
                                <input type="date" name="id_date" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                placeholder="تاريخ" value="{{ old('id_date', $info->beneficiaryProfile->id_date ?? '') }}"/>
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
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __(' الجنسية / تاريخ الولادة / الحالة العائلية') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-3 fv-row">الجنسية:
                        <select name="nationality_id" aria-label="{{ __('اختر الجنسية') }}" data-control="select2"
                            data-placeholder="{{ __('اختر الجنسية..') }}" class="form-select form-select-solid form-select-lg">
                            <option value="">{{ __('اختر الجنسية..') }}</option>
                            @foreach($nationalities as $key => $value)
                                <option data-kt-flag="{{ $value['id'] }}" value="{{ $value['id'] }}"
                                {{ $value['id'] === old('nationality_id', $info->beneficiaryProfile->nationality_id ?? '') ? 'selected' :'' }}>
                                <b>{{ $value['id'] }}</b>&nbsp;-&nbsp;{{ $value['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3 fv-row">تاريخ الميلاد:
                        <input type="date" name="date_of_birth" class="form-control form-control-lg form-control-solid"
                        placeholder="تاريخ الولادة" value="{{ old('date_of_birth', $info->beneficiaryProfile->date_of_birth ?? '') }}"/>
                    </div>
                    <div class="col-lg-2 fv-row"> الحالة الاجتماعية:
                        <input type="text" name="marital_status" class="form-control form-control-lg form-control-solid"
                        placeholder="الحالة العائلية" value="{{ old('marital_status', $info->beneficiaryProfile->marital_status ?? '') }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('مستوى التعليم / تخصص / مهنة') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-2 fv-row">التعليم:
                        <input type="text" name="education_level" class="form-control form-control-lg form-control-solid"
                        placeholder="مستوى التعليم" value="{{ old('education_level', $info->beneficiaryProfile->education_level ?? '') }}"/>
                    </div>
                    <div class="col-lg-3 fv-row">التخصص:
                        <input type="text" name="major" class="form-control form-control-lg form-control-solid"
                        placeholder="تخصص" value="{{ old('major', $info->beneficiaryProfile->major ?? '') }}"/>
                    </div>
                    <div class="col-lg-3 fv-row">المهنة:
                        <input type="text" name="id_occupation" class="form-control form-control-lg form-control-solid"
                        placeholder="المهنة" value="{{ old('id_occupation', $info->beneficiaryProfile->id_occupation ?? '') }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->



                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('  نوع المنزل / ملكية المنزل / عنوان ') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-2 fv-row">نوع المنزل:
                        <input type="text" name="house_type" class="form-control form-control-lg form-control-solid"
                        placeholder="نوع المنزل" value="{{ old('house_type', $info->beneficiaryProfile->house_type ?? '') }}"/>
                    </div>
                    <div class="col-lg-2 fv-row">الملكية:
                        <input type="text" name="house_ownership" class="form-control form-control-lg form-control-solid"
                        placeholder="ملكية المنزل" value="{{ old('house_ownership', $info->beneficiaryProfile->house_ownership ?? '') }}"/>
                    </div>
                    <div class="col-lg-4 fv-row">العنوان:
                        <input type="text" name="address" class="form-control form-control-lg form-control-solid"
                        placeholder="عنوان" value="{{ old('address', $info->beneficiaryProfile->address ?? '') }}"/>
                    </div>

                    <!--end::Col-->
                </div>
                <!--end::Input group-->


                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __(' الذكور عدد أفراد الأسرة / الذكور / الاناث / ترتيب') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-2 fv-row">أفراد الأسرة:
                        <input type="number" name="family_members" class="form-control form-control-lg form-control-solid"
                        placeholder="عدد أفراد الأسرة" value="{{ old('family_members', $info->beneficiaryProfile->family_members ?? '') }}"/>
                    </div>
                    <div class="col-lg-2 fv-row">الذكور:
                        <input type="number" name="family_male_members" class="form-control form-control-lg form-control-solid"
                        placeholder="عدد أفراد الأسرة الذكور" value="{{ old('family_male_members', $info->beneficiaryProfile->family_male_members ?? '') }}"/>
                    </div>
                    <div class="col-lg-2 fv-row">الإناث:
                        <input type="number" name="family_female_members" class="form-control form-control-lg form-control-solid"
                        placeholder="عدد أفراد الأسرة الاناث" value="{{ old('family_female_members', $info->beneficiaryProfile->family_female_members ?? '') }}"/>
                    </div>
                    <div class="col-lg-2 fv-row">رتبة المستفيد:
                        <input type="number" name="rank_in_family" class="form-control form-control-lg form-control-solid"
                        placeholder="رتبة في الأسرة" value="{{ old('rank_in_family', $info->beneficiaryProfile->rank_in_family ?? '') }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->



                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('مهنة الأب / يشغلها منذ تاريخ / اسمه الكامل') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-3 fv-row">مهنة الأب:
                        <input type="text" name="father_occupation" class="form-control form-control-lg form-control-solid"
                        placeholder="مهنة الأب" value="{{ old('father_occupation', $info->beneficiaryProfile->father_occupation ?? '') }}"/>
                    </div>
                    <div class="col-lg-2 fv-row">يشغلها منذ:
                        <input type="date" name="filling_form_date" class="form-control form-control-lg form-control-solid"
                        placeholder="يشغلها منذ تاريخ" value="{{ old('filling_form_date', $info->beneficiaryProfile->filling_form_date ?? '') }}"/>
                    </div>
                    <div class="col-lg-3 fv-row">اسم الأب الكامل:
                        <input type="text" name="full_name" class="form-control form-control-lg form-control-solid"
                            placeholder="الاسم الكامل" value="{{ old('full_name', $info->beneficiaryProfile->full_name ?? '') }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('الحالة الصحية/وصف الحالة الصحية') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-3 fv-row">الحالة الصحية:
                        <input type="text" name="health_status" class="form-control form-control-lg form-control-solid"
                        placeholder="الحالة الصحية" value="{{ old('health_status', $info->beneficiaryProfile->health_status ?? '') }}"/>
                    </div>
                    <div class="col-lg-5 fv-row">وصف الحالة:
                        <input type="text" name="health_description" class="form-control form-control-lg form-control-solid"
                        placeholder="وصف الحالة الصحية" value="{{ old('health_description', $info->beneficiaryProfile->health_description ?? '') }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->


                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('رقم السقا وقف الكوشك /الاعتماد/نوع المركبة/مكتب التوريد') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-2 fv-row">رقم السقا بوقف الكوشك:
                        <input type="number" name="koshak_sega_number" class="form-control form-control-lg form-control-solid"
                        placeholder="sega number" value="{{ old('koshak_sega_number', $info->beneficiaryProfile->koshak_sega_number ?? '') }}"/>
                    </div>
                    <div class="col-lg-2 fv-row">اعتماد وقف الكوشك:
                        <input type="text" name="koshak_etimad" class="form-control form-control-lg form-control-solid"
                        placeholder="etimad" value="{{ old('koshak_etimad', $info->beneficiaryProfile->koshak_etimad ?? '') }}"/>
                    </div>
                    <div class="col-lg-2 fv-row">نوع المركبة:
                        <input type="text" name="koshak_vehicle_type" class="form-control form-control-lg form-control-solid"
                        placeholder="vehicle type" value="{{ old('koshak_vehicle_type', $info->beneficiaryProfile->koshak_vehicle_type ?? '') }}"/>
                    </div>
                    <div class="col-lg-2 fv-row">مكتب التوريد:
                        <input type="text" name="koshak_toreed_office" class="form-control form-control-lg form-control-solid"
                        placeholder="toreed office" value="{{ old('koshak_toreed_office', $info->beneficiaryProfile->koshak_toreed_office ?? '') }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('اسم السائق بوقف الكوشك / رقم جوال السائق') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-4 fv-row">اسم السائق بوقف الكوشك:
                        <input type="text" name="koshak_driver_name" class="form-control form-control-lg form-control-solid"
                        placeholder="driver name" value="{{ old('koshak_driver_name', $info->beneficiaryProfile->koshak_driver_name ?? '') }}"/>
                    </div>
                    <div class="col-lg-4 fv-row">رقم الجوال للسائق:
                        <input type="number" name="koshak_mobile_number" class="form-control form-control-lg form-control-solid"
                        placeholder="mobile number" value="{{ old('koshak_mobile_number', $info->beneficiaryProfile->koshak_mobile_number ?? '') }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

            </div>
            <!--end::Card body-->

            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-white btn-active-light-primary me-2">{{ __('إلغاء') }}</button>

                <button type="submit" class="btn btn-primary" id="kt_account_profile_beneficiarie_submit">
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

@if (session('editBeneficiarieInfo')!=null)
    <input type="hidden" value="{{ session('editBeneficiarieInfo') }}" id="editBeneficiarieInfo" />
@endif
</x-base-layout>

