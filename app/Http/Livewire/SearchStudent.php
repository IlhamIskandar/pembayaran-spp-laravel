<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Spp;

class SearchStudent extends Component
{
    public $searchKey;
    public $spp;
    protected $updatesQueryString;
    
    public function render()
    {
        $this->spp = Spp::where('nominal', 'like', '%'.$this->searchKey.'%')->get();
        // ->join('classes', 'students.id_class', '=', 'classes.id_class')->join('spps','students.id_spp', '=', 'spps.id_spp')
        return view('livewire.search-student');
    }
}
