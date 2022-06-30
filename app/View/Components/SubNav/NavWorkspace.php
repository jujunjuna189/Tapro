<?php

namespace App\View\Components\SubNav;

use Illuminate\View\Component;

class NavWorkspace extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $totalMember;

    public function __construct($totalMember)
    {
        $this->totalMember = $totalMember;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sub-nav.nav-workspace');
    }
}
