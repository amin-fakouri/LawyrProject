<?php

namespace App\Livewire\PostElec;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PostElec extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.post-elec.post-elec');
    }
}
