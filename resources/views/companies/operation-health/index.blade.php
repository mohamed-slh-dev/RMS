@extends('layouts.companies')



@section('content')

<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Operation Health</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Operation Health</a></li>

                   

                </ol>

            </div>

        </div>

    </div>
</div>

<div class="container page__container">
    <div class="page-section">

        <div class="col-lg-12">
            <div class="card client-card">
                <div class="card-body text-center">
                    <form >
                        @csrf
                  
                    <div class="row">
                        <div class="col-12">
                            <div class="row">

                                <div class="col-sm-2 ">
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                            class="col-sm-4 col-form-label pr-0">#ID</label>
                                        <div class="col-sm-8 pl-0">
                                            <input type="text" class="form-control" name="id">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-3 ">
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                            class="col-sm-4 col-form-label pr-0">Customer</label>
                                        <div class="col-sm-8 pl-0">
                                            <select class="custom-select" name="customer">
                                                <option value="all"></option>
                                            
                                            </select>
                                        </div>
                                    </div>

                                </div>

                               
                                <div class="col-sm-3 ">
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                            class="col-sm-4 col-form-label pr-0">Status</label>
                                        <div class="col-sm-8 pl-0">
                                            <select class="custom-select" name="status">
                                                <option value="all"></option>
                                                <option value="not delivered">Not Ready</option>
                                                <option value="ready">Ready</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-3 ">
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                            class="col-sm-4 col-form-label pr-0">City</label>
                                        <div class="col-sm-8 pl-0">
                                            <select class="custom-select" name="city">
                                                <option value="all"></option>
                                              
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-12 text-center">
                                    <button class="btn btn-outline-success waves-effect waves-light mx-3"> search
                                    </button>
                                </div>
                            </div>
                        </div>



                    </div>

                </form>

                </div>
            </div>
        </div>

<div class="card  ">
   


   
   
    <div class="table-responsive table-bordered " >
         <div>

          
                <table class="table mb-0 thead-border-top-0 table-nowrap">
                    <thead>
                        <tr>

                      
                            <th>
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-name">#</a>
                            </th>
                            <th>
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-name">Name</a>
                            </th>
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-status">Phone</a>
                            </th>
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-reason">City</a>
                            </th>
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-reason">District</a>
                            </th>
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-available">Address</a>
                            </th> 
                          
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-available">Timing</a>
                            </th>  
                            
                            <th>
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-available">Assign</a>
                            </th> 
                        
                          
                        </tr>
                    </thead>
                    <tbody class="list"
                           id="leaves">

                           @foreach ($deliveries as $delivery)
                               
                          
                        <tr>

                      
                            <td>

                                <div class="media flex-nowrap align-items-center"
                                     style="white-space: nowrap;">
                                     
                                    <div class="media-body">

                                        <div class="d-flex align-items-center">
                                            <div class="flex d-flex flex-column">
                                                <p class="mb-0"><strong class="js-lists-values-name">#235</strong></p>
                                             </div>

                                        </div>

                                    </div>
                                </div>

                            </td>

                            <td>

                                <div class="media flex-nowrap align-items-center"
                                     style="white-space: nowrap;">
                                    <div class="avatar avatar-32pt mr-8pt">

                                        <span class="avatar-title rounded-circle"></span>

                                    </div>
                                    <div class="media-body">

                                        <div class="d-flex align-items-center">
                                            <div class="flex d-flex flex-column">
                                                <p class="mb-0"><strong class="js-lists-values-name">
                                                     {{$delivery->customer->fname}} {{$delivery->customer->fname}} </strong></p>
                                             </div>

                                        </div>

                                    </div>
                                </div>

                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    {{$delivery->customer->phone}}
                                </div>
                            </td>
                            <td>{{$delivery->customer->city->name}}</td>
                            <td>{{$delivery->customer->district->name}}</td>

                            <td>{{$delivery->customer->address}}</td>

                            <td>{{$delivery->customer->deliveryTime->timing}}</td>

                        <td> <a data-toggle="modal" data-target=".assign-{{$delivery->customer->id}}" 
                            class="btn btn-primary">Assign</a> </td>
                         
                       
                         
                        </tr>

                        @endforeach
                        
                        

                    </tbody>
                </table>
                
            </div>

         
    </div>

    
</div>

   
    



    </div>
</div>

@endsection

@section('modals')

@foreach ($deliveries as $delivery)
    
<div class="modal fade assign-{{$delivery->customer->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Assign Driver</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form action="{{route('company.drivers.assign')}}" method="POST">
                @csrf

            <input type="hidden" name="customer_id" value="{{$delivery->customer_id}}" id="">

                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="exampleInputEmail1">Drivers:</label>

                               <select name="driver" class="form-control" id="">
                                @foreach ($drivers as $driver)
                                  
                               <option value="{{$driver->id}}">{{$driver->name}}</option>

                                   @endforeach
                               </select>
                            </div>


                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-accent">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endforeach

@endsection