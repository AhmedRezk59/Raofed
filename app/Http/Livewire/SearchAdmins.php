<?php

namespace App\Http\Livewire;

use App\Models\Admin;
use Livewire\Component;

use Livewire\WithPagination;

class SearchAdmins extends Component
{
    use WithPagination;

    public $search = '';
    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1]
    ];
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.search-admins', [
            'admins' => Admin::query()
                ->when($this->search, function ($query) {
                    return $query->where(function ($q) {
                        return $q->where('name', 'like', "%{$this->search}%")
                            ->orWhere('email', 'like', "%{$this->search}%");
                    });
                })
                ->orderBy('id', 'desc')->paginate(8)
        ]);
    }
}
