<?php

namespace App\View\Components\Modal;

use Illuminate\View\Component;

class InviteMember extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $result;
    
    public function __construct()
    {
        $this->result = $this->memberData();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal.invite-member');
    }

    private function memberData()
    {
        $member = [
            (object)[
                'name' => 'Ujun Junaedi',
            ],
            (object)[
                'name' => 'Ragil',
            ],
            (object)[
                'name' => 'Dobit Shadad',
            ],
            (object)[
                'name' => 'Agung',
            ],
        ];

        return $member;
    }
}
