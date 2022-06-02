@extends('layouts.kitchen')




@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Kitchen Portal</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="dashboard.html">Today's Package Meals</a></li>



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
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">LEAN MEALS</strong>
                                        <small class="card-subtitle text-50">Manage Lean Meals</small>
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


                                <div class="col-12 text-center">
                                    <h4> Breakfast Meals</h4>
                                </div>

                                <div class=" col card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <a data-toggle="modal" data-target=".meal-recipe">
                                                    <i class="fa fa-question-circle float-left"></i>
                                                </a>

                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Pumpkin Oatmeal</h4>
                                                <h6 class="mb-0"> Dinner </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0" style="font-weight: bold; ">Pumpkin <span
                                                        class="badge badge-notifications badge-primary">(700)
                                                        Gram</span> | Potato <span
                                                        class="badge badge-notifications badge-primary">(200)
                                                        Gram</span> | Gralic <span
                                                        class="badge badge-notifications badge-primary">(50) Gram</span>
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class=" col card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <a data-toggle="modal" data-target=".meal-recipe">
                                                    <i class="fa fa-question-circle float-left"></i>
                                                </a>

                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Pumpkin Oatmeal</h4>
                                                <h6 class="mb-0"> Dinner </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0" style="font-weight: bold; ">Pumpkin <span
                                                        class="badge badge-notifications badge-primary">(700)
                                                        Gram</span> | Potato <span
                                                        class="badge badge-notifications badge-primary">(200)
                                                        Gram</span> | Gralic <span
                                                        class="badge badge-notifications badge-primary">(50) Gram</span>
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-12">
                                    <hr>
                                </div>

                                <div class="col-12 text-center">
                                    <h4> Lunch Meals</h4>
                                </div>



                                <div class="card-group-row__col custom-schedule-cards col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <a data-toggle="modal" data-target=".meal-recipe">
                                                    <i class="fa fa-question-circle float-left"></i>
                                                </a>
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Korean Beef Bowl </h4>
                                                <h6 class="mb-0"> Dinner </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0" style="font-weight:bold;">Beef <span
                                                        class="badge badge-notifications badge-primary">(500)
                                                        Gram</span>| Tomato <span
                                                        class="badge badge-notifications badge-primary">(150)
                                                        Gram</span></p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-12">
                                    <hr>
                                </div>

                                <div class="col-12 text-center">
                                    <h4> Dinner Meals</h4>
                                </div>

                                <div class="col card-group-row__col custom-schedule-cards">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <a data-toggle="modal" data-target=".meal-recipe">
                                                    <i class="fa fa-question-circle float-left"></i>
                                                </a>
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Bell Pepper Stuffed Chicken Fajita</h4>
                                                <h6 class="mb-0"> Dinner </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0" style="font-weight:bold;">Chicken
                                                    <span class="badge badge-notifications badge-primary">(500) Gram
                                                    </span> | Red Pepper <span
                                                        class="badge badge-notifications badge-primary">(50) Gram
                                                    </span> | Gralic <span
                                                        class="badge badge-notifications badge-primary">(300) Gram
                                                    </span></p>


                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-12">
                                    <hr>
                                </div>

                                <div class="col-12 text-center">
                                    <h4> Snacks</h4>
                                </div>
                                <div class="col card-group-row__col custom-schedule-cards">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <a data-toggle="modal" data-target=".meal-recipe">
                                                    <i class="fa fa-question-circle float-left"></i>
                                                </a>
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Sweet Potato Pancakes</h4>
                                                <h6 class="mb-0"> Dinner </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0" style="font-weight:bold;">Flour <span
                                                        class="badge badge-notifications badge-primary">(400) Gram
                                                    </span> | Sugar <span
                                                        class="badge badge-notifications badge-primary">(200) Gram
                                                    </span> | Poweder <span
                                                        class="badge badge-notifications badge-primary">(50) Gram
                                                    </span></p>
                                                <hr class="mt-2">


                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col card-group-row__col custom-schedule-cards">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <a data-toggle="modal" data-target=".meal-recipe">
                                                    <i class="fa fa-question-circle float-left"></i>
                                                </a>
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Sweet Potato Pancakes</h4>
                                                <h6 class="mb-0"> Dinner </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0" style="font-weight:bold;">Flour <span
                                                        class="badge badge-notifications badge-primary">(400) Gram
                                                    </span> | Sugar <span
                                                        class="badge badge-notifications badge-primary">(200) Gram
                                                    </span> | Poweder <span
                                                        class="badge badge-notifications badge-primary">(50) Gram
                                                    </span></p>
                                                <hr class="mt-2">


                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-12">
                                    <hr>
                                </div>

                                <div class="col-12 text-center">
                                    <h4> Post Workout</h4>
                                </div>
                                <div class="col card-group-row__col custom-schedule-cards">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <a data-toggle="modal" data-target=".meal-recipe">
                                                    <i class="fa fa-question-circle float-left"></i>
                                                </a>
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Pumpkin Oatmeal</h4>
                                                <h6 class="mb-0"> Dinner </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0" style="font-weight: bold; ">Pumpkin <span
                                                        class="badge badge-notifications badge-primary">(700)
                                                        Gram</span> | Potato <span
                                                        class="badge badge-notifications badge-primary">(200)
                                                        Gram</span> | Gralic <span
                                                        class="badge badge-notifications badge-primary">(50) Gram</span>
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-12">
                                    <hr>
                                </div>

                                <div class="col-12 text-center">
                                    <h4> Pre Workout</h4>
                                </div>
                                <div class="col card-group-row__col custom-schedule-cards">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <a data-toggle="modal" data-target=".meal-recipe">
                                                    <i class="fa fa-question-circle float-left"></i>
                                                </a>
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/kitchen/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Bell Pepper Stuffed Chicken Fajita</h4>
                                                <h6 class="mb-0"> Dinner </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0" style="font-weight:bold;">Chicken
                                                    <span class="badge badge-notifications badge-primary">(500) Gram
                                                    </span> | Red Pepper <span
                                                        class="badge badge-notifications badge-primary">(50) Gram
                                                    </span> | Gralic <span
                                                        class="badge badge-notifications badge-primary">(300) Gram
                                                    </span></p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

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








{{-- modals --}}
@section('modals')


{{-- meal receipe --}}
<div class="modal fade meal-recipe" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Meal Recipe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h4>Components</h4>

                <p class="text-70 mb-0" style="font-weight: bold; ">Pumpkin <span
                        class="badge badge-notifications badge-primary">(700) Gram</span> | Potato <span
                        class="badge badge-notifications badge-primary">(200) Gram</span> | Gralic <span
                        class="badge badge-notifications badge-primary">(50) Gram</span></p>



                <hr>
                <h4>Instructions</h4>
                <p>Lorem Abusm loreem loreem Lorem Lorem Abusm loreem loreem Lorem Lorem Abusm loreem loreem Lorem Lorem
                    Abusm loreem loreem Lorem Lorem Abusm loreem loreem Lorem</p>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>



@endsection