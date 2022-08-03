<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class SearchJobs extends Component
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
        return view('livewire.search-jobs', [
            'jobs' => Job::query()
                ->when($this->search, function ($query) {
                    return $query->where(function ($q) {
                        return $q->where('title', 'like', "%{$this->search}%")
                        ->orWhere('desc', 'like', "%{$this->search}%")
                        ->orWhere('location', 'like', "%{$this->search}%")
                        ->orWhere('time', 'like', "%{$this->search}%");
                    });
                })
                ->orderBy('id', 'desc')->paginate(8)
        ]);
    }
}
