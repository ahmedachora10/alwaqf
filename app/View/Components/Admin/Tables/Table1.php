<?php

namespace App\View\Components\Admin\Tables;

use Illuminate\View\Component;

class Table1 extends Component
{
    public $title;
    public $columns;
    public $userCount;
    public $buttonName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = '', $columns = [], $userCount = 0, $buttonName = '')
    {
        $this->title = $title;
        $this->columns = $columns;
        $this->userCount = $userCount;
        $this->buttonName = $buttonName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.tables.table1');
    }
}
