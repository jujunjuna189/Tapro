<?php

namespace App\View\Components;

use App\Models\GlobalModel;
use Illuminate\View\Component;

class CardTask extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $description;
    public $status;
    public $thumbnail;
    public $share;
    public $list;
    public $add;
    public $update;
    public $pin;

    public function __construct($title = '', $description = '', $status = '', $thumbnail = '', $share = [], $list = [], $add = false, $update = false, $pin = false)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->thumbnail = $thumbnail;
        $this->share = $share;
        $this->list = $list;
        // Access
        $this->add = $add;
        $this->update = $update;
        // ...
        $this->pin = $pin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['count_'] = 1;
        $data['status_text'] = GlobalModel::set_status_task($this->status);
        $data['status_color'] = GlobalModel::set_color_status_task($this->status);

        return view('components.card-task', $data);
    }
}
