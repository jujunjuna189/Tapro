<?php

namespace App\View\Components\ProjectPage;

use Illuminate\View\Component;

class Member extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $result;

    public function __construct($result)
    {
        $this->result = $result;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project-page.member');
    }
}
