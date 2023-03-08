<?php

namespace App\Http\Livewire\Admin\Category2;

use App\Models\Category2;
use Livewire\Component;
use Livewire\WithPagination;

class Index2 extends Component
{
 
        use WithPagination;
        protected $paginationTheme='bootstrap';
        public function render()
        {
            $categories2=Category2::orderBy('id','ASC')->paginate(5);
            return view('livewire.admin.category2.index2',['categories2'=>$categories2]);
        }
}
