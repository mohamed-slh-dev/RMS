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
                    <li class="breadcrumb-item"><a href="dashboard.html">Menu Managment</a></li>

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

                            <div class="col-auto" style="width: 20%;">
                                <a href="#packages_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                    <span class="h2 mb-0 mr-3">3</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Packges</strong>
                                        <small class="card-subtitle text-50">Manage Packages</small>
                                    </span>
                                </a>
                            </div>



                            <div class="col-auto border-left border-right" style="width: 20%;">
                                <a href="#meals_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">8</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Meals</strong>
                                        <small class="card-subtitle text-50">Manage Meals</small>
                                    </span>
                                </a>
                            </div>

                            <div class="col-auto border-left border-right" style="width: 20%;">
                                <a href="#sauces_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">5</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Sauces</strong>
                                        <small class="card-subtitle text-50">Manage Sauces</small>
                                    </span>
                                </a>
                            </div>

                            <div class="col-auto" style="width: 20%;">
                                <a href="#componets_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">5</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Components</strong>
                                        <small class="card-subtitle text-50">Review All Components</small>
                                    </span>
                                </a>
                            </div>

                            <div class="col-auto border-left border-right" style="width: 20%;">
                                <a href="#settings_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">2</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Settings</strong>
                                        <small class="card-subtitle text-50">Manage Option</small>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>



                    {{-- tabs --}}
                    <div class="card-body tab-content">

                        <!--   Packages Tap -->
                        <div class="tab-pane active text-70" id="packages_tap">
                            <div class="row card-group-row mb-16pt mb-lg-40pt">
                                <div class="col-sm-12 mt-2 mb-4">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-package">New Package</a>
                                </div>

                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/spicy.png') }}">
                                                </span>


                                                <h4 class="mb-8pt">Lean</h4>
                                                <div class="row">
                                                    <div class="col-6"
                                                        style="border-right: 1px solid rgba(39,44,51,.7); border-bottom: 1px solid rgba(39,44,51,.7);">
                                                        <label class="form-label">Kcals</label>
                                                        <h5>(341)</h5>
                                                    </div>
                                                    <div class="col-6"
                                                        style=" border-bottom: 1px solid rgba(39,44,51,.7); ">
                                                        <label class="form-label">Protein</label>
                                                        <h5>(27)</h5>
                                                    </div>

                                                    <div class="col-6"
                                                        style="border-right: 1px solid rgba(39,44,51,.7);">
                                                        <label class="form-label">Carbo.</label>
                                                        <h5>(22)</h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="form-label">Fats</label>
                                                        <h5>(.04)</h5>
                                                    </div>

                                                </div>
                                            
                                                <hr class="my-2">
                                                <p class="text-70 mb-0">Perfect 6 pack food. Lean protein, Minimal
                                                    carbohydrates and lots of vegetables. Average calories per meal is
                                                    around 300 to 350 Kcal. All meals shown on this page are Sample
                                                    Meals.</p>
                                            </div>
                                            <p class="d-flex justify-content-center align-items-center m-0">
                                                <span class="h4 m-0 font-weight-normal">AED</span>
                                                <span class="h1 m-0 font-weight-normal">179</span>
                                                <span class="h4 m-0 font-weight-normal">/ month</span>
                                            </p>

                                        </div>
                                        <div class="card-footer row">
                                            <div class="col-sm-6">
                                                <a href="meals-to-package.html">
                                                    <button class="btn btn-sm btn-outline-info">Add Meals</button>
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="package-plan.html">
                                                    <button class="btn btn-sm btn-outline-success ">Package
                                                        plan</button>
                                                </a>
                                            </div>

                                            <br>
                                            <div class="col-sm-12 text-center">
                                                <i class="fas fa-trash text-danger"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90"
                                                        src="{{ asset('assets/admin/images/stories/Classic-Chia-Seed-Meal.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Mean</h4>
                                                <div class="row">
                                                    <div class="col-6"
                                                        style="border-right: 1px solid rgba(39,44,51,.7); border-bottom: 1px solid rgba(39,44,51,.7);">
                                                        <label class="form-label">Kcals</label>
                                                        <h5>(465)</h5>
                                                    </div>
                                                    <div class="col-6"
                                                        style=" border-bottom: 1px solid rgba(39,44,51,.7); ">
                                                        <label class="form-label">Protein</label>
                                                        <h5>(37)</h5>
                                                    </div>

                                                    <div class="col-6"
                                                        style="border-right: 1px solid rgba(39,44,51,.7);">
                                                        <label class="form-label">Carbo.</label>
                                                        <h5>(29)</h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="form-label">Fats</label>
                                                        <h5>(.6)</h5>
                                                    </div>

                                                </div>
                                                <hr class="my-2">
                                                <p class="text-70 mb-0">Perfect maintenance food for a fit and healthy
                                                    lifestyle. Balance of protein, complex carbohydrates and vegetables.
                                                    Average calories per meal is around 450 to 500 Kcal. All meals shown
                                                    on this page are Sample Meals.</p>
                                            </div>
                                            <p class="d-flex justify-content-center align-items-center m-0">
                                                <span class="h4 m-0 font-weight-normal">AED</span>
                                                <span class="h1 m-0 font-weight-normal">245</span>
                                                <span class="h4 m-0 font-weight-normal">/ month</span>
                                            </p>

                                        </div>
                                        <div class="card-footer row">
                                            <div class="col-sm-6">
                                                <a href="meals-to-package.html">
                                                    <button class="btn btn-sm btn-outline-info">Add Meals</button>
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="package-plan.html">
                                                    <button class="btn btn-sm btn-outline-success ">Package
                                                        plan</button>
                                                </a>
                                            </div>

                                            <br>
                                            <div class="col-sm-12 text-center">
                                                <i class="fas fa-trash text-danger"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90"
                                                        src="{{ asset('assets/admin/images/stories/Crunchy-Salmon-WSweet-Potato-and-Zucchini.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Clean</h4>
                                                <div class="row">
                                                    <div class="col-6"
                                                        style="border-right: 1px solid rgba(39,44,51,.7); border-bottom: 1px solid rgba(39,44,51,.7);">
                                                        <label class="form-label">Kcals</label>
                                                        <h5>(411)</h5>
                                                    </div>
                                                    <div class="col-6"
                                                        style=" border-bottom: 1px solid rgba(39,44,51,.7); ">
                                                        <label class="form-label">Protein</label>
                                                        <h5>(25)</h5>
                                                    </div>

                                                    <div class="col-6"
                                                        style="border-right: 1px solid rgba(39,44,51,.7);">
                                                        <label class="form-label">Carbo.</label>
                                                        <h5>(24)</h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="form-label">Fats</label>
                                                        <h5>(.3)</h5>
                                                    </div>

                                                </div>
                                                <hr class="my-2">
                                                <p class="text-70 mb-0">Perfect 6 pack food. Lean protein, Minimal
                                                    carbohydrates and lots of vegetables. Average calories per meal is
                                                    around 400 to 420 Kcal. All meals shown on this page are Sample
                                                    Meals.</p>
                                            </div>
                                            <p class="d-flex justify-content-center align-items-center m-0">
                                                <span class="h4 m-0 font-weight-normal">AED</span>
                                                <span class="h1 m-0 font-weight-normal">357</span>
                                                <span class="h4 m-0 font-weight-normal">/ month</span>
                                            </p>

                                        </div>
                                        <div class="card-footer row">
                                            <div class="col-sm-6">
                                                <a href="meals-to-package.html">
                                                    <button class="btn btn-sm btn-outline-info">Add Meals</button>
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="package-plan.html">
                                                    <button class="btn btn-sm btn-outline-success ">Package
                                                        plan</button>
                                                </a>
                                            </div>

                                            <br>
                                            <div class="col-sm-12 text-center">
                                                <i class="fas fa-trash text-danger"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--   Meals Tap -->
                        <div class="tab-pane text-70" id="meals_tap">
                            <div class="row card-group-row mb-16pt mb-lg-40pt">
                                <div class="col-sm-12 mt-2 mb-4">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-meal">New Meal</a>
                                </div>

                                <div class="col-12 text-center">
                                    <h4> Breakfast Meals</h4>
                                </div>

                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Sweet Potato Pancakes</h4>
                                                <h6 class="mb-0"> Breakfast </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0">Egg | Potato | Gralic</p>
                                            </div>

                                        </div>


                                        <div class="card-footer">
                                            <i class="fas fa-trash text-danger"></i>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Pumpkin Oatmeal</h4>
                                                <h6 class="mb-0"> Breakfast </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0">Sweet Potato | Red Peeper</p>
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <i class="fas fa-trash text-danger"></i>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Classic Chia Seed</h4>
                                                <h6 class="mb-0"> Breakfast </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0">Egg | Potato | Gralic</p>
                                            </div>

                                        </div>



                                        <div class="card-footer">
                                            <i class="fas fa-trash text-danger"></i>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <hr>
                                </div>

                                <div class="col-12 text-center">
                                    <h4> Lunch Meals</h4>
                                </div>

                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Korean Beef Bowl</h4>
                                                <h6 class="mb-0"> Lunch </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0">Egg | Meat | Gralic</p>
                                            </div>

                                        </div>




                                        <div class="card-footer">
                                            <i class="fas fa-trash text-danger"></i>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Crunchy Salmon W/ Sweet Potato and Zucchini</h4>
                                                <h6 class="mb-0"> Lunch </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0">Egg | Potato | Gralic</p>
                                            </div>

                                        </div>




                                        <div class="card-footer">
                                            <i class="fas fa-trash text-danger"></i>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <hr>
                                </div>

                                <div class="col-12 text-center">
                                    <h4> Dinner Meals</h4>
                                </div>

                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Salmon and Quinoa Salad</h4>
                                                <h6 class="mb-0"> Dinner </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0">Egg | Potato | Gralic</p>
                                            </div>

                                        </div>




                                        <div class="card-footer">
                                            <i class="fas fa-trash text-danger"></i>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Chicken and Pineapple Satay Skewers with Rainbow
                                                    salad </h4>
                                                <h6 class="mb-0"> Dinner </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0">Egg | Potato | Gralic</p>
                                            </div>

                                        </div>




                                        <div class="card-footer">
                                            <i class="fas fa-trash text-danger"></i>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/spicy.png') }}">
                                                </span>
                                                <h4 class="mb-8pt">Bell Pepper Stuffed Chicken Fajita</h4>
                                                <h6 class="mb-0"> Dinner </h6>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <p class="text-70 mb-0">Egg | Potato | Gralic</p>
                                            </div>

                                        </div>




                                        <div class="card-footer">
                                            <i class="fas fa-trash text-danger"></i>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>



                        {{-- sauce tab --}}
                        <div class="tab-pane text-70" id="sauces_tap">
                            <div class="row card-group-row mb-16pt mb-lg-40pt">
                                <div class="col-sm-12 mt-2 mb-4">
                                    <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                        data-target=".new-sauce">New Sauce</a>
                                </div>

                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/sauce-2.jpg') }}">
                                                </span>
                                                <h4 class="mb-8pt">BBQ Sauce</h4>

                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <div style="display: block ruby;">
                                                    <div>
                                                        <p class="text-70 mb-0" style="font-weight: bold; ">Tomato<br>
                                                            <span class="badge badge-notifications badge-primary">(700)
                                                                Gram</span>
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <p class="text-70 mb-0" style="font-weight: bold; ">Red
                                                            Peeper<br>
                                                            <span class="badge badge-notifications badge-primary">(200)
                                                                Gram</span>
                                                        </p>
                                                    </div>

                                                    <div>
                                                        <p class="text-70 mb-0" style="font-weight: bold; ">Gralic<br>
                                                            <span class="badge badge-notifications badge-primary">(50)
                                                                Gram</span>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="card-footer row">
                                            <div class="col-sm-6">
                                                <h6>Price : 2 AED</h6>
                                            </div>
                                            <div class="col-sm-6"> <i class="fas fa-trash text-danger"></i></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-lg-4 col-sm-6 card-group-row__col">

                                    <div class="card card-group-row__card text-center o-hidden card--raised ">

                                        <div class="card-body d-flex flex-column">
                                            <div class=" mb-16pt">
                                                <span
                                                    class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/sauce-2.jpg') }}">
                                                </span>
                                                <h4 class="mb-8pt">Cheese Sauce</h4>
                                                <hr class="mt-2">
                                                <h5>Ingredients</h5>
                                                <div style="display: block ruby;">
                                                    <div>
                                                        <p class="text-70 mb-0" style="font-weight: bold; ">Chees<br>
                                                            <span class="badge badge-notifications badge-primary">(700)
                                                                Gram</span>
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <p class="text-70 mb-0" style="font-weight: bold; ">Milk<br>
                                                            <span class="badge badge-notifications badge-primary">(200)
                                                                Gram</span>
                                                        </p>
                                                    </div>

                                                    <div>
                                                        <p class="text-70 mb-0" style="font-weight: bold; ">Gralic<br>
                                                            <span class="badge badge-notifications badge-primary">(50)
                                                                Gram</span>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="card-footer row">
                                            <div class="col-sm-6">
                                                <h6>Price : 3 AED</h6>
                                            </div>
                                            <div class="col-sm-6"> <i class="fas fa-trash text-danger"></i></div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>



                        {{-- component tab --}}
                        <div class="tab-pane text-70" id="componets_tap">
                            <div class="row card-group-row">

                                <div class="col-sm-12 text-center mt-3">
                                    <h4>Vegatables</h4>
                                </div>

                                <div class="col-md-4 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card text-center">
                                        <div class="card-body">
                                            <span
                                                class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mt-3">
                                                <img width="90" height="90" src="{{ asset('assets/admin/images/stories/comp-1.png') }}">
                                            </span>
                                            <div class="text-center mt-2">
                                                <label class="form-label">Broccoli</label>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card  text-center">

                                        <div class="card-body">
                                            <span class=" d-inline-flex mt-3">
                                                <img width="90" height="90" src="{{ asset('assets/admin/images/stories/comp-4.png') }}">
                                            </span>
                                            <div class="text-center mt-2">
                                                <label class="form-label">Tomato</label>

                                            </div>
                                        </div>

                                    </div>

                                </div>





                                <div class="col-sm-12 text-center">
                                    <hr>
                                    <h4>Meat</h4>
                                </div>

                                <div class="col-md-4 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card text-center">
                                        <div class="card-body">
                                            <span class=" d-inline-flex mt-3">
                                                <img width="90" height="90" src="{{ asset('assets/admin/images/stories/comp-3.jfif') }}">
                                            </span>
                                            <div class="text-center mt-2">
                                                <label class="form-label">Chiken</label>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card text-center">
                                        <div class="card-body">
                                            <span class=" d-inline-flex mt-3">
                                                <img width="90" height="90" src="{{ asset('assets/admin/images/stories/comp-5.png') }}">
                                            </span>
                                            <div class="text-center mt-2">
                                                <label class="form-label">Red Meat</label>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                                <div class="col-sm-12 text-center">
                                    <hr>
                                    <h4>Dairay</h4>
                                </div>


                                <div class="col-md-4 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card text-center ">

                                        <div class="card--elevated card-group-row__card">
                                            <div class="card-body">
                                                <span class=" d-inline-flex mt-3">
                                                    <img width="90" height="90" src="{{ asset('assets/admin/images/stories/comp-2.jpg') }}">
                                                </span>
                                                <div class="text-center mt-2">
                                                    <label class="form-label">Egg Fried</label>

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>



                        <!-- manage plans Tap -->
                        <div class="tab-pane text-70" id="settings_tap">
                            <div class="row card-group-row">
                                <div class="col-sm-6">
                                    <h4 class="ml-3">Manage Plans</h4>

                                    <div class="col-sm-12 mb-3">
                                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                            data-target=".new-plan">New Plan</a>
                                    </div>


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


                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">ID</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Plan Name</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Meals</a>
                                                            </th>

                                                            <th style="width: 24px;"></th>
                                                        </tr>
                                                    </thead>


                                                    <tbody class="list" id="leaves">



                                                        <!-- table row -->
                                                        <tr>



                                                            <!-- start -->
                                                            <td>
                                                                <p>1</p>
                                                            </td>



                                                            <!-- Shift -->
                                                            <td>
                                                                <p>2 Meals + Snack</p>
                                                            </td>

                                                            <td>
                                                                Breaksast | Lunch | Snack
                                                            </td>



                                                            <td class="text-right">
                                                                <a href="" class="text-50"><i
                                                                        class="material-icons">more_vert</i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- end table row -->







                                                        <!-- table row -->
                                                        <tr>



                                                            <!-- start -->
                                                            <td>
                                                                <p>2</p>
                                                            </td>

                                                            <!-- end -->
                                                            <td>
                                                                <p>3 Meals + Snack</p>
                                                            </td>

                                                            <td>
                                                                Breaksast | Lunch | Dinner | Snack
                                                            </td>


                                                            <td class="text-right">
                                                                <a href="" class="text-50"><i
                                                                        class="material-icons">more_vert</i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- end tr -->



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
                                <div class="col-sm-6">

                                    <h4 class="ml-2">Manage Categories</h4>
                                    <div class="col-sm-12 mb-3">
                                        <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal"
                                            data-target=".new-categ">New Category</a>
                                    </div>


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


                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">ID</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Category</a>
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)" class="sort"
                                                                    data-sort="js-lists-values-name">Purchase Limit</a>
                                                            </th>



                                                            <th style="width: 24px;"></th>
                                                        </tr>
                                                    </thead>


                                                    <tbody class="list" id="leaves">


                                                        @foreach ($components_categories as $comp)
                                                            
                                                     
                                                        <!-- table row -->
                                                        <tr>



                                                            <!-- start -->
                                                            <td>
                                                                <p>{{$comp->id}}</p>
                                                            </td>



                                                            <!-- Shift -->
                                                            <td>
                                                                <p>{{$comp->name}}</p>
                                                            </td>


                                                            <td>
                                                                <p>{{$comp->purchase_limit}}</p>
                                                            </td>

                                                            <td class="text-right">
                                                                <a href="" class="text-50"><i
                                                                        class="material-icons">more_vert</i></a>
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



                            </div>
                            <!-- End of main row -->

                        </div>
                        <!-- end of settings tap -->


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
  <!-- (custom added) -->
