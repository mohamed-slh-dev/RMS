@extends('layouts.companies')



@section('content')

<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Deliveries</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">Deliveries</a></li>

                    <li class="breadcrumb-item active">
                        Today deliveries
                    </li>

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
                                   data-sort="js-lists-values-available">Date</a>
                            </th> 
                            <th>
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-available">Status</a>
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
                                                <p class="mb-0"><strong class="js-lists-values-name">#{{$delivery->id}}</strong></p>
                                             </div>

                                        </div>

                                    </div>
                                </div>

                            </td>

                            <td>

                                <div class="media flex-nowrap align-items-center"
                                     style="white-space: nowrap;">
                                    <div class="avatar avatar-32pt mr-8pt">

                                        <span class="avatar-title rounded-circle">BN</span>

                                    </div>
                                    <div class="media-body">

                                        <div class="d-flex align-items-center">
                                            <div class="flex d-flex flex-column">
                                                <p class="mb-0"><strong class="js-lists-values-name">
                                                    {{$delivery->customer->fname}} {{$delivery->customer->lname}}</strong></p>
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
                            <td>  {{$delivery->customer->city->name}}</td>
                            <td>  {{$delivery->customer->district->name}}</td>

                            <td>  {{$delivery->customer->address}}</td>

                            <td>  {{$delivery->customer->deliveryTime->timing}}</td>
                            <td> {{$delivery->date}}</td>  

                             @if ($delivery->status == "not delivered")
                                                            
                                <td>
                                    <span class="avatar-title rounded bg-warning px-2">Not Delivered</span>
                                </td>

                            @elseif ($delivery->status == "delivered")

                                <td>
                                    <span class="avatar-title rounded bg-success px-2">Delivered</span>
                                </td>

                            @elseif ($delivery->status == "freezed")

                                <td>
                                    <span class="avatar-title rounded bg-danger px-2">Freezed</span>
                                </td>
                                @else 
                                <td>
                                   {{ $delivery->status}}
                                </td>

                            @endif 
                   
                           
                         
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