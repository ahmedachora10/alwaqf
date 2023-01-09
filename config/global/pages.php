<?php
/*
 *
 */

return array(

    'login'           => array(
        'title'  => 'Login',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/sign-in/general.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),

    'register'        => array(
        'title'  => 'Register',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/sign-up/general.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),
    'forgot-password' => array(
        'title'  => 'Forgot Password',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/password-reset/password-reset.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),

    'log' => array(
        'audit'  => array(
            'title'  => 'Audit Log',
            'assets' => array(
                'custom' => array(
                    'css' => array(
                        'plugins/custom/datatables/datatables.bundle.css',
                    ),
                    'js'  => array(
                        'plugins/custom/datatables/datatables.bundle.js',
                    ),
                ),
            ),
        ),
        'system' => array(
            'title'  => 'System Log',
            'assets' => array(
                'custom' => array(
                    'css' => array(
                        'plugins/custom/datatables/datatables.bundle.css',
                    ),
                    'js'  => array(
                        'plugins/custom/datatables/datatables.bundle.js',
                    ),
                ),
            ),
        ),
    ),
    'admin' => array(
        'suggestion' => array(
            'title'  => 'ارسال رسالة',
            'view'   => 'admin/suggestion',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),

    ),
    'supporter' => array(
        'rightsDuties' => array(
            'title'  => 'حقوق وواجبات الداعم',
            'view'   => 'supporter/rightsDuties',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),
        'contributions' => array(
            'title'  => 'شراء تكاليف سلع الخدمات',
            'view'   => 'supporter/contributions',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),
        'payments' => array(
            'title'  => 'المدفوعات',
            'view'   => 'supporter/payments',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),
        'suggestion' => array(
            'title'  => 'اقتراح جديد',
            'view'   => 'supporter/suggestion',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),
    ),
    'beneficiaries' => array(
        'title'  => 'ادارة المستفيدين',
        'view'   => 'beneficiaries',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/widgets.js',
                    '../../../app.js'
                ),
            ),
        ),

    ),
    'account' => array(
        'overview' => array(
            'title'  => 'معلومات المستخدم',
            'view'   => 'account/overview/overview',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),
        'services' => array(
            'title'  => 'قائمة الخدمات',
            'view'   => 'account/settings/services',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),

        'settings' => array(
            'beneficiarie' => array(
                'title'  => 'بيانات المستفيد',
                'view'   => 'account/settings/beneficiarie',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js',
                        ),

                    ),
                ),
            ),
            'supporter' => array(
                'title'  => 'بيانات الداعم',
                'view'   => 'account/settings/supporter',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js',
                        ),

                    ),
                ),
            ),
            'supporter' => array(
                'title'  => 'تأثيرات الداعم',
                'view'   => 'account/settings/supporter/influences',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js',
                        ),

                    ),
                ),
            ),
            'overview' => array(
                'title'  => 'المعلومات الشخصية',
                'view'   => 'account/settings/overview',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'skills' => array(
                'title'  => 'المهارات',
                'view'   => 'account/settings/skills',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'certificates' => array(
                'title'  => 'الشهادات',
                'view'   => 'account/settings/certificates',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'necessities' => array(
                'title'  => 'الاحتياجات',
                'view'   => 'account/settings/necessities',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'experiences' => array(
                'title'  => 'التجارب المهنية',
                'view'   => 'account/settings/experiences',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),

            'title'  => 'تعديل المعلومات الشخصية',
            'assets' => array(

                'custom' => array(
                    'js' => array(
                        'js/custom/account/settings/profile-details.js',
                        'js/custom/account/settings/signin-methods.js',
                        'js/custom/modals/two-factor-authentication.js',
                        '../../../app.js'
                    ),
                ),

            ),
        ),
    ),

    'users'         => array(
        'title' => 'User List',

        '*' => array(
            'title' => 'Show User',

            'edit' => array(
                'title' => 'Edit User',
            ),
        ),
    ),


    'test' => array(
        'title'  => 'تجربة',
        'view'   => 'admin/overview/index',
        'layout'      => array(
            'page-title' => array(
                'description' => false,
                'breadcrumb'  => true,
            ),
        ),
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/widgets.js',
                ),
            ),
        ),
    ),



);