<script src="{{ asset('assets/admin/js/menu-components.js') }}"></script>  
@endsection



@section('modals')
    
{{-- new package modal --}}
<div class="modal fade new-package" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group-item" id="custom">
                    <div class="form-group row align-items-center mb-0">
                        <label class="col-form-label form-label col-sm-4">Daily Intake Target</label>
                        <div class="form-group col-sm-8 pb-0">
                            <div class="form-row pt-3">
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="calorie">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Protein">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Carbs">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Fat">
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
                                    <input type="text" class="form-control">
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
                                    <input type="file" id="file" class="custom-file-input">
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
                            <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
                        </div>
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
{{-- end new package modal --}}








{{-- new category modal --}}
<div class="modal fade new-categ" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.addCategory') }}" method="post">
                @csrf
            <div class="modal-body">
                <div class="list-group-item" id="custom">
                    <div class="form-group row align-items-center mb-0">
                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Category Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Category Name">
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Purchase limit : </label>
                            <input type="text" name="purchase_limit" class="form-control" placeholder="Per Month">
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
{{-- end new category modal --}}











{{-- new meal moda --}}
<div class="modal fade new-meal" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Meal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <div class="list-group-item" id="general-meal-info">
                    <div class="form-group row align-items-center mb-0">

                        <div class="form-group col-sm-4">
                            <label class="form-label" for="custom-select2">Meal Cuisine</label>
                            <select id="custom-select2" class="form-control custom-select">
                                <option selected value="0">Egyption</option>
                                <option value="1">Sudani</option>
                                <option value="2">Emarites</option>

                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">Meal Name</label>
                            <input type="text" class="form-control" placeholder="Meal Name">
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label" for="custom-select1">Meal Type</label>

                            <select id="select02" data-toggle="select" multiple class="form-control">
                                <option selected>Breakfast</option>
                                <option value="1">Lunch</option>
                                <option value="2">Dinner</option>
                                <option value="3">Snack</option>
                                <option value="4">Pre Workout</option>
                                <option value="5">Post Workout</option>

                            </select>

                        </div>



                        <div class="form-group col-sm-4">
                            <label class="form-label" for="custom-select2">Meal Category</label>
                            <select id="custom-select2" class="form-control custom-select">
                                <option selected value="0">Meal</option>
                                <option value="1">Cold Drink</option>
                                <option value="2">Hot Drink</option>

                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label" for="custom-select2">Department</label>
                            <select id="custom-select2" class="form-control custom-select">
                                <option selected>Hot Kitchen</option>
                                <option value="1">Cold Kitchen</option>

                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" id="date" class="form-control">

                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label" for="custom-select2">Sauce</label>
                            <select id="custom-select2" class="form-control custom-select">
                                <option selected>No Sauce</option>
                                <option value="1">BBQ Sauce</option>
                                <option value="1">Cheese Sauce</option>

                            </select>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="input-file-events" class="form-label">Meal Picture</label>
                            <input type="file" id="input-file-events" class="dropify-event"
                                data-default-file="assets/images/stories/Crunchy-Salmon-WSweet-Potato-and-Zucchini.png" />

                        </div>



                        <div class="col-sm-12">
                            <div class="form-row align-items-start">
                                <div class="form-group col-md-6 mb-16pt mb-sm-0">

                                    <div class="custom-control custom-checkbox">

                                        <input id="component-checkbox" type="checkbox"
                                            class="custom-control-input custom1">

                                        <label for="component-checkbox"
                                            class="custom-control-label custom-control-label-checkbox">Assign To Package</label>

                                    </div>

                                </div>


                                <div class="col-md-6 text-right mb-16pt mb-sm-0">
                                    <button id="add-component-button"
                                        class="custom01 btn btn-outline-accent border-radius-3 d-none"
                                        title="Add your Components"><i class="fa fa-plus-circle mr-2"></i>New
                                        Package</button>
                                </div>


                                <!-- here rest the input of component and delete button -->

                                <div class="col-sm-12">
                                    <div id="meal-component-row" class="form-row align-items-center d-none">
                                        <div class="list-group-item" id="custom">
                                            <div class="form-group row align-items-center mb-0">
                                                
                                                <div class="form-group col-sm-4">
                                                    <label class="form-label" for="custom-select01">Asigned To Package :</label>
                                                    <select id="custom-select02" class="form-control custom-select">
                                                        <option>Lean</option>
                                                        <option value="1">Mean</option>
                                                       <option value="">Clean</option>
                                                    </select>
                                                </div>
                    
                                                <div class="form-group col-sm-4">
                                                    <label class="form-label" for="custom-select01">Meal Price :</label>
                                                  <input type="text" disabled class="form-control" value="6">
                                                </div>
                    
                                                <div class="form-group col-sm-12 mt-3 text-center">
                                                    <label class="form-label my-3">Meal Macros Target</label>
                                                    <div class="form-row">
                                                        <div class="col  pt-3 card mx-2">
                                                            <label class="form-label text-muted">Kcals</label>
                                                            <p style="font-weight:bold;">341</p>
                                                        </div>
                                                        <div class="col pt-3 card mx-2">
                                                            <label class="form-label text-muted">Protein</label>
                                                            <p style="font-weight:bold;">27</p>
                                                        </div>
                                                        <div class="col pt-3 card mx-2">
                                                            <label class="form-label text-muted">Carbohydrates</label>
                                                            <p style="font-weight:bold;">22</p>
                                                        </div>
                                                        <div class="col pt-3 card mx-2">
                                                            <label class="form-label text-muted">Fats</label>
                                                            <p style="font-weight:bold;">.4</p>
                                                        </div>
                                                    </div>
                                                </div>
                    
                    
                        
                                            
                        
                        
                                                <div class="form-group col-sm-12 mt-3">
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
                        
                                                <div class="col-sm-12">
                                                    <div class="form-row">
                                                        <div class="col-12 mb-16pt mb-sm-0">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-12 my-2 text-center">
                                                                        <button id="add-component-button"
                                                                        class="custom01 btn btn-sm btn-outline-accent border-radius-3"
                                                                        title="Add your Components"><i class="fa fa-plus-circle mr-2"></i>New
                                                                        Component</button>
                                                                    </div>
                                                                </div>
                        
                                                                <!--   Components Of Meal      -->
                                                                <div class="row" id="package-meal-compoent-1">
                                                                    <div class="col-md-4 mt-1">
                                                                        <label class="form-label" for="select01">Component</label>
                                                                        <select id="select01" class="form-control custom-select">
                                                                            <option value="">Meat</option>
                                                                            <option value="">Egg</option>
                                                                            <option value="">Bread</option>
                                                                        </select>
                                                                    </div>
                        
                                                                    <div class="col-md-4"></div>
                                                                    <div class="col-md-3 float-right mt-1">
                                                                        <label class="form-label" for="select01">Gram</label>
                                                                        <input type="number" value="100" name="input-1" class="form-control"
                                                                            placeholder="Gram">
                                                                    </div>
                        
                                                                    <div class="col-md-1 mt-1 text-center">
                                                                       <button id="delete-package-meal-component-1" class="btn btn-danger w-100" style="margin-top: 30px;">
                                                                        <i class="fas fa-trash" ></i>
                                                                       </button>
                                                                       
                                                                    </div>
                        
                        
                        
                                                                    <div class="form-group col-sm-12 mt-3">
                                                                        <div class="form-row text-center">
                                                                            <div class="col">
                                                                                <label class="form-label text-muted">Kcals</label>
                                                                                <p class="text-muted">130</p>
                                                                            </div>
                                                                            <div class="col">
                                                                                <label class="form-label text-muted">Protein</label>
                                                                                <p class="text-muted">23</p>
                                                                            </div>
                                                                            <div class="col">
                                                                                <label class="form-label text-muted">Carbohydrates</label>
                                                                                <p class="text-muted">2.1</p>
                                                                            </div>
                                                                            <div class="col">
                                                                                <label class="form-label text-muted">Fats</label>
                                                                                <p class="text-muted">0.4</p>
                                                                            </div>
                                                                        </div>
                        
                                                                    </div>
                                                                </div>
                        
                                                                <!--   End Components Of Meal      -->
                                                                <hr>
                        
                                                                
                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- component col 12 -->

                            </div>





                        </div>

                        <!-- add receipt button -->
                        <div class="col-sm-12">
                            <button class="btn btn-outline-success col-2 float-right" id="add_recipe">Add
                                Recipe</button>
                        </div>


                    </div>
                </div>

                <div class="list-group-item d-none" id="recipe-meal-info">
                    <div class="form-group row align-items-center mb-0">

                        <div class="form-group col-sm-4">
                            <label class="form-label ">Gluten</label>
                            <select id="select01" data-toggle="select" class="form-control">
                                <option>Free</option>
                                <option>Contain</option>


                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label" for="select04">Dairy</label>
                            <select id="select04" data-toggle="select" class="form-control">
                                <option>Free</option>
                                <option>Contain</option>


                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="form-label">Spicy</label>
                            <select id="select03" data-toggle="select" class="form-control">
                                <option>1 (Low)</option>
                                <option>2 (Medium)</option>
                                <option>3 (High)</option>
                            </select>
                        </div>


                        <div class="col-sm-12">
                            <label class="form-label">Instructions</label>
                            <textarea class="form-control"></textarea>
                        </div>

                        <div class="col-sm-12">
                            <button class="btn btn-outline-success col-2 float-right" id="back_general">Back</button>
                        </div>


                    </div>
                </div>
            </div> <!-- end model body -->



            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="#tab-e" data-value="#e" data-toggle="tab" role="tab"
                    class="btn btn-accent" data-dismiss="modal">Save</a>
            </div>

        </div> <!-- end model content -->

    </div>
