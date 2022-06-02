@extends('layouts.admin')



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Finance</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="dashboard.html">Calculate Deliveris, orders and subscription</a></li>


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
                            <div class="col-auto" style="width: 25%;">
                                <a href="#dining_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active ">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Dining Orders</strong>
                                        <small class="card-subtitle text-50">Review all dining orders</small>
                                    </span>
                                </a>
                            </div>



                            <!-- tab 2 -->
                            <div class="col-auto border-left border-right" style="width: 25%;">
                                <a href="#orders_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">One Time Order</strong>
                                        <small class="card-subtitle text-50">Review all one time orders</small> </span>
                                </a>
                            </div>


                            <div class="col-auto border-left border-right" style="width: 25%;">
                                <a href="#subscription_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Subscription</strong>
                                        <small class="card-subtitle text-50">Review all subscription</small>
                                    </span>
                                </a>
                            </div>


                            <div class="col-auto border-left border-right" style="width: 25%;">
                                <a href="#operations_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Operation Expenss</strong>
                                        <small class="card-subtitle text-50">Reviwe Operation expenss</small>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- end card header -->


                    <!-- tabs content -->
                    <div class="card-body tab-content">

                        <!-- dining Tap -->
                        <div class="tab-pane text-70 active" id="dining_tap">

                            <div class="row card-group-row mb-lg-8pt">

                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">{{ $totalIncome }}<small> AED</small></div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Total Income</strong></p>
                                                </div>
                                            </div>
                                            <i class="fa fa-angle-double-down text-primary" style="font-size: 26px"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">{{ $totalExpenses }}<small> AED</small></div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Total Expenss</strong>
                                                    </p>
                                                </div>
                                            </div>
                                            <i class="fa fa-angle-double-up text-warning" style="font-size: 26px"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">{{ $totalProfit }}<small> AED</small></div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Total Profit</strong></p>

                                                </div>
                                            </div>
                                            <i class="fa fa-dollar-sign text-success" style="font-size: 26px"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->





                            <!-- table row -->
                            <div class="row">

                                <div class="col-12">


                                    <div class="card">
                                        <div class="card-body">


                                        </div>

                                        <div class="table-responsive tab-pane" data-id="c" id="tab-c"
                                            data-lists-sort-by="js-lists-values-from" data-lists-sort-desc="true"
                                            data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                                            <table class="table mb-0 thead-border-top-0 table-nowrap tab-pane">
                                                <thead>
                                                    <tr>
                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Dining ID</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Table</a>
                                                        </th>


                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Date</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">Time</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">Cost</a>
                                                        </th>


                                                       
                                                    </tr>
                                                </thead>


                                                <tbody class="list" id="leaves">


                                                    @foreach ($orders as $order)
                                                        

                                                    <!-- table row -->
                                                    <tr>


                                                        <!-- name + pp -->
                                                        <td> #{{ $order->id }} </td>

                                                        <!-- phone -->
                                                        <td>
                                                            {{ $order->table }}
                                                        </td>


                                                        <!-- city -->
                                                        <td>
                                                            {{ date("d M Y", strtotime($order->created_at)) }}
                                                        </td>


                                                        <!-- district -->
                                                        <td>
                                                            {{ date("h:i A", strtotime($order->created_at)) }}
                                                        </td>

                                                        <td>
                                                            {{ $order->meals->sum('selling_price') }} <small>AED</small>
                                                        </td>

                                                        <td class="text-right">
                                                            <a href="" class="text-50"><i
                                                                    class="material-icons">more_vert</i></a>
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
                        <!-- end dining tab -->


                        <div class="tab-pane text-70" id="orders_tap">

                            <div class="row card-group-row mb-lg-8pt">

                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">{{ $onetimeTotalIncome }} <small>AED</small></div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Total Income</strong></p>

                                                </div>
                                            </div>
                                            <i class="fa fa-angle-double-down text-primary" style="font-size: 26px"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">{{ $onetimeTotalExpenses }} <small>AED</small></div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Total Expenss</strong></p>

                                                </div>
                                            </div>
                                            <i class="fa fa-angle-double-up text-warning" style="font-size: 26px"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">{{ $onetimeTotalProfit }} <small>AED</small></div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Total Profit</strong></p>

                                                </div>
                                            </div>
                                            <i class="fa fa-dollar-sign text-success" style="font-size: 26px"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->





                            <!-- table row -->
                            <div class="row">

                                <div class="col-12">


                                    <div class="card">
                                        <div class="card-body">


                                        </div>

                                        <div class="table-responsive tab-pane" data-id="c" id="tab-c"
                                            data-lists-sort-by="js-lists-values-from" data-lists-sort-desc="true"
                                            data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                                            <table class="table mb-0 thead-border-top-0 table-nowrap tab-pane">
                                                <thead>
                                                    <tr>
                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Order ID</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Customer Name</a>
                                                        </th>


                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Date</a>
                                                        </th>



                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">Cost</a>
                                                        </th>


                                                      
                                                    </tr>
                                                </thead>


                                                <tbody class="list" id="leaves">


                                                    @foreach ($onetimeOrders as $order)
                                                        
                                                    <!-- table row -->
                                                    <tr>


                                                        <!-- name + pp -->
                                                        <td> #{{ $order->id }} </td>

                                                        <!-- phone -->
                                                        <td>
                                                            {{ $order->customer_name }}
                                                        </td>


                                                        <!-- city -->
                                                        <td>
                                                            {{ date('d M Y', strtotime($order->date)) }}
                                                        </td>




                                                        <td>
                                                            {{ $order->meals->sum('selling_price') }} <small>AED</small>
                                                        </td>

                                                     
                                                    </tr>
                                                    <!-- end table row -->


                                                    @endforeach




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

                        <!-- end one order tab -->


                        <div class="tab-pane text-70" id="subscription_tap">

                            <div class="row card-group-row mb-lg-8pt">

                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3"> {{$subscriptions->sum('margin_price') }} <small>AED</small></div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Total Income</strong></p>

                                                </div>
                                            </div>
                                            <i class="fa fa-angle-double-down text-primary" style="font-size: 26px"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">{{$subscriptions->sum('price')}}  <small>AED</small></div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Total Expenss</strong></p>

                                                </div>
                                            </div>
                                            <i class="fa fa-angle-double-up text-warning" style="font-size: 26px"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3"> {{$subscriptions->sum('margin_price') - $subscriptions->sum('price') }} <small>AED</small></div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Total Profit</strong></p>

                                                </div>
                                            </div>
                                            <i class="fa fa-dollar-sign text-success" style="font-size: 26px"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->





                            <!-- table row -->
                            <div class="row">

                                <div class="col-12">


                                    <div class="card">
                                        <div class="card-body">


                                        </div>

                                        <div class="table-responsive tab-pane" data-id="c" id="tab-c"
                                            data-lists-sort-by="js-lists-values-from" data-lists-sort-desc="true"
                                            data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                                            <table class="table mb-0 thead-border-top-0 table-nowrap tab-pane">
                                                <thead>
                                                    <tr>
                                                        <th style="width:50px">
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Subs. ID</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Customer Name</a>
                                                        </th>


                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-name">Date</a>
                                                        </th>



                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">Cost</a>
                                                        </th>

                                                        <th >
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-days">Cost With Margin</a>
                                                        </th>


                                                        <th style="width: 24px;"></th>
                                                    </tr>
                                                </thead>


                                                <tbody class="list" >


                                                    @foreach ($subscriptions as $sub)
                                                        
                                                  
                                                    <!-- table row -->
                                                    <tr>


                                                        <!-- name + pp -->
                                                        <td> {{$sub->id}} </td>

                                                        <!-- phone -->
                                                        <td>
                                                            {{$sub->customer->fname}}
                                                            {{$sub->customer->lname}}
                                                        </td>


                                                        <!-- city -->
                                                        <td>
                                                            {{$sub->start_date}}
                                                        </td>




                                                        <td>
                                                            {{$sub->price}} <small>AED</small>
                                                        </td>

                                                        <td>
                                                            {{$sub->margin_price}} <small>AED</small>
                                                        </td>
                                                       
                                                    </tr>
                                                    <!-- end table row -->

                                                    @endforeach

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
                        <!-- end dining tab -->

                        <div class="tab-pane text-70" id="operations_tap">



                            <div class="form-group row align-items-center mb-0">
                                <div class="col-sm-12 text-left mt-0 mb-2">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".edit-operation"><i class="fa fa-plus-circle mr-2"></i>Edit
                                        Opertation Costs</a>
                                </div>

                               
                                <div class="form-group col-sm-4 text-center p-4 mb-0">
                                    <div class="card pt-3 mb-0">
                                        <label class="form-label" for="exampleInputEmail1">Total Operation Cost</label>
                                        <h5 class="text-center">{{ $margin->operation }}<small>%</small></h5>
                                    </div>
                                
                                </div>

                                <div class="col-sm-4  ">

                                </div>


                                <div class="form-group col-sm-4 text-center p-4 mb-0">
                                    <div class="card pt-3 mb-0">
                                        <label class="form-label" for="exampleInputEmail1">Margin Percentage </label>
                                        <h5 class="text-center">{{ $margin->margin }}<small>%</small></h5>
                                    </div>
                                
                                </div>

                                <div class="form-group col-sm-4 text-center p-4">
                                    <div class="card pt-3">
                                        <label class="form-label" for="exampleInputEmail1">Food Packing </label>
                                        <h5 class="text-center">{{ $margin->packing }}</h5>
                                    </div>

                                </div>

                                <div class="form-group col-sm-4 text-center p-4">
                                    <div class="card pt-3">
                                        <label class="form-label" for="exampleInputEmail1">Cold Drinks </label>
                                        <h5 class="text-center">{{ $margin->cold_drink }}</h5>
                                    </div>

                                </div>

                                <div class="form-group col-sm-4 text-center p-4">
                                    <div class="card pt-3">
                                        <label class="form-label" for="exampleInputEmail1"> Hot Drinks </label>
                                        <h5 class="text-center">{{ $margin->hot_drink }}</h5>
                                    </div>

                                </div>
                            </div>



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


