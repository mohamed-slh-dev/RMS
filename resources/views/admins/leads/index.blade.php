@extends('layouts.admin')



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Leads</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Lead</a></li>



                </ol>

            </div>
        </div>

    </div>
</div>
{{-- end breadcrubms --}}





{{-- content --}}
<div class="container page__container">
    <div class="page-section">

        <div class="card dashboard-area-tabs p-relative o-hidden mb-0">

            <div class="card-header p-0 nav">
            <div class="row no-gutters" role="tablist" style="width: 100%;">


                <!-- tab 1 -->
                <div class="col-auto" style="width: 50%;">
                    <a href="#leads_tap" data-toggle="tab" role="tab" aria-selected="false"
                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                <span class="h2 mb-0 mr-3">{{$leads->count()}}</span>
                        <span class="flex d-flex flex-column">
                            <strong class="card-title">Leads</strong>
                            <small class="card-subtitle text-50">Manage All leads</small> 
                        </span>
                    </a>
                </div>



                <!-- tab 2 -->
                <div class="col-auto border-left border-right" style="width: 50%;">
                    <a href="#source_tap" data-toggle="tab" role="tab" aria-selected="false"
                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                <span class="h2 mb-0 mr-3"> {{$sources->count()}} </span>
                        <span class="flex d-flex flex-column">
                            <strong class="card-title">Source</strong>
                            <small class="card-subtitle text-50">Add New Source Options</small> 
                        </span>
                    </a>
                </div>






            </div>
        </div>
        <!-- end card header -->

         <!-- tabs content -->
         <div class="card-body tab-content">

             <!-- leads Tap -->
             <div class="tab-pane active text-70" id="leads_tap">

                <div class="row">
                    <div class="col">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-info mt-2">{{ $leads->count() }}</h3>
                                <span style="font-weight: bold;">Total Leads</span>
                            </div>
                        </div>
                    </div>
        
                    <div class="col">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-success mt-2">{{ $leads->where('status', 'converted')->count() }}</h3>
                                <span style="font-weight: bold;">Converted</span>
                            </div>
                        </div>
                    </div>
        
        
                    
        
                    <div class="col">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-warning mt-2">{{ $leads->where('status', 'pending')->count() }}</h3>
                                <span style="font-weight: bold;">Pending</span>
        
                            </div>
                        </div>
                    </div>
        
        
                    <div class="col">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-danger mt-2">{{ $leads->where('status', 'canceled')->count() }}</h3>
                                <span style="font-weight: bold;">Canceled</span>
                    
                            </div>
                        </div>
                    </div>
        
        
                </div>

           

             <div class="card mb-lg-32pt p-4">
                <div class="col-lg-12">
                    <div class="client-card">
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-12 px-0">
                                    <form action="{{ route('admin.filterLeads') }}" method="post">
                                        @csrf
                                        <div class="row form-row">
    
                                            <div class="col-sm-3 ">
                                                <div class="form-group row text-left">
                                                    <label for="example-text-input"
                                                        class="col-sm-4 col-form-label pr-0">Customer</label>
                                                    <div class="col-sm-8 pl-0">
                                                        <input type="text" class="form-control" name="name">
                                                    </div>
                                                </div>
    
                                            </div>
    
                                          
                                            <div class="col-sm-3 ">
                                                <div class="form-group row text-left">
                                                    <label for="example-text-input" class="col-sm-4 col-form-label pr-0">Phone</label>
                                                    <div class="col-sm-8 pl-0">
                                                        <input type="text" class="form-control" name="phone" id="">
                                                    </div>
                                                </div>
                                            
                                            </div>

    
                                            <div class="col-sm-3">
                                                <div class="form-group row text-left">
                                                    <label for="example-text-input" class="col-sm-4 col-form-label pr-0">Follow
                                                        Up</label>
                                                    <div class="col-sm-8 pl-0">
                                                        <input type="date" class="form-control" name="follow-up">
                                                    </div>
                                                </div>
    
                                            </div>



                                            <div class="col-sm-3">
                                                <div class="form-group row text-left">
                                                    <label for="example-text-input" class="col-sm-4 col-form-label pr-0">City</label>
                                                    <div class="col-sm-8 pl-0">
                                                        <select class="form-control custom-select city-select-2" name="city">
                                                        
                                                            <option selected="" class="d-none"></option>
                                                        
                                                            @foreach ($cities as $city)
                                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                            @endforeach
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                            </div>


                                            <div class="col-sm-3 ">
                                                <div class="form-group row text-left">
                                                    <label for="example-text-input" class="col-sm-4 col-form-label pr-0">District</label>
                                                    <div class="col-sm-8 pl-0">
                                                        <select name="district" class="form-control custom-select district-select-2">
                                                            <option selected="" class="d-none"></option>

                                                            @foreach ($districts as $district)
                                                            <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">{{ $district->name }}</option>
                                                            @endforeach
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group row text-left">
                                                    <label for="example-text-input" class="col-sm-4 col-form-label pr-0">Manager</label>
                                                    <div class="col-sm-8 pl-0">
                                                        <select class="custom-select " name="manager">

                                                            <option value="" selected=""></option>
                                                            @foreach ($users as $user)
                                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group row text-left">
                                                    <label for="example-text-input"
                                                        class="col-sm-4 col-form-label pr-0">Status</label>
                                                    <div class="col-sm-8 pl-0">
                                                        <select class="custom-select " name="status">
                                                            <option value="pending">Pending</option>
                                                            <option value="converted">Converted</option>
                                                            <option value="lost">Lost</option>
                                                        </select>
                                                    </div>
                                                </div>
    
                                            </div>

    
                                            <div class="col-sm-12 text-center">
                                                <button class="btn btn-outline-success waves-effect waves-light"> search
                                                </button>
                                            </div>
    
    
                                        </div>
    
                                    </form>
                                    {{-- end form --}}
                                </div>
    
    
                            </div>
    
                        </div>
                    </div>
                </div>
                <div class="row card-group-row my-3">
                    <div class="col-sm-12">
                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal" data-target=".new-lead">New
                            Lead</a>
                    </div>
                </div>
    
    
                <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date"
                data-lists-sort-desc="true"
                data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>

                <table class="table mb-0 thead-border-top-0 table-nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>District</th>
                            <th>Account Manager</th>
                            <th>Note</th>
                            <th>View</th>
                            <th>Follow Up</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($leads as $lead)
                            
                        <tr>

                            <td>{{ $lead->name }}</td>


                            <td>{{ $lead->phone }}</td>

                            <td>{{ $lead->city->name }}</td>

                            <td>{{ $lead->district->name }}</td>
                            <td>{{ $lead->manager->name }}</td>

                            <td>{{ $lead->note }}</td>
                            
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-accent px-4 py-1" data-toggle="modal" data-target=".view-lead-{{ $lead->id }}">
                                    View
                                </button>
                            </td>

                            {{-- view follow ups --}}
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-accent px-4 py-1" data-toggle="modal" data-target=".follow-up-{{ $lead->id }}">
                                    View
                                </button>
                            </td>
                            

                            {{-- status --}}
                            <td>
                                @if ($lead->status == "converted")
                                    <strong>Converted</strong>
                                    <span class="indicator-line rounded bg-success mt-1"></span>

                                @elseif ($lead->status == "lost")
                                    <strong>Lost</strong>
                                    <span class="indicator-line rounded bg-danger mt-1"></span>

                                @else

                                    <strong>Pending</strong>
                                    <span class="indicator-line rounded bg-warning mt-1"></span>

                                @endif
                                
                            </td>

                            

                            <td class="text-center">
                              
                               
 
                                 <a href="{{ route('admin.leads.converted', [$lead->id]) }}" class="btn btn-sm btn-success mx-2">
                                    Converted
                                 </a>

                                 <a href="{{ route('admin.leads.lost', [$lead->id]) }}" class=" btn btn-sm btn-danger mx-2">
                                    Lost
                                 </a>
                            </td>
                        </tr>

                        @endforeach
                        {{-- end foreach --}}
                    </tbody>
                </table>
            </div>
    
                {{-- <div class="card-footer p-8pt">
    
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
    
                </div> --}}
    
            </div>


         </div>

          <!-- source Tap -->
          <div class="tab-pane text-70" id="source_tap">

          
                <!-- button row -->
       <div class="row card-group-row mb-3">


           <!-- add timing button -->
           <div class="col-sm-12 text-left mt-0 mb-2">
               <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                   data-target=".new-source"><i class="fa fa-plus-circle mr-2"></i>New Source</a>
           </div>


       </div>
       <!-- end row -->

       <div class="row">

           <div class="col-6">


               <div class="card">
                   <div class="card-body">


                   </div>

                   <div class="table-responsive tab-pane" data-id="c" id="tab-c"
                       data-lists-sort-by="js-lists-values-from" data-lists-sort-desc="true"
                       data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                       <table class="table mb-0 thead-border-top-0 table-nowrap tab-pane">
                           <thead>
                               <tr>


                                <th>
                                    <a href="javascript:void(0)" class="sort"
                                        data-sort="js-lists-values-name">ID</a>
                                </th>

                                   <th>
                                       <a href="javascript:void(0)" class="sort"
                                           data-sort="js-lists-values-name">Source Name</a>
                                   </th>

                                 
                                   <th>
                                    <a href="javascript:void(0)" class="sort"
                                        data-sort="js-lists-values-name">Delete</a>
                                </th>


                                   <th></th>
                               </tr>
                           </thead>


                           <tbody class="list" id="leaves">


                               {{-- foreach --}}
                               @foreach ($sources as $source)
                                   

                                   <!-- table row -->
                                   <tr>



                                      <!-- Shift -->
                                      <td>
                                        <p>{{ $source->id }}</p>
                                    </td>

                                       <!-- start -->
                                       <td>
                                           <p>{{ $source->name }}</p>
                                       </td>


                                       <td class="">
                                        <a href="{{ route('admin.deleteSource', [$source->id]) }}" class="text-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                   </tr>
                                   <!-- end table row -->


                               @endforeach
                               {{-- end foreach --}}



                           </tbody>
                       </table>
                       <!-- end table -->

                   </div>
                   <!-- wrapper -->

               </div>
               <!-- card -->
           </div>
           <!-- end col 12 -->
       </div>
       <!-- row  of table -->
        

          </div>
          {{-- end of source tap --}}

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








