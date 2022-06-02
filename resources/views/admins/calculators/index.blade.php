@extends('layouts.admin')




{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Calculators</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item active">

                        Calculators

                    </li>

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

                            <div class="col-auto" style="width: 33%;">
                                <a href="#bmi_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">BMI</strong>
                                        <small class="card-subtitle text-50">Calculator</small>
                                    </span>
                                </a>
                            </div>



                            <div class="col-auto border-left border-right" style="width: 33%;">
                                <a href="#bmr_tap" data-toggle="tab" role="tab" aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">BMR</strong>
                                        <small class="card-subtitle text-50">Calculator</small>
                                    </span>
                                </a>
                            </div>

                            <div class="col-auto border-left border-right" style="width: 34%;">
                                <a href="#body_fat_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Body Fat</strong>
                                        <small class="card-subtitle text-50">Calculator</small>
                                    </span>
                                </a>
                            </div>

                            {{-- <div class="col-auto border-left border-right" style="width: 33%;">
                                <a href="#fat_loss_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Fat Loss</strong>
                                        <small class="card-subtitle text-50">Calculator</small>
                                    </span>
                                </a>
                            </div> --}}

                            <div class="col-auto border-left border-right" style="width: 50%;">
                                <a href="#waist_ratio_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Waist-To-Height Ratio</strong>
                                        <small class="card-subtitle text-50">Calculator</small>
                                    </span>
                                </a>
                            </div>

                            <div class="col-auto border-left border-right" style="width: 50%;">
                                <a href="#weight_loss_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Weight Loss</strong>
                                        <small class="card-subtitle text-50">Calculator</small>
                                    </span>
                                </a>
                            </div>

                            {{-- <div class="col-auto border-left border-right" style="width: 33%;">
                                <a href="#weight_gain_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Weight Gain</strong>
                                        <small class="card-subtitle text-50">Calculator</small>
                                    </span>
                                </a>
                            </div> --}}

                            {{-- <div class="col-auto border-left border-right" style="width: 33%;">
                                <a href="#ideal_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Ideal Weight</strong>
                                        <small class="card-subtitle text-50">Calculator</small>
                                    </span>
                                </a>
                            </div> --}}

                            {{-- <div class="col-auto border-left border-right" style="width: 34%;">
                                <a href="#food_recipe_tap" data-toggle="tab" role="tab" aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3"></span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Food Recipe Calorie</strong>
                                        <small class="card-subtitle text-50">Calculator</small>
                                    </span>
                                </a>
                            </div> --}}




                        </div>
                    </div>

                    <div class="card-body tab-content">

                        <!--   BMI Tap -->
                        <div class="tab-pane active text-70 text-center" id="bmi_tap">
                            <h3>BMI Calculator</h3>
                            <p>

                                Calculating your BMI is an important factor in deciding whether you need to lose weight,
                                gain weight or simply maintain your weight. It can act as a warning sign that you need
                                to improve your health to avoid potential serious long-term issues, but it is not the
                                end of the journey. Think of it as a start on your path towards better health and a
                                longer, fitter, happier life. You can use Dubai meal plans to help you to choose weight
                                loss plans or healthy meal plans that can help you into the healthy BMI range and reduce
                                your risks of disease and illness.



                                Calculate your BMI using our BMI Calculator below:
                            </p>

                            <div class="row text-center">

                                <div class="col-md-3 card-group-row__col">
                                </div>
                                <div class="col-md-6 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card">
                                        <div class="card-body d-flex">

                                            <div class="flex ml-3">
                                                <h5>Calculate your BMI</h5>
                                                <hr>
                                                <div class="form-group row align-items-center mb-3">
                                                    <div class="form-group col-sm-8 text-left ">
                                                        <label class="form-label" for="exampleInputEmail1">Height :
                                                        </label>
                                                        <div style="display:flex;">
                                                           

                                                            <input type="number" value="0" id="height-bmi" class="form-control col-5 mx-2"
                                                                placeholder="Cm">
                                                        </div>

                                                    </div>


                                                    <div class="form-group col-sm-4">
                                                        <label class="form-label" for="exampleInputEmail1">Weight :
                                                        </label>
                                                        <input type="number" value="0" id="weight-bmi" class="form-control" placeholder="Kg">
                                                    </div>


                                                    <div class="col-12">
                                                        <button type="button" id="bmi-calculate" class="btn btn-outline-success mt-3">Calculate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                            <div class="flex text-muted">
                                                <h5>Your BMI Is :
                                                    <span id="bmi-value" style="font-style: italic;text-decoration: underline;">
                                                    </span> 
                                                </h5>
                                            </div>
                                            <!--  <a href="#"
                                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a> -->
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 card-group-row__col"></div>
                            </div>
                            <div class="text-left">


                                <h4>What is BMI?</h4>
                                <p>BMI is the abbreviation for Body Mass Index. It is a measurement that works out
                                    whether you are a healthy size by using your weight and height as a calculator.If
                                    you are an adult, you can find out your BMI simply by dividing your weight in
                                    kilograms by your height in metres (metric measure).



                                    Alternatively, you can divide your weight in pounds by your height in feet (imperial
                                    measure). It is important to use accurate measurements and be consistent with either
                                    imperial or metric measurements. The results should fall somewhere between 15 and 40
                                    and can help categorise your body into different ranges which indicate whether your
                                    body is a healthy weight, underweight, overweight, obese, or severely obese. For
                                    children aged between 2 and 18 both gender and age are also taken into
                                    consideration.</p>

                                <h4>BMI Range Descriptions</h4>
                                <p>A healthy adult should aim to have a BMI between 18.5 and 24.9. A BMI outside of this
                                    range may indicate you are at risk of other health issues. There are exceptions to
                                    this, such as those who have an extremely muscular frame.<br>



                                    Below are the standard ranges that BMI calculations produce:

                                    <br>

                                    <strong>below 18.5</strong>: underweight<br>

                                    <strong>between 18.5 and 24.9</strong> : healthy weight<br>

                                    <strong>between 25 and 29.9</strong> : overweight<br>

                                    <strong>between 30 and 39.9</strong> : obese<br>

                                    <strong>over 40</strong> : severely obese <br>
                                </p>

                            </div>


                        </div>

                        <!--   End of BMI tap -->

                        <!--   BMR Tap -->

                        <div class="tab-pane text-70 text-center" id="bmr_tap">
                            <h3>BMR Calculator</h3>
                            <p>
                                Before starting out with a Meal plan, it is important that you understand what your
                                optimum calorific intake should be. Whether you need to reduce your calories in order to
                                lose weight or whether you need to take in extra calories to gain weight, you will need
                                to know what your daily calorie intake should be.
                            </p>

                            <div class="row text-center">

                                <div class="col-md-3 card-group-row__col">
                                </div>
                                <div class="col-md-6 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card">
                                        <div class="card-body d-flex">

                                            <div class="flex ml-3">
                                                <h5>Calculate your BMR</h5>
                                                <hr>
                                                <div class="form-group row align-items-center mb-3">

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label col-sm-8 pt-2" for="exampleInputEmail1">Age (In
                                                            years) : </label>
                                                        <input type="number" id="age-bmr" class="form-control col-sm-4 ml-2">
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label col-sm-8 pt-2" for="exampleInputEmail1">Weight
                                                            (in kgs) : </label>
                                                        <input type="number" id="weight-bmr" class="form-control col-sm-4 ml-2">
                                                    </div>


                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label col-sm-8 pt-2" for="exampleInputEmail1">Height
                                                            (in Cm) : </label>
                                                        <input type="number" id="height-bmr" class="form-control col-sm-4 ml-2">
                                                    </div>
                                                 

                                                    <div class="form-group col-12 text-center">
                                                        <div class="custom-controls-stacked text-center" style="display:inline-flex;">
                                                            <div class="custom-control custom-radio">
                                                                <input value="male" id="male-bmr" name="gender-bmr"
                                                                    type="radio" class="custom-control-input"
                                                                    checked="">
                                                                <label for="male-bmr"
                                                                    class="custom-control-label">Male </label>
                                                            </div>
                                                            <div class="custom-control custom-radio ml-3">
                                                                <input value="female" id="female-bmr" name="gender-bmr"
                                                                    type="radio" class="custom-control-input">
                                                                <label for="female-bmr"
                                                                    class="custom-control-label">Female</label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <button id="bmr-calculate" class="btn btn-outline-success mt-3">Calculate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                            <div class="flex text-muted">
                                                <h5>
                                                   Your BMR is <span id="bmr-value"
                                                        style="font-style: italic;text-decoration: underline;">
                                                        0
                                                    </span> 

                                                </h5>
                                            </div>
                                            <!--  <a href="#"
                                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a> -->
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 card-group-row__col"></div>
                            </div>
                            <div class="text-left">


                                <h4>What is BMR?</h4>
                                <p>BMR is the abbreviation for basal metabolic rate. Your BMR is the number of calories
                                    that your body needs to be able to meet all of your basic body functions. Your body
                                    uses calories even when it is not exercising or moving. Your basic bodily functions
                                    burn up lots of calories even when you are resting. These include breathing, muscle
                                    repair, cell regeneration and renewal, temperature regulation, muscle contraction
                                    and nutrient processing. This process of your body burning calories is what you will
                                    know as your metabolism and it accounts for about 60% to 75% of your total energy
                                    needs depending on your levels of activity. <br><br>
                                    Unfortunately, as you age, your BMR falls meaning you have to reduce the number of
                                    calories you consume or you need to expend more energy. There are other factors that
                                    affect your BMR but are hard to take into account in the calculation. Hormones
                                    affect BMR, so menopause can make a big difference to your metabolic rate. Your
                                    muscle mass also makes a difference to your metabolic rate and anyone with a high
                                    muscle ratio will have a higher BMR.
                                </p>

                                <h4>How to Calculate your BMR?</h4>
                                <p>
                                    When starting any meal plan or training programme, it is important to understand
                                    your requirements regarding calorific intake. BMR is the essential calculation that
                                    can help you with this before you start on healthy meal plans. Although it is fairly
                                    easy to estimate your BMR there are many variables to be considered. The figure will
                                    vary between different people and it can be difficult to be completely accurate but
                                    with our BMR calculator, we can give you a good idea of what you should be
                                    having.<br><br>


                                    Our calculator is based on the Harris-Benedict equation. Ensure you are consistent
                                    by choosing either metric or imperial measurements.<br><br>



                                    Women use the following calculation:

                                    655 + (9.6 x weight) + (1.8 x height) – (4.7 x age in years) = BMR <br><br>


                                    Men use the following calculation:

                                    66+ (13.7 x weight) + (5 x height) – (6.8 x age in years) = BMR<br>


                                </p>

                                <h4>The Importance of BMR</h4>
                                <p>
                                    If you want to achieve weight loss then you know that you need to achieve a calorie
                                    deficit. Alternatively, if you wish to gain weight then you need to achieve a
                                    calorie surplus. The thing you need to know is what that will look like for you
                                    because your calorie requirements vary depending on your age, weight and height.
                                    <br><br>
                                    You can only develop the right healthy meal plans if you know what your daily
                                    calorie goal is going to be. Knowing your BMR will help you to understand what your
                                    daily food goals will be and enable you to take control of your calorie intake and
                                    which home food delivery you go for in order to achieve your desired results.
                                </p>

                            </div>


                        </div>

                        <!--  End of BMR tap -->


                        <!--    Fat loss Tap -->
                        <div class="tab-pane text-70 text-center" id="body_fat_tap">
                            <h3>Body Fat Calculator</h3>
                            <p>
                                Our Body Fat calculator can be used to calculate an estimate of your total body fat
                                based on some vital body measurements. Everyone needs some essential body fat which is
                                used by our bodies to maintain life and reproductive functions. The other type of fat is
                                known as storage fat and excess amounts can have a negative impact on your health.
                                <br><br>
                                Once you have calculated your body fat percentage you will be better informed to choose
                                healthy eating meal plans such as weight loss meal plans or keto meal plans which can
                                help you to control your calorie intake and reduce your body weight if you need to. Meal
                                prepping can ensure that you make healthy choices regarding the types of food you eat
                                and help you to choose lean proteins and complex carbohydrates such as fruit,
                                vegetables, and whole grains which help you to reduce your body fat.

                                <br><br>
                                Calculate your Body Fat percentage using our Body Fat Calculator below:
                            </p>

                            <div class="row text-center">

                                <div class="col-md-3 card-group-row__col">
                                </div>
                                <div class="col-md-6 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card">
                                        <div class="card-body d-flex">

                                            <div class="flex ml-3">
                                                <h5>Calculate Your Body Fat</h5>
                                                <hr>
                                                <div class="form-group row align-items-center mb-3">

                                                  

                                                  



                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label pt-2 col-6" for="exampleInputEmail1">
                                                          BMI : </label>
                                                       
                                                            <input id="bmi-bodyfat" type="number" class="form-control col-4 mx-2">
                                                        
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label pt-2 col-6" for="exampleInputEmail1">
                                                            Age : </label>
                                                       
                                                            <input id="age-bodyfat" type="number" class="form-control col-4 mx-2">
                                                       
                                                    </div>





                                                    <div class="col-12">
                                                        <button id="bodyfat-calculate" class="btn btn-outline-success mt-3">Calculate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                            <div class="flex text-muted">
                                                <h5>
                                                    Body fat percentage <span id="bodyfat-value"
                                                        style="font-style: italic;text-decoration: underline;">
                                                    </span>

                                                </h5>
                                            </div>
                                            <!--  <a href="#"
                                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a> -->
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 card-group-row__col"></div>
                            </div>
                            <div class="text-left">


                                <h4>How to Calculate Body Fat?</h4>
                                <p>There are different methods to calculate body fat percentage. Some of the most
                                    accurate methods need special equipment and should only be administered by experts.
                                    However, it is possible to get an estimate of your body fat percentage by using our
                                    simple calculator. The only piece of equipment that you will need is a tape measure
                                    to work out your measurements. <br><br>
                                    This will give you a great starting point for estimating your body fat percentage
                                    and help you to make decisions over the healthy eating plans that are right for you.
                                    It should only take five minutes to do the measurements you need for using our
                                    calculator and it can be done from the comfort of your own home.
                                </p>
                                <ul>
                                    <li>
                                        To estimate your body fat, you need to measure your waist, neck, and height. The
                                        calculation also takes into account your gender. For women, you also need to
                                        include your hip measurement. Be consistent with the unit by choosing imperial
                                        (English) or metric.
                                    </li>
                                    <li>
                                        For accuracy, when measuring you need to follow the instructions below and use a
                                        measuring tape. It might help to have someone assist you. Remember to measure
                                        under your clothes:
                                    </li>
                                    <li>
                                        Measure your waist horizontally. Men should measure around their navel at its
                                        largest point and women should measure their smallest width. Relax and do not
                                        hold in your stomach!
                                    </li>
                                    <li>
                                        Measure your neck below the larynx with the tape sloping downwards. Keep the
                                        neck relaxed and straight.
                                    </li>
                                </ul>

                                <p>
                                    Women only should measure their hips at the largest horizontal circumference.

                                    <br><br>

                                    Our calculator takes these measurements and calculates your body fat percentage
                                    using a method developed by Hodgdon and Beckett in 1984 known as the US Navy method.
                                </p>
                                <h4>What do my Body Fat Results Mean?</h4>
                                <p>
                                    The recommended amount of body fat for women is 20-25% and for men is 8-14%. You
                                    will be considered obese if you have over 30% (for women) and 25% (for men).

                                    <br><br>
                                    You can see from this table below that athletes and people with excellent fitness
                                    have lower levels of body fat.

                                </p>
                                <table class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                                    <thead>
                                        <tr>




                                            <th>
                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                    Category
                                                </div>
                                            </th>
                                            <th>
                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                    Women
                                                </div>
                                            </th>
                                            <th>
                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                    Men
                                                </div>
                                            </th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td class="pr-0 border-right-0">
                                                <div class="media flex-nowrap align-items-center">
                                                    Essential Fat
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    10-13%
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    2-5%
                                                </div>

                                            </td>

                                        </tr>





                                        <tr>

                                            <td class="pr-0 border-right-0">
                                                <div class="media flex-nowrap align-items-center">
                                                    Athletes
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    14-20%
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    6-13%
                                                </div>

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="media flex-nowrap align-items-center">
                                                    Fitness
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    21-24%
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    14-17%
                                                </div>

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="media flex-nowrap align-items-center">
                                                    Average
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    25-31%
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    18-25%
                                                </div>

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="media flex-nowrap align-items-center">
                                                    Obese
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    30+%
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    25+%
                                                </div>

                                            </td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>


                        </div>

                        <!--   End of fat loss tap -->

                        <!--  fat loss tap -->

                        <div class="tab-pane text-70 text-center" id="fat_loss_tap">
                            <h3>Fat Loss Calculator</h3>
                            <p>
                                When embarking on healthy meal plans it is important to have a goal to reach. Often this
                                is measured in weight and the scales become your tracker. However, the scale does not
                                tell you the whole picture all of the time and can in fact be misleading. This is
                                because as you get healthier the ratio between your muscle and fat may change and
                                therefore you may not see the results of your hard work on the number showing on the
                                scales.
                                <br><br>
                                Focussing on fat loss can be a far more accurate and inspiring way to measure your
                                progress. By using our body fat calculator and the Harris-Benedict method of taking
                                measurements you are able to assess your body fat percentage.
                                <br><br>
                                This fat loss calculator will then enable you to input your statistics to ascertain your
                                fat loss progress.</p>

                            <div class="row text-center">

                                <div class="col-md-3 card-group-row__col">
                                </div>
                                <div class="col-md-6 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card">
                                        <div class="card-body d-flex">

                                            <div class="flex ml-3">
                                                <h5>Calculate Fat Loss</h5>
                                                <hr>
                                                <div class="form-group row align-items-center mb-3">

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label pt-2 col-4" for="exampleInputEmail1">
                                                            Weight (kgs) : </label>
                                                        <div class="pt-3">
                                                            <input type="number" class="form-control col-7 mx-2">
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label pt-2 col-4" for="exampleInputEmail1">
                                                            Body Fat (%) : </label>
                                                        <div class="pt-3">
                                                            <input type="number" class="form-control col-7 mx-2">
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label pt-2 col-4" for="exampleInputEmail1">
                                                            Goal Body Fat (%) : </label>
                                                        <div class="pt-3">
                                                            <input type="number" class="form-control col-7 mx-2">
                                                        </div>
                                                    </div>




                                                    <div class="col-12">
                                                        <button class="btn btn-outline-success mt-3">Calculate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                            <div class="flex text-muted">
                                                <h5>
                                                    You should take <span
                                                        style="font-style: italic;text-decoration: underline;">18 - 27
                                                    </span> weeks of diet to achieve this goal

                                                </h5>
                                            </div>
                                            <!--  <a href="#"
                                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a> -->
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 card-group-row__col"></div>
                            </div>
                            <div class="text-left">


                                <h4>How to Use the Fat Loss Calculator</h4>
                                <p>This calculator requires you to input your weight, body fat percentage and your goal
                                    body fat. You can find out your current body fat percentage by using our body fat
                                    calculator. This calculation requires you to measure your waist and neck and women
                                    should also measure their hips, then input your body fat percentage into this
                                    calculator.
                                </p>


                                <p>You can use the following chart to decide your goal body fat.</p>
                                <table class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                                    <thead>
                                        <tr>




                                            <th>
                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                    Category
                                                </div>
                                            </th>
                                            <th>
                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                    Women
                                                </div>
                                            </th>
                                            <th>
                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                    Men
                                                </div>
                                            </th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td class="pr-0 border-right-0">
                                                <div class="media flex-nowrap align-items-center">
                                                    Essential Fat
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    10-13%
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    2-5%
                                                </div>

                                            </td>

                                        </tr>





                                        <tr>

                                            <td class="pr-0 border-right-0">
                                                <div class="media flex-nowrap align-items-center">
                                                    Athletes
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    14-20%
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    6-13%
                                                </div>

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="media flex-nowrap align-items-center">
                                                    Fitness
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    21-24%
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    14-17%
                                                </div>

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="media flex-nowrap align-items-center">
                                                    Average
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    25-31%
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    18-25%
                                                </div>

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="media flex-nowrap align-items-center">
                                                    Obese
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    30+%
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    25+%
                                                </div>

                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                                <p>
                                    <br>
                                    Most people will want to be in the average range but many will be increasing their
                                    fitness levels and building muscle at the gym. Their goal may be to be within the
                                    fitness range. Once you have decided what your goal body fat is, you can input the
                                    figure. The calculator will then work out your fat loss.
                                </p>

                            </div>


                        </div>

                        <!--  End of fat loss -->

                        <!--     Waist-to-hip Ratio -->

                        <div class="tab-pane text-70 text-center" id="waist_ratio_tap">
                            <h3>Waist-To-Height Ratio Calculator</h3>
                            <p>
                                We often focus on weight and BMI as an indicator of our health when thinking about
                                embarking on healthy eating plans and adopting a healthier lifestyle. However, weight is
                                only one indicator of your risks and other indicators may actually be more accurate.
                                <br><br>
                                The Waist-to-Hip ratio is an excellent predictor that can inform you about your risks of
                                developing illnesses and disease. Used in conjunction with our other calculators, you
                                can get a much more accurate overall picture of your current and future health.
                                <br><br>
                                Using our Waist-to-Hip Calculator is an essential tool in assessing your healthy meal
                                plan needs.</p>

                            <div class="row text-center">

                                <div class="col-md-3 card-group-row__col">
                                </div>
                                <div class="col-md-6 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card">
                                        <div class="card-body d-flex">

                                            <div class="flex ml-3">
                                                <h5>Calculate Your Waist-to-hip Ratio</h5>
                                                <hr>
                                                <div class="form-group row align-items-center mb-3">

                                                   




                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label pt-2 col-sm-4" for="exampleInputEmail1">
                                                            Waist (Cm) : </label>
                                                      
                                                            <input type="number" id="waist-waistratio" class="form-control col-sm-4 mx-2">
                                                       
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label  col-sm-4" for="exampleInputEmail1">
                                                            Height (Cm) : </label>
                                                       
                                                            <input type="number" id="height-waistratio" class="form-control col-sm-4 mx-2">
                                                       
                                                    </div>


                                                    <div class="col-12">
                                                        <button id="waistratio-calculate" class="btn btn-outline-success mt-3">Calculate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                            <div class="flex text-muted">
                                                <h5>
                                                   Waist To Height Ratio Precentage <span id="waistratio-value"
                                                        style="font-style: italic;text-decoration: underline;">
                                                    </span> %

                                                </h5>
                                            </div>
                                            <!--  <a href="#"
                                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a> -->
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 card-group-row__col"></div>
                            </div>
                            <div class="text-left">


                                <h4>What Is Waist-to-hip Ratio?</h4>
                                <p>The Waist-to-Hip Ratio (WHR) is simply the circumference of the waist divided by the
                                    circumference of the hips. It measures the fat distribution in your body.<br>

                                    The WHR is a quick and easy way to calculate whether you could be at risk of any
                                    health issues. Experts have suggested that if WHR is used alongside BMI (Body Mass
                                    Index) and BMR (Basal Metabolic Rate) calculations you will get a very strong
                                    picture of your health. This is because where you are carrying excess weight
                                    matters.
                                    <br><br>
                                </p>


                                <h4>How to Calculate Your Waist-To-Hip Ratio</h4>
                                <p>
                                    To calculate your WHR you will need to measure your waist and hips with a tape
                                    measure. It is easy to do this in the comfort of your own home and it will only take
                                    a few minutes. Make sure that you take the measurements carefully using the tape
                                    under your clothes. You may find it easier to have someone assist you.

                                    <br><br>


                                    For men, the waist measurement should be taken around the navel at the widest part
                                    of the abdomen. Women should measure their waist at the narrowest part of their
                                    abdomen.
                                    <br><br>
                                    For the hips, the tape should go around the widest part of the hips and include your
                                    buttocks. Do not pull the tape too tightly. Once you have collected your data you
                                    can input the details into our calculator. The calculator divides your waist
                                    measurement by your hip measurement.

                                </p>
                                <h4>What do your WHR Results show?</h4>
                                <p>The following table breaks down the risks associated with a higher waist to hip
                                    ratio.</p>
                                <br>
                                <table class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                                    <thead>
                                        <tr>




                                            <th>
                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                    Female
                                                </div>
                                            </th>
                                            <th>
                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                    Male
                                                </div>
                                            </th>
                                            <th>
                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                    Health Risk
                                                </div>
                                            </th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td class="pr-0 border-right-0">
                                                <div class="media flex-nowrap align-items-center">
                                                    0.80 or lower
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    0.95 or lower
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    Low Health Risk
                                                </div>

                                            </td>

                                        </tr>





                                        <tr>

                                            <td class="pr-0 border-right-0">
                                                <div class="media flex-nowrap align-items-center">
                                                    0.81 to 0.84
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    0.96 to 1.0
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    Moderate Risk
                                                </div>

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="media flex-nowrap align-items-center">
                                                    0.85 or higher
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    1.0 or higher
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center">
                                                    High Risk
                                                </div>

                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                                <p>
                                    Pear-shaped people have a lower waist to hip ratio and are at a lower risk of
                                    developing health problems like heart disease, some cancers and type 2 diabetes.
                                    Women may also have fewer fertility problems.
                                    <br><br>
                                    The people most at risk of health problems have ratios of over 0.85 for women and
                                    over 1 for men. Their apple-shaped bodies have fat gathered around their abdomen and
                                    this fat is associated with heart disease, type 2 diabetes, and some cancers.
                                    <br>
                                    The people in the middle are often referred to as “avocados” and they still have a
                                    moderate risk of developing health problems. The World Health Organisation defines
                                    abdominal obesity as having a WHR of above 0.90 for men and 0.85 for women. They are
                                    in the high-risk category for developing health issues.
                                </p>

                            </div>


                        </div>

                        <!--   End of Waist-to-hip Ratio -->

                        <!--    Weight Loss Calculator -->

                        <div class="tab-pane text-70 text-center" id="weight_loss_tap">
                            <h3>Weight Loss Calculator</h3>
                            <p>
                                If your goal is to manage your weight, then this calculator will let you know what your
                                daily calorie intake should be in order to lose, gain or maintain weight. In order to
                                lose weight, you will need to create a calorie deficit which means that you consume
                                fewer calories than you burn. This calculator will work out your recommended calories in
                                order to create a calorie deficit if your goal is to lose weight.
                            </p>

                            <div class="row text-center">

                                <div class="col-md-3 card-group-row__col">
                                </div>
                                <div class="col-md-6 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card">
                                        <div class="card-body d-flex">

                                            <div class="flex ml-3">

                                                <hr>
                                                <div class="form-group row align-items-center mb-3">

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label col-8 pt-2" for="exampleInputEmail1">Start Weight (in kgs) :  </label>
                                                        <input type="number" id="start-weight-weightloss" class="form-control col-4 ml-2">
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label col-sm-8 pt-2" for="exampleInputEmail1">Current Weight
                                                            (in kgs) : </label>
                                                        <input type="number" id="current-weight-weightloss"  class="form-control col-sm-4 ml-2">
                                                    </div>

                                                    <div class="col-12">
                                                        <button id="weightloss-calculate" class="btn btn-outline-success mt-3">Calculate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                            <div class="flex text-muted">
                                               
                                                <h5>
                                                   Your fat loss precentage is  <span id="weightloss-value"
                                                    style="font-style: italic;text-decoration: underline;">
                                                </span> %
                                                </h5>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 card-group-row__col"></div>
                            </div>
                            <div class="text-left">


                                <h4>How to use the Weight Loss Calculator</h4>
                                <p>This weight loss calculator will help you to determine your recommended daily calorie
                                    intake.<br><br>
                                    Knowing how many calories you should be consuming can be very helpful in deciding on
                                    an appropriate meal plan to meet your needs. Consuming too many calories will be
                                    detrimental to you and you will find it hard to reach your goal weight.
                                </p>
                                <ul>
                                    <li>
                                        First, you need to input your personal data including gender, weight and height.
                                    </li>
                                    <li>
                                        You can use the sliding scale to choose the correct age in years for yourself.
                                    </li>
                                    <li>
                                        Next, input your weight in kgs by using the second sliding scale.
                                    </li>
                                    <li>
                                        Lastly, input your height using imperial measurements in feet and inches.
                                    </li>
                                </ul>

                                <p>
                                    Now you need to select from a drop-down menu by choosing the activity levels that
                                    are most appropriate for your lifestyle. It is important, to be honest here, as
                                    overestimating how much exercise you do will give you a higher calorific intake and
                                    could lead to weight gain. Similarly, if you do not include your exercise you will
                                    get too few calories to fuel your body’s needs.<br><br>
                                    Your choices are as follows:<br>
                                </p>
                                <ul>
                                    <li>
                                        Basal Metabolic Rate (BMR) – This is the calories needed for your body to
                                        function at rest with no activity at all.
                                    </li>
                                    <li>
                                        Sedentary – Little or no exercise.
                                    </li>
                                    <li>
                                        Lightly Active – Exercise or sport 1-3 times per week.
                                    </li>
                                    <li>
                                        Moderately Active – Exercise or sport 3-5 times per week
                                    </li>

                                    <li>
                                        Very Active – Hard or intense exercise or sport 6-7 times per week
                                    </li>
                                    <li>
                                        Extra Active – Very hard or extra intensive exercise or sport or undertaking a
                                        very physical job.
                                    </li>
                                </ul>
                                <p>
                                    By including your activity levels the result will take into account your TDEE (Total
                                    Daily Energy Expenditure) and therefore give you the best idea of the number of
                                    calories you require to lose, increase or maintain your weight.<br><br>
                                    The activity levels are rough estimates. You want an accurate calorie intake that
                                    reflects your lifestyle. Be truthful about the exercise you take regularly. A
                                    one-off run should not be included. You can experiment with different activity
                                    levels to see what a difference it can make if you take up regular exercise and use
                                    this as a prompt to start a better fitness regime.
                                </p>

                            </div>


                        </div>

                        <!--   End of Weight Loss Calculator -->

                        <!--  Weight Gain Calculator Tap -->

                        <div class="tab-pane text-70 text-center" id="weight_gain_tap">
                            <h3>Weight Gain Calculator</h3>
                            <p>
                                Many people considering a meal plan are trying to lose weight. However, some people
                                actually want to gain weight too. Some people who have certain body types or health
                                conditions can struggle to gain weight and they can have as many problems to overcome as
                                those who struggle to lose it.
                                <br><br>
                                It is fair to say that some people are just naturally skinny. They have a fast
                                metabolism and they appear to be able to eat whatever they like without gaining weight.
                                To gain weight you need to create a calorie surplus by consuming more calories than you
                                burn. The extra calories are converted to either fat or lean muscle mass resulting in
                                weight gain. For healthy weight gain, you want to increase your muscle mass and this
                                should be done steadily and slowly for the best results. Healthy meal plans can be
                                really helpful in providing you with healthy food that ensures you are able to gain
                                weight healthily if you want.
                                <br><br>
                                If your goal is to gain weight then this calculator will let you know what your daily
                                calorie intake should be in order to gain that weight.
                            </p>

                            <div class="row text-center">

                                <div class="col-md-3 card-group-row__col">
                                </div>
                                <div class="col-md-6 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card">
                                        <div class="card-body d-flex">

                                            <div class="flex ml-3">

                                                <hr>
                                                <div class="form-group row align-items-center mb-3">

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label pt-2" for="exampleInputEmail1">Age (In
                                                            years) : </label>
                                                        <input type="number" class="form-control col-4 ml-2">
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label pt-2" for="exampleInputEmail1">Weight
                                                            (in kgs) : </label>
                                                        <input type="number" class="form-control col-4 ml-2">
                                                    </div>


                                                    <div class="form-group col-12 ">
                                                        <div class="custom-controls-stacked" style="display:flex;">
                                                            <div class="custom-control custom-radio">
                                                                <input id="radioStacked1" name="radio-stacked"
                                                                    type="radio" class="custom-control-input"
                                                                    checked="">
                                                                <label for="radioStacked1"
                                                                    class="custom-control-label">Male </label>
                                                            </div>
                                                            <div class="custom-control custom-radio ml-3">
                                                                <input id="radioStacked2" name="radio-stacked"
                                                                    type="radio" class="custom-control-input">
                                                                <label for="radioStacked2"
                                                                    class="custom-control-label">Female</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left ">
                                                        <label class="form-label" for="exampleInputEmail1">Height :
                                                        </label>
                                                        <div style="display:flex;">
                                                            <input type="number" class="form-control col-5 mx-2"
                                                                placeholder="feet">

                                                            <input type="number" class="form-control col-5 mx-2"
                                                                placeholder="inches">
                                                        </div>

                                                    </div>

                                                    <div class="form-group col-sm-12 text-left ">

                                                        <select id="custom-select" class="form-control custom-select">
                                                            <option selected>Basal Metabolic Rate (BMR)</option>
                                                            <option value="1">Sedentary - little or no exercise</option>
                                                            <option value="2">Lightly Active - exercise/sports 1-3
                                                                times/week</option>
                                                            <option value="3">Moderatetely Active - exercise/sports 3-5
                                                                times/week</option>
                                                            <option>Very Active - hard exercise/sports 6-7 times/week
                                                            </option>
                                                            <option>Extra Active - very hard exercise/sports or physical
                                                                job</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-12">
                                                        <button class="btn btn-outline-success mt-3">Calculate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                            <div class="flex text-muted">
                                                <h5>
                                                    Maintain your weight by consuming <br><span
                                                        style="font-style: italic;text-decoration: underline;">0
                                                    </span><br> calories per day

                                                </h5>

                                                <h5>
                                                    Lose 0.5kg per week by consuming <br><span
                                                        style="font-style: italic;text-decoration: underline;">0
                                                    </span><br> calories per day

                                                </h5>

                                                <h5>
                                                    Lose 1.0kg per week by consuming <br><span
                                                        style="font-style: italic;text-decoration: underline;">0
                                                    </span><br> calories per day

                                                </h5>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 card-group-row__col"></div>
                            </div>
                            <div class="text-left">


                                <h4>How to Use the Weight Gain Calculator</h4>
                                <p>This weight gain calculator will help you to determine your recommended daily calorie
                                    intake to maintain your weight, gain 0.5 kg per week or gain 1kg per week.
                                    <br><br>
                                    Knowing how many calories you should be consuming can be very helpful in deciding on
                                    an appropriate meal plan to meet your needs. Consuming too few calories will be
                                    detrimental to you and you will find it hard to reach your heavier goal weight.
                                </p>
                                <ul>
                                    <li>
                                        First, you need to input your personal data including gender, weight and height.
                                    </li>
                                    <li>
                                        You can use the sliding scale to choose the correct age in years for yourself.
                                    </li>
                                    <li>
                                        Next, input your weight in kgs by using the second sliding scale.
                                    </li>
                                    <li>
                                        Lastly, input your height using imperial measurements in feet and inches.
                                    </li>
                                </ul>

                                <p>
                                    Now you need to select from a drop-down menu by choosing the activity levels that
                                    are most appropriate for your lifestyle. It is important, to be honest here, as
                                    overestimating how much exercise you do will give you a higher calorific intake and
                                    could lead to weight gain. Similarly, if you do not include your exercise you will
                                    get too few calories to fuel your body’s needs.<br><br>
                                    Your choices are as follows:<br>
                                </p>
                                <ul>
                                    <li>
                                        Basal Metabolic Rate (BMR) – This is the calories needed for your body to
                                        function at rest with no activity at all.
                                    </li>
                                    <li>
                                        Sedentary – Little or no exercise.
                                    </li>
                                    <li>
                                        Lightly Active – Exercise or sport 1-3 times per week.
                                    </li>
                                    <li>
                                        Moderately Active – Exercise or sport 3-5 times per week
                                    </li>

                                    <li>
                                        Very Active – Hard or intense exercise or sport 6-7 times per week
                                    </li>
                                    <li>
                                        Extra Active – Very hard or extra intensive exercise or sport or undertaking a
                                        very physical job.
                                    </li>
                                </ul>
                                <p>
                                    By including your activity levels the result will take into account your TDEE (Total
                                    Daily Energy Expenditure) and therefore give you the best idea of the number of
                                    calories you require to lose, increase or maintain your weight.<br><br>
                                    The activity levels are rough estimates. You want an accurate calorie intake that
                                    reflects your lifestyle. Be truthful about the exercise you take regularly. A
                                    one-off run should not be included. You can experiment with different activity
                                    levels to see what a difference it can make if you take up regular exercise and use
                                    this as a prompt to start a better fitness regime.
                                </p>

                            </div>


                        </div>

                        <!--   End of Weight Gain Calculator -->

                        <!--    Ideal Weight Calculator tap -->

                        <div class="tab-pane text-70 text-center" id="ideal_tap">
                            <h3>Ideal Weight Calculator</h3>
                            <p>
                                There is a popular misconception presented in the media of an “ideal body weight” which
                                is mainly based on appearance. Trends in body shape and weight are promoted by social
                                media accounts and the media on tv and in magazines. The “perfect” look is often
                                encouraged by using celebrities with a visual appeal that inspires their followers.
                                <br><br>
                                Our Ideal weight calculator is not based on looks or trends. It is based on formulas
                                that were created by the medical profession to estimate dosages for medicines. Today the
                                sports industry uses the IBW to classify people.
                            </p>

                            <div class="row text-center">

                                <div class="col-md-3 card-group-row__col">
                                </div>
                                <div class="col-md-6 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card">
                                        <div class="card-body d-flex">

                                            <div class="flex ml-3">
                                                <h5>Calculate Your Ideal Weight</h5>
                                                <hr>
                                                <div class="form-group row align-items-center mb-3">

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label pt-2" for="exampleInputEmail1">Age (In
                                                            years) : </label>
                                                        <input type="number" class="form-control col-4 ml-2">
                                                    </div>



                                                    <div class="form-group col-12 ">
                                                        <div class="custom-controls-stacked" style="display:flex;">
                                                            <div class="custom-control custom-radio">
                                                                <input id="radioStacked1" name="radio-stacked"
                                                                    type="radio" class="custom-control-input"
                                                                    checked="">
                                                                <label for="radioStacked1"
                                                                    class="custom-control-label">Male </label>
                                                            </div>
                                                            <div class="custom-control custom-radio ml-3">
                                                                <input id="radioStacked2" name="radio-stacked"
                                                                    type="radio" class="custom-control-input">
                                                                <label for="radioStacked2"
                                                                    class="custom-control-label">Female</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left ">
                                                        <label class="form-label" for="exampleInputEmail1">Height :
                                                        </label>
                                                        <div style="display:flex;">
                                                            <input type="number" class="form-control col-5 mx-2"
                                                                placeholder="feet">

                                                            <input type="number" class="form-control col-5 mx-2"
                                                                placeholder="inches">
                                                        </div>

                                                    </div>


                                                    <div class="col-12">
                                                        <button class="btn btn-outline-success mt-3">Calculate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                                            <div class="flex text-muted">
                                                <h5>
                                                    Based on the Devine formula, your ideal weight is <span
                                                        style="font-style: italic;text-decoration: underline;">88.6 kgs
                                                    </span>

                                                </h5>

                                                <h5>
                                                    Based on the Hamwi formula, your ideal weight is <span
                                                        style="font-style: italic;text-decoration: underline;">88.6 kgs
                                                    </span>

                                                </h5>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 card-group-row__col"></div>
                            </div>
                            <div class="text-left">


                                <h4>How to Use The Ideal Weight Calculator</h4>
                                <p>The ideal weight calculator calculates ideal body weight (IBW) ranges. It bases the
                                    calculation on your height, gender and age.
                                    <br><br>
                                    The IBW is a much sought-after figure that experts have been working on for many
                                    years. There are several different formulas that have been designed to calculate IBW
                                    and our calculator uses 2 of the most popular: Devine and Hamwi.
                                    <br><br>
                                    The formulas to calculate IBW use the same format of a base weight for a given
                                    height of 5 ft with a set increment added per inch over 5 ft. The two scientists
                                    created formulas based on their own findings. Both the Hamwi formula and the Devine
                                    formula were created originally to determine medicine dosage but the Devine Formula
                                    is has become a universal measure of IBW across the world.
                                    <br><br>
                                    <strong>J. Hamwi Formula (1964)</strong>


                                    Male: 48 kg + 2.7 kg per inch over 5ft

                                    Female: 45.5 kg + 2.2 kg per inch over 5ft
                                    <br><br>
                                    <strong> J. Devine Formula (1974)</strong>
                                    Male: 50 kg + 2.3 kg per inch over 5ft

                                    Female: 45.5 kg + 2.3 kg per inch over 5ft
                                    <br><br>


                                    You can do this calculation easily by inputting your age in years, choosing your
                                    gender and inputting your height in feet and inches (imperial measurement). You will
                                    be given a calculation for both formulas for you to compare.
                                </p>

                                <h4>How Accurate is the Ideal Weight Calculator?</h4>
                                <p>
                                    Calculating your ideal weight measurement is not a perfect science. It does not
                                    include factors like body fat percentages and muscle mass. Just like BMI (Body Mass
                                    Index) figures it is possible for healthy athletes and bodybuilders to be classed as
                                    overweight compared to their IBW because they have a larger proportion of muscle
                                    mass which is denser than fat. It is possible to be above or below your IBW and
                                    still be relatively healthy.
                                    <br><br>

                                    Whilst we cannot give an exact accurate measure for how much each person should
                                    weigh to be healthy it is possible to use guidance based on medical studies that
                                    give a generalised idea of the risks of being above or below an IBW. As with all of
                                    our calculators the results should be considered as a starting point to set yourself
                                    achievable goals to be healthy.
                                </p>

                                <h4>What are the Limitations?</h4>
                                <p>
                                    As with many calculations regarding weight, the IBW is not perfect. It is designed
                                    to give a figure that applies to a wide range of people and it is not individualised
                                    to take account of all the factors that might be applicable. There is no
                                    consideration for any disabilities or different body shapes. It does not take into
                                    account the level of activity undertaken or the individual’s body composition and
                                    muscle-to-fat ratio.
                                    <br><br>
                                    IBW is not a suitable calculation for people who are at the extreme end of fitness.
                                    Sportsmen and bodybuilders with a large body frame and a high proportion of lean
                                    muscle will always appear to be above their IBW when they are in fact very healthy
                                    and do not need to lose weight.
                                    <br>
                                    Pregnant women should not compare their current weight to their IBW as pregnancy
                                    means they will carry more weight naturally. Children should also not be measured
                                    against an IBW as their bodies have not yet fully developed.
                                    <br><br>
                                    If you reach a weight that is within the normal range for BMI then you should not
                                    feel the need to continue to restrict your calories to lose more weight to achieve a
                                    specific number. The IBW really is a general guideline that can help to give you a
                                    goal to aim for when considering a meal plan and should not be used as a strict
                                    weight target.



                                </p>

                            </div>


                        </div>

                        <!--  End of Ideal Weight Calculator tap -->

                        <!--  Food Recipe Calorie Calculator -->

                        <div class="tab-pane text-70 text-center" id="food_recipe_tap">
                            <h3>Food Recipe Calorie Calculator</h3>
                            <p>
                                Whether you want to lose weight, gain weight or maintain your weight you will need to
                                think about your calorie intake. If you want to lose weight you will need to have a
                                calorie deficit where you consume fewer calories than you burn. Alternatively, if you
                                want to gain weight you will need to have a calorie surplus where you consume more
                                calories than you burn. To maintain your weight you will need to consume the same
                                calories as you burn.
                                <br><br>
                                It is important that you consider how many calories different foods contain when
                                deciding what to eat. You may be surprised at how many calories some foods contain,
                                especially processed foods like fast food. Our calorie calculator can help you to check
                                on your food’s calories. When following a recipe the calculator can help to analyse the
                                ingredients to find out how many calories the complete meal will contain.

                            </p>

                            <div class="row text-center">

                                <div class="col-md-3 card-group-row__col">
                                </div>
                                <div class="col-md-6 card-group-row__col">

                                    <div class="card card--elevated card-group-row__card">
                                        <div class="card-body d-flex">

                                            <div class="flex ml-3">
                                                <h5>Calculate Calorie In Your Food</h5>
                                                <hr>
                                                <div class="form-group row align-items-center mb-3">

                                                    <div class="form-group col-sm-12 text-left d-flex"
                                                        style=" padding-right: 35px; ">
                                                        <label class="form-label col-4 pt-2 pl-0"
                                                            for="exampleInputEmail1">Food : </label>
                                                        <select id="custom-select" class="form-control custom-select">

                                                            <option selected disabled>--------Breakfast Cereals--------
                                                            </option>

                                                            <option value="1">Corn Flakes, Kelloggs</option>
                                                            <option value="2">Corn Flakes, Crunchy Nut, Kelloggs
                                                            </option>
                                                            <option value="3">Porridge Oats, Scots, Quaker</option>

                                                            <option disabled>-------- Bread & Cake --------</option>
                                                            <option>White Bread</option>
                                                            <option>Brown Bread</option>
                                                            <option>Cake, Flake, Cadbury's</option>
                                                            <option disabled> -------- Chocolate and Sweets --------
                                                            </option>

                                                            <option>Celebrations Chocolates, Mars</option>
                                                            <option>Chocolate, Dairy Milk, Cadbury's</option>
                                                            <option>Creme Egg, Cadbury's</option>
                                                            <option>Ice Cream</option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group col-sm-12 row text-left d-flex">
                                                        <label class="form-label col-4 pt-2"
                                                            for="exampleInputEmail1">Unit : </label>
                                                        <div class="pt-2 col-8">
                                                            <select id="custom-select"
                                                                class="form-control custom-select"
                                                                style="width:80px; float: right;">
                                                                <option>KG</option>
                                                                <option>Piece</option>
                                                            </select>

                                                        </div>

                                                    </div>

                                                    <div class="form-group col-sm-12 row text-left d-flex">
                                                        <label class="form-label col-4 pt-2"
                                                            for="exampleInputEmail1">Quantity : </label>
                                                        <div class="pt-2 col-8">
                                                            <input type="number" class="form-control text-left"
                                                                value="1" style="width:80px; float: right;">
                                                        </div>

                                                    </div>

                                                    <div class="col-12 mb-4">
                                                        <button class="btn btn-outline-success mt-3">Calculate</button>
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label col-6 pt-2"
                                                            for="exampleInputEmail1">Serving Size : </label>
                                                        <div class="pt-2 col-6">
                                                            <input type="text" disabled="" value="100g"
                                                                class="form-control text-left pt-2 "
                                                                style="width:80px; float: right;">
                                                        </div>

                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label col-8 pt-2"
                                                            for="exampleInputEmail1">Calories : </label>
                                                        <div class="pt-2 col-4">
                                                            <input type="number" class="form-control text-left "
                                                                style="width:80px; float: right;">
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label col-6 pt-2"
                                                            for="exampleInputEmail1">Carbohydrates : </label>
                                                        <div class="pt-2  col-6">
                                                            <input type="number" class="form-control text-left"
                                                                style="width:80px; float: right;">
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label col-sm-4 pt-2"
                                                            for="exampleInputEmail1">Protein : </label>
                                                        <div class="pt-2 col-sm-8">
                                                            <input type="number" class="form-control text-left "
                                                                style="width:80px; float: right;">
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-12 text-left d-flex">
                                                        <label class="form-label col-sm-4 pt-2"
                                                            for="exampleInputEmail1">Fat : </label>
                                                        <div class="pt-2 col-sm-8">
                                                            <input type="number" class="form-control text-left "
                                                                style="width:80px; float: right;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-3 card-group-row__col"></div>
                            </div>




                        </div>

                        <!--  End of Food Recipe Calorie Calculator -->


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

{{-- for calculator page --}}
<script src="{{ asset('assets/admin/js/calc-page.js') }}"></script>

@endsection