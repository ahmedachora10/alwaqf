<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    {{ theme()->getView('pages/account/skills/_skill-list', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}


</x-base-layout>
