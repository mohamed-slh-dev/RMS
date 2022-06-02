@extends('layouts.admin')


{{-- to use store.js only --}}
<?php 

    $storepage = 1;

?>


{{-- collection pass section --}}

<script>
var componentsArray = @json($components);
</script>


{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Store</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Manage Store</a></li>



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

                            <div class="col-auto border-left border-right" style="width: 50%;">
                                <a href="#meals_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                    <span class="h2 mb-0 mr-3">{{ $items->count() }}</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Store</strong>
                                        <small class="card-subtitle text-50">Manage Store Items & Meals</small>
                                    </span>
                                </a>
                            </div>

                            <div class="col-auto border-left border-right" style="width: 50%;">
                                <a href="#requests_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">0</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Customer Requests</strong>
                                        <small class="card-subtitle text-50">View All Customers Request</small>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="card-body tab-content">

                        <!--   Packages Tap -->


                        <!--   Meals Tap -->
                        <div class="tab-pane active text-70" id="meals_tap">
                            <div class="row card-group-row mb-16pt mb-lg-40pt">


                                <div class="col-sm-12 mt-2 mb-4">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-meal">New Item</a>
                                </div>


                                {{-- items foreach --}}
                                @foreach ($items as $item)
                                    
                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90"
                                                        src="{{ asset('assets/admin/images/store-items/'.$item->img) }}"
                                                        style="border-radius: 50%; object-fit: contain;">
                                                </span>
                                                <h4 class="mb-8pt carousal-card-heading mt-2">{{ $item->name }}</h4>

                                                <div class="my-3 row">
                                                    <div class="col-sm-6 text-center">
                                                        <label class="form-label">Kacl</label>
                                                        <h5>{{ $item->cals }}</h5>
                                                    </div>

                                                    <div class="col-sm-6 text-center">
                                                        <label class="form-label">Price</label>
                                                        <h5>{{ $item->price }} <small>AED</small> </h5>
                                                    </div>

                                                </div>
                                                <hr class="mt-2">

                                                {{-- components --}}
                                                <h6 style="font-size: 14px !important;">Ingredients</h6>
                                                <p class="text-70 mb-0" style="font-weight: 500 !important; font-size: 13px !important; overflow:hidden; height: 43px;">
                                                    @foreach ($item->components as $component)
                                                        | {{ $component->component->name }}
                                                    @endforeach
                                                </p>



                                            </div>

                                        </div>


                                    </div>
                                </div>

                                @endforeach
                                {{-- end foreach --}}

                            </div>

                        </div>

                        <div class="tab-pane text-70" id="requests_tap">

                            <div class="row">

                                <div class="col-12">


                                    <div class="card">
                                        <div class="card-body">


                                        </div>

                                        <div class="table-responsive tab-pane" data-lists-sort-by="js-lists-values-from"
                                            data-lists-sort-desc="true"
                                            data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                                            <table class="table mb-0 thead-border-top-0 table-nowrap tab-pane">
                                                <thead>
                                                    <tr>


                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Customer Name</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Items</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Date</a>
                                                        </th>

                                                        <th>
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Status</a>
                                                        </th>




                                                    </tr>
                                                </thead>


                                                <tbody class="list" id="leaves">



                                                    <!-- table row -->
                                                    {{-- <tr>



                                                        <!-- start -->
                                                        <td>
                                                            <p>Idress Abdelrhman</p>
                                                        </td>



                                                        <!-- Shift -->
                                                        <td>
                                                            <p>Protein Shake (1) , Green Juice (2)</p>
                                                        </td>

                                                        <td class="">
                                                            12/9/2021
                                                        </td>

                                                        <td class="text-center">
                                                            <strong>Requested</strong>
                                                            <span class="indicator-line rounded bg-warning mt-1"></span>
                                                        </td>



                                                    </tr> --}}
                                                    <!-- end table row -->



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
                        <!--    Componets Tap -->

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


{{-- store js --}}
<script src="{{ asset('assets/admin/js/store.js') }}"></script>

    
@endsection









@section('modals')
    
    {{-- modals --}}
    <div class="modal fade new-meal" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Store Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('admin.createItem') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
        
        
                        <div class="list-group-item" id="general-meal-info">
                            <div class="form-group row align-items-center mb-0">
                                <div class="form-group col-sm-4">
                                    <label class="form-label">Item Name</label>
                                    <input type="text" class="form-control" placeholder="Meal Name" required="" name="name">
                                </div>
        
        
                                <div class="form-group col-sm-4">
                                    <label class="form-label">Kacl</label>
                                    <input type="number" step="0.01" class="form-control" placeholder="Kacl" required="" name="cals">
                                </div>
        
                                <div class="form-group col-sm-4">
                                    <label class="form-label">Price</label>
                                    <input type="number" class="form-control" placeholder="Price" required="" name="price">
                                </div>
        
        
                                <div class="form-group col-sm-12">
                                    <label for="input-file-events" class="form-label">Item Picture</label>
                                    <input type="file" id="input-file-events" class="dropify-event" data-default-file="" required="" name="img" />
        
                                </div>
        
        
        
                                <div class="col-sm-12">
                                    <div class="form-row align-items-start">
                                        <div class="form-group col-md-6 mb-16pt mb-sm-0">
        
                                            <div class="custom-control custom-checkbox">
        
                                                <input id="component-checkbox" type="checkbox"
                                                    class="custom-control-input custom1" required>
        
                                                <label for="component-checkbox"
                                                    class="custom-control-label custom-control-label-checkbox">Components</label>
        
                                            </div>
        
                                        </div>
        
        
                                        <div class="col-md-6 text-right mb-16pt mb-sm-0">
                                            <button id="add-component-button"
                                                class="custom01 btn btn-outline-accent border-radius-3 d-none"
                                                title="Add your Components"><i class="fa fa-plus-circle mr-2"></i>New
                                                Component</button>
                                        </div>
        
        
                                        <!-- here rest the input of component and delete button -->
        
                                        <div class="col-sm-12">
                                            <div id="meal-component-row" class="form-row align-items-center d-none">
        
        
                                            </div>
                                        </div>
                                        <!-- component col 12 -->
        
                                    </div>
        
        
        
        
        
                                </div>
        
        
                            </div>
                        </div>
        
        
                    </div> <!-- end model body -->
        
        
        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-accent" >Save</button>
                    </div>

                </form>
                {{-- end form --}}
    
            </div> <!-- end model content -->
    
        </div>
    </div>
    {{-- end modals --}}


@endsection