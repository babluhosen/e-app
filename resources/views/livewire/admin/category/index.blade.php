<div class="row">
            <div class="col-md-12 grid-margin">
               @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
               
               @endif
                <div class="card">
                   <div class="card-header">
                    <h3>Category
                    <a href="{{url('admin/category/create')}}" title="Add Category" class=" bg-info btn-sm float-end"><i class="fas fa-plus"></i></a>
                    </h3>
                   </div>
                   <div class="card-body">
                    <table class=" datatable table table-bordered  ">
                     <thead>
                     <tr>
                           <th class="control-lable text-center align-middle">ID</th>
                           <th class="control-lable text-center align-middle">Name</th>
                           <th class="control-lable text-center align-middle">Description</th>
                           <th class="control-lable text-center align-middle">Status</th>
                           <th class="control-lable text-center align-middle">Action</th>
                        </tr>
                     </thead>
                        <tbody>
                         @foreach($categories as $cat)
                         <tr>
                           <td>{{$cat->id}}</td>
                           <td>{{$cat->name}}</td>
                           <td>{{$cat->description}}</td>
                           <td>{{$cat->status=='1'?'Inactive':'Active'}}</td>
                           <td class="text-center" >
                              
                              <a class=" text-info" style="text-decoration: none;" title="Edit"href="{{url('admin/category/'.$cat->id.'/edit')}}"><i class="fas fa-edit"></i>&nbsp;Edit</a>&nbsp;
                              <a class=" text-danger" style="text-decoration: none;" title="Delete"href="#" wire:click="deleteCategory({{$cat->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fas fa-trash"></i>&nbsp;Delete</a>&nbsp;
                              
                             
                           </td>

                         </tr>
                         @endforeach
                        </tbody>
                    </table>
                    <br>
                    <div>
                     {{$categories->links()}}
                    </div>
                   </div>
                </div>
            </div>
            
            <!-- Modal -->
            <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">Do you want to delete?</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <form wire:submit.prevent="destroyCategory">
                        <div class="modal-body">
                        <h5>Data will be deleting </h5>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                        </div>
                     </form>
                  </div>
               </div>
               </div>
                
            <!-- Modal  end-->
</div>
<!--script connect with live wire -->
@push('script')
<script>
   window.addEventListener('close-modal', event=>{
      $('#deleteModal').modal('hide');
   });
</script>
@endpush