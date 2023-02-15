<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithPagination;

class Hasil extends Component
{
    use Actions;
    use WithPagination;

    public $search;
    public function render()
    {
        return view('livewire.hasil',[
            'listUser' =>  User::with([
                'answers',
            ])
                ->withCount([
                    'answers as benar' => fn ($q)
                    => $q->whereIsCorrect(true),
                    'answers as salah' => fn ($q)
                    => $q->whereIsCorrect(false),
                ])
                ->when($this->search, fn ($q) => $q->where('name', 'like', '%' . $this->search . '%'))
                ->whereSudahTest(true)
                ->orderBy('benar', 'desc')
                ->paginate(10)
        ]);
    }
}
