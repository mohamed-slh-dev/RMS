@extends('layouts.admin')



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Kitchen</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="dashboard.html">Kitchen</a></li>



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

        <form class="p-4 my-3 row" action="{{route('admin.kitchen.update.shiftTime')}}" method="POST">
                @csrf
           
                <div class="col-sm-3">
                    <label for="example-text-input">Shift Ending Time</label>
                    <div>
                    <input type="time" timeformat="24h"  value="{{$end_time->time}}" name="time" class="form-control">
                    </div>

                </div>


                <div class="col-sm-4">

                    <button class="btn btn-success" style=" margin-top: 25px; ">Update</button>
                </div>

           
           
        </form>

            <div class="col-lg-12 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">

                    <div class="card dashboard-area-tabs p-relative o-hidden mb-0">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters" role="tablist" style="width: 100%;">

                                <div class="col-auto" style="width: 33%;">
                                    <a href="#packages_tap" data-toggle="tab" role="tab" aria-selected="false"
                                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                        <span class="h2 mb-0 mr-3"> {{$customers_deliveries->count()}} </span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Today Cooking</strong>
                                            <small class="card-subtitle text-50">Review All Today Cooking</small>
                                        </span>
                                    </a>
                                </div>



                                <div class="col-auto border-left border-right" style="width: 33%;">
                                    <a href="#chifs_tap" data-toggle="tab" role="tab" aria-selected="false"
                                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3"> {{$chifs->count()}} </span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Chefs</strong>
                                            <small class="card-subtitle text-50">Manage Chefs</small>
                                        </span>
                                    </a>
                                </div>

                                <div class="col-auto border-left border-right" style="width: 34%;">
                                    <a href="#consum_tap" data-toggle="tab" role="tab" aria-selected="true"
                                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3">  {{$components->count()}}  </span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Consumption</strong>
                                            <small class="card-subtitle text-50">Compononts Consumption</small>
                                        </span>
                                    </a>
                                </div>

                            </div>
                        </div>


                        <div class="card-body tab-content">
                            <!--   Packages Tap -->
                            <div class="tab-pane active text-70" id="packages_tap">
                                <div class="row card-group-row mb-16pt mb-lg-40pt">

                                    <div class="container page__container mt-2">
                                        <h3 class="text-center">Today Cooking</h3>

                                        <div class="row card-group-row mb-lg-8pt">

                                            <div class="col-lg-4 col-md-4 card-group-row__col">
                                                <div class="card card-group-row__card">
                                                    <div class="card-body d-flex align-items-center">
                                                        <div class="flex d-flex align-items-center">
                                                            <div class="h2 mb-0 mr-3">
                                                                {{$customers_deliveries->count()}}</div>
                                                            <div class="flex">
                                                                <p class="mb-0"><strong>Today's Deliveris</strong></p>
                                                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                                    100% </p>
                                                            </div>
                                                        </div>
                                                        <i class="fa fa-list text-primary" style="font-size: 26px"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4 card-group-row__col">
                                                <div class="card card-group-row__card">
                                                    <div class="card-body d-flex align-items-center">
                                                        <div class="flex d-flex align-items-center">
                                                            <div class="h2 mb-0 mr-3"> 
                                                                 {{$customers_deliveries->where('status','delivered')->count()}}</div>
                                                            <div class="flex">
                                                                <p class="mb-0"><strong>Delivered</strong></p>
                                                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                                    {{-- 92% --}}
                                                                    <!-- <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i> -->
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <i class="fa fa-check-circle text-success"
                                                            style="font-size: 26px"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4 card-group-row__col">
                                                <div class="card card-group-row__card">
                                                    <div class="card-body d-flex align-items-center">
                                                        <div class="flex d-flex align-items-center">
                                                            <div class="h2 mb-0 mr-3">  {{$customers_deliveries->where('status','not delivered')->count()}}</div>
                                                            <div class="flex">
                                                                <p class="mb-0"><strong>Not Delivered</strong></p>
                                                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                                    {{-- 8% --}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <i class="fa fa-spinner text-warning"
                                                            style="font-size: 26px;"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="page-section card">

                                            <div class="table-responsive meal" id="07">

                                                <table
                                                    class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                                                    <thead>
                                                        <tr>


                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">#</a>
                                                            </th>
                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Name</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Delivery Timing</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-reason">Package</a>
                                                            </th>


                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-from">Status</a>
                                                            </th>


                                                        </tr>
                                                    </thead>
                                                    <tbody class="list" id="leaves">

                                                        @foreach ($customers_deliveries as $delivery)
                                                            
                                                        <tr class="selected">

                                                            <td>

                                                                <div class="media flex-nowrap align-items-center"
                                                                    style="white-space: nowrap;">

                                                                    <div class="media-body">

                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex d-flex flex-column">
                                                                                <p class="mb-0"><strong
                                                                                        class="js-lists-values-name">#{{$delivery->id}}</strong>
                                                                                </p>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </td>

                                                            <td>

                                                                <div class="media flex-nowrap align-items-center"
                                                                    style="white-space: nowrap;">
                                                                    <div class="avatar avatar-32pt mr-8pt">

                                                                        <img src="{{ asset('assets/admin/images/people/110/guy-3.jpg') }}"
                                                                            alt="Avatar"
                                                                            class="avatar-img rounded-circle">

                                                                    </div>
                                                                    <div class="media-body">

                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex d-flex flex-column">
                                                                                <p class="mb-0"><strong
                                                                                        class="js-lists-values-name">
                                                                                        {{$delivery->customer->fname}}  {{$delivery->customer->lname}}
                                                                                        </strong></p>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </td>

                                                            <td>
                                                                <small class="js-lists-values-policy text-50"> {{$delivery->customer->deliveryTime->timing}}  </small>
                                                            </td>

                                                            <td>
                                                                <small
                                                                    class="js-lists-values-policy text-50">
                                                                    {{$delivery->customer->package->name}}</small>
                                                            </td>

                                                            <td class="text-center">
                                                                <strong>{{$delivery->status}}</strong>
                                                               
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
                                                            <span aria-hidden="true"
                                                                class="material-icons">chevron_left</span>
                                                            <span>Prev</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item dropdown">
                                                        <a class="page-link dropdown-toggle" data-toggle="dropdown"
                                                            href="#" aria-label="Page">
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

                                            </div>



                                        </div> <!-- end of container -->
                                    </div>

                                </div>
                            </div>

                            <!--   Chifs Tap -->
                            <div class="tab-pane text-70" id="chifs_tap">
                                <div class="card mb-lg-32pt p-4">
                                    <div class="row card-group-row my-3">
                                        <div class="col-sm-12">
                                            <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal" data-target=".new-chif">New Chif</a>
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
                        
                        
                        
                                                    <th>Department</th>
                        
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
                        
                                              @foreach ($chifs as $user)
                                                  
                                            
                        
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
                        
                                                        {{$user->role}}
                        
                                                    </td>
                        
                                                    <td>
                                                        <small class="js-lists-values-phone text-50"> {{$user->phone}}</small>
                                                    </td>
                        
                                                    <td>
                                                        <small class="js-lists-values-date text-50"> {{$user->created_at}}</small>
                                                    </td>
                                                    {{-- <td class="text-right">
                                                        <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td> --}}
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

                            <!--    Componets Tap -->
                            <div class="tab-pane text-70" id="consum_tap">

                                <div class="row card-group-row">
                                  

                                    {{-- counter or border bottom --}}
                                    <?php $counter = 1 ?>

                                    @foreach ($categories as $category)

                                    <div class="col-sm-12 text-center mt-3">

                                        {{-- cateegory name --}}
                                        @if ($counter == 1)
                                            <h4>{{$category->name}}</h4>
                                        @else
                                            <h4 class="pt-3" style="border-top:1px solid lightgrey;">{{$category->name}}</h4>
                                        @endif
                                        
                                    </div>


                                        {{-- components --}}
                                    @foreach ($category->components as $component)
                                        
                                     <div class="col-md-4 card-group-row__col">

                                        <div class="card card--elevated card-group-row__card">
                                            <div class="card-body row text-center">
        
                                                <div class="col-sm-12">
        
                                                 <span class=" d-inline-flex mr-16pt mr-3">
                                                   <img width="70" height="70" src="{{ asset('assets/admin/images/components/'.$component->img) }}">
                                                </span>
        
                                                </div>
                                               
                                                <div class="col-sm-12 text-center">
        
                                                     <div class="text-center">
                                                    <p class="" style="font-weight: bold;">{{$component->name}}</p>
                                                    <h6>Cosuming For Today :
                                                     <span  class="badge badge-notifications badge-accent">0.00 Gram</span>  </h6>
                                                </div>
        
                                                </div>
                                               
                                            </div>
                                          
                                        </div>
        
                                    </div>

                                    @endforeach
                                    {{-- end inner foreach --}}


                                    {{-- +counter --}}
                                    <?php $counter++; ?>

                                @endforeach
                                {{-- end outer foreach --}}
                                 

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

{{-- <script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

<script>
    var timepicker = new TimePicker('time', {
  lang: 'en',
  theme: 'dark'
});
timepicker.on('change', function(evt) {
  
  var value = (evt.hour || '00') + ':' + (evt.minute || '00');
  evt.element.value = value;

});
</script> --}}


@endsection








@section('modals')
    

{{-- new chif modal --}}
<div class="modal fade new-chif" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        
        <form action="{{route('admin.kitchen.create.chif')}}" method="POST">
            @csrf

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Chif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    
            <div class="modal-body">
                <div class="list-group-item">
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
                                <option value="master" selected>Master Chif</option>
                                <option value="chif">Chif</option>
    
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


@endsection