<?php

namespace App\Livewire\Kid;

use App\Models\Kid;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Computed]
    public function kids()
    {
        return Kid::query()
            ->paginate(5);
    }

    public function render(): view
    {
        return view('livewire.kid.index');
    }
}
