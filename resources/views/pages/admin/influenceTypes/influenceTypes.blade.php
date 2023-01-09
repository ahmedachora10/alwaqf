<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    {{ theme()->getView('pages/admin/influenceTypes/_influenceTypes-list', array('class' => 'mb-5 mb-xl-10', 'info' => $info ,'influenceTypes'=>$influenceTypes)) }}


</x-base-layout>
