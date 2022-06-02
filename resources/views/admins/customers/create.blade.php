@extends('layouts.admin')




{{-- collection pass section --}}

<script>
var marginArray = @json($margin);
var cityChargeArray = @json($cityCharge);
var cityNameArray = @json($cityName);


var typeArray = @json($typeName);
var timingArray = @json($timingArray);

var packagePriceArray = @json($packagePrice);
var packageNameArray = @json($packageName);

</script>

{{-- end collection pass section --}}


<style>
    .footer {
        display: none !important;
    }
</style>




{{-- section --}}
@section('content')



{{-- progress --}}
<div class="py-32pt navbar-submenu">

    <div class="container-fluid page__container tab-content">

        <div class="progression-bar progression-bar--active-accent" role="tablist">
            <a href="#tab-a" data-value="#a" data-toggle="tab" role="tab"
                class="progression-bar__item progression-bar__item--complete">
                <span class="progression-bar__item-content">
                    <i class="material-icons progression-bar__item-icon">done</i>
                    <span class="progression-bar__item-text h5 mb-0 text-uppercase">General Infos</span>
                </span>
            </a>
            <a href="#tab-b" data-value="#b" data-toggle="tab" role="tab"
                class="progression-bar__item progression-bar__item--complete">
                <span class="progression-bar__item-content">
                    <i class="material-icons progression-bar__item-icon">done</i>
                    <span class="progression-bar__item-text h5 mb-0 text-uppercase">Subscription</span>
                </span>
            </a>

            <a href="#tab-e" data-value="#e" data-toggle="tab" role="tab"
                class="progression-bar__item progression-bar__item--complete"> <span
                    class="progression-bar__item-content">
                    <span class="progression-bar__item-content">
                        <i class="material-icons progression-bar__item-icon">done</i>
                        <span class="progression-bar__item-text h5 mb-0 text-uppercase">Instructions</span>
                    </span>
            </a>
            <a href="#tab-g" data-value="#g" data-toggle="tab" role="tab"
                class="progression-bar__item progression-bar__item--complete"> <span
                    class="progression-bar__item-content">
                    <span class="progression-bar__item-content">
                        <i class="material-icons progression-bar__item-icon">done</i>
                        <span class="progression-bar__item-text h5 mb-0 text-uppercase">Summary</span>
                    </span>
            </a>
            <a href="#tab-f" data-value="#f" data-toggle="tab" role="tab"
                class="progression-bar__item progression-bar__item--complete progression-bar__item--active">
                <span class="progression-bar__item-content">
                    <i class="material-icons progression-bar__item-icon"></i>
                    <span class="progression-bar__item-text h5 mb-0 text-uppercase">Payment</span>
                </span>
            </a>
            </a>
        </div>
    </div>
</div>





{{-- signup manually --}}
<div class="row my-2">
    <div class="col-sm-12 text-center">
    <h5>You want the customer to signup manually? <a href="{{route('customers.signup')}}"
                style=" text-decoration: underline; ">copy link</a></h5>
    </div>
</div>
{{-- end progress --}}