</div>
{{-- end new meal modal --}}










{{-- new plan modal --}}
<div class="modal fade new-plan" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Package Meal Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group-item" id="custom">
                    <div class="form-group row align-items-center mb-0">

                        <div class="form-group col-sm-4">
                            <label class="form-label" for="exampleInputEmail1">Package Meals Details :</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>



                        <div class="col-md-12 row">
                            <label class="col-form-label form-label col-sm-3">Choose The Meals</label>
                            <div class="col-12 row m-3">
                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck001" type="checkbox" class="custom-control-input">
                                        <label for="customCheck001" class="custom-control-label">Breakfast</label>
                                    </div>
                                </div>
                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck002" type="checkbox" class="custom-control-input">
                                        <label for="customCheck002" class="custom-control-label">Lunch</label>
                                    </div>
                                </div>
                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck003" type="checkbox" class="custom-control-input">
                                        <label for="customCheck003" class="custom-control-label">Dinner</label>
                                    </div>
                                </div>
                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck004" type="checkbox" class="custom-control-input">
                                        <label for="customCheck004" class="custom-control-label">Snacks</label>
                                    </div>
                                </div>
                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck005" type="checkbox" class="custom-control-input">
                                        <label for="customCheck005" class="custom-control-label">Pre-Workour</label>
                                    </div>
                                </div>
                                <div class="form-group col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck006" type="checkbox" class="custom-control-input">
                                        <label for="customCheck006" class="custom-control-label">Post-Workout</label>
                                    </div>
                                </div>
                            </div>

                        </div>


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
{{-- end new plan modal --}}












