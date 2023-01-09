<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    {{ theme()->getView('pages/admin/organizations/_organizations-list', array('class' => 'mb-5 mb-xl-10', 'info' => $info ,'organizations'=>$organizations)) }}


</x-base-layout>
