<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class StatusFilters extends Component
{
    public $status = 'All';

    protected $queryString = [
        'status',
    ];

    public function mount()
    {
        if (Route::currentRouteName() === 'idea.show') {
            $this->status = null;
            $this->queryString = [];
        }
    }
    
    public function setStatus($newStatus)
    {
        $this->status = $newStatus;

        // dd(Route::currentRouteName());

        // if ($this->getPreviousRouteName() === 'idea.show') {
        return redirect()->route('ideas.index', [
                'status' => $this->status,
            ]);
        // }
    }

    public function render()
    {
        return view('livewire.status-filters');
    }

    public function getPreviousRouteName()
    {
        return app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
    }
}
