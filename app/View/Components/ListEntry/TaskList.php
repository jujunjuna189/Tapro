<?php

namespace App\View\Components\ListEntry;

use Illuminate\View\Component;

class TaskList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $id;
    public $title;
    public $completed;
    public $deleted;
    public $share;
    public $onlyView;

    public function __construct($id, $title, $completed = false, $deleted = false, $share = [], $onlyView = false)
    {
        $this->id = $id;
        $this->title = $title;
        $this->completed = $completed;
        $this->deleted = $deleted;
        $this->share = $share;
        $this->onlyView = $onlyView;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.list-entry.task-list');
    }
}
