@extends('layouts.admin')



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">HR</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">HR</a></li>

                    <li class="breadcrumb-item active">

                        Employees

                    </li>

                </ol>

            </div>

        </div>
    </div>
</div>
{{-- end breadcrubms --}}





{{-- content --}}
<div class="container page__container">
    <div class="page-section">

        <div class="col-lg-12 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">

                <div class="card dashboard-area-tabs p-relative o-hidden mb-0">

                    <div class="card-header p-0 nav">
                        <div class="row no-gutters" role="tablist" style="width: 100%;">


                            <!-- tab 1 -->
                            <div class="col-auto" style="width: 50%;">
                                <a href="#users_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                            <span class="h2 mb-0 mr-3">{{$users->count()}}</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Users</strong>
                                        <!-- <small class="card-subtitle text-50">Manage Packages</small> -->
                                    </span>
                                </a>
                            </div>



                            <!-- tab 2 -->
                            <div class="col-auto border-left border-right" style="width: 50%;">
                                <a href="#roles_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                            <span class="h2 mb-0 mr-3"> {{$roles->count()}} </span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Roles & Permissions</strong>
                                        <!-- <small class="card-subtitle text-50">Manage Meals</small> -->
                                    </span>
                                </a>
                            </div>






                        </div>
                    </div>
                    <!-- end card header -->


                    <!-- tabs content -->
                    <div class="card-body tab-content">

                        <!-- users Tap -->
                        <div class="tab-pane active text-70" id="users_tap">

                          <div class="card mb-lg-32pt p-4">
                            <div class="row card-group-row my-3">
                                <div class="col-sm-12">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal" data-target=".new-emp">New Employee</a>
                                </div>
                            </div>
                
                
                            <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date"
                                data-lists-sort-desc="true"
                                data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>
                
                                <table class="table mb-0 thead-border-top-0 table-nowrap">
                                    <thead>
                                        <tr>
                
                
                
                                            <th>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Name</a>
                                            </th>
                
                
                
                                            <th>Role</th>
                
                                            <th>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-phone">Phone</a>
                                            </th>
                
                                            <th>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Added</a>
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="clients">
                
                                      @foreach ($users as $user)
                                          
                                    
                
                                        <tr class="selected">
                
                
                
                                            <td>
                
                                                <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">
                
                                                        <img src="{{ asset('assets/admin/images/customers/default.jpg') }}" alt="Avatar"
                                                            class="avatar-img rounded-circle">
                
                                                    </div>
                                                    <div class="media-body">
                
                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">
                                                                {{$user->name}}</strong>
                                                            </p>
                                                            <small class="js-lists-values-email text-50"> {{$user->email}}</small>
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                            </td>
                
                
                
                                            <td>
                
                                                {{$user->role->name}}
                
                                            </td>
                
                                            <td>
                                                <small class="js-lists-values-phone text-50"> {{$user->phone}}</small>
                                            </td>
                
                                            <td>
                                                <small class="js-lists-values-date text-50"> {{$user->created_at}}</small>
                                            </td>
                                          <td>
                                            <a class="btn btn-sm btn-accent" data-toggle="modal"
                                            data-target=".edit-user-{{$user->id}}">
                                                    Edit
                                                </a>
                                          </td>
                                        </tr>
                
                                        @endforeach
                
                                    </tbody>
                                </table>
                            </div>
                
                            <div class="card-footer p-8pt">
                
                                <ul class="pagination justify-content-start pagination-xsm m-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true" class="material-icons">chevron_left</span>
                                            <span>Prev</span>
                                        </a>
                                    </li>
                                    <li class="page-item dropdown">
                                        <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#" aria-label="Page">
                                            <span>1</span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="" class="dropdown-item active">1</a>
                                            <a href="" class="dropdown-item">2</a>
                                            <a href="" class="dropdown-item">3</a>
                                            <a href="" class="dropdown-item">4</a>
                                            <a href="" class="dropdown-item">5</a>
                                        </div>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span>Next</span>
                                            <span aria-hidden="true" class="material-icons">chevron_right</span>
                                        </a>
                                    </li>
                                </ul>
                
                            </div>
                          
                        </div>


                            <!-- table row -->
                            


                        </div>
                        <!-- end users tab -->


                        <div class="tab-pane text-70" id="roles_tap">

                         




                            <!-- table row -->
                            <div class="card mb-lg-32pt p-4">
                                <div class="row card-group-row my-3">
                                    <div class="col-sm-12">
                                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal" data-target=".new-role">New Role</a>
                                    </div>
                                </div>
                    
                    
                                <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date"
                                    data-lists-sort-desc="true"
                                    data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>
                    
                                    <table class="table mb-0 thead-border-top-0 table-nowrap">
                                        <thead>
                                            <tr>
                    
                                                
                                                <th>
                                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Name</a>
                                                </th>
                    
                                                <th>
                                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Permissions</a>
                                                </th>
                    
                    
                    
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list" id="clients">
                    
                                          @foreach ($roles as $role)
                                              
                                        
                    
                                            <tr class="selected">
                    
                    
                    
                    
                                                <td>
                    
                                                    {{$role->name}}
                    
                                                </td>
                    
                                                <td>
                                                    
                                                        @foreach ($role->permissions->where('access',1) as $permission)
                                                        {{$permission->modulename}} | 
                                                        @endforeach
                                                      
                                                </td>
                    
                                               
                                                <td class="text-center">
                                                    <a href="{{route('admin.hr.delete.role',[$role->id])}}" class="ml-3"><i
                                                            class="fas fa-trash text-danger font-16"></i></a>
                                                </td>

                                            </tr>
                    
                                            @endforeach
                    
                                        </tbody>
                                    </table>
                                </div>
                    
                                <div class="card-footer p-8pt">
                    
                                    <ul class="pagination justify-content-start pagination-xsm m-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true" class="material-icons">chevron_left</span>
                                                <span>Prev</span>
                                            </a>
                                        </li>
                                        <li class="page-item dropdown">
                                            <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#" aria-label="Page">
                                                <span>1</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="" class="dropdown-item active">1</a>
                                                <a href="" class="dropdown-item">2</a>
                                                <a href="" class="dropdown-item">3</a>
                                                <a href="" class="dropdown-item">4</a>
                                                <a href="" class="dropdown-item">5</a>
                                            </div>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span>Next</span>
                                                <span aria-hidden="true" class="material-icons">chevron_right</span>
                                            </a>
                                        </li>
                                    </ul>
                    
                                </div>
                              
                            </div>


                        </div>
                        <!-- end one order tab -->

                    </div>

                </div>
            </div>
        </div>

        

    </div>
