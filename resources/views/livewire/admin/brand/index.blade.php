
 @include('livewire.admin.brand.createModal')
 <div class="row">
            <div class="col-md-12 grid-margin">
               @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
               
               @endif
                <div class="card">
                   <div class="card-header">
                    <h3>Category Brand
                    <a href="#" title="Add Brand" data-bs-toggle="modal" data-bs-target="#addBrandModal" class=" bg-info btn-sm float-end"><i class="fas fa-plus"></i></a>
                    </h3>
                   </div>
                   <div class="card-body">
                    <table class=" datatable table table-bordered  ">
                     <thead>
                     <tr>
                           <th class="control-lable text-center align-middle">ID</th>
                           <th class="control-lable text-center align-middle">Brand Name</th>
                           <th class="control-lable text-center align-middle">Slug</th>
                           <th class="control-lable text-center align-middle">Status</th>
                           <th class="control-lable text-center align-middle">Action</th>
                        </tr>
                     </thead>
                       <tbody>
                     @forelse ($categorybrands as $b)
                         <tr>
                           <td>{{$b->id}}</td>
                           <td>{{$b->brand_name}}</td>
                           <td>{{$b->slug}}</td>
                           <td>{{$b->status=='1'?'Inactive':'Active'}}</td>
                          <td class="text-center">
                           <a class=" text-info" style="text-decoration: none;" title="Edit" href="#" wire:click="editBrnad({{$b->id}})" data-bs-toggle="modal" data-bs-target="#updateBrandModal"><i class="fas fa-edit"></i>&nbsp;Edit</a>&nbsp;
                           <a class=" text-danger" style="text-decoration: none;" title="Delete" href="#" ><i class="fas fa-trash"></i>&nbsp;Delete</a>&nbsp;
                          </td>
                           
                         </tr>
                     @empty
                         <tr>
                           <td colspan="5">no found </td>
                         </tr>
                     @endforelse
                       
                      </tbody>
                    </table>
                    <br>
                    <div>
                     {{$categorybrands->links()}}
                    </div>
                   </div>
                </div>
            </div>
            
           
                
         
</div>
@push('script')
<script>
   window.addEventListener('close-modal', event=>{
      $('#addBrandModal').modal('hide');
      $('#updateBrandModal').modal('hide');
   });
</script>
@endpush