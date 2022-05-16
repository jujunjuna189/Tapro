<?php

namespace App\View\Components\EmptyPage;

use Illuminate\View\Component;

class EmptyPage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $image;
    public $title;
    public $subtitle;
    public $icon;
    public $buttonText;

    public function __construct($image, $title = '', $subtitle = '', $icon = '', $buttonText = '')
    {
        $this->image = $image;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->icon = $icon;
        $this->buttonText = $buttonText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.empty-page.empty-page');
    }
}
