@extends('layouts.admin')


{{-- pass the components --}}
<script>
    var componentsArray = @json($components);
    var categoriesArray = @json($componentCategories);

    var supplierComponentsArray = @json($supplierComponents);
    var supplierComponentNamesArray = @json($supplierComponentNames);

</script>



<style>
    .form-label {
        height: 39px;
        display: flex;
        align-items: center;
    }
</style>



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Inventory</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Manage Inventory</a></li>



                </ol>

            </div>
        </div>

    </div>
</div>
{{-- end breadcrubms --}}








{{-- content --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container">
        <div class="page-section">

            <div class="page-separator">
                <div class="page-separator__text">Overview</div>
            </div>


            <div class="col-lg-12 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">

                    <div class="card dashboard-area-tabs p-relative o-hidden mb-0">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters" role="tablist" style="width: 100%;">

                                <div class="col-auto" style="width: 20%;">
                                    <a href="#componets_tap" data-toggle="tab" role="tab" aria-selected="false"
                                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                        <span class="h2 mb-0 mr-3"></span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Components</strong>
                                            <small class="card-subtitle text-50">Review All Components</small>
                                        </span>
                                    </a>
                                </div>



                                <div class="col-auto border-left border-right" style="width: 20%;">
                                    <a href="#suppliers_tap" data-toggle="tab" role="tab" aria-selected="false"
                                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3"></span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Suppliers</strong>
                                            <small class="card-subtitle text-50">Manage Suppliers</small>
                                        </span>
                                    </a>
                                </div>

                                <div class="col-auto border-left border-right" style="width: 20%;">
                                    <a href="#purchase_tap" data-toggle="tab" role="tab" aria-selected="true"
                                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3"></span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Purchase</strong>
                                            <small class="card-subtitle text-50">Manage Purchase Operation</small>
                                        </span>
                                    </a>
                                </div>

                                <div class="col-auto border-left border-right" style="width: 20%;">
                                    <a href="#stock_tap" data-toggle="tab" role="tab" aria-selected="true"
                                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3"></span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Stock</strong>
                                            <small class="card-subtitle text-50"> Components Quantities</small>
                                        </span>
                                    </a>
                                </div>





                                <div class="col-auto border-left border-right" style="width: 20%;">
                                    <a href="#po_tap" data-toggle="tab" role="tab" aria-selected="true"
                                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3"></span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Purchase Order</strong>
                                            <small class="card-subtitle text-50">P.O Number</small>
                                        </span>
                                    </a>
                                </div>

                            </div>
                        </div>


                        <div class="card-body tab-content">

                           
                            <!--    Componets Tap -->
                            <div class="tab-pane text-70 active" id="componets_tap">
                                <div class="row card-group-row">
                                    <div class="col-sm-12">
                                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                            data-target=".new-comp">New Component</a>
                                    </div>


                                    <div class="col-sm-12 text-center mt-3">
                                    
                                        <button type="button" id="component-cards-view-btn" class="btn btn-outline-success waves-effect waves-light mx-3"> <i class="fa fa-id-card-alt mx-2"></i> Cards View </button>
                                        <button type="button" id="component-table-view-btn" class="btn btn-outline-primary waves-effect waves-light mx-3">
                                            <i class="fa fa-table mx-2"></i> Table View </button>
                            
                                    </div>
        

                                    <div class="col-12 mt-4">


                                        {{-- cards view row --}}
                                        <div class="row" id="component-cards-view">


                                            @foreach ($components->groupBy('category_name') as $category => $inventory_components_card)
                                        
                                            <div class="col-12 text-center">
                                              <h4 class="pt-3" style="border-top:1px solid lightgrey;">
                                                  {{$category}}</h4>
                                            </div>
                                          
                                         
                                              @foreach ($inventory_components_card as $component)

                                            
                                        <div class="col-md-4 card-group-row__col">

                                            <div class="card card--elevated card-group-row__card">
                                                <div class="card-body d-flex">

                                                    {{-- img --}}
                                                    <span
                                                        class="d-inline-flex mr-16pt mr-3">
                                                        <img width="70" height="70" src="{{ asset('assets/admin/images/components/'.$component->img) }}" style="object-fit: contain !important;">
                                                    </span>

                                                    {{-- info --}}
                                                    <div class="flex ml-3">
                                                        <a class="card-title mb-4pt" href="">{{$component->name}} (<span class="text-primary">{{ $component->brand }}</span>)</a>
                                                        <h6 class="mb-1">Calories : {{($component->cals)*100}}</h6>
                                                        <h6 class="mb-1"> Carbohydrates : {{($component->carbs)*100}}</h6>
                                                        <h6 class="mb-1">Protein :{{($component->proteins)*100}}</h6>
                                                        <h6 class="mb-1">Fat : {{($component->fats)*100}}</h6>
                                                    </div>

                                                </div>


                                                {{-- extra info --}}
                                                <a data-toggle="modal" data-target=".edit-comp-{{$component->id}}" class="btn btn-sm btn-primary" >Edit
                                                </a>

                                                <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                                    <div class="flex text-muted"><small>For Each <span style="font-weight:bold">100g</span> Of This Ingredient</small></div>
                                                    <!--  <a href="#"
                                                class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a> -->
                                                </div>
                                            </div>
        
                                        </div>

                                        @endforeach
                                        {{-- end inner foreach --}}


                                        @endforeach
                                        {{-- end outer foreach --}}



                                        </div>
                                        {{-- end view row --}}










                                        {{-- table view row --}}
                                        <div class="form-row d-none" id="component-table-view">



                                            {{-- counter or border bottom --}}
                                         
                                            
                                            @foreach ($components->groupBy('category_name') as $category => $inventory_components_table)


                                            {{-- if there's components --}}
                                          
                                                
                                            
                                            <div class="col-sm-12 text-center mt-3">
                                            
                                              
                                                <h4 class="pt-3" style="border-top:1px solid lightgrey;">{{$category}}</h4>
                                               
                                            </div>





                                            

                                            {{-- category components table --}}
                                            <div class="card col-12 mb-lg-32pt">
                                            
                                                <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date"
                                                    data-lists-sort-desc="true"
                                                    data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>
                                            
                                                    <table class="table mb-0 thead-border-top-0 table-nowrap">
                                                        <thead>
                                                            <tr>
                                            
                                                                <th>Name</th>
                                                                <th>Brand</th>
                                                                <th>Usage</th>
                                                                <th>Calories</th>
                                                                <th>Proteins</th>
                                                                <th>Carbohydrates</th>
                                                                <th>Fats</th>
                                            
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list" id="clients">
                                            
                                                            {{-- components --}}
                                                            @foreach ($inventory_components_table as $component)
                                                            <tr>
                                            
                                                                <td>
                                            
                                                                    <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                                        <div class="avatar avatar-32pt mr-8pt">
                                            
                                                                            <img src="{{ asset('assets/admin/images/components/'.$component->img) }}" alt="Avatar"
                                                                                class="avatar-img rounded-circle">
                                            
                                                                        </div>
                                                                        <div class="media-body">
                                            
                                                                            <div class="d-flex flex-column">
                                                                                <p class="mb-0"><strong class="js-lists-values-name">{{$component->name}}</strong>
                                                                                </p>
                                                                               
                                                                            </div>
                                            
                                                                        </div>
                                                                    </div>
                                                                </td>
                                            
                                                                <td style="text-transform: capitalize" class="text-primary">{{$component->brand}}</td>

                                                                <td style="text-transform: capitalize">{{$component->measuringunit}}</td>


                                                                <td>{{$component->cals * 100}}</td>
                                                                <td>{{$component->proteins * 100}}</td>
                                                                <td>{{$component->carbs * 100}}</td>
                                                                <td>{{$component->fats * 100}}</td>
                                                                
                                            
                                                                <td class="text-center">
                                                                    <a class="btn btn-primary" data-toggle="modal"
                                                                        data-target=".edit-comp-{{$component->id}}">Edit</a>
                                                                </td>
                                                            </tr>
                                            
                                                            @endforeach
                                            
                                            
                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            
                                            </div>
                                            {{-- end category card --}}
                                            


                                            @endforeach

                                        </div>
                                        {{-- end table view row --}}




                                    </div>
                                    {{-- view col --}}


                                </div>
                                {{-- end row --}}

                            </div>
                            {{-- end component tab --}}


                            <!--   Suppliers Tap -->
                            <div class="tab-pane text-70" id="suppliers_tap">
                                <div class="row card-group-row mb-16pt mb-lg-40pt p-4">
                                    <div class="col-sm-12 mb-4">
                                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                            data-target=".new-supplier">New Supplier</a>
                                    </div>

                                    <div class="card col-12 mb-lg-32pt">

                                        <div class="table-responsive" data-toggle="lists"
                                            data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true"
                                            data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>

                                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                                <thead>
                                                    <tr>

                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>E-mail</th>
                                                        <th>Address</th>
                                                        <th>Componets Price List</th>
                                                        <th>Edit</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="clients">

                                                    @foreach ($suppliers as $supplier)
                                                        
                                                    <tr>

                                                        <td>

                                                            <div class="media flex-nowrap align-items-center"
                                                                style="white-space: nowrap;">
                                                                <div class="avatar avatar-32pt mr-8pt">

                                                                    <img src="{{ asset('assets/admin/images/customers/default.jpg') }}"
                                                                        alt="Avatar" class="avatar-img rounded-circle">

                                                                </div>
                                                                <div class="media-body">

                                                                    <div class="d-flex flex-column">
                                                                        <p class="mb-0"><strong
                                                                                class="js-lists-values-name">{{$supplier->name}}</strong></p>
                                                                        <small
                                                                            class="js-lists-values-email text-50">{{$supplier->email}}</small>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </td>


                                                        <td>

                                                            <small
                                                                class="js-lists-values-phone text-50">
                                                                {{$supplier->phone}}</small>

                                                        </td>

                                                        <td>
                                                            <small
                                                                class="js-lists-values-phone text-50">{{$supplier->email}}</small>
                                                        </td>

                                                        <td>
                                                            <small class="js-lists-values-date text-50">
                                                                {{$supplier->address}}
                                                                </small>
                                                        </td>
                                                        <td class="text-center">
                                                            <a class="btn btn-accent tab-pane" data-toggle="modal"
                                                        data-target=".supplier-price-list-{{$supplier->id}}">View</a>
                                                        </td>

                                                        <td class="text-center">
                                                            <a class="btn btn-primary" data-toggle="modal"
                                                        data-target=".edit-supplier-{{$supplier->id}}">Edit</a>
                                                        </td>
                                                    </tr>

                                                    @endforeach



                                                </tbody>
                                            </table>
                                        </div>

                                    </div>


                                </div>
                            </div>



                            <!--   Purchase Tap -->
                            <div class="tab-pane text-70" id="purchase_tap">

                                <div class="row card-group-row mb-16pt mb-lg-40pt p-4">
                                    <div class="col-sm-12 mb-4">
                                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                            data-target=".new-purch">New Purchase</a>
                                    </div>

                                    <div class="card col-12 mb-lg-32pt">

                                        <div class="table-responsive" data-toggle="lists"
                                            data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true"
                                            data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>

                                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                                <thead>
                                                    <tr>

                                                        <th>ID</th>
                                                        <th>P.O</th>
                                                        <th>Supplier</th>
                                                        <th>Receive Date</th>
                                                        <th>Notes</th>
                                                        <th>Action Note</th>
                                                        <th>Components</th>
                                                        <th>Total Price</th>
                                                        <th>Create Bill</th>
                                                        <th>Status</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="clients">

                                                   @foreach ($purchases as $purchase)

                                                    <tr>

                                                        <td>
                                                            #{{ $purchase->id }}
                                                        </td>


                                                        <td>
                                                            {{ $purchase->po }}
                                                        </td>

                                                        <td>

                                                            <small class="js-lists-values-phone">{{ $purchase->supplier->name }}</small>

                                                        </td>



                                                        <td>
                                                            <small
                                                                class="js-lists-values-phone">{{ date('d M Y', strtotime($purchase->expected_date)) }}</small>
                                                        </td>

                                                        <td>{{ $purchase->note }}</td>

                                                        <td>{{ $purchase->action_note }}</td>


                                                        <td>

                                                            <a class="btn btn-block btn-outline-accent tab-pane"
                                                                data-toggle="modal" data-target=".purchase-component-{{ $purchase->id }}">
                                                                <i class="fa fa-list"></i>
                                                            </a>

                                                        </td>
                                                        <td class="text-center">
                                                            {{ $purchase->price }} AED
                                                        </td>

                                                        <td class="text-center">
                                                            <a class="btn btn-block btn-outline-accent tab-pane"
                                                                data-toggle="modal" data-target=".purchase-doc-{{ $purchase->id }}">
                                                                <i class="fa fa-file"></i>
                                                            </a>
                                                        </td>

                                                        {{-- status --}}
                                                        @if ($purchase->status == "received")

                                                            <td class="text-center">
                                                                <strong>Recevied</strong>
                                                                <span class="indicator-line rounded bg-success mt-1"></span>
                                                            </td>

                                                        @elseif ($purchase->status == "canceled")

                                                            <td class="text-center">
                                                                <strong>Canceled</strong>
                                                                <span class="indicator-line rounded bg-danger mt-1"></span>
                                                            </td>


                                                        @else

                                                            <td class="text-center">
                                                                <strong>Pending</strong>
                                                                <span class="indicator-line rounded bg-warning mt-1"></span>
                                                            </td>
                                                            
                                                        @endif
                                                        


                                                        {{-- actions --}}
                                                        @if ($purchase->status == "pending")

                                                            <td class="text-center">
                                                                <a data-toggle="modal" data-target=".purchase-received-{{$purchase->id}}"
                                                                    class="btn btn-sm btn-success">Received</a>
                                                            
                                                                <a data-toggle="modal" data-target=".purchase-canceled-{{$purchase->id}}" class="btn btn-sm btn-danger">Cancel</a>
                                                            </td>
                                                            
                                                        
                                                        @else
                                                            
                                                            <td class="text-center">
                                                                -
                                                            </td>
                                                        @endif
                                                       
                                                    </tr>

                                                @endforeach



                                                </tbody>
                                            </table>
                                        </div>

                                        {{-- <div class="card-footer p-8pt">

                                            <ul class="pagination justify-content-start pagination-xsm m-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"
                                                            class="material-icons">chevron_left</span>
                                                        <span>Prev</span>
                                                    </a>
                                                </li>
                                                <li class="page-item dropdown">
                                                    <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#"
                                                        aria-label="Page">
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
                                                        <span aria-hidden="true"
                                                            class="material-icons">chevron_right</span>
                                                    </a>
                                                </li>
                                            </ul>

                                        </div> --}}
                                        <!-- <div class="card-body bordet-top text-right">
      15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
    </div> -->

                                    </div>


                                </div>

                            </div>
                            <!--    end of purchase Tap -->

                            <div class="tab-pane text-70" id="stock_tap">

                                <div class="row card-group-row p-4">
                                    <div class="col-sm-12 text-center mb-3">
                                        <h4>Components Consumation Review</h4>
                                        <h5>Current Stock Value = <span style="font-size: x-large;" class="text-success"> {{$components_value}}</span></h5>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="client-card">
                                            <div class="card-body text-center">
                                                <div class="row">
                                                    <div class="col-12 px-0">
                                                    <form action="{{route('admin.filter.stock')}}" method="POST">
                                                            @csrf
                                                            <div class="row form-row">
                        
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group row">
                                                                        <label for="example-text-input"
                                                                            class="col-sm-6 col-form-label pr-0">From Date</label>
                                                                        <div class="col-sm-6 pl-0">
                                                                            <input type="date" class="form-control" name="from">
                                                                        </div>
                                                                    </div>
                        
                                                                </div>
                        
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group row">
                                                                        <label for="example-text-input"
                                                                            class="col-sm-6 col-form-label pr-0">To Date</label>
                                                                        <div class="col-sm-6 pl-0">
                                                                            <input type="date" class="form-control" name="to">
                                                                        </div>
                                                                    </div>
                        
                                                                </div>
                        
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group row">
                                                                        <label for="example-text-input"
                                                                            class="col-sm-6 col-form-label pr-0">Category</label>
                                                                        <div class="col-sm-6 pl-0">
                                                                            <select class="custom-select " name="category">
                                                                                <option value="all"></option>
                                                                               @foreach ($componentCategories as $category)

                                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                                                   
                                                                               @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                        
                                                                </div>
                        
                        
                        
                                                                <div class="col-sm-3 text-center">
                                                                    <button class="btn btn-outline-success waves-effect waves-light mx-3"> search
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

                                      {{-- counter or border bottom --}}
                                   
                                     
  
                                          {{-- components --}}
                                      @foreach ($stock_component->groupBy('category_name') as $category => $stock_components)
                                        
                                      <div class="col-12 text-center">
                                        <h4 class="pt-3" style="border-top:1px solid lightgrey;">
                                            {{$category}}</h4>
                                      </div>
                                    
                                   
                                        @foreach ($stock_components as $component)
                                            
                                     
                                      <div class="col-md-4 card-group-row__col">
  
                                          <div class="card card--elevated card-group-row__card">
                                              <div class="card-body row text-center">
  
                                                  <div class="col-sm-12 mb-3">
  
                                                      <span
                                                          class="d-inline-flex mr-16pt">
                                                          <img width="70" height="70"
                                                              src="{{ asset('assets/admin/images/components/'.$component->img) }}" class="img-fit">
                                                      </span>
  
                                                  </div>
  
                                                  <div class="col-sm-12 text-center">
                                                      <h5>{{ $component->name }}</h5>
                                                  </div>
  
                                                  <div class="col-sm-12 row text-center px-0">
  
                                                      <div class="text-center col-sm-4 px-0 border-right-2">
                                                          <p class="mb-0" style="font-weight: 500;">Quantity</p>
                                                          <br>
                                                          <h6>{{ $component->quantity }}<br> {{ $component->measuringunit }}</h6>
                                                      </div>
                                                      <div class="text-center col-sm-4 px-0 border-right-2">
                                                          <p class="mb-0" style="font-weight: 500;">Used</p>
                                                          <br>
                                                          <h6>0<br>{{ $component->measuringunit }}</h6>
                                                      </div>
                                                      <div class="text-center col-sm-4">
                                                          <p class="mb-0" style="font-weight: 500;">Available</p>
                                                          <br>
                                                          <h6>{{ $component->quantity - 0 }}<br>{{ $component->measuringunit }}</h6>
                                                      </div>
  
                                                      <div class="text-center col-sm-12">
                                                          <p class="mb-0" style="font-weight: 500;">Value : {{ $component->quantity * $component->price}} AED</p>
                                                         
                                                        
                                                      </div>
                                                  </div>
  
                                              </div>
  
                                          </div>
  
                                      </div>
  
  
                                      @endforeach
                                      {{-- end inner foreach --}}
  
                                      @endforeach
                                      {{-- end outter foreach --}}
  

                                </div>



                            </div>
                            <!--   end of stock tap -->


                            {{-- purchase order tap --}}
                            <div class="tab-pane text-70" id="po_tap">
                                
                                <form action="{{ route('admin.updatePurchaseOrder') }}" method="post">
                                
                                    @csrf
                                    <div class="form-row card-group-row p-4 align-items-end">
                                        
                                        <div class="col-4">
                                            <h5 class="mb-2">Purchase Order</h5>
                                            <input type="number" class="form-control" name="po-number" id="" min="0" required value="{{ $po }}">
                                        </div>

                                        <div class="col-4 text-left">
                                            <button class="btn btn-success">Save</button>
                                        </div>
                                
                                    </div>
                                </form>

                            
                            
                            
                            </div>
                            <!--   end of purchase order tap -->


                        </div>
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

<!-- admin inventory js (custom added) -->
<script src="{{ asset('assets/admin/js/admin-inventory.js') }}"></script>





{{-- inline script for this page --}}
<script>

    // card view
    $('#component-cards-view-btn').click(function() {
 
        // hide the table view + show card view
        $('#component-table-view').addClass('d-none');
        $('#component-cards-view').removeClass('d-none');

    });


    // table view
    $('#component-table-view-btn').click(function() {
 
        // hide the card view + show table view
        $('#component-cards-view').addClass('d-none');
        $('#component-table-view').removeClass('d-none');

    });






    // inline script for radiobox of new component
    $('.purchaseby-checkbox').change(function() {


        // get value
        if ($(this).val() == "box") {

            $('#quantity-per-box').attr('min', '1');
            $('#quantity-per-box').attr('required', true);
            $('#quantity-per-box').attr('readonly', false);

            $('#quantity-per-box').val(1);

        } else {

            $('#quantity-per-box').attr('min', '0');
            $('#quantity-per-box').attr('required', false);
            $('#quantity-per-box').attr('readonly', true);

            $('#quantity-per-box').val(0);

        }

    });


 
    $('.quantity-select').change(function() {


var option = $(this).val();

if (option == 'otherquantity') {
    
    $(".other-quantity").removeClass('d-none');
}

else{

    $(".other-quantity").addClass('d-none');


}

});


$('.canceled-select').change(function() {


var option = $(this).val();


    if (option == 'other') {
        $(".other-reason").removeClass('d-none');
    }

    else{

        $(".other-reason").addClass('d-none');

    }

});

</script>


{{-- end inline scripts for this paage --}}

@endsection











{{-- modals section --}}
@section('modals')


@foreach ($purchases as $purchase)

<div class="modal fade purchase-received-{{$purchase->id}}" data-backdrop="false" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Purchase Recevied ({{$purchase->reference}})</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.purchase.received')}}" method="POST">
                @csrf
                <input type="hidden" name="purchase_id" value="{{$purchase->id}}">

                <div class="modal-body">

                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <div class="col-sm-4">
                                <label class="form-label">Receved all quantity?</label>
                                <select name="receivedquantity" class="custom-select quantity-select" id="">
                                    <option value="samequantity">Yes</option>
                                    <option value="otherquantity">No</option>
                                </select>

                            </div>

                            <div class="col-sm-12 d-none other-quantity" id="">
                                @foreach ($purchase->quantity as $component)

                                <div class="row">
                                    <!-- row -->
                                    <div class="col-sm-4">

                                        <label class="form-label ">Component</label>
                                        <input value="{{ $component->component->component->name }}" class="form-control"
                                            disabled type="text">
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="form-label ">Recevied Quantity </label>
                                        <input value="0" class="form-control" placeholder="by (KG/Liter/piece)"
                                            name="recevied_quantity[]" type="number">
                                    </div>
                                </div>
                                <br>

                                @endforeach

                            </div>

                            <div class="form-group col-sm-12">
                                <label class="form-label" for="exampleInputEmail1">Note</label>
                                <textarea class="form-control" name="action_note" id="" cols="30" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>

                </div>

            </form>

        </div>
    </div>
</div>

@endforeach



@foreach ($purchases as $purchase)

<div class="modal fade purchase-canceled-{{$purchase->id}}" data-backdrop="false" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Purchase Recevied ({{$purchase->reference}})</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.purchase.canceled')}}" method="POST">
                @csrf
                <input type="hidden" name="purchase_id" value="{{$purchase->id}}">

                <div class="modal-body">

                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <div class="col-sm-4">
                                <label class="form-label">Why you canceled ?</label>
                                <select name="cancel_option" class="custom-select canceled-select">
                                    <option value="The product is not good">The product is not good</option>
                                    <option value="Receving date take too long">Receving date take too long</option>
                                    <option value="other">Other</option>


                                </select>

                            </div>


                            <div class="form-group col-sm-12 d-none other-reason" id="">
                                <label class="form-label" for="exampleInputEmail1">Other Reason</label>
                                <textarea class="form-control" name="cancel_note" id="" cols="30" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>

                </div>

            </form>

        </div>
    </div>
</div>

@endforeach



@foreach ($suppliers as $supplier)


{{-- supplier component price --}}
<div class="modal fade supplier-price-list-{{$supplier->id}}" data-backdrop="false" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Supplier Compnoent Price List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card col-12 mb-lg-32pt">

                    <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date"
                        data-lists-sort-desc="true"
                        data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>

                        <table class="table mb-0 thead-border-top-0 table-nowrap">
                            <thead>
                                <tr>

                                    <th>Component</th>
                                    <th>Quantity</th>
                                    <th>Price</th>


                                </tr>
                            </thead>
                            <tbody class="list" id="clients">

                                @foreach ($supplier->components as $component)


                                <tr>

                                    <td>{{$component->component->name}}</td>

                                    <td>1 
                                        @if ($component->component->measuringunit == 'gram')
                                            KG
                                       @elseif (  $component->component->measuringunit == 'milliliter' )
                                            Liter
                                       @else 
                                            Piece
                                        @endif
                                      
                                    </td>

                                    <td> {{$component->price}} AED </td>

                                </tr>

                                @endforeach

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
                    <!-- <div class="card-body bordet-top text-right">
      15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
    </div> -->

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="#tab-e" data-value="#e" data-toggle="tab" role="tab"
                    class="btn btn-accent" data-dismiss="modal">Save</a>
            </div>
        </div>
    </div>
</div>
{{-- end supplier component priec --}}
@endforeach




{{-- new purchase modal --}}
<div class="modal fade new-purch" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Purchase</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="{{ route('admin.addPurchase') }}" method="POST">
                @csrf

            <div class="modal-body">


                <div class="row">

                    {{-- supplier --}}
                    <div class="form-group col-sm-4">
                        <label class="form-label" for="exampleInputEmail1">Supplier</label>
                        <select id="select03" data-toggle="select" class="form-control supplier-select-1" name="supplier" required="">
                            
                            <option value="" selected=""></option>

                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group col-sm-4">
                        <label class="form-label" for="exampleInputEmail1">Expected Receive Date</label>
                        <input type="date" class="form-control" placeholder="" name="receive-date" >
                    </div>

                    <div class="form-group col-sm-4">
                        <label class="form-label" for="exampleInputEmail1">Note</label>
                        <input type="text" class="form-control" placeholder="" name="note">
                    </div>


                    <div class="form-group col-sm-4">
                        <label class="form-label" for="exampleInputEmail1">P.O Number</label>
                        <input type="number" class="form-control" required="" value="{{ $po + 1 }}" readonly name="po">
                    </div>

                    <div class="form-group col-sm-4">
                        <label class="form-label" for="exampleInputEmail1">Reference ID</label>
                        <input type="text" class="form-control" placeholder="" name="reference" >
                    </div>





                    <div class="col-sm-12 mt-3">
                        <div class="form-row align-items-start">
                            <div class="form-group col-md-6 mb-16pt mb-sm-0">

                                <div class="custom-control custom-checkbox">

                                    <input id="purchase-checkbox" type="checkbox" class="custom-control-input custom1" required="">

                                    <label for="purchase-checkbox"
                                        class="custom-control-label custom-control-label-checkbox">Components To
                                        Purchase</label>

                                </div>

                            </div>


                            <div class="col-md-6 text-right mb-16pt mb-sm-0">
                                <button type="button" id="add-purchase-button"
                                    class="custom01 btn btn-outline-accent border-radius-3 d-none"
                                    title="Add your Components"><i class="fa fa-plus-circle mr-2"></i>New
                                    Component</button>
                            </div>


                            <!-- here rest the input of component and delete button -->

                            <div class="col-sm-12">
                                <div id="meal-purchase-row" class="form-row align-items-center d-none">


                                </div>
                                <!-- component col 12 -->

                            </div>




                        </div>


                    </div>
                    <!-- end ocl 12 -->



                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- end new purchase modal --}}






{{-- purchase doc --}}
@foreach ($purchases as $purchase)
    
<div class="modal fade purchase-doc-{{ $purchase->id }}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true" >
<div class="modal-dialog modal-xl" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Purchase Documents #{{ $purchase->reference }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="width : 100%;" id="section-to-print-{{$purchase->id}}" >

                

                <div class="row" >

                    <div class="form-group col-sm-12 text-center" style="text-align: center">
                        <label class="form-label" for="exampleInputEmail1">Purchase Document Reference #{{ $purchase->reference }}</label><br>
                        <img class="" src="{{ asset('assets/admin/images/logo/RESTAURANT.png') }}" width="100">
                    </div>

                <div id="div-info-{{$purchase->id}}" style="display: contents" >

                   
                    <div class="form-group col-sm-6 text-left" style="text-align: left; width:100%">
                        <label class="form-label" for="exampleInputEmail1">Supplier</label>
                        <p>{{ $purchase->supplier->name }}</p>
                    </div>

                  

                    <div class="form-group col-sm-6 text-right" style="text-align: right; ">
                        <label class="form-label" for="exampleInputEmail1">Expected Receive Date</label>
                        <p>{{ $purchase->expected_date }}</p>
                    </div>

                </div>

                </div>

               
                    
             
                <table class="table mb-0 borderd" style="width: 100%;" >
                    <thead style="text-align: left">
                        <tr>

                            <th class="text-left">Component</th>
                            <th class="text-left">Unit</th>
                            <th>Quantity</th>
                            <th>Price (AED)</th>

                        </tr>
                    </thead>


                    <tbody class="list" id="clients">


                @foreach ($purchase->quantity as $component)
                        <!-- row -->
                        <tr>

                            <td>{{ $component->component->component->name }}</td>

                            <td>
                                @if ( $component->component->component->measuringunit == 'gram')
                                KG
                                @elseif(  $component->component->component->measuringunit == 'milliliter' )
                                Liter
                                @else
                                Piece
                            @endif
                            </td>

                            <td>{{ $component->quantity }}</td>

                            <td>{{ $component->price }}</td>


                        </tr>
                        <!-- end row -->
                      

                        @endforeach

                        <tr>
                            <td style="font-weight: bold">Total Price</td>
                            <td></td>
                           <td></td>
                            <td style="font-weight: bold;">{{$purchase->price}}</td>
                        </tr>

                    </tbody>
                </table>


            </div>
            {{-- end of div print --}}
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" data-dismiss="modal">Send Via E-mail</a>
            <button onclick="printDiv('section-to-print-{{$purchase->id}}','div-info-{{$purchase->id}}')" type="button" class="btn btn-warning" >Print</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
            </div>
        </div>
    </div>
</div>
{{-- end doc modal --}}

@endforeach
{{-- end foreach  --}}










{{-- component list 1 --}}
@foreach ($purchases as $purchase)
    

<div class="modal fade purchase-component-{{ $purchase->id }}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <!-- header -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Components List #{{ $purchase->id }}</h5>

                <!-- closing buttons -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- component body -->
            <div class="modal-body">



                <table class="table mb-0 thead-border-top-0 table-nowrap">
                    <thead>
                        <tr>

                            <th>Component</th>
                            <th>Unit</th>
                            <th>Quantity</th>
                            <th>Price (AED)</th>

                        </tr>
                    </thead>


                    <tbody class="list" id="clients">


                   @foreach ($purchase->quantity as $component)
                    <!-- row -->
                    <tr>
                    
                        <td>{{ $component->component->component->name }}</td>
                    
                        <td>
                             @if ( $component->component->component->measuringunit == 'gram')
                            KG
                        @elseif(  $component->component->component->measuringunit == 'milliliter' )
                            Liter
                            @else 
                            Piece
                        @endif</td>
                    
                        <td>{{ $component->quantity }}</td>
                    
                        <td>{{ $component->price }}</td>
                    
                    
                    </tr>
                    <!-- end row -->
                    
                    @endforeach



                    </tbody>
                </table>


            </div>
            <!-- end component body -->



            <!-- footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="#tab-e" data-value="#e" data-toggle="tab" role="tab"
                    class="btn btn-accent" data-dismiss="modal">Save</a>
            </div>
        </div>
    </div>
</div>
{{-- component list modal --}}
<!-- end modal -->

@endforeach











{{-- new component modal --}}
<div class="modal fade new-comp" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Component</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.addComponent') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <div class="form-group col-sm-4">

                                <label class="form-label component-label" for="exampleInputEmail1">Name:</label>

                                <input type="text" name="name" class="form-control" placeholder="Ingredient Name"
                                    required="">

                            </div>


                            <div class="form-group col-sm-4">
                            
                                <label class="form-label" for="exampleInputEmail1">Brand:</label>
                            
                                <input type="text" name="brand" class="form-control" placeholder="Ingredient Brand" required="">
                            
                            </div>
                            


                            <div class="form-group col-sm-4">

                                <label class="form-label component-label" for="exampleInputEmail1">Category:</label>


                                {{-- component categories select --}}
                                <select id="select03" data-toggle="select" name="category" class="form-control"
                                    required="">

                                    @foreach ($categories as $category)

                                    <option value="{{$category->id}}">{{$category->name}}</option>

                                    @endforeach

                                </select>
                                {{-- end component categories --}}

                            </div>

                            

                            



                            <div class="form-group col-sm-4">
                                <label class="form-label pt-1 component-label" for="exampleInputEmail1">Usage By:</label>
                            
                                <div class="form-group mt-2">
                                    <div class="d-flex">
                                        <div class="custom-control custom-radio mx-2">
                                            <input id="radioStacked1" name="unit" type="radio" class="custom-control-input" value="piece"
                                                checked="">
                                            <label for="radioStacked1" class="custom-control-label">Piece</label>
                                        </div>
                                        <div class="custom-control custom-radio mx-2">
                                            <input id="radioStacked2" name="unit" type="radio" class="custom-control-input" value="gram">
                                            <label for="radioStacked2" class="custom-control-label">Grams</label>
                                        </div>
                            
                                        <div class="custom-control custom-radio mx-2">
                                            <input id="radioStacked3" name="unit" type="radio" class="custom-control-input" value="milliliter">
                                            <label for="radioStacked3" class="custom-control-label">Liter</label>
                                        </div>
                            
                                    </div>
                                </div>
                            
                            </div>




                            <div class="form-group col-sm-4">
                                <label for="file" class="form-label component-label">Picture:</label>
                            
                                <input type="file" name="img" class="form-control" required="">
                            
                            </div>




                            <div class="form-group col-sm-4">
                                <label for="file" class="form-label component-label">Quantity By 1 (KG/Piece/Liter):</label>

                                <input type="number" value="0" name="quantity" class="form-control" required="">

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label component-label">Price For 1 (KG/Piece/Liter):</label>

                                <input type="number" value="0" name="price" class="form-control" required="">

                            </div>



                            <div class="form-group col-sm-4">
                                <label class="form-label component-label">Wastage (%):</label>

                                <input type="number" value="0" name="wastage" class="form-control" required="">

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label component-label">Increase (%):</label>

                                <input type="number" value="0" name="increase" class="form-control" required="">

                            </div>

                            <div class="form-group col-sm-4">
                                <label class="form-label component-label">Min. Qyantity (KG/Litter/Piece):</label>

                                <input type="number" value="0" name="min_quantity" class="form-control"
                                    placeholder="Minimum Quantity" required="">

                            </div>




                            <div class="form-group col-sm-4">
                                <label class="form-label pt-1 component-label" for="exampleInputEmail1">Purchase By:</label>
                            
                                <div class="form-group mt-2">
                                    <div class="d-flex">
                                        <div class="custom-control custom-radio mx-2">
                                            <input id="purchaseby-checkbox-1" name="purchaseby" type="radio" class="custom-control-input purchaseby-checkbox"
                                                value="regular" checked="">
                                            <label for="purchaseby-checkbox-1" class="custom-control-label">Piece/KG/Liters</label>
                                        </div>
                                        <div class="custom-control custom-radio mx-2">
                                            <input id="purchaseby-checkbox-2" name="purchaseby" type="radio" class="custom-control-input purchaseby-checkbox"
                                                value="box">
                                            <label for="purchaseby-checkbox-2" class="custom-control-label">Box/Bottle</label>
                                        </div>
                            
                            
                            
                                    </div>
                                </div>
                            
                            </div>




                            
                            <div class="form-group col-sm-4">
                                <label class="form-label component-label">Quantity Per Box (KG/Piece/Liter):</label>

                                <input type="number" step="0.01" id="quantity-per-box" readonly value="0" name="box-quantity" class="form-control">

                            </div>




                            <div class="form-group col-sm-12">
                                <p class="text-muted mb-2" style=" font-weight: normal; ">* For Each 100 Gram/Liter Or 1
                                    Piece</p>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" step="0.01" name="cals" class="form-control"
                                            placeholder="calories" required="">
                                    </div>
                                    <div class="col">
                                        <input type="number" step="0.01" name="protein" class="form-control"
                                            placeholder="Proteins" required="">
                                    </div>
                                    <div class="col">
                                        <input type="number" step="0.01" name="carbs" class="form-control"
                                            placeholder="Carbs" required="">
                                    </div>
                                    <div class="col">
                                        <input type="number" step="0.01" name="fats" class="form-control"
                                            placeholder="Fats" required="">
                                    </div>
                                </div>

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
{{-- end new component modal --}}




@foreach ($components as $component)
    

{{-- edit component modal --}}
<div class="modal fade edit-comp-{{$component->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Component</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.editComponent') }}" method="post" >
                @csrf
            <input type="hidden" name="id" value="{{$component->id}}">
            <div class="modal-body">
                
                <div class="list-group-item" id="custom">
                    <div class="form-group row align-items-center mb-0">
                        <div class="form-group col-sm-4">

                            <label class="form-label" for="exampleInputEmail1">Name:</label>

                            <input type="text" value="{{$component->name}}" name="name" class="form-control" placeholder="Ingredient Name" required="">

                        </div>



                        <div class="form-group col-sm-4">
                        
                            <label class="form-label" for="exampleInputEmail1">Brand:</label>
                        
                            <input type="text" name="brand" class="form-control" placeholder="Ingredient Brand" value="{{ $component->brand }}" required="">
                        
                        </div>



                        <div class="form-group col-sm-4">

                            <label class="form-label" for="exampleInputEmail1">Category:</label>


                            {{-- component categories select --}}
                            <select id="select03" data-toggle="select" name="category" class="form-control" required="">

                            @foreach ($categories as $category)

                            @if ($component->component_category_id == $category->id)
                            <option selected="" value="{{$category->id}}">{{$category->name}}</option>
                            @else
                            <option value="{{$category->id}}">{{$category->name}}</option>
                             
                            @endif


                            @endforeach

                            </select>
                            {{-- end component categories --}}

                        </div>

                   
                      
                        <div class="form-group col-sm-4">
                            <label for="file" class="form-label">Quantity By (Gram/Piece/Milliliter):</label>

                        <input type="number" value="{{$component->quantity}}" name="quantity" class="form-control" required="">

                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">Price For (Gram/Piece/Milliliter):</label>

                            <input type="number" step="0.01" value="{{$component->price}}" name="price" class="form-control" required="">

                        </div>

                       

                        <div class="form-group col-sm-4">
                            <label  class="form-label">Wastage (%):</label>

                            <input type="number" value="{{$component->wastage}}" name="wastage" class="form-control" required="">

                        </div>

                        <div class="form-group col-sm-4">
                            <label  class="form-label">Increase (%):</label>
                        
                        <input type="number" value="{{$component->increase}}" name="increase" class="form-control"  required="">
                    
                        </div>

                        <div class="form-group col-sm-4">
                            <label  class="form-label">Min. Qyantity (Gram/Milliliter/Piece):</label>
                        
                        <input type="number" value="{{$component->min_quantity}}" name="min_quantity" class="form-control" placeholder="Minimum Quantity" required="">
                        
                        </div>

                        <div class="form-group col-sm-12">
                            <p class="text-muted mb-2" style=" font-weight: normal; ">* For Each 100 Gram/Liter Or 1 Piece</p>
                            <div class="form-row">
                                <div class="col">
                                <input type="number" value="{{$component->cals * 100}}"  name="cals" class="form-control" placeholder="calories" required="">
                                </div>
                                <div class="col">
                                    <input type="number" value="{{$component->proteins * 100}}"   name="protein" class="form-control" placeholder="Proteins" required="">
                                </div>
                                <div class="col">
                                    <input type="number" value="{{$component->carbs * 100}}"    name="carbs" class="form-control" placeholder="Carbs" required="">
                                </div>
                                <div class="col">
                                    <input type="number" value="{{$component->fats * 100}}"  name="fats" class="form-control" placeholder="Fats" required="">
                                </div>
                            </div>

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
{{-- end edit component modal --}}

@endforeach



{{-- new supplier modal --}}
<div class="modal fade new-supplier" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="{{ route('admin.addSupplier') }}" method="post">
                @csrf
                <div class="modal-body">


                    <div class="form-group row align-items-center mb-0">
                        <div class="form-group col-sm-4">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="" required="">
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="" required="">
                        </div>



                        <div class="form-group col-sm-4">
                            <label class="form-label">E-mail</label>
                            <input type="text" name="email" class="form-control" placeholder="" required="">
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="" required="">
                        </div>





                        <div class="col-sm-12">
                            <div class="form-row align-items-start">
                                <div class="form-group col-md-6 mb-16pt mb-sm-0">

                                    <div class="custom-control custom-checkbox">

                                        <input id="component-checkbox" type="checkbox"
                                            class="custom-control-input custom1" required="">

                                        <label for="component-checkbox"
                                            class="custom-control-label custom-control-label-checkbox">Components To
                                            Supply</label>

                                    </div>

                                </div>


                                <div class="col-md-6 text-right mb-16pt mb-sm-0">
                                    <button type="button" id="add-component-button"
                                        class="custom01 btn btn-outline-accent border-radius-3 d-none"
                                        title="Add your Components"><i class="fa fa-plus-circle mr-2"></i>New
                                        Component</button>
                                </div>


                                <!-- here rest the input of component and delete button -->

                                <div class="col-sm-12">
                                    <div id="meal-component-row" class="form-row align-items-center d-none">


                                    </div>
                                    <!-- component col 12 -->

                                </div>




                            </div>


                        </div>
                        <!-- end ocl 12 -->
                    </div>


                </div> <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Add</button>


                </div>
            </form>

        </div> <!-- end model content -->

    </div>
</div>
{{-- end new supplier modal --}}


@foreach ($suppliers as $supplier)
    

{{-- edit supplier modal --}}
<div class="modal fade edit-supplier-{{$supplier->id}}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="{{ route('admin.editSupplier') }}" method="post">
                @csrf

            <input type="hidden" value="{{$supplier->id}}" name="id">
                <div class="modal-body">


                    <div class="form-group row align-items-center mb-0">
                        <div class="form-group col-sm-4">
                            <label class="form-label">Name</label>
                        <input type="text" value="{{$supplier->name}}" name="name" class="form-control" placeholder="" required="">
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">phone</label>
                            <input type="text" value="{{$supplier->phone}}" name="phone" class="form-control" placeholder="" required="">
                        </div>



                        <div class="form-group col-sm-4">
                            <label class="form-label">E-mail</label>
                            <input type="text" value="{{$supplier->email}}" name="email" class="form-control" placeholder="" required="">
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="form-label">Address</label>
                            <input type="text" value="{{$supplier->address}}" name="address" class="form-control" placeholder="" required="">
                        </div>





                        <div class="col-sm-12">
                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                    <thead>
                        <tr>

                            <th>Component</th>
                            <th>Unit</th>
                           
                            <th>Price (AED)</th>
                            <th>Edit Price (AED)</th>

                        </tr>
                    </thead>


                    <tbody class="list" id="clients">


                   @foreach ($supplier->components as $component)
                    <!-- row -->
                    <tr>
                    
                        <td>{{ $component->component->name }}</td>
                    
                        <td>
                             @if ( $component->component->measuringunit == 'gram')
                            KG
                        @elseif(  $component->component->measuringunit == 'milliliter' )
                            Liter
                            @else 
                            Piece
                        @endif</td>
                    
                    
                        <td>{{ $component->price }}</td>
                    
                        <td>
                            <input class="form-control" type="number" value="{{$component->price}}" 
                            name="price[]" >
                        </td>
                    </tr>
                    <!-- end row -->
                    
                    @endforeach



                    </tbody>
                </table>


                        </div>
                        <!-- end ocl 12 -->
                    </div>


                </div> <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Update</button>


                </div>
            </form>

        </div> <!-- end model content -->

    </div>
</div>
{{-- end edit supplier modal --}}

@endforeach

@endsection