</div>
{{-- end content --}}





@endsection
{{-- end section --}}







@section('scripts')

{{-- jquery --}}
<script src="{{ asset('assets/admin/vendor/jquery.min.js') }}"></script>


@endsection




{{-- modals section --}}
@section('modals')


<div class="modal fade new-emp" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="{{route('admin.hr.create.user')}}" method="POST">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

      
            <div class="modal-body">
                <div class="list-group-item" >
                    <div class="form-group row align-items-center mb-0">
                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Name </label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Phone </label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">Role </label>
                            <select id="custom-select2" name="role" class="form-control custom-select">
                                @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="form-group col-sm-4">
                            <label for="file" class="form-label">Email </label>
                            <input type="email" name="email" class="form-control">

                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">Password </label>
                            <input type="password" name="password" class="form-control">
                        </div>

                              <!-- city -->
                              <div class="form-group col-4">
                                <label class="form-label">City</label>
                                <select class="form-control custom-select city-select-1" name="city">
                                        
                                    <option selected="" class="d-none"></option>
    
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
    
                                </select>
                            </div>
    
                            <!-- district -->
                            <div class="form-group col-4">
                                <label class="form-label">District</label>
    
                                
                                <select id="select02" name="districts[]" multiple class="form-control district-select-1" style="height:90px;">
                                    
                                    @foreach ($districts as $district)
                                        <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
    
                                </select>
                            </div>




                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary" >Save</button>
               
            </div>
           
        </div>
    </form>
    </div>
</div>

@foreach ($users as $user)


<div class="modal fade edit-user-{{$user->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="{{route('admin.hr.edit.user')}}" method="POST">
            @csrf
        <input type="hidden" value="{{$user->id}}" name="id">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

      
            <div class="modal-body">
                <div class="list-group-item" >
                    <div class="form-group row align-items-center mb-0">
                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Name </label>
                        <input type="text" value="{{$user->name}}" name="name" class="form-control">
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Phone </label>
                            <input type="text" value="{{$user->phone}}" name="phone" class="form-control">
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">Role </label>
                            <select id="custom-select2" name="role" class="form-control custom-select">
                                <option value="{{$user->role_id}}">{{$user->role->name}}</option>
                                @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="form-group col-sm-4">
                            <label for="file" class="form-label">Email </label>
                        <input type="email" value="{{$user->email}}" name="email" class="form-control">

                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">Password </label>
                            <input type="password"  name="password" class="form-control">
                        </div>

                            



                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary" >Save</button>
               
            </div>
           
        </div>
    </form>
    </div>
</div>
    
