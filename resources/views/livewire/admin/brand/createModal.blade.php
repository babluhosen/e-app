

<div>
  <!-- Modal add  -->
      <div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">Add Brand</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <form wire:submit.prevent="storebrand()">
                        <div class="modal-body">
                        <div class="row">
                                <div class="col-lg-12 mb-3">
                                <label>Name</label>
                                    <input type="text" wire:model.defer="brand_name" id="" class="form-control" placeholder="Enter Name"/>
                                    @error('brand_name')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label>Slug</label>
                                    <input type="text" wire:model.defer="slug" id="" class="form-control" placeholder="Enter slug"/>
                                    @error('slug')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                               
                                <div class="col-lg-12 mb-3">
                                <label>Status</label>
                                    <input type="checkbox" wire:model.defer="status" id="" />
                                </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                        </div>
                     </form>
                  </div>
               </div>
      </div>
    </div>         
            <!-- Modal  end-->
<div>
            <!-- Modal Update   -->
  <div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="exModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
         <h1 class="modal-title fs-5" id="exModalLabel">Update Brand</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form wire:submit.prevent="updateBrand">
            <div class="modal-body">
            <div class="row">
                    <div class="col-lg-12 mb-3">
                    <label>Name</label>
                        <input type="text" wire:model.defer="brand_name"  class="form-control" placeholder="Enter Name"/>
                        @error('brand_name')<small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label>Slug</label>
                        <input type="text" wire:model.defer="slug"   class="form-control" placeholder="Enter slug"/>
                        @error('slug')<small class="text-danger">{{$message}}</small>@enderror
                    </div>
                   
                    <div class="col-lg-12 mb-3">
                    <label>Status</label>
                        <input type="checkbox" wire:model.defer="status" />
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" wire:click="closeModal" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Update</button>
            </div>
         </form>
      </div>
   </div>
   </div>
</div>
  <!-- Modal  end-->