@endsection










{{-- modals section --}}
@section('modals')


{{-- modals --}}
<div class="modal fade edit-operation" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Package Costs</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="{{ route('admin.updateMargin') }}" method="post">
                @csrf

                <!-- modal body -->
                <div class="modal-body">

                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label class="form-label">Total Operation Cost</label>
                            <input type="number" value="{{ $margin->operation }}" required class="form-control" min="0" name="operation">
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="form-label">Margin Percentage (%)</label>
                            <input type="number" value="{{ $margin->margin }}" required step="0.01" class="form-control" min="0" name="margin">
                        </div>

                        <div class="col-12">
                            <h5>Food Packing ({{ $margin->packing }})</h5>
                        </div>

                        <div class="form-group col-sm-3">
                            <label class="form-label">Sticker</label>
                            <input type="number" value="0" required step="0.01" class="form-control" min="0" name="sticker">
                        </div>

                        <div class="form-group col-sm-3">
                            <label class="form-label">Container</label>
                            <input type="number" value="0" required step="0.01" class="form-control" min="0" name="container">
                        </div>
                        <div class="form-group col-sm-3">
                            <label class="form-label">Cutlery</label>
                            <input type="number" value="0" required step="0.01" class="form-control" min="0" name="cutlery">
                        </div>

                        <div class="form-group col-sm-3">
                            <label class="form-label">Bag</label>
                            <input type="number" value="0" required step="0.01" class="form-control" min="0" name="bag">
                        </div>

                        <div class="col-12">
                            <h5>Hot Drinks ({{ $margin->hot_drink }})</h5>
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">Hot Cup</label>
                            <input type="number" value="0" required step="0.01" class="form-control" min="0" name="hot-cup">
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">Hot Lid</label>
                            <input type="number" value="0" required step="0.01"  class="form-control" min="0" name="hot-lid">
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="form-label">Stirrer</label>
                            <input type="number" value="0" required step="0.01" class="form-control" min="0" name="stirrer">
                        </div>

                        <div class="col-12">
                            <h5>Cold Drinks ({{ $margin->cold_drink }})</h5>
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">Cold Cup</label>
                            <input type="number" value="0" required step="0.01" class="form-control" min="0" name="cold-cup">
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">Cold Lid</label>
                            <input type="number" value="0" required step="0.01" class="form-control" min="0" name="cold-lid">
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="form-label">Straw</label>
                            <input type="number" value="0" required step="0.01" class="form-control" min="0" name="straw">
                        </div>


                    </div>
                    <!-- end row -->


                </div>
                <!-- end model body -->



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-accent">Add</button>
                </div>

            </form>
            {{-- end form --}}

        </div> <!-- end model content -->

    </div>
</div>


@endsection