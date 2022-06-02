@extends('layouts.admin')



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Menu Management</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Package Meals</a></li>



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






                            <div class="col-auto border-left border-right" style="width: 100%;">
                                <a href="#componets_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start text-center">
                                    <span class="h2 mb-0 mr-3">

                                    </span>
                                    
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">{{ strtoupper($package->name) }} MEALS</strong>
                                        <small class="card-subtitle text-50">Manage {{ $package->name }} Meals</small>
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
                                

                                {{-- meal Group (based on meal_type) --}}
                                @foreach ($package->meals->sortBy('meal_type_id')->groupBy('meal_type_id') as $mealGroup => $packageMeals)


                                <div class="col-12 text-center">
                                    <h4>{{ $meal_types[$mealGroup] }} Meals</h4>
                                </div>
                                
                                @foreach ($packageMeals as $packageMeal)
                                    
                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/meals/'.$packageMeal->meal->img) }}">
                                                </span>
                                                <h4 class="mb-8pt">{{ $packageMeal->meal->name }}</h4>

                                                <h6 class="mb-0">{{ $meal_types[$mealGroup] }}</h6>
                                                <hr class="mt-2">

                                                {{-- foreach ingredients --}}
                                                <h5>ingredients</h5>
                                                <p class="text-70 mb-0">
                                                    @foreach ($packageMeal->components as $component)
                                                        | {{ $component->component->name }}
                                                    @endforeach
                                                </p>
                                                {{-- end ingredients --}}
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6 text-left pl-4">
                                                <p style="font-weight:500; font-size:12px; text-align:center;"> Kcals<br>({{ $packageMeal->cals }}g)</p>
                                            </div>
                                            <div class="col-sm-6 text-left pl-4">
                                                <p style="font-weight:500; font-size:12px; text-align:center;"> Proteins<br>({{ $packageMeal->proteins }}g)</p>
                                            </div>
                                            <div class="col-sm-6 text-left pl-4">
                                                <p style="font-weight:500; font-size:12px; text-align:center;"> Carbs<br>({{ $packageMeal->carbs }}g)</p>
                                            </div>
                                            <div class="col-sm-6 text-left pl-4">
                                                <p style="font-weight:500; font-size:12px; text-align:center"> Fats<br>({{ $packageMeal->fats }}g)</p>
                                            </div>
                                        </div>

                                        <div class="card-footer row">
                                            <div class="col-sm-6 text-center">
                                                <h6>Cost Price<br> {{ $packageMeal->price }} AED</h6>
                                            </div>


                                            {{-- check if its a meal --}}
                                            @php

                                                $mealPackingPrice = 0;

                                                if ($packageMeal->meal->meal_category_id == 3) {
                                                    $mealPackingPrice = $margin->packing;
                                                }
                                                
                                                
                                            @endphp




                                            <div class="col-sm-6 text-center">
                                                <h6>Selling Price<br>{{ $packageMeal->price + (($packageMeal->price * $margin->margin) / 100) + (($packageMeal->price * $margin->operation) / 100) + $mealPackingPrice }} AED</h6>
                                            </div>



                                            <div class="col-sm-12 text-center">
                                                <button type="button" data-toggle="modal" data-target=".edit-mea-{{ $packageMeal->id }}" class="btn btn-none">
                                                    <i class="fas fa-edit text-primary"></i>
                                                </button>

                                                <button type="button" class="btn btn-none">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{-- end card --}}


                                @endforeach


                                <div class="col-12">
                                    <hr>
                                </div>

                                @endforeach
                                {{-- end card foreach --}}


                                

                            </div>
                            {{-- end row --}}
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

@endsection







@section('modals')

@foreach ($package->meals as $packageMeal)
    
{{-- edit meal modal --}}
<div class="modal fade edit-meal-{{ $packageMeal->id }}" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Package Meal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- add package form --}}
            <form action="{{ route('admin.addPackage') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    <div class="list-group-item" id="custom">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-4">Daily Intake Target</label>
                            <div class="form-group col-sm-8 pb-0">
                                <div class="form-row pt-3">
                                    <div class="col">
                                        <input type="number" name="cals" class="form-control" placeholder="calorie"
                                            required="">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="proteins" class="form-control" placeholder="Protein"
                                            required="">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="carbs" class="form-control" placeholder="Carbs"
                                            required="">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="fats" class="form-control" placeholder="Fat"
                                            required="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-4 pt-0">Package Name</label>
                            <div class="form-group col-sm-3 pb-0">
                                <div class="form-row">
                                    <div class="col pt-3">
                                        <input type="text" name="name" class="form-control" required="">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-4 pt-0">Package Picture</label>
                            <div class="form-group col-sm-4 pb-0">
                                <div class="form-row pt-3">
                                    <div class="col">
                                        <input type="file" name="img" id="file" class="custom-file-input" required="">
                                        <label for="file" class="custom-file-label">Choose file</label>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="list-group-item">
                        <div class="form-group row align-items-center mb-0">
                            <label class="col-form-label form-label col-sm-3">Description</label>
                            <div class="col-sm-9 pt-3">
                                <textarea class="form-control" name="desc" id="" cols="30" rows="3"
                                    required=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- modal footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button role="button" type="submit" class="btn btn-accent">Save</button>
                </div>

            </form>
            {{-- end form --}}

        </div>
    </div>
</div>
{{-- end edit meal modal --}}


@endforeach

    
@endsection