@section('modals')

{{-- modals --}}
<div class="modal fade new-lead" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Lead</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('admin.addLead') }}" method="post">
                @csrf

                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" required name="name">
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Phone </label>
                                <input type="text" class="form-control" required name="phone">
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">E-mail</label>
                                <input type="text" class="form-control" required name="email">
                            </div>



                            <div class="form-group col-sm-4">
                                <label class="form-label">Account Manager</label>
                                <select id="custom-select2" class="form-control custom-select" required name="agent">
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label">Package</label>
                                <select id="custom-select2" class="form-control custom-select" name="package">
                                    @foreach ($packages as $package)
                                    <option value="{{ $package->id }}">{{ $package->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label">Source</label>
                                <select id="custom-select2" class="form-control custom-select" name="source">
                                    @foreach ($sources as $source)
                                    <option value="{{ $source->id }}">{{ $source->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" >Expected Revenue </label>
                                <input type="text" class="form-control" name="revenue">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="file" class="form-label">City </label>
                                <select class="form-control custom-select city-select-1" name="city" required="">
                                
                                    <option selected="" class="d-none"></option>
                                
                                    @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                
                                </select>

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label">District </label>
                                <select id="custom-select2" class="form-control custom-select district-select-1" required name="district">

                                    <option value="" selected="" class="d-none"></option>

                                    @foreach ($districts as $district)
                                        <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">
                                            {{ $district->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-sm-8">
                                <label class="form-label" for="exampleInputEmail1">Address </label>
                                <input type="text" class="form-control" required name="address">
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label">Next Follow Up </label>
                            <input type="date" class="form-control" id="" required name="follow-up">
                            </div>


                            <div class="form-group col-sm-12">
                                <label class="form-label" for="exampleInputEmail1">Note</label>
                                <textarea name="note" class="form-control" id="" cols="30" rows="4"></textarea>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-accent">Save</button>
                </div>

            </form>
            {{-- end form --}}

        </div>
    </div>
</div>


{{-- edit lead --}}
@foreach ($leads as $lead)

<div class="modal fade view-lead-{{$lead->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Lead</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('admin.leads.update') }}" method="post">
                @csrf
                <input type="hidden" name="lead_id" value="{{$lead->id}}" id="">

                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Name</label>
                            <input type="text" value="{{$lead->name}}" class="form-control" required name="name">
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Phone </label>
                                <input type="text" value="{{$lead->phone}}" class="form-control" required name="phone">
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">E-mail</label>
                                <input type="text" value="{{$lead->email}}" class="form-control" required name="email">
                            </div>



                            <div class="form-group col-sm-4">
                                <label class="form-label">Account Manager</label>
                                <select id="custom-select2"  class="form-control custom-select" required name="agent">
                                    <option value="{{$lead->manager->id}}"> {{$lead->manager->name}} </option>
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label">Package</label>
                                <select id="custom-select2" class="form-control custom-select" name="package">
                                    <option value="{{ $lead->package->id }}">{{ $lead->package->name }}</option>
                                    
                                    @foreach ($packages as $package)
                                    <option value="{{ $package->id }}">{{ $package->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label">Source</label>
                                <select id="custom-select2" class="form-control custom-select" name="source">
                                    <option value="{{ $lead->source->id }}">{{ $lead->source->name }}</option>
                                    
                                    @foreach ($sources as $source)
                                    <option value="{{ $source->id }}">{{ $source->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label" >Expected Revenue </label>
                            <input type="text" value="{{$lead->revenue}}" class="form-control" name="revenue">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="file" class="form-label">City </label>
                                <select class="form-control custom-select city-select-1" name="city" required="">
                                
                                    <option selected value="{{ $lead->city->id }}">{{ $lead->city->name }}</option>
                                
                                    @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                
                                </select>

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label">District </label>
                                <select id="custom-select2" class="form-control custom-select district-select-1" required name="district">

                                <option selected value="{{$lead->district->id}}"> {{$lead->district->name}} </option>

                                    @foreach ($districts as $district)
                                        <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">
                                            {{ $district->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-sm-8">
                                <label class="form-label" for="exampleInputEmail1">Address </label>
                            <input type="text" value="{{$lead->address}}" class="form-control" required name="address">
                            </div>

                          


                            <div class="form-group col-sm-12">
                                <label class="form-label" for="exampleInputEmail1">Note</label>
                            <textarea name="note" class="form-control" id="" cols="30" rows="4">{{$lead->note}}</textarea>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-accent">Save</button>
                </div>

            </form>
            {{-- end form --}}

        </div>
    </div>
</div>
    
@endforeach



{{-- Follow Up Modal --}}
@foreach ($leads as $lead)


<div class="modal fade follow-up-{{ $lead->id }}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Follow Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('admin.addFollowUp') }}" method="post">
                @csrf

         
                <div class="modal-body">
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            
                            <div class="form-group col-12">
                                <h5 class="mb-1">Lead Information</h5>
                            </div>

                            <div class="form-group col-4">
                                <label class="form-label">Name</label>
                                <p class="mb-0">{{ $lead->name }}</p>
                            </div>

                            <div class="form-group col-4">
                                <label class="form-label">Manager</label>
                                <p class="mb-0">{{ $lead->manager->name }}</p>
                            </div>

                            <div class="form-group col-4">
                                <label class="form-label">Phone</label>
                                <p class="mb-0">{{ $lead->phone }}</p>
                            </div>

                            


                            <div class="col-12">
                                <hr>
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" id="" required name="date">
                            </div>
                            
                            {{-- lead id --}}
                            <input type="hidden" name="lead_id" value="{{ $lead->id }}">


                            <div class="form-group col-sm-4">
                                <label class="form-label">Next Follow Up </label>
                                <input type="date" class="form-control" id="" required name="follow-up">
                            </div>



                            <div class="form-group col-sm-12">
                                <label class="form-label" for="exampleInputEmail1">Note</label>
                                <textarea name="note" id="" required="" cols="30" rows="5" class="form-control"></textarea>
                            </div>



                            <div class="form-group col-sm-12 text-right">

                                <button class="btn btn-accent">Save</button>
                            </div>
                            



                            {{-- table with all the follow ups --}}
                            <div class="form-group col-sm-12 text-left mt-4">
                                

                                <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true"
                                    data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>
                                
                                    <table class="table mb-0 thead-border-top-0 table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Note</th>
                                                <th>Next Follow Up</th>
                                            </tr>
                                        </thead>
                                
                                        <tbody>
                                            
                                            <tr>
                                            
                                                <td>{{ date('d M Y', strtotime($lead->created_at)) }}</td>
                                            
                                            
                                                <td>-</td>
                                            
                                                <td>{{ date('d M Y', strtotime($lead->follow_up)) }}</td>
                                            
                                            
                                            </tr>


                                            @foreach ($lead->followups as $followup)
                                                
                                
                                            <tr>
                                
                                                <td>{{ date('d M Y', strtotime($followup->date)) }}</td>
                                
                                
                                                <td>{{ $followup->note }}</td>
                                
                                                <td>{{ date('d M Y', strtotime($followup->next_follow_up)) }}</td>
                                
                                                
                                            </tr>

                                            @endforeach
                                
                                        </tbody>
                                    </table>
                                </div>
                                {{-- end table --}}
                            </div>
                            {{-- end col 12 --}}


                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </form>
            {{-- end form --}}

        </div>
    </div>
</div>
{{-- end follow up modal --}}


@endforeach
{{-- end follow up --}}


{{-- new source --}}

<div class="modal fade new-source" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Source</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            {{-- form --}}
            <form action="{{ route('admin.addSource') }}" method="post">
                
                @csrf

                <!-- modal body -->
                <div class="modal-body">

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" required name="name">
                        </div>

                    </div>
                    <!-- end row -->


                </div>
                <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Add</button>
                </div>

            </form>
            {{-- end form --}}

        </div> <!-- end model content -->

    </div>
</div>


{{-- end modals --}}
    
@endsection