{{-- new sauce modal --}}
<div class="modal fade new-sauce" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Sauce</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <div class="list-group-item" id="general-meal-info">
                    <div class="form-group row align-items-center mb-0">
                        <div class="form-group col-sm-4">
                            <label class="form-label">Sauce Name</label>
                            <input type="text" class="form-control" placeholder="Meal Name">
                        </div>



                        <div class="form-group col-sm-12">
                            <label class="form-label">Sauce Picture</label>
                            <input type="file" class="dropify" data-default-file="assets/images/stories/sauce-2.jpg" />

                        </div>



                        <div class="col-sm-12">
                            <div class="form-row align-items-start">
                                <div class="form-group col-md-6 mb-16pt mb-sm-0">

                                    <div class="custom-control custom-checkbox">

                                        <input id="component-checkbox-2" type="checkbox"
                                            class="custom-control-input custom1">

                                        <label for="component-checkbox-2"
                                            class="custom-control-label custom-control-label-checkbox">Components</label>

                                    </div>

                                </div>


                                <div class="col-md-6 text-right mb-16pt mb-sm-0">
                                    <button id="add-component-button-2"
                                        class="custom01 btn btn-outline-accent border-radius-3 d-none"
                                        title="Add your Components"><i class="fa fa-plus-circle mr-2"></i>New
                                        Component</button>
                                </div>


                                <!-- here rest the input of component and delete button -->

                                <div class="col-sm-12">
                                    <div id="meal-component-row-2" class="form-row align-items-center d-none">


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
                <a class="btn btn-primary" href="#tab-e" data-value="#e" data-toggle="tab" role="tab"
                    class="btn btn-accent" data-dismiss="modal">Save</a>
            </div>

        </div>
        <!-- end model content -->

    </div>
</div>
{{-- end new sauce modal --}}





{{-- end modals --}}

@endsection