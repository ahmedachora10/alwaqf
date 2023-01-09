<?php
return array(
    // Product
    'product' => array(
        'name'        => 'وقف الخيرات',
        'description' => 'وقف تنموي فئوي تأسسس عام 2014م بمكة المكرمة',
        'demos'       => array(
            'demo1' => array(
                'title'       => 'Demo 1',
                'description' => 'Default Dashboard',
                'published'   => true,
                'thumbnail'   => 'demos/demo1.png',
            ),

            'demo8' => array(
                'title'       => 'Demo 8',
                'description' => 'Core Dashboard',
                'published'   => true,
                'thumbnail'   => 'demos/demo8.png',
            ),


        ),
    ),

    'use_demo' => false,

    // Meta
    'meta'    => array(
        'title'       => 'وقف الخيرات',
        'description' => 'وقف تنموي فئوي تأسس عام 2014م بمكة المكرمة',
        'keywords'    => 'أوقاف، مكة، وقف الخيرات، ',
    ),

    // General
    'general' => array(
        'website'             => 'https://alkhirat.org',
        'about'               => 'https://alkhirat.org',
        'contact'             => 'mailto:info@alkhirat.org',
        'social-accounts'     => array(
            array(
                'name' => 'Youtube', 'url' => 'https://www.youtube.com/c/KeenThemesTuts/videos', 'logo' => 'svg/social-logos/youtube.svg', "class" => "h-20px",
            ),

            array(
                'name' => 'Twitter', 'url' => 'https://twitter.com/keenthemes', 'logo' => 'svg/social-logos/twitter.svg', "class" => "h-20px",
            ),
            array(
                'name' => 'Instagram', 'url' => 'https://www.instagram.com/keenthemes', 'logo' => 'svg/social-logos/instagram.svg', "class" => "h-20px",
            ),
        ),
    ),

    // Layout
    'layout'  => array(
        // Docs
        'docs'          => array(
            'logo-path'  => array(
                'default' => 'logos/logo-1.svg',
                'dark'    => 'logos/logo-1-dark.svg',
            ),
            'logo-class' => 'h-25px',
        ),

        // Illustration
        'illustrations' => array(
            'set' => 'sketchy-1',
        ),

        // Engage
//        'engage'        => array(
//            'demos'    => array(
//                'enabled'   => true,
//                'direction' => 'end',
//            ),
//            'explore'  => array(
//                'enabled'   => true,
//                'direction' => 'end',
//            ),
//            'help'     => array(
//                'enabled'   => true,
//                'direction' => 'end',
//            ),
//            'purchase' => array(
//                'enabled' => false,
//            ),
//        ),
    ),

);