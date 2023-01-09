<!--begin::Aside Menu-->
@php
    $menu = bootstrap()->getAsideMenu();
    \App\Core\Adapters\Menu::filterMenuPermissions($menu->items);
@endphp

<div
    class="hover-scroll-overlay-y px-2 my-5 my-lg-5"
    id="kt_aside_menu_wrapper"

    data-kt-scroll="true"
    data-kt-scroll-height="auto"
    data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
    data-kt-scroll-wrappers="#kt_aside_menu"
    data-kt-scroll-offset="5px"
>
    <!--begin::Menu-->
    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
        <div class="menu-item">
            <a class="menu-link" href="/">
                <span class="menu-icon"></span>
                <span class="menu-title">الرئيسية</span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
       <!-- <div class="menu-item">
            <a class="menu-link" href="{{route('admin.index')}}">
                <span class="menu-icon"></span>
                <span class="menu-title">صفحة بيضاء</span>
            </a>
        </div>-->


        @hasrole('beneficiary')
        <div data-kt-menu-trigger="click" class="menu-item  {{ (request()->is('account/settings*')) ? 'show' : '' }} menu-accordion">
            <span class="menu-link ">
                <span class="menu-icon"></span>
                <span class="menu-title">حساب المستفيد</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('account/settings/overview')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/settings/overview')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">ملخص الحساب</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ (request()->is('account/settings')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/settings')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">تعديل المعلومات الشخصية</span>
                    </a>
                 </div>

                 <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('account/settings/beneficiarie')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/settings/beneficiarie')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">بيانات المستفيد</span>
                    </a>
                 </div>
                 <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('account/settings/skills')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/settings/skills')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">المهارات</span>
                    </a>
                 </div>
                 <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('account/settings/certificates')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/settings/certificates')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">الشهادات</span>
                    </a>
                 </div>

                 <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('account/settings/necessities')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/settings/necessities')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">الاحتياجات</span>
                    </a>
                 </div>

                 <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('account/settings/experiences')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/settings/experiences')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">التجارب المهنية</span>
                    </a>
                 </div>

            </div>
        </div>
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item  {{ (request()->is('account/services')) ? 'show' : '' }} menu-accordion">
            <span class="menu-link ">
                <span class="menu-icon"></span>
                <span class="menu-title"> الخدمات</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('account/services')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/services')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title"> قائمة الخدمات</span>
                    </a>
                </div>
            </div>
        </div>

        @endhasrole
        @hasrole('supporter')


        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item  {{ (request()->is('account/settings*')) ? 'show' : '' }} menu-accordion">
            <span class="menu-link ">
                <span class="menu-icon"></span>
                <span class="menu-title">حساب الداعم</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('account/settings/overview')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/settings/overview')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">ملخص الحساب</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ (request()->is('account/settings')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/settings')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">تعديل المعلومات الشخصية</span>
                    </a>
                 </div>
                 <div class="menu-item">
                    <a class="menu-link {{ (request()->is('account/settings/supporter')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/settings/supporter')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">معلومات الداعم</span>
                    </a>
                 </div>
                 <div class="menu-item">
                    <a class="menu-link {{ (request()->is('account/settings/supporter/influences')) ? 'active' : '' }}" href="{{theme()->getPageUrl('account/settings/supporter/influences')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">تأثيرات الداعم</span>
                    </a>
                 </div>
            </div>
        </div>

        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item  {{ (request()->is('supporter/payments') || request()->is('supporter/contributions')) ? 'show' : '' }} menu-accordion">
            <span class="menu-link ">
                <span class="menu-icon"></span>
                <span class="menu-title"> المدفوعات</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('supporter/payments')) ? 'active' : '' }}" href="{{theme()->getPageUrl('supporter/payments')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">سجل المدفوعات</span>
                    </a>
                </div>
            </div>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('supporter/contributions')) ? 'active' : '' }}" href="{{theme()->getPageUrl('supporter/contributions')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">شراء تكاليف سلع الخدمات</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item  {{ (request()->is('supporter/membershiptypes')) ? 'show' : '' }} menu-accordion">
            <span class="menu-link ">
                <span class="menu-icon"></span>
                <span class="menu-title"> العضوية </span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('supporter/membershiptypes')) ? 'active' : '' }}" href="{{theme()->getPageUrl('supporter/membershiptypes')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">فئة العضوية  / طلب الترقية</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item  {{ (request()->is('supporter/suggestion*')) ? 'show' : '' }} menu-accordion">
            <span class="menu-link ">
                <span class="menu-icon"></span>
                <span class="menu-title"> اقتراحات و مراسلات </span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a data-bs-toggle="tooltip"
                    class="menu-link  {{ (request()->is('supporter/suggestion')) ? 'active' : '' }}" href="{{theme()->getPageUrl('supporter/suggestion')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">اقتراح جديدة</span>
                    </a>
                </div>
            </div>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a data-bs-toggle="tooltip"
                    class="menu-link  {{ (request()->is('supporter/suggestions')) ? 'active' : '' }}" href="{{theme()->getPageUrl('supporter/suggestions')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">صندوق الوارد</span>
                    </a>
                </div>
            </div>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a data-bs-toggle="tooltip"
                    class="menu-link  {{ (request()->is('supporter/suggestionsSent')) ? 'active' : '' }}" href="{{theme()->getPageUrl('supporter/suggestionsSent')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">المرسلة</span>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="menu-item">
            <a class="menu-link  {{ (request()->is('supporter/rightsDuties')) ? 'active' : '' }}" href="{{route('supporter.rightsDuties')}}">
                <span class="menu-icon"></span>
                <span class="menu-title">حقوق وواجبات الداعم</span>
            </a>
        </div>

        @endhasrole
        @hasrole('volunteer')
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item {{ (request()->is('volunteer/*')) ? 'show' : '' }} menu-accordion">
            <span class="menu-link">
                <span class="menu-icon"></span>
                <span class="menu-title">حساب المتطوع</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a
                    class="menu-link  {{ (request()->is('volunteer/volunteerLogs')) ? 'active' : '' }}" href="{{theme()->getPageUrl('volunteer/volunteerLogs')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">لائحة الخدمات التطوعية</span>
                    </a>
                </div>

            </div>
        </div>

        @endhasrole
        @hasanyrole('admin')

        <div data-kt-menu-trigger="click" class="menu-item {{ (request()->is('beneficiaries')) ? 'show' : '' }} menu-accordion">
            <span class="menu-link">
                <span class="menu-icon"></span>
                <span class="menu-title">المستفيدون</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link {{ (request()->is('beneficiaries')) ? 'active' : '' }}" href="{{theme()->getPageUrl('beneficiaries')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">إدارة المستفيدين</span>
                    </a>
                </div>

            </div>
        </div>
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item {{ (request()->is('supporters')) ? 'show' : '' }}  menu-accordion">
            <span class="menu-link">
                <span class="menu-icon"></span>
                <span class="menu-title">الداعمون</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link {{ (request()->is('supporters')) ? 'active' : '' }}" href="{{theme()->getPageUrl('supporters')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">إدارة الداعمين</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item {{ (request()->is('volunteers')) ? 'show' : '' }} menu-accordion">
            <span class="menu-link">
                <span class="menu-icon"></span>
                <span class="menu-title">المتطوعون</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link {{ (request()->is('volunteers')) ? 'active' : '' }}" href="{{theme()->getPageUrl('volunteers')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">إدارة المتطوعين</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item {{ (request()->is('services')) ? 'show' : '' }} menu-accordion">
            <span class="menu-link">
                <span class="menu-icon"></span>
                <span class="menu-title">الخدمات</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link {{ (request()->is('services')) ? 'active' : '' }}" href="{{theme()->getPageUrl('services')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">إدارة الخدمات</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item {{ (request()->is('admin/suggestion*')) ? 'show' : '' }} menu-accordion">
            <span class="menu-link">
                <span class="menu-icon"></span>
                <span class="menu-title">التقارير الإدارية</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link {{ (request()->is('admin/suggestion*')) ? 'active' : '' }}" href="{{theme()->getPageUrl('admin/suggestions')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">تقارير الادارة</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item  {{ (request()->is('districts') || request()->is('influenceTypes') || request()->is('organizations')) ? 'show' : '' }}  menu-accordion">
            <span class="menu-link">
                <span class="menu-icon"></span>
                <span class="menu-title">إدارة النظام</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('districts')) ? 'active' : '' }}" href="{{theme()->getPageUrl('districts')  }}" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" data-kt-initialized="1">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">الأحياء و المدن</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('influenceTypes')) ? 'active' : '' }}" href="{{theme()->getPageUrl('influenceTypes')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">أنواع التأثير</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link  {{ (request()->is('organizations')) ? 'active' : '' }}" href="{{theme()->getPageUrl('organizations')  }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">المنظمات</span>
                    </a>
                </div>
            </div>
        </div>
        @endhasrole
        @hasanyrole('superadmin')
        <div class="menu-item">
            <a class="menu-link" href="/">
                <span class="menu-icon"></span>
                <span class="menu-title">إضافة مستخدم إداري</span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div class="menu-item">
            <a class="menu-link" href="/">
                <span class="menu-icon"></span>
                <span class="menu-title">إدارة صلاحيات المستخدم الاداريين </span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div class="menu-item">
            <a class="menu-link" href="/">
                <span class="menu-icon"></span>
                <span class="menu-title">إدارة النسخ الاحتياطية</span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        <div class="menu-item">
            <a class="menu-link" href="/">
                <span class="menu-icon"></span>
                <span class="menu-title">تصميم التقارير </span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-content pt-2 pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
            </div>
        </div>
        @endhasrole
        <div class="menu-item">
            <div class="menu-content">
                <div class="separator mx-1 my-4"></div>
            </div>
        </div>
        <div class="menu-item">
            <a class="menu-link" href="http://127.0.0.1:8000/documentation/getting-started/changelog">
                <span class="menu-icon"></span>
                <span class="menu-title">إصدار النظام v1.0.0</span>
            </a>
        </div>

    </div>
    <!--end::Menu-->
</div>
<!--end::Aside Menu-->
