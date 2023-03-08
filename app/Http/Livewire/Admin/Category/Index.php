<?php

namespace App\Http\Livewire\Admin\Category;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $cagetory_id;
    public function deleteCategory($cagetory_id)
    {
       
       $this->category_id=$cagetory_id;
    }
    public function destroyCategory()
    {
        $category=Category::find($this->category_id);
        $path='/public/uploads/category/'.$category->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $category->delete();
        session()->flash('message','Category data has been Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $categories=Category::orderBy('id','ASC')->paginate(5);
        return view('livewire.admin.category.index',['categories'=>$categories]);
    }
}
