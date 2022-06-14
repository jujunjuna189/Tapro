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

    public function __construct($id, $title, $completed = false, $deleted = false)
    {
        $this->id = $id;
        $this->title = $title;
        $this->completed = $completed;
        $this->deleted = $deleted;
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
