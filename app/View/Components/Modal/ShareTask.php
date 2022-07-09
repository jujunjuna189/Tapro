<?php

namespace App\View\Components\Modal;

use Illuminate\View\Component;

class ShareTask extends Component
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
        return view('components.modal.share-task');
    }
}