@endforeach

{{-- end of edit user --}}

<div class="modal fade new-role" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        
        <form action="{{route('admin.hr.create.role')}}" method="POST">
            @csrf

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Chif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    
            <div class="modal-body">
                <div class="row">
                
                    <div class="col-12 mt-2"> 
    
                        
                        <div class="row mb-4">
                            <div class="col-sm-4">
                                <label id="add-perm-title">Role Name</label>
                                <input class="form-control" name="role_name" type="text" id="example-text-input" required="">
                            </div>
                        </div>
                        
                        
                    
    
    
                  <div class="table-responsive">
                    <table class="table table-bordered mb-0 table-centered">
                        <thead>
                        <tr>
    
                            <th id="add-perm-module">Module</th>
                            <th id="add-perm-view">Access</th>
    
                      </tr>
                        </thead>
                        <tbody>
                        <tr>
                           
                            <td id="add-perm-home">Dashboard</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="1" id="1">
                            <label class="custom-control-label text-muted" for="1"></label>
                        </div> 
                            </td>
                           
                          
                        </tr>
    
                        <tr>
                            <td id="add-perm-client">Menu Managment</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="2" id="2">
                            <label class="custom-control-label text-muted" for="2"></label>
                        </div> 
                            </td>
                      
      
                          
                          
                        </tr>
    
                        <tr>
                            <td id="add-perm-search">New Customers</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="3" id="3">
                            <label class="custom-control-label text-muted" for="3"></label>
                        </div> 
                            </td>
      
                          
                        </tr>
    
                        <tr>
                             
                            <td id="add-perm-cm">All Customers</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="4" id="4">
                            <label class="custom-control-label text-muted" for="4"></label>
                        </div> 
                            </td>
      
                          
                        </tr>
                        <tr>
                             
                            <td id="add-perm-tasks">Leads</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="5" id="5">
                            <label class="custom-control-label text-muted" for="5"></label>
                        </div> 
                            </td>
      
                          
                        </tr>
                        <tr>
                             
                            <td id="add-perm-reports">Orders</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="6" id="6">
                            <label class="custom-control-label text-muted" for="6"></label>
                        </div> 
                            </td>
      
                          
                        </tr>
                       
                        <tr>
                             
                            <td id="add-perm-chats">Calculation</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="7" id="7">
                            <label class="custom-control-label text-muted" for="7"></label>
                        </div> 
                            </td>
      
                          
                        </tr>
                        <tr>
                             
                            <td id="add-perm-hr">Kitchen</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="8" id="8">
                            <label class="custom-control-label text-muted" for="8"></label>
                        </div> 
                            </td>
      
                          
                        </tr>
    
                        <tr>
                             
                            <td id="add-perm-settings"> Inventory</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="9" id="9">
                            <label class="custom-control-label text-muted" for="9"></label>
                        </div> 
                            </td>
      
                          
                        </tr>

                        <tr>
                             
                            <td id="add-perm-settings"> Store</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="10" id="10">
                            <label class="custom-control-label text-muted" for="10"></label>
                        </div> 
                            </td>
      
                          
                        </tr>

                        <tr>
                             
                            <td id="add-perm-settings"> Delivery Managment</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="11" id="11">
                            <label class="custom-control-label text-muted" for="11"></label>
                        </div> 
                            </td>
      
                          
                        </tr>

                        <tr>
                             
                            <td id="add-perm-settings"> Financing</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="12" id="12">
                            <label class="custom-control-label text-muted" for="12"></label>
                        </div> 
                            </td>
      
                          
                        </tr>

                        <tr>
                             
                            <td id="add-perm-settings"> Reports</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="13" id="13">
                            <label class="custom-control-label text-muted" for="13"></label>
                        </div> 
                            </td>
      
                          
                        </tr>

                        <tr>
                             
                            <td id="add-perm-settings"> HR</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="14" id="14">
                            <label class="custom-control-label text-muted" for="14"></label>
                        </div> 
                            </td>
      
                          
                        </tr>

                        <tr>
                             
                            <td id="add-perm-settings"> Settings</td>
                            <td> 
                            <div class="custom-control custom-switch switch-success">
                            <input type="checkbox" class="custom-control-input" value="1" name="15" id="15">
                            <label class="custom-control-label text-muted" for="15"></label>
                        </div> 
                            </td>
      
                          
                        </tr>
                        
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
    
                </div>
    
                   
                      
    
                         </div> 
    
    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
                <button type="submit" class="btn btn-primary" >Save</button>
               
            </div>
           
        </div>
    </form>

    </div>
    </div>
    {{-- end modals --}}


{{-- modals --}}






@endsection