<!--begin::Basic info-->
<div class="card {{ $class }}">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('تعديل المعلومات الشخصية') }}</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->

    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_profile_details_formm" class="form" method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('صورة العرض') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline {{ isset($info) && $info->avatar ? '' : 'image-input-empty' }}" data-kt-image-input="true" 
                               >
                                
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-125px h-125px" 
                            style="background-image: {{ isset($info) && $info->avatar ? 'url('.asset('storage/avatars/'.$info->avatar).')' : 'none' }};"></div>
                            <!--end::Preview existing avatar-->

                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تغيير صورة العرض">
                                <i class="bi bi-pencil-fill fs-7"></i>

                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
                                <input type="hidden" name="avatar_remove"/>
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->

                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="إلغاء">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Cancel-->

                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="إزالة صورة العرض">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->

                        <!--begin::Hint-->
                        <div class="form-text">أنواع الملفات المسموح بها: png، jpg، jpeg.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('الاسم الكامل') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="first_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="الاسم الشخصي" value="{{ old('first_name', auth()->user()->first_name ?? '') }}"/>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="last_name" class="form-control form-control-lg form-control-solid" placeholder="الاسم العائلي" value="{{ old('last_name', auth()->user()->last_name ?? '') }}"/>
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
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('الجهة') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                         placeholder="الجهة" value="{{ old('company', $info->company ?? '') }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">{{ __('رقم الجوال') }}</span>

                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{{ __('Phone number must be active') }}"></i>
                    </label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="رفم الجوال" value="{{ old('phone', $info->phone ?? '') }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('الموقع الالكتروني') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="الموقع الالكتروني" value="{{ old('website', $info->website ?? '') }}"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">{{ __('الدولة') }}</span>

                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{{ __('الدولة') }}"></i>
                    </label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="country" aria-label="{{ __('اختر الدولة') }}" data-control="select2" data-placeholder="{{ __('قم باختيار الدولة ...') }}" class="form-select form-select-solid form-select-lg fw-bold">
                            <option value="">{{ __('اختر الدولة...') }}</option>
                            @foreach(\App\Core\Data::getCountriesList() as $key => $value)
                                <option data-kt-flag="{{ $value['flag'] }}" value="{{ $key }}" {{ $key === old('country', $info->country ?? '') ? 'selected' :'' }}>{{ $value['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('اللغة') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <!--begin::Input-->
                        <select name="language" aria-label="{{ __('اختر اللغة') }}" data-control="select2" data-placeholder="{{ __('اختر اللغة...') }}" class="form-select form-select-solid form-select-lg">
                            <option value="">{{ __('اختر اللغة...') }}</option>
                            @foreach(\App\Core\Data::getLanguagesList() as $key => $value)
                                <option data-kt-flag="{{ $value['country']['flag'] }}" value="{{ $key }}" {{ $key === old('language', $info->language ?? '') ? 'selected' :'' }}>{{ $value['name'] }}</option>
                            @endforeach
                        </select>
                        <!--end::Input-->

                        <!--begin::Hint-->
                        <div class="form-text">
                            {{ __('الرجاء تحديد اللغة المفضلة ، بما في ذلك تنسيق التاريخ والوقت والأرقام.') }}
                        </div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('منطقة الوقت') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="timezone" aria-label="{{ __('اختر الوقت') }}" data-control="select2" data-placeholder="{{ __('اختر الوقت..') }}" class="form-select form-select-solid form-select-lg">
                            <option value="">{{ __('اختر الوقت..') }}</option>
                            @foreach(\App\Core\Data::getTimeZonesList() as $key => $value)
                                <option data-bs-offset="{{ $value['offset'] }}" value="{{ $key }}" {{ $key === old('timezone', $info->timezone ?? '') ? 'selected' :'' }}>{{ $value['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('العملة') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="currency" aria-label="{{ __('اختر العملة') }}" data-control="select2" data-placeholder="{{ __('اختر العملة..') }}" class="form-select form-select-solid form-select-lg">
                            <option value="">{{ __('اختر العملة..') }}</option>
                            @foreach(\App\Core\Data::getCurrencyList() as $key => $value)
                                <option data-kt-flag="{{ $value['country']['flag'] }}" value="{{ $key }}" {{ $key === old('currency', $info->currency ?? '') ? 'selected' :'' }}><b>{{ $key }}</b>&nbsp;-&nbsp;{{ $value['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('وسيلة التواصل المفضلة') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <!--begin::Options-->
                        <div class="d-flex align-items-center mt-3">
                            <!--begin::Option-->
                            <label class="form-check form-check-inline form-check-solid me-5">
                                <?php 
                               $debug = var_export($info, true);
                                 ?>
                                <input type="hidden" name="communication[email]" value="0">
                                <input class="form-check-input" name="communication[email]" type="checkbox" value="1" 
                                    {{ substr($debug, strpos($debug, 'email') + 8,1) =='1' ? 'checked' : '' }}/>
                                <span class="fw-bold ps-2 fs-6">
                                    {{ __('البريد الالكتروني') }}
                                </span>
                            </label>
                            <!--end::Option-->

                            <!--begin::Option-->
                            <label class="form-check form-check-inline form-check-solid">
                                <input type="hidden" name="communication[phone]" value="0">
                                <input class="form-check-input" name="communication[phone]" type="checkbox" value="1"
                                {{ substr($debug, strpos($debug, 'phone":') + 8,1) =='1' ? 'checked' : '' }}/>
                                <span class="fw-bold ps-2 fs-6">
                                    {{ __('الهاتف') }}
                                </span>
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-0">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('السماح بالتواصل') }}</label>
                    <!--begin::Label-->

                    <!--begin::Label-->
                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="form-check form-check-solid form-switch fv-row">
                            <input type="hidden" name="marketing" value="0">
                            <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" name="marketing" value="1" {{ old('marketing', $info->marketing ?? '') ? 'checked' : '' }}/>
                            <label class="form-check-label" for="allowmarketing"></label>
                        </div>
                    </div>
                    <!--begin::Label-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card body-->

            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-white btn-active-light-primary me-2">{{ __('إلغاء') }}</button>

                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submitt">
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

@if (session('statusChangeInfo')!=null)
    <input type="hidden" value="{{ session('statusChangeInfo') }}" id="statusChangeInfo" />
@endif