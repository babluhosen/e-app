<div class="row">
            <div class="col-md-12 grid-margin">
               @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
               
               @endif
                <div class="card">
                   <div class="card-header">
                    <h3>Category
                    <a href="{{url('admin/category2/create2')}}" title="Add Category" class=" bg-info btn-sm float-end"><i class="fas fa-plus"></i></a>
                    </h3>
                   </div>
                   <div class="card-body">
                    <table class=" datatable table table-bordered  ">
                     <thead>
                     <tr>
                           <th class="control-lable text-center align-middle">ID</th>
                           <th class="control-lable text-center align-middle">Name</th>
                           <th class="control-lable text-center align-middle">Color</th>
                           <th class="control-lable text-center align-middle">Status</th>
                           <th class="control-lable text-center align-middle">Action</th>
                        </tr>
                     </thead>
                        <tbody>
                         @foreach($categories2 as $cat2)
                         <tr>
                           <td>{{$cat2->id}}</td>
                           <td>{{$cat2->Name}}</td>
                           <td>{{$cat2->Color}}</td>
                           <td>{{$cat2->status=='1'?'Inactive':'Active'}}</td>
                           <td class="text-center">
                              
                              <a class=" text-info" style="text-decoration: none;" title="Edit"href="{{url('admin/category2/'.$cat2->id.'/edit')}}"><i class="fas fa-edit"></i>&nbsp;Edit</a>&nbsp;
                              <a class=" text-danger" style="text-decoration: none;" title="Delete"href="#"><i class="fas fa-trash"></i>&nbsp;Delete</a>&nbsp;
                              <a class=" text-warning" style="text-decoration: none;" title="Update"href="#"><i class="fas fa-refresh"></i>&nbsp;Update</a>&nbsp;
                             
                           </td>

                         </tr>
                         @endforeach
                        </tbody>
                    </table>
                    <br>
                    <div>
                     {{$categories2->links()}}
                    </div>
                   </div>
                </div>
            </div>
            
</div>