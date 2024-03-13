<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Banner;
use Carbon\Carbon;

class HomepageSlider extends Component
{
    public $banners;

    public function mount()
    {
        $this->banners = Banner::where(function ($query) {
                          $query->whereNull('schedule_time')->orWhere('schedule_time', '<=', now());
                         })->where('is_visible', 1)->orderBy('priority', 'asc')->get();

    }

    public function render()
    {
        return view('livewire.homepage-slider');
    }
}
