<?php

namespace App\View\Components\SubPage;

use Illuminate\View\Component;

class Setting extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $workspaceId;

    public function __construct($workspaceId)
    {
        $this->workspaceId = $workspaceId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sub-page.setting');
    }
}
