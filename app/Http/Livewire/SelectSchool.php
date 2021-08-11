<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SelectSchool extends Component
{
    public function render()
    {
        
        $schools = array(
            "School of Aerospace",
            "School of Agriculture",
            "School of Arts And Social Sciences",
            "School of Biological",
            "School of Business",
            "School of Education",
            "School of Information Sciences",
            "School of Engineering"

        );

        return view('livewire.select-school', ['schools' => $schools])->layout('layouts.base');
    }
}
