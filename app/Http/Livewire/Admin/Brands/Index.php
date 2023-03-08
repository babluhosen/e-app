<?php

namespace App\Http\Livewire\Admin\Brands;
use Illuminate\Support\Str;
use App\Models\Brands;
use Livewire\Component;
use Livewire\WithPagination;
class Index extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $brand_name, $slug, $status, $brand_id;

     public function rules()
    {
        return[
            'brand_name'=>'required|string',
            'slug'=>'required|string',
            'status'=>'nullable'
        ];
    }
    public function resetInput()
    {
        $this->brand_name=null;
        $this->slug=null;
        $this->status=null;
    }
   public function storebrand()
   {
      $validatedData=$this->validate();
      Brands::create([
        'brand_name'=>$this->brand_name,
        'slug'=>Str::slug($this->slug),
        'status'=>$this->status==true?'1':'0',
      ]);
      session()->flash('message','Category Brand data has been Added');
      $this->dispatchBrowserEvent('close-modal');
      $this->resetInput();
   }
   public function editBrnad(int $brand_id)
   {
    $this->$brand_id=$brand_id;//update jonno code//
    //$b hosche forelse peramter name ($var as $b)//
    $b=Brands::findOrFail($brand_id);
    $this->brand_name=$b->brand_name;
    $this->slug=$b->slug;
    $this->status=$b->status;

   }
   public function updateBrand()
   {
    $validatedData=$this->validate();
    Brands::findOrFail($this->$brand_id)->update([
      'brand_name'=>$this->brand_name,
      'slug'=>Str::slug($this->slug),
      'status'=>$this->status==true?'1':'0',
    ]);
    session()->flash('message','Category Brand data has been Updated');
    $this->dispatchBrowserEvent('close-modal');
    $this->resetInput();
   }
    public function render()
    {
        $categorybrands=Brands::orderBy('id','ASC')->paginate(5);// $categorybrands datatable name...index tr vitor use hobe//
        return view('livewire.admin.brand.index',['categorybrands'=>$categorybrands])->extends('layouts.admin')->section('content');

      
        
    }


}
