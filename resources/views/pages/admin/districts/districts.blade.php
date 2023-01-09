<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    {{ theme()->getView('pages/admin/districts/_districts-list', array('class' => 'mb-5 mb-xl-10', 'info' => $info ,'districts'=>$districts)) }}


</x-base-layout>
