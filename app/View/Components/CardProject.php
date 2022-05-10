<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardProject extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $description;
    public $share;
    public $progress;
    public $task;
    public $deadline;

    public function __construct($title = '', $description = '', $share = [], $progress = 0, $task = 0, $deadline = 0)
    {
        $this->title = $title;
        $this->description = $description;
        $this->share = $share;
        $this->progress = $progress;
        $this->task = $task;
        $this->deadline = $deadline;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-project');
    }
}