{{-- content --}}
<div class="container page__container">
    <form action="{{route('admin.newCustomer')}}" method="POST">
        @csrf
    <div class="page-section  "> 
  
        <div class="container-fluid page__container tab-content ">

          

            {{-- tab --}}
            <div class="tab-pane customer-tab active" data-id="a" id="customer-tab-1">

           
            <div class="col-md-12 p-0 mx-auto ">
                <div class="list-group list-group-form mb-0">
                    <div class="list-group-item">
                        <fieldset role="group" aria-labelledby="label-type" class="m-0 form-group">
                            <div class="form-row align-items-center">
                                <h3>General Information</h3>
                            </div>
                        </fieldset>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Full Name</label>
                            <div class="col-sm-9">
                                <div class="form-row">
                                    <div class="col-md-6 mb-16pt mb-sm-0">
                                        <input type="text" name="fname" class="form-control tab-field-1" placeholder="First Name">
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="lname" class="form-control tab-field-1" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Phone</label>
                            <div class="col-sm-9">
                                <input id="maskSample02" name="phone" type="text" class="form-control tab-field-1"
                                    placeholder="UAE phone: (971) (000-0000)" data-mask="(971) 000-0000"
                                    autocomplete="off" maxlength="14">
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Gender</label>
                            <div class="col-sm-3">
                                <div class="custom-controls-stacked">
                                    <div class="custom-control custom-radio">
                                        <input id="radioStacked1" value="male" name="gender" type="radio"
                                            class="custom-control-input" checked="">
                                        <label for="radioStacked1" class="custom-control-label">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="radioStacked2" value="female" name="gender" type="radio"
                                            class="custom-control-input">
                                        <label for="radioStacked2" class="custom-control-label">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Date Of Birth</label>
                            <div class="col-sm-9 pt-2">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <input type="date" name="dateofbirth" class="form-control tab-field-1" placeholder="Age">
                                    </div>
                                   
                                </div>
                            </div>
                    
                    
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Body</label>
                            <div class="col-sm-9 pt-2">
                                <div class="form-row">
                                  
                                    <div class="col-md-4">
                                        <input type="number" name="height" class="form-control tab-field-1" placeholder="height (cm)">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="weight" class="form-control tab-field-1" placeholder="Weight (kg)">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">How Active You Are?</label>
                            <div class="col-sm-4">
                                <select id="custom-select" name="activity" class="form-control custom-select">
                                    <option selected="Little or no exercise">Little or no exercise</option>
                                    <option value="Light Exercises 1-3 days/week">Light Exercises 1-3 days/week</option>
                                    <option value="Moderate exercise 3-5 days/week">Moderate exercise 3-5 days/week</option>
                                    <option value="Hard exercise 6-7 days a week">Hard exercise 6-7 days a week</option>
                                    <option value="Physical job & very hard exercise or training twice a daily">Physical job & very hard exercise or training twice a daily
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control tab-field-1" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Password</label>
                            <div class="col-sm-9">
                                <div class="form-row">
                                    <div class="col-md-6 mb-16pt mb-sm-0">
                                        <input type="password" name="password" class="form-control tab-field-1" placeholder="Password">
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" name="repeatpassword" class="form-control tab-field-1" placeholder="Repeat The Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Address</label>
                            <div class="col-sm-9">
                                <div class="form-row">
                                    <div class="col-md-4 mb-16pt mb-sm-0">
                                        <select required class="form-control custom-select city-select-1 tab-field-1" name="city">
                                    
                                            <option selected="" class="d-none"></option>
            
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
            
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select required  name="district" class="form-control custom-select district-select-1 tab-field-1">
                                            <option selected="" class="d-none"></option>
                                            @foreach ($districts as $district)
                                                <option class="d-none city-district city-district-{{ $district->city->id }}" value="{{ $district->id }}">{{ $district->name }}</option>
                                            @endforeach
            
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="address" class="form-control tab-field-1" placeholder="Address">
                                    </div>
                                </div>
                            </div>
                            <label class="col-form-label form-label col-sm-3"></label>
                            <div class="col-sm-9 pt-2">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <input type="text" name="block" class="form-control tab-field-1" placeholder="Block No">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="floor" class="form-control tab-field-1" placeholder="Floor/Villa">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="flat" class="form-control tab-field-1" placeholder="Flat No">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item text-right">

                        <div class="row w-100">
                            <div class="col-6 text-left">
                                
                            </div>
                            <div class="col-6 px-0 text-right">
                                <button type="button" disabled=""  id="customer-tab-next-button-1" class="btn btn-accent customer-tab-next-button">Next
                                    <i class=" material-icons icon--right">arrow_forward </i></button>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>


            {{-- tab --}}
            <div class="tab-pane customer-tab"  id="customer-tab-2">

           
            <div class="col-md-12 p-0 mx-auto tab-pane" data-id="b" id="tab-b">
                <div class="list-group list-group-form mb-0">
                    <div class="list-group-item">
                        <fieldset role="group" aria-labelledby="label-type" class="m-0 form-group">
                            <div class="form-row align-items-center">
                                <h3>Subscription Type</h3>
                            </div>
                        </fieldset>
                    </div>
                    <div class="list-group-item">
                        <div class="row align-items-center mb-0">
                            <div class="col-sm-12">
                                <div class="form-row">
                                    {{-- <div class="col-md-6 mb-16pt mb-sm-0">
                                        <a data-toggle="modal" data-target=".custom-disabled"
                                            class="btn btn-block btn-outline-accent"> <i
                                                class=" material-icons icon--left">star </i>Custom</a>
                                    </div> --}}
                                    <div class="col-md-12">
                                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                            data-target=".package"><i class=" material-icons icon--left">arrow_forward
                                            </i>Select Package</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item text-right">
                        <div class="row w-100">
                            <div class="col-6 text-left">
                                <button type="button" id="customer-tab-back-button-2" class="btn btn-accent customer-tab-back-button"><i class=" material-icons icon--left" style="width:20px;">arrow_backward </i>Back</button>
                            </div>
                            <div class="col-6 px-0 text-right">
                                <button type="button" disabled="" id="customer-tab-next-button-2" class="btn btn-accent customer-tab-next-button">Next
                                    <i class=" material-icons icon--right">arrow_forward </i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

            {{-- tab --}}
            <div class="tab-pane customer-tab" data-id="e" id="customer-tab-3">

            <div class="col-md-12 p-0 mx-auto tab-pane" data-id="e" id="tab-e">
                <div class="list-group list-group-form mb-0">
                    <div class="list-group-item">
                        <fieldset role="group" aria-labelledby="label-type" class="m-0 form-group">
                            <div class="form-row align-items-center">
                                <h3>Instructions</h3>
                            </div>
                        </fieldset>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Plan duration</label>
                            <div class="col-sm-9">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <label for="date_from" class="form-label">Start Date</label>
                                    <input required min="{{$start_date}}" id="date_from" type="date" class="form-control tab-field-3" name="from">
                                    </div>


                                </div>
                               
                               
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Plan Days</label>
                            <div class="col-sm-9">
                                <div class="form-group mt-2">
                                    <div class="d-flex">
                                        <div class="custom-control custom-radio mx-2">
                                            <input id="20days" name="daysplan" type="radio"
                                                class="custom-control-input summary-plandays" value="20" checked="">
                                            <label for="20days" class="custom-control-label">20 Days</label>
                                        </div>
                                        <div class="custom-control custom-radio mx-2">
                                            <input id="24days" name="daysplan" type="radio"
                                                class="custom-control-input summary-plandays" value="24">
                                            <label for="24days" class="custom-control-label">24 Days</label>
                                        </div>
    
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Recieve cutlery sets</label>
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                    <input checked="" type="checkbox" id="cutlery" class="custom-control-input" name="cutlery">
                                    <label class="custom-control-label" for="cutlery"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Cooler Bag</label>
                            <div class="col-sm-9">
                                <div class="custom-controls-stacked" style="display:flex;">
                                    <div class="custom-control custom-radio mx-2">
                                        <input id="radioStacked4" value="cooler-bag" name="bag-stacked" type="radio"
                                            class="custom-control-input summary-bag" checked="">
                                        <label for="radioStacked4" class="custom-control-label">Cooler Bag <span class="text-muted">(Extra charge applied)</span> </label>
                                    </div>
                                    <div class="custom-control custom-radio mx-2">
                                        <input id="radioStacked3" value="paper-bag" name="bag-stacked" type="radio"
                                            class="custom-control-input summary-bag">
                                        <label for="radioStacked3" class="custom-control-label">Paper Bag</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Deliver Days</label>
                            <div class="col-sm-9 pt-2" style="display: contents;">
                               
                                <div
                                @if ((array_key_exists('Sat', $off_days_array)))
                                class="custom-control
                                custom-checkbox mx-2 d-none" 
                                @else 
                                class="custom-control
                                custom-checkbox mx-2"
                                @endif >
                                    <input id="Satrday" type="checkbox" name="saturday" value="saturday" class="custom-control-input Satrday tab-field-3 tab-field-3-1 summary-deliverydays">
                                    <label for="Satrday" class="custom-control-label">Saturday</label>
                                </div>

                                <div   @if ((array_key_exists('Sun', $off_days_array)))
                                class="custom-control
                                custom-checkbox mx-2 d-none" 
                                @else 
                                class="custom-control
                                custom-checkbox mx-2"
                                @endif>
                                    <input id="sunday" type="checkbox" name="sunday" value="sunday" class="custom-control-input sunday tab-field-3 tab-field-3-1 summary-deliverydays">
                                    <label for="sunday" class="custom-control-label">Sunday </label>
                                </div>

                                <div   @if ((array_key_exists('Mon', $off_days_array)))
                                class="custom-control
                                custom-checkbox mx-2 d-none" 
                                @else 
                                class="custom-control
                                custom-checkbox mx-2"
                                @endif>
                                    <input id="Monday" type="checkbox" name="monday" value="monday" class="custom-control-input Monday tab-field-3 tab-field-3-1 summary-deliverydays">
                                    <label for="Monday" class="custom-control-label">Monday</label>
                                </div>

                                <div   @if ((array_key_exists('Tus', $off_days_array)))
                                class="custom-control
                                custom-checkbox mx-2 d-none" 
                                @else 
                                class="custom-control
                                custom-checkbox mx-2"
                                @endif>
                                    <input id="Tuesday" type="checkbox" name="tuesday" value="tuesday" class="custom-control-input Tuesday tab-field-3 tab-field-3-1 summary-deliverydays">
                                    <label for="Tuesday" class="custom-control-label">Tuesday</label>
                                </div>

                                <div   @if ((array_key_exists('Wed', $off_days_array)))
                                class="custom-control
                                custom-checkbox mx-2 d-none" 
                                @else 
                                class="custom-control
                                custom-checkbox mx-2"
                                @endif>
                                    <input id="Wednesday" type="checkbox" name="wednesday" value="wednesday" class="custom-control-input Wednesday tab-field-3 tab-field-3-1 summary-deliverydays">
                                    <label for="Wednesday" class="custom-control-label">Wednesday</label>
                                </div>

                                <div   @if ((array_key_exists('Thu', $off_days_array)))
                                class="custom-control
                                custom-checkbox mx-2 d-none" 
                                @else 
                                class="custom-control
                                custom-checkbox mx-2"
                                @endif>
                                    <input id="Thursday" type="checkbox" name="thursday" value="thursday" class="custom-control-input Thursday tab-field-3 tab-field-3-1 summary-deliverydays">
                                    <label for="Thursday" class="custom-control-label">Thursday</label>
                                </div>

                                <div   @if ((array_key_exists('Fri', $off_days_array)))
                                class="custom-control
                                custom-checkbox mx-2 d-none" 
                                @else 
                                class="custom-control
                                custom-checkbox mx-2"
                                @endif>
                                    <input id="Friday" type="checkbox" name="friday" value="friday" class="custom-control-input Friday">
                                    <label for="Friday" class="custom-control-label">Friday</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Delivery Time</label>
                            <div class="col-sm-9">
                                <select id="custom-select04" name="delivery_time" class="form-control custom-select tab-field-3 summary-deliverytime">
                                    @foreach ($timings as $time)
                                <option value="{{$time->id}}" >{{$time->timing}}</option>
                                    @endforeach
                              
                                   
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">


                            <label class="col-form-label form-label col-sm-3">Delivery instructions</label>
                            <div class="col-sm-9 pt-2">
                                <select id="select01" data-toggle="select" name="delivery_instructions" class="form-control">
                                    <option selected="Don't ring the bell">Don't ring the bell</option>
                                    <option value="Leave The box outside">Leave The box outside</option>
                                    <option value="none">None</option>
                                </select>
                               
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Allergies and preferences</label>
                            <div class="col-sm-9">
                                <label class="mb-0" style="text-transform: uppercase;">exclude</label><br>
                                <span class="text-muted">you can select up to 3 ingredients to exclude from your meal
                                    plan</span>
                                <select id="select02" name="excludes[]" data-toggle="select" multiple
                                    class="form-control form-control-lg">
                                    <option selected="" disabled="">Select any exclude</option>
                                  @foreach ($components as $component)
                                  <option value="{{$component->id}}">{{$component->name}}</option>
                                  @endforeach
                                  
                                </select>

                               
                            </div>
                        </div>
                    </div>






                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Promo Code</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control summary-promocode">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="list-group-item text-right">
                    <div class="row w-100">
                        <div class="col-6 text-left">
                            <button type="button" id="customer-tab-back-button-3" class="btn btn-accent customer-tab-back-button"><i
                                    class=" material-icons icon--left" style="width:20px;">arrow_backward </i>Back</button>
                        </div>
                        <div class="col-6 px-0 text-right">
                            <button type="button" disabled="" id="customer-tab-next-button-3" class="btn btn-accent customer-tab-next-button">Next
                                <i class=" material-icons icon--right">arrow_forward </i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            {{-- tab --}}
            <div class="tab-pane customer-tab" data-id="g" id="customer-tab-4">

           
            <div class="col-md-12 p-0 mx-auto tab-pane" data-id="g" id="tab-g">
                <div class="list-group list-group-form mb-0">
                    <div class="list-group-item">
                        <fieldset role="group" aria-labelledby="label-type" class="m-0 form-group">
                            <div class="form-row align-items-center">
                                <h3>Summary</h3>
                            </div>
                        </fieldset>
                    </div>
                    <div class="card table-responsive">
                        <table class="table table-flush table--elevated">
                            <thead class="my-5">
                                <tr>
                                    <th> <span style="font-size: 16px;">Description</span> </th>
                                    <th class="text-right"><span style="font-size: 16px;">Amount</span> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding-top:17px; padding-bottom:17px">
                                        <p class="mb-0"><strong>Package Subscription</strong></p>
                                    </td>

                                    <td class="text-right" id="summary-packageid">-</td>
                                </tr>

                                <tr>
                                    <td style="padding-top:17px; padding-bottom:17px">
                                        <p class="mb-0"><strong>Meals Per Day</strong></p>
                                    </td>

                                    <td class="text-right" id="summary-mealtype"></td>
                                </tr>


                                <tr>
                                    <td style="padding-top:17px; padding-bottom:17px">
                                        <p class="mb-0"><strong>Number Of Days</strong></p>
                                    </td>
                                
                                
                                    <td class="text-right" id="summary-plandays">-</td>
                                </tr>


                                <tr>
                                    <td style="padding-top:17px; padding-bottom:17px">
                                        <p class="mb-0"><strong>Delivery Days</strong></p>
                                    </td>
                                    <td class="text-right" style="text-transform: capitalize !important;" id="summary-deliverydays"></td>
                                </tr>



                                <tr>
                                    <td style="padding-top:17px; padding-bottom:17px">
                                        <p class="mb-0"><strong>Delivery Timing</strong></p>
                                    </td>
                                    <td class="text-right" id="summary-deliverytime"></td>
                                </tr>

                                <tr>
                                    <td style="padding-top:17px; padding-bottom:17px">
                                        <p class="mb-0"><strong>Delivery Area</strong></p>
                                    </td>

                                    <td class="text-right" id="summary-deliverycharge">-</td>
                                </tr>



                             



                                


                                <tr>

                                    <td style="padding-top:17px; padding-bottom:17px"><strong>Credit Discount</strong></td>
                                    <td class="text-right text-danger" id="summary-promo">-</td>
                                </tr>

                            </tbody>
                        </table>

                        <table class="table table-flush">
                            <tfoot>

                                <tr style="border: 3px dotted #303840;">
                                    <td style="font-size: 16px;"><strong>Total Amount</strong></td>
                                    <td class="text-right" style=" text-decoration: underline; font-size: 16px; ">
                                        <strong style="font-weight: bold" id="summary-totalamount">-</strong> (AED)</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
                <div class="list-group-item text-right">
                    <div class="row w-100">
                        <div class="col-6 text-left">
                            <button type="button" id="customer-tab-back-button-4" class="btn btn-accent customer-tab-back-button"><i
                                    class=" material-icons icon--left" style="width:20px;">arrow_backward </i>Back</button>
                        </div>
                        <div class="col-6 px-0 text-right">
                            <button type="button" id="customer-tab-next-button-4" class="btn btn-accent customer-tab-next-button">Next
                                <i class=" material-icons icon--right">arrow_forward </i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
            {{-- tab --}}

            <div class="tab-pane customer-tab" data-id="f" id="customer-tab-5">

            <div class="col-md-12 p-0 mx-auto tab-pane" data-id="f" id="tab-f">
                <div class="list-group list-group-form mb-0">
                    <div class="list-group-item">
                        <fieldset role="group" aria-labelledby="label-type" class="m-0 form-group">
                            <div class="form-row align-items-center">
                                <h3>Payment</h3>
                            </div>
                        </fieldset>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Payment Method</label>
                            <div class="col-sm-9">
                                <div class="form-row">
                                    <div role="group" aria-labelledby="label-type" class="col-md-9">
                                        <div role="group" class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-outline-secondary">
                                                <input type="radio" id="payment_cc" name="payment_type" value="1"
                                                    onclick="openp('cc')" checked="" aria-checked="true" class="tab-field-5 tab-radio-5-1"> Debit or
                                                credit card
                                            </label>
                                            <label class="btn btn-outline-secondary active">
                                                <input type="radio" id="payment_pp" name="payment_type" value="pp"
                                                    onclick="openp('pp')" aria-checked="true" class="tab-field-5 tab-radio-5-2"> PayPal
                                            </label>
                                            <label class="btn btn-outline-secondary active tab-radio-5-3">
                                                <input type="radio" id="payment_cod" name="payment_type" value="cod"
                                                    onclick="openp('cod')" aria-checked="true" class="tab-field-5"> Cash On Delivery
                                            </label>
                                            <label class="btn btn-outline-secondary active tab-radio-5-4">
                                                <input type="radio" id="payment_bt" name="payment_type" value="bt"
                                                    onclick="openp('bt')" aria-checked="true" class="tab-field-5"> Bank Transfer
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item payment" id="cc">
                        <div class="list-group-item">
                            <div class="form-group row align-items-center mb-0">
                                <label class="col-form-label form-label col-sm-3">Card number</label>
                                <div class="col-sm-9">
                                    <input type="text" name="card_number" class="form-control tab-field-5 tab-field-5-1" placeholder="Credit / debit card number" />
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group row align-items-center mb-0">
                                <label class="col-form-label form-label col-sm-3">Security code (CVV)</label>
                                <div class="col-sm-9">
                                    <input type="text" name="cvv" class="form-control tab-field-5 tab-field-5-1" placeholder="CVV" style="width:80px">
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div role="group" aria-labelledby="label-expire_month" class="m-0 form-group">
                                <div class="form-row align-items-center">
                                    <label id="label-expire_month" for="expire_month"
                                        class="col-md-3 col-form-label form-label">Expiration date</label>
                                    <div class="col-md-9">
                                        <div class="form-row">
                                            
                                           <input type="date" name="expiration_date" class="form-control tab-field-5 tab-field-5-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="list-group-item payment" id="pp" style="display: none;">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Paypal Email</label>
                            <div class="col-sm-9">
                                <input id="maskSample02" type="text" class="form-control tab-field-5 tab-field-5-2" name="paybal_email"
                                    placeholder="paypal@paypal.com" >
                            </div>
                        </div>
                    </div>


                    <div class="list-group-item payment" id="cod" style="display: none;">
                        <h5>* Cash Will Be Collected From First Delivery</h5>
                    </div>
                    <div class="list-group-item  payment" id="bt" style="display: none;">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">
                                Send Money Directly to a Bank Account</label>
                            <div class="col-sm-9 pt-2">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <label class="col-form-label ">
                                            IBAN</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="col-form-label "><b>
                                                # 976431246798525321697</b></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item text-right">
                        <div class="row w-100">
                            <div class="col-6 text-left">
                                <button type="button" id="customer-tab-back-button-5" class="btn btn-accent customer-tab-back-button"><i
                                        class=" material-icons icon--left" style="width:20px;">arrow_backward </i>Back</button>
                            </div>
                            <div class="col-6 px-0 text-right">
                                <button type="submit" disabled="" class="btn btn-success customer-tab-next-button" id="customer-tab-next-button-5">Sumbit
                                <i class=" material-icons icon--right">done </i></button>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        </div>

   
    </div>







    {{-- modal --}}


    

    <div class="modal fade package" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Package Subscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="form-group row align-items-center">
                        <div class="col-sm-12 row text-center">
                            
                            @php
                                $tmpcounter = 1;
                            @endphp
    
                            @foreach ($packages as $package)
                                        <div class="col-4 text-center mb-3">

                                        @if ($tmpcounter == 1)
                                            <label for="lean-package-checkbox-{{$package->id}}" class="package-labels active">
                                            
                                            
                                            <!-- checkbox -->
                                            <input type="radio" name="customer_package" id="lean-package-checkbox-{{$package->id}}" value="{{$package->id}}"
                                                class="d-none summary-packageid" checked="">
                                        @else

                                            <label for="lean-package-checkbox-{{$package->id}}" class="package-labels">
                                        
                                            
                                            <!-- checkbox -->
                                            <input type="radio" name="customer_package" id="lean-package-checkbox-{{$package->id}}" value="{{$package->id}}"
                                                class="d-none summary-packageid">
                                        
                                        @endif


                                        @php
                                        $tmpcounter++;
                                        @endphp
                                        
    
                                                <img src="{{ asset('assets/admin/images/packages/'.$package->img) }}" alt="">
    
                                                <h5 class="mb-1" style="height:48px; overflow:hidden;">{{$package->name}}</h5>
                                                
                                                <div class="col-12">
                                                    <h6 style="height:39px; overflow:hidden;">{{ $package->desc }}</h6>
                                                </div>

                                                <div class="row mt-4 mx-2">
                                                    <div class="col-6"
                                                        style="border-right: 1px solid lightgrey; border-bottom: 1px solid lightgrey;">
                                                        <label class="form-label">Kcals</label>
                                                        <h5 style="font-size: 15px;">({{$package->cals}})</h5>
                                                    </div>
                                                    <div class="col-6" style=" border-bottom: 1px solid lightgrey; ">
                                                        <label class="form-label">Protein</label>
                                                        <h5 style="font-size: 15px;">({{$package->proteins}})</h5>
                                                    </div>
    
                                                    <div class="col-6" style="border-right: 1px solid lightgrey;">
                                                        <label class="form-label mt-3">Carbo.</label>
                                                        <h5 style="font-size: 15px;">({{$package->carbs}})</h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="form-label mt-3">Fats</label>
                                                        <h5 style="font-size: 15px;">({{$package->fats}})</h5>
                                                    </div>
                                                    

                                                    
                                                </div>
    
                                            </label>
    
                                        </div>
                                        <!-- end package -->
                                    @endforeach
                        </div>

                          
                            {{-- <div class="col-lg-4 card-group-row__col">
                                <div class="card card-group-row__card p-16pt">
                                    <a href="#" class="d-block mb-16pt"><img
                                            src="{{ asset('assets/admin/images/stories/spicy.png') }}" alt=""
                                            style="height: 200px;" class="card-img card-img-cover"></a>
                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a onclick="ShowAndHide()" class="mb-8pt ptn text-center">
                                                <strong>
                                                    <h3><b>{{$package->name}}</b></h3>
                                                </strong>
                                            </a>
                                            <div class="d-flex align-items-center mb-8pt">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
    
                         
                           
    
    
                        <div class="col-md-12 row"  id="meal">
                            <label class="col-form-label form-label col-sm-3">Choose The Meals</label>
                            <div class="col-9 row m-3">
                                @foreach ($types as $type)
                                 <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                    <input id="type-{{$type->id}}" type="checkbox" name="{{$type->name}}" value="{{$type->id}}" class="custom-control-input tab-field-2 tab-field-2-1 summary-mealtype">
                                        <label for="type-{{$type->id}}" class="custom-control-label"> 
                                            {{$type->name}} </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
    
                            <input type="hidden" id="mealtypescount" value="{{$types->count()}}">
    
    
                            <div class="form-group row align-items-center m-2">
                                <label class="col-form-label form-label col-sm-3">Note</label>
                                <div class="col-sm-9">
                                    <textarea name="modal-note" class="form-control" id="" cols="30" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
                    <button class="btn btn-primary" type="submit" id="packagemodelbtn" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    {{-- package sub modal --}}
    
     </form>
</div>
{{-- end content --}}













@endsection
{{-- end section --}}





@section('scripts')

{{-- jquery --}}
<script src="{{ asset('assets/admin/vendor/jquery.min.js') }}"></script>

<!-- customer meals -->
<script src="{{ asset('assets/admin/js/customer-meals.js') }}"></script>


{{-- new customers page --}}
<script src="{{ asset('assets/admin/js/new-customer-page.js') }}"></script>

<script src="{{ asset('assets/admin/js/city-select.js') }}"></script>

<!-- customer signup js -->
<script src="{{ asset('assets/admin/js/customer-signup.js') }}"></script>


{{-- wizard --}}
<script src="{{ asset('assets/admin/js/customer-tabs.js') }}"></script>


@endsection











{{-- modals section --}}
@section('modals')




{{-- package subs modal --}}







{{-- custom subs modal --}}
<div class="modal fade custom" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Custom Subscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group-item" id="custom">
                    <div class="form-group row align-items-center mb-0">
                        <div class="form-group col-sm-12 mt-3 text-center">
                            <label class="form-label my-3">Meal Macros Target</label>
                            <div class="form-row">
                                <div class="col py-3 card mx-2">
                                    <label class="form-label text-muted">Kcals</label>
                                    <div class="text-center" style=" display: block ruby; ">
                                        <input type="number" class="form-control  p-2" style=" width: 60%; " name="">
                                    </div>

                                </div>
                                <div class="col pt-3 card mx-2">
                                    <label class="form-label text-muted">Protein</label>
                                    <div class="text-center" style=" display: block ruby; ">
                                        <input type="number" class="form-control  p-2" style=" width: 60%; " name="">
                                    </div>
                                </div>
                                <div class="col pt-3 card mx-2">
                                    <label class="form-label text-muted">Carbohydrates</label>
                                    <div class="text-center" style=" display: block ruby; ">
                                        <input type="number" class="form-control  p-2" style=" width: 60%; " name="">
                                    </div>
                                </div>
                                <div class="col pt-3 card mx-2">
                                    <label class="form-label text-muted">Fats</label>
                                    <div class="text-center" style=" display: block ruby; ">
                                        <input type="number" class="form-control  p-2" style=" width: 60%; " name="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-sm-12 text-left"> </div>
                        <div class="col-md-9 mb-16pt mb-sm-0">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox pl-2">
                                    <input id="daily" checked type="checkbox" class="custom-control-input">
                                    <label for="daily" class="custom-control-label">Devide Equally <small
                                            class="text-secondary">&nbsp; (Devide This Equally By Meal)</small></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">


                    <div class="col-form-label form-label col-sm-12 text-center">
                        <label class="form-label">Choose The Meals</label>
                    </div>



                    <!-- divide manual wrapper -->
                    <div class="col-sm-12 d-none" id="divide-manual">


                        <!-- breakfast meal -->
                        <div class="form-row align-items-top mb-2 border-bottom-1">

                            <!-- checkbox breakfast -->
                            <div class="form-group col-md-6 mb-16pt mb-sm-3">

                                <div class="custom-control custom-checkbox">

                                    <input id="customer-breakfast-checkbox" type="checkbox"
                                        class="custom-control-input">

                                    <label for="customer-breakfast-checkbox"
                                        class="custom-control-label custom-control-label-checkbox">Breakfast</label>

                                </div>

                            </div>

                            <!-- add button -->
                            <div class="col-md-6 text-right mb-16pt mb-sm-3">
                                <button id="customer-breakfast-button"
                                    class="btn btn-outline-accent border-radius-3 d-none" title="Add your Components"><i
                                        class="fa fa-plus-circle"></i></button>
                            </div>



                            <!-- col 12  -->
                            <div id="customer-breakfast-wrapper" class="col-md-12 mb-16pt mb-sm-0 d-none">


                                <!-- 4 option group -->
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-label">Kcals</label>
                                            <input type="number" value="270" class="form-control" placeholder="calorie">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Protein</label>
                                            <input type="number" value="81" class="form-control" placeholder="Protein">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Carbohydrates</label>
                                            <input type="number" value="6.2" class="form-control" placeholder="Carbs">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Fats</label>
                                            <input type="number" value="3.6" class="form-control" placeholder="Fat">
                                        </div>
                                    </div>
                                </div>



                                <!-- added meals row -->
                                <div class="form-group">
                                    <div class="form-row">




                                        <div id="customer-breakfast-row" class="col-12">



                                            <!-- added meals will be here -->




                                        </div>
                                        <!-- end col 12 -->


                                    </div>
                                </div>
                                <!-- end of add meal (repeat here) -->

                            </div>
                            <!-- end col 12 -->


                        </div>
                        <!-- end breakfast row -->





                        <!-- launch meal -->
                        <div class="form-row align-items-top mb-2 border-bottom-1">

                            <!-- checkbox launch -->
                            <div class="form-group col-md-6 mb-16pt mb-sm-3">

                                <div class="custom-control custom-checkbox">

                                    <input id="customer-launch-checkbox" type="checkbox" class="custom-control-input">

                                    <label for="customer-launch-checkbox"
                                        class="custom-control-label custom-control-label-checkbox">Lunch</label>

                                </div>

                            </div>

                            <!-- add button -->
                            <div class="col-md-6 text-right mb-16pt mb-sm-3">
                                <button id="customer-launch-button"
                                    class="btn btn-outline-accent border-radius-3 d-none" title="Add your Components"><i
                                        class="fa fa-plus-circle"></i></button>
                            </div>



                            <!-- col 12  -->
                            <div id="customer-launch-wrapper" class="col-md-12 mb-16pt mb-sm-0 d-none">


                                <!-- 4 option group -->
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-label">Kcals</label>
                                            <input type="number" value="270" class="form-control" placeholder="calorie">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Protein</label>
                                            <input type="number" value="81" class="form-control" placeholder="Protein">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Carbohydrates</label>
                                            <input type="number" value="6.2" class="form-control" placeholder="Carbs">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Fats</label>
                                            <input type="number" value="3.6" class="form-control" placeholder="Fat">
                                        </div>
                                    </div>
                                </div>



                                <!-- added meals row -->
                                <div class="form-group">
                                    <div class="form-row">



                                        <div id="customer-launch-row" class="col-12">



                                            <!-- added meals will be here -->




                                        </div>
                                        <!-- end col 12 -->


                                    </div>
                                </div>
                                <!-- end of add meal (repeat here) -->

                            </div>
                            <!-- end col 12 -->


                        </div>
                        <!-- end launch row -->










                        <!-- dinner meal -->
                        <div class="form-row align-items-top mb-2 border-bottom-1">

                            <!-- checkbox dinner -->
                            <div class="form-group col-md-6 mb-16pt mb-sm-3">

                                <div class="custom-control custom-checkbox">

                                    <input id="customer-dinner-checkbox" type="checkbox" class="custom-control-input">

                                    <label for="customer-dinner-checkbox"
                                        class="custom-control-label custom-control-label-checkbox">Dinner</label>

                                </div>

                            </div>

                            <!-- add button -->
                            <div class="col-md-6 text-right mb-16pt mb-sm-3">
                                <button id="customer-dinner-button"
                                    class="btn btn-outline-accent border-radius-3 d-none" title="Add your Components"><i
                                        class="fa fa-plus-circle"></i></button>
                            </div>



                            <!-- col 12  -->
                            <div id="customer-dinner-wrapper" class="col-md-12 mb-16pt mb-sm-0 d-none">


                                <!-- 4 option group -->
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-label">Kcals</label>
                                            <input type="number" value="270" class="form-control" placeholder="calorie">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Protein</label>
                                            <input type="number" value="81" class="form-control" placeholder="Protein">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Carbohydrates</label>
                                            <input type="number" value="6.2" class="form-control" placeholder="Carbs">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Fats</label>
                                            <input type="number" value="3.6" class="form-control" placeholder="Fat">
                                        </div>
                                    </div>
                                </div>



                                <!-- added meals row -->
                                <div class="form-group">
                                    <div class="form-row">



                                        <div id="customer-dinner-row" class="col-12">



                                            <!-- added meals will be here -->




                                        </div>
                                        <!-- end col 12 -->


                                    </div>
                                </div>
                                <!-- end of add meal (repeat here) -->

                            </div>
                            <!-- end col 12 -->


                        </div>
                        <!-- end dinner row -->














                        <!-- snack meal -->
                        <div class="form-row align-items-top mb-2 border-bottom-1">

                            <!-- checkbox snack -->
                            <div class="form-group col-md-6 mb-16pt mb-sm-3">

                                <div class="custom-control custom-checkbox">

                                    <input id="customer-snack-checkbox" type="checkbox" class="custom-control-input">

                                    <label for="customer-snack-checkbox"
                                        class="custom-control-label custom-control-label-checkbox">Snacks</label>

                                </div>

                            </div>

                            <!-- add button -->
                            <div class="col-md-6 text-right mb-16pt mb-sm-3">
                                <button id="customer-snack-button" class="btn btn-outline-accent border-radius-3 d-none"
                                    title="Add your Components"><i class="fa fa-plus-circle"></i></button>
                            </div>



                            <!-- col 12  -->
                            <div id="customer-snack-wrapper" class="col-md-12 mb-16pt mb-sm-0 d-none">


                                <!-- 4 option group -->
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-label">Kcals</label>
                                            <input type="number" value="270" class="form-control" placeholder="calorie">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Protein</label>
                                            <input type="number" value="81" class="form-control" placeholder="Protein">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Carbohydrates</label>
                                            <input type="number" value="6.2" class="form-control" placeholder="Carbs">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Fats</label>
                                            <input type="number" value="3.6" class="form-control" placeholder="Fat">
                                        </div>
                                    </div>
                                </div>



                                <!-- added meals row -->
                                <div class="form-group">
                                    <div class="form-row">



                                        <div id="customer-snack-row" class="col-12">



                                            <!-- added meals will be here -->




                                        </div>
                                        <!-- end col 12 -->


                                    </div>
                                </div>
                                <!-- end of add meal (repeat here) -->

                            </div>
                            <!-- end col 12 -->


                        </div>
                        <!-- end snack row -->










                        <!-- preworkout meal -->
                        <div class="form-row align-items-top mb-2 border-bottom-1">

                            <!-- checkbox preworkout -->
                            <div class="form-group col-md-6 mb-16pt mb-sm-3">

                                <div class="custom-control custom-checkbox">

                                    <input id="customer-preworkout-checkbox" type="checkbox"
                                        class="custom-control-input">

                                    <label for="customer-preworkout-checkbox"
                                        class="custom-control-label custom-control-label-checkbox">Pre-Workout</label>

                                </div>

                            </div>

                            <!-- add button -->
                            <div class="col-md-6 text-right mb-16pt mb-sm-3">
                                <button id="customer-preworkout-button"
                                    class="btn btn-outline-accent border-radius-3 d-none" title="Add your Components"><i
                                        class="fa fa-plus-circle"></i></button>
                            </div>



                            <!-- col 12  -->
                            <div id="customer-preworkout-wrapper" class="col-md-12 mb-16pt mb-sm-0 d-none">


                                <!-- 4 option group -->
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-label">Kcals</label>
                                            <input type="number" value="270" class="form-control" placeholder="calorie">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Protein</label>
                                            <input type="number" value="81" class="form-control" placeholder="Protein">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Carbohydrates</label>
                                            <input type="number" value="6.2" class="form-control" placeholder="Carbs">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Fats</label>
                                            <input type="number" value="3.6" class="form-control" placeholder="Fat">
                                        </div>
                                    </div>
                                </div>



                                <!-- added meals row -->
                                <div class="form-group">
                                    <div class="form-row">



                                        <div id="customer-preworkout-row" class="col-12">



                                            <!-- added meals will be here -->




                                        </div>
                                        <!-- end col 12 -->


                                    </div>
                                </div>
                                <!-- end of add meal (repeat here) -->

                            </div>
                            <!-- end col 12 -->


                        </div>
                        <!-- end preworkout row -->












                        <!-- postworkout meal -->
                        <div class="form-row align-items-top mb-2 border-bottom-1">

                            <!-- checkbox postworkout -->
                            <div class="form-group col-md-6 mb-16pt mb-sm-3">

                                <div class="custom-control custom-checkbox">

                                    <input id="customer-postworkout-checkbox" type="checkbox"
                                        class="custom-control-input">

                                    <label for="customer-postworkout-checkbox"
                                        class="custom-control-label custom-control-label-checkbox">Post-Workout</label>

                                </div>

                            </div>

                            <!-- add button -->
                            <div class="col-md-6 text-right mb-16pt mb-sm-3">
                                <button id="customer-postworkout-button"
                                    class="btn btn-outline-accent border-radius-3 d-none" title="Add your Components"><i
                                        class="fa fa-plus-circle"></i></button>
                            </div>



                            <!-- col 12  -->
                            <div id="customer-postworkout-wrapper" class="col-md-12 mb-16pt mb-sm-0 d-none">


                                <!-- 4 option group -->
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-label">Kcals</label>
                                            <input type="number" value="270" class="form-control" placeholder="calorie">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Protein</label>
                                            <input type="number" value="81" class="form-control" placeholder="Protein">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Carbohydrates</label>
                                            <input type="number" value="6.2" class="form-control" placeholder="Carbs">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Fats</label>
                                            <input type="number" value="3.6" class="form-control" placeholder="Fat">
                                        </div>
                                    </div>
                                </div>



                                <!-- added meals row -->
                                <div class="form-group">
                                    <div class="form-row">



                                        <div id="customer-postworkout-row" class="col-12">



                                            <!-- added meals will be here -->




                                        </div>
                                        <!-- end col 12 -->


                                    </div>
                                </div>
                                <!-- end of add meal (repeat here) -->

                            </div>
                            <!-- end col 12 -->


                        </div>
                        <!-- end postworkout row -->

                    </div>
                    <!-- end col 12 -->

                    <div class="col-sm-12 row px-4" id="divide-auto">
                        <div class="custom-control custom-checkbox px-2 col-2">
                            <input id="breakfast2" type="checkbox" class="custom-control-input Satrday">
                            <label for="breakfast2" class="custom-control-label">Breakfast</label>
                        </div>
                        <div class="custom-control custom-checkbox px-2 col-2">
                            <input id="lunch2" type="checkbox" class="custom-control-input sunday ">
                            <label for="lunch2" class="custom-control-label">Lunch</label>
                        </div>
                        <div class="custom-control custom-checkbox px-2 col-2">
                            <input id="dinner2" type="checkbox" class="custom-control-input Monday">
                            <label for="dinner2" class="custom-control-label">Dinner</label>
                        </div>
                        <div class="custom-control custom-checkbox px-2 col-2">
                            <input id="snack2" type="checkbox" class="custom-control-input Tuesday">
                            <label for="snack2" class="custom-control-label">Snack</label>
                        </div>
                        <div class="custom-control custom-checkbox px-2 col-2">
                            <input id="postworkout2" type="checkbox" class="custom-control-input Wednesday">
                            <label for="postworkout2" class="custom-control-label">Post Workout</label>
                        </div>
                        <div class="custom-control custom-checkbox px-2 col-2">
                            <input id="preworkout2" type="checkbox" class="custom-control-input Thursday">
                            <label for="preworkout2" class="custom-control-label">Pre Workout</label>
                        </div>

                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end list item -->


            <!-- another list item -->
            <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                    <label class="col-form-label form-label col-sm-3">Note</label>
                    <div class="col-sm-9">
                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                    </div>
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
{{-- end modals --}}
@endsection
