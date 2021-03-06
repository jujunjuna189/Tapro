<?php

namespace App\View\Components\SubPage;

use Illuminate\View\Component;

class Member extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $workspaceId;
    public $result;

    public function __construct($workspaceId, $result)
    {
        $this->workspaceId = $workspaceId;
        $this->result = $result;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sub-page.member');
    }
}
