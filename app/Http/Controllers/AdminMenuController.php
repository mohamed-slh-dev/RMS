<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\ComponentCategory;
use App\Models\Cuisine;
use App\Models\Margin;
use App\Models\Meal;
use App\Models\MealCategory;
use App\Models\MealType;
use App\Models\Package;
use App\Models\PackageMeal;
use App\Models\PackageMealComponent;
use App\Models\PackagePlan;
use App\Models\PackagePlanMeal;
use App\Models\RestaurantMealPlan;
use App\Models\RestaurantMealPlanMeal;
use App\Models\Sauce;
use App\Models\SauceComponent;
use App\Models\PromoCode;
use App\Models\Customer;
use App\Models\CustomerSubscription;
use App\Models\CustomerFreez;
use App\Models\CustomerExclude;
use App\Models\CustomerMeal;
use App\Models\CustomerDelivery;
use App\Models\CustomerFeedback;
use App\Models\CustomerPurchase;
use App\Models\CustomerPayment;
use App\Models\Lead;
use App\Models\LeadFollowup;
use App\Models\SupplierComponent;
use App\Models\PurchaseComponent;





use Illuminate\Http\Request;

class AdminMenuController extends Controller
{


    // menu page
    public function menu()
    {

        

        // get packages (packages tab)
        $packages = Package::all();
        
        
        // dependencies
        $margin = Margin::find(1);


        // meals packing price
        $mealPackingPrice = array();

        foreach ($packages as $package) {

            $mealPackingPrice[$package->id] = 0;
            
            foreach ($package->meals as $packageMeal) {

                if ($packageMeal->meal->meal_category_id == 3) {

                    $mealPackingPrice[$package->id] += $margin->packing;

                } //end if

            } //inner foreach

        } //outer foreach
        




        // get meals (meals tab)
        $all_meals = Meal::all();

        // dependencies
        $cuisines = Cuisine::all();
        $meal_categories = MealCategory::all();
        $promo_codes = PromoCode::all();


        // get sauces (Sauce tab)

        // dependencies
        $components = Component::all();

        $sauces = Sauce::all();




        // get component categories (settings tab)

        // dependencies
        $meal_types = MealType::all();


        $component_categories = ComponentCategory::all();
        $restaurant_plans = RestaurantMealPlan::all();

        // convert meal_types from ids to strings (cloned)
        $restaurant_plans_decoded = RestaurantMealPlan::all();

        foreach ($restaurant_plans_decoded as $plan) {
            
            $ids = explode(',', $plan->meal_types);

            $ids_value = "";

            for ($i=0; $i < count($ids); $i++) { 
                $tmp = $meal_types->where('id', $ids[$i])->first();

                if (!empty($tmp['name'])) {
                    $ids_value .= $tmp['name'] . " ";
                }
            }

            $plan->meal_types = $ids_value;

        } // end foreach

        


        return view('admins.menus.index',compact('packages', 'component_categories', 'restaurant_plans', 'restaurant_plans_decoded', 'sauces', 'meal_types', 'components', 'cuisines', 'meal_categories', 'margin', 'all_meals', 'mealPackingPrice','promo_codes'));

    }





    



    // ==============================




    // packagePlan page
    public function packagePlan($id)
    {

        // package plans
        $plans = PackagePlan::where('package_id', $id)->get();




        // package
        $package = Package::find($id);


        // dependencies
        $cuisines = Cuisine::all();
        $meal_types = MealType::all();
        $meal_types_array = array();

        // copy to associative array
        foreach ($meal_types as $type) {

            $meal_types_array[$type->id] = $type->name;

        }

        // copy back to meal_types
        $meal_types = $meal_types_array;

        
        return view('admins.menus.package-plan', compact('package', 'cuisines', 'meal_types', 'plans'));

    }









    // -----------------



    public function packagePlanFilter(Request $request, $id)
    {


        // package plans
        $plans = PackagePlan::where('package_id', $id)->get();


        // filters
    
        // 1- both filters
        if (!empty($request->input('from-date')) && !empty($request->input('to-date'))) {

            $plans = PackagePlan::where('date', '>=', $request->input('from-date'))
            ->where('date', '<=', $request->input('to-date'))
            ->where('package_id', $id)->get();
        }


        // 2- from date filter
        elseif (!empty($request->input('from-date'))) {

            $plans = PackagePlan::where('date', '>=', $request->input('from-date'))
            ->where('package_id', $id)->get();
        }

        // 3- to date filter
        elseif (!empty($request->input('to-date'))) {

            $plans = PackagePlan::where('date', '<=', $request->input('to-date'))
            ->where('package_id', $id)->get();

        }




        // package
        $package = Package::find($id);


        // dependencies
        $cuisines = Cuisine::all();
        $meal_types = MealType::all();
        $meal_types_array = array();

        // copy to associative array
        foreach ($meal_types as $type) {

            $meal_types_array[$type->id] = $type->name;

        }

        // copy back to meal_types
        $meal_types = $meal_types_array;

        
        return view('admins.menus.package-plan', compact('package', 'cuisines', 'meal_types', 'plans'));

    }










    // ----------------


    // createPackagePlan in Package plan page
    public function createPackagePlan(Request $request, $id)
    {

        // get package
        $package = Package::find($id);


        // get basic info
        $date = $request->date;


        // create package plan 
        $newpackageplan = new PackagePlan();

        $newpackageplan->package_id = $id;
        $newpackageplan->date = $date;

        $newpackageplan->save();




        // get the plan meals (array for 7 meals)
        $breakfast_checkboxes = !empty($request->input('breakfast-meal')) ? $request->input('breakfast-meal') : array();
        
        $lunch_checkboxes = !empty($request->input('lunch-meal')) ? $request->input('lunch-meal') : array();
        

        $dinner_checkboxes = !empty($request->input('dinner-meal')) ? $request->input('dinner-meal') : array();

        $snack_checkboxes = !empty($request->input('snack-meal')) ? $request->input('snack-meal') : array();

        $postworkout_checkboxes = !empty($request->input('postworkout-meal')) ? $request->input('postworkout-meal') : array();

        $preworkout_checkboxes = !empty($request->input('preworkout-meal')) ? $request->input('preworkout-meal') : array();



        // default checkboxes (always at index 0)
        $breakfast_default_checkboxes = !empty($request->input('breakfast-meal-default')) ? $request->input('breakfast-meal-default') : array();

        $lunch_default_checkboxes = !empty($request->input('lunch-meal-default')) ? $request->input('lunch-meal-default') : array();


        $dinner_default_checkboxes = !empty($request->input('dinner-meal-default')) ? $request->input('dinner-meal-default') : array();

        $snack_default_checkboxes = !empty($request->input('snack-meal-default')) ? $request->input('snack-meal-default') : array();

        $postworkout_default_checkboxes = !empty($request->input('postworkout-meal-default')) ? $request->input('postworkout-meal-default') : array();

        $preworkout_default_checkboxes = !empty($request->input('preworkout-meal-default')) ? $request->input('preworkout-meal-default') : array();
        




        // for loop for checkboxes chosen meals (regular)

        // 1- breakfast
        for ($i=0; $i < count($breakfast_checkboxes); $i++) { 


            // create package plan meal
            $newpackageplanmeal = new PackagePlanMeal();

            // package meal and meal type 
            for ($y=0; $y < count($request->input('breakfast-package-meal')); $y++) { 

                if ($request->input('breakfast-package-meal')[$y] == $breakfast_checkboxes[$i]) {

                    $newpackageplanmeal->package_plan_id = $newpackageplan->id;

                    $newpackageplanmeal->package_meal_id = $request->input('breakfast-package-meal')[$y];
                    $newpackageplanmeal->meal_type_id = $request->input('breakfast-package-meal-type')[$y];


                    // check if its the default
                    if ($request->input('breakfast-package-meal')[$y] == $breakfast_default_checkboxes[0]) {

                        $newpackageplanmeal->default = "true";

                    } //end check the default


                    $newpackageplanmeal->save();


                } //end if clause
               
            } //end inner for loop

        } //end breakfast










        // 2- lunch
        for ($i = 0; $i < count($lunch_checkboxes); $i++) {


            // create package plan meal
            $newpackageplanmeal = new PackagePlanMeal();

            // package meal and meal type 
            for ($y = 0; $y < count($request->input('lunch-package-meal')); $y++) {

                if ($request->input('lunch-package-meal')[$y] == $lunch_checkboxes[$i]) {

                    $newpackageplanmeal->package_plan_id = $newpackageplan->id;

                    $newpackageplanmeal->package_meal_id = $request->input('lunch-package-meal')[$y];
                    $newpackageplanmeal->meal_type_id = $request->input('lunch-package-meal-type')[$y];


                     // check if its the default
                    if ($request->input('lunch-package-meal')[$y] == $lunch_default_checkboxes[0]) {

                        $newpackageplanmeal->default = "true";

                    } //end check the default


                    $newpackageplanmeal->save();

                } //end if clause

            } //end inner for loop

        } //end lunch













        // 3- dinner
        for ($i = 0; $i < count($dinner_checkboxes); $i++) {


            // create package plan meal
            $newpackageplanmeal = new PackagePlanMeal();

            // package meal and meal type 
            for ($y = 0; $y < count($request->input('dinner-package-meal')); $y++) {

                if ($request->input('dinner-package-meal')[$y] == $dinner_checkboxes[$i]) {

                    $newpackageplanmeal->package_plan_id = $newpackageplan->id;

                    $newpackageplanmeal->package_meal_id = $request->input('dinner-package-meal')[$y];
                    $newpackageplanmeal->meal_type_id = $request->input('dinner-package-meal-type')[$y];


                     // check if its the default
                    if ($request->input('dinner-package-meal')[$y] == $dinner_default_checkboxes[0]) {

                        $newpackageplanmeal->default = "true";

                    } //end check the default


                    $newpackageplanmeal->save();
                } //end if clause

            } //end inner for loop

        } //end dinner








        // 4- snack
        for ($i = 0; $i < count($snack_checkboxes); $i++) {


            // create package plan meal
            $newpackageplanmeal = new PackagePlanMeal();

            // package meal and meal type 
            for ($y = 0; $y < count($request->input('snack-package-meal')); $y++) {

                if ($request->input('snack-package-meal')[$y] == $snack_checkboxes[$i]) {

                    $newpackageplanmeal->package_plan_id = $newpackageplan->id;

                    $newpackageplanmeal->package_meal_id = $request->input('snack-package-meal')[$y];
                    $newpackageplanmeal->meal_type_id = $request->input('snack-package-meal-type')[$y];

                    // check if its the default
                    if ($request->input('snack-package-meal')[$y] == $snack_default_checkboxes[0]) {

                        $newpackageplanmeal->default = "true";

                    } //end check the default


                    $newpackageplanmeal->save();
                } //end if clause

            } //end inner for loop

        } //end snack











        // 5- postworkout
        for ($i = 0; $i < count($postworkout_checkboxes); $i++) {


            // create package plan meal
            $newpackageplanmeal = new PackagePlanMeal();

            // package meal and meal type 
            for ($y = 0; $y < count($request->input('postworkout-package-meal')); $y++) {

                if ($request->input('postworkout-package-meal')[$y] == $postworkout_checkboxes[$i]) {

                    $newpackageplanmeal->package_plan_id = $newpackageplan->id;

                    $newpackageplanmeal->package_meal_id = $request->input('postworkout-package-meal')[$y];
                    $newpackageplanmeal->meal_type_id = $request->input('postworkout-package-meal-type')[$y];


                    // check if its the default
                    if ($request->input('postworkout-package-meal')[$y] == $postworkout_default_checkboxes[0]) {

                        $newpackageplanmeal->default = "true";

                    } //end check the default


                    $newpackageplanmeal->save();
                } //end if clause

            } //end inner for loop

        } //end postworkout











        // 6- preworkout
        for ($i = 0; $i < count($preworkout_checkboxes); $i++) {


            // create package plan meal
            $newpackageplanmeal = new PackagePlanMeal();

            // package meal and meal type 
            for ($y = 0; $y < count($request->input('preworkout-package-meal')); $y++) {

                if ($request->input('preworkout-package-meal')[$y] == $preworkout_checkboxes[$i]) {

                    $newpackageplanmeal->package_plan_id = $newpackageplan->id;

                    $newpackageplanmeal->package_meal_id = $request->input('preworkout-package-meal')[$y];
                    $newpackageplanmeal->meal_type_id = $request->input('preworkout-package-meal-type')[$y];

                    // check if its the default
                    if ($request->input('preworkout-package-meal')[$y] == $preworkout_default_checkboxes[0]) {

                        $newpackageplanmeal->default = "true";

                    } //end check the default


                    $newpackageplanmeal->save();
                } //end if clause

            } //end inner for loop

        } //end preworkout




        // return
        return redirect()->back()->with('success','Plan Successfully Added');

    }

    


    // ==============================



    // packageMeal page
    public function packageMeal($id)
    {

        $package = Package::find($id);


        $meal_types = MealType::all();
        $meal_types_array = array();

        // copy to associative array
        foreach ($meal_types as $type) {

            $meal_types_array[$type->id] = $type->name;
        }

        // copy back to meal_types
        $meal_types = $meal_types_array;


        // get the margin
        $margin = Margin::find(1);

        return view('admins.menus.package-meals', compact('package', 'meal_types', 'margin'));

    }









    // =============================== Package Tab


    // add Package
    public function addPackage(Request $request)
    {


        $newpackage =  new Package();


        // get info
        $newpackage->name = $request->name;
        $newpackage->desc = $request->desc;
        $newpackage->price = 0; //default

        $newpackage->cals = $request->cals;
        $newpackage->proteins = $request->proteins;
        $newpackage->carbs = $request->carbs;
        $newpackage->fats = $request->fats;


        // handle picture and car picture files
        // A - picture (required)
        $newpackage->img = time() . '-' . $request->file('img')->getClientOriginalName();

        $request->file('img')->move(public_path('assets/admin/images/packages/'),  $newpackage->img);

        $status = $newpackage->save();
        
        if ($status) {

        return redirect()->back()->with('success','Package Successfully Added');

        } else {

            echo'error';

        }

    } //end method








    
    // ----------------------


    // update package
    public function updatePackage(Request $request)
    {


        $package =  Package::find($request->packageid);


        // get info
        $package->name = $request->name;
        $package->desc = $request->desc;

        $package->cals = $request->cals;
        $package->proteins = $request->proteins;
        $package->carbs = $request->carbs;
        $package->fats = $request->fats;


        // handle picture and car picture files
        // A - picture (not required)
        if ($request->hasFile('img')) {

            $package->img = time() . '-' . $request->file('img')->getClientOriginalName();

            $request->file('img')->move(public_path('assets/admin/images/packages/'),  $package->img);

        }


        $status = $package->save();

        if ($status) {

            return redirect()->back()->with('success', 'Package Successfully Updated');
        } else {

            echo 'error';
        }
    } //end method









    // --------------------------


    // delete package
     public function deletePackage(Request $request)
    {


        // $package_meals = PackageMeal::where('package_id', $package_id)->get('meal_is');
       
        // $delete_package_meals_components = PackageMeal::whereIn('package_id', $package_meals)
        // ->delete();

        $package_id = $request->package_id;


        $package_customers = Customer::where('package_id',$package_id)->get('id');

       CustomerSubscription::where('package_id',$package_id)->delete();
       
       CustomerMeal::whereIn('customer_id',$package_customers)->delete();

       CustomerDelivery::whereIn('customer_id',$package_customers)->delete();

       CustomerExclude::whereIn('customer_id',$package_customers)->delete();

       CustomerFeedback::whereIn('customer_id',$package_customers)->delete();

       CustomerPurchase::whereIn('customer_id',$package_customers)->delete();

       CustomerPayment::whereIn('customer_id',$package_customers)->delete();

       CustomerFreez::whereIn('customer_id',$package_customers)->delete();

      $leads = Lead::where('package_id',$package_id)->get('id');

       LeadFollowup::whereIn('lead_id', $leads)->delete();
      
       Lead::where('package_id',$package_id)->delete();

       $package_meals = PackageMeal::where('package_id', $package_id)->get('meal_id');

       Meal::whereIn('id',$package_meals)->delete();

       $customers = Customer::where('package_id',$package_id)->delete();

        $package =  Package::find($package_id);

        $package->delete();


     


        // back
        return redirect()->back()->with('success', 'Package Deleted Successfully');

    } 
    
    
    
    




    // ================================ Meal Tab


    // add meal
    public function addMeal(Request $request)
    {

        $newmeal = new Meal();

        
        // if not added to no package
        if ($request->input('menu-package-component-group')) {

            // info
            $newmeal->name = $request->name;
        
            $newmeal->cuisine_id = $request->cuisine;

            $newmeal->meal_category_id = $request->category;
            $newmeal->sauce_id = (!empty($request->sauce) ? $request->sauce : null);
            $newmeal->cuisine_id = $request->cuisine;

            $newmeal->department = $request->department;

            // handle picture and car picture files
            // A - picture (required)
            $newmeal->img = time() . '-' . $request->file('img')->getClientOriginalName();
            $request->file('img')->move(public_path('assets/admin/images/meals/'),  $newmeal->img);



            // meal_types (multiple)
            $tmp_meal_type = "";

            for ($i=0; $i < count($request->type); $i++) {

                $tmp_meal_type .= $request->type[$i].',';

            }

            // copy ids to meal type
            $tmp_meal_type = rtrim($tmp_meal_type, ",");
            $newmeal->meal_type = $tmp_meal_type;

            $newmeal->save();



            // 2- add meals to package

            // for loop to number of menu-packages
            for ($i=0; $i < count($request->input('menu-package')); $i++) {

                    // for each package-type add new package meal
                    for ($y=0; $y < count($request->type); $y++) {

                        $newpackagemeal = new PackageMeal();
                        $newpackagemeal->package_id = $request->input('menu-package')[$i];
                        $newpackagemeal->meal_id = $newmeal->id;
                        $newpackagemeal->meal_type_id = $request->type[$y];

                        $newpackagemeal->price = $request->input('menu-package-price')[$i];
                        

                        $newpackagemeal->cals = $request->input('menu-package-cals')[$i];
                        $newpackagemeal->proteins = $request->input('menu-package-proteins')[$i];
                        $newpackagemeal->carbs = $request->input('menu-package-carbs')[$i];
                        $newpackagemeal->fats = $request->input('menu-package-fats')[$i];
                        
                        $newpackagemeal->save();





                        // for each package-meal add package-meal-components
                        for ($k = 0; $k < count($request->input('menu-package-component-group')); $k++) {

                            // determine the component from value 
                            if ($request->input('menu-package-component-group')[$k] == ($i + 1)) {
                                
                                $newpackagemealcomponent = new PackageMealComponent();
                                $newpackagemealcomponent->package_meals_id = $newpackagemeal->id;

                                $newpackagemealcomponent->component_id = $request->input('menu-package-component')[$k];

                                $newpackagemealcomponent->quantity = $request->input('menu-package-component-grams')[$k];

                                $newpackagemealcomponent->save();

                            } //end if



                        } //end for loop for adding meal components

                    } //end for loop for adding meals

                    
                    
                    

            } //end for loop




            // re sum the price for each package depending on they meals
            $packages = Package::all();

            foreach ($packages as $package) {

                // var to sum the price
                $packagePrice = 0;

                foreach ($package->meals as $meal) {

                    $packagePrice += $meal->price;

                } //end inner foreach

                $package->price = $packagePrice;

                $package->save();

            } //end outer foreach



            return redirect()->back()->with('success', 'Meal Added Successfully');


        } //end of not added to no package



        // not added to package so don't add it
        else {

            return redirect()->back()->with('error', 'Meal Not Added');

        } //end else


    } //end method


    public function deleteMeal(Request $request)
    {
        $meal_id = $request->meal_id;
      
        $package_meals = PackageMeal::where('meal_id',$meal_id)->get('id');

        $package_plan_meals =  PackagePlanMeal::whereIn('package_meal_id',$package_meals)->get('id');

       $customer_meals = CustomerMeal::whereIn('package_plan_meal_id',$package_plan_meals)->get();

       if ($customer_meals->count() > 0) {
        foreach ($customer_meals as $meal) {
           $change_customer_meal = CustomerMeal::find($meal->id);
           $change_customer_meal->package_plan_meal_id = null;
           $change_customer_meal->save();
        }
       }
      

       $meal = Meal::find($meal_id);

       $meal->delete();

       return redirect()->back()->with('success', 'Meal Deleted');

    }







    // ================================ Sauce Tab


    // add category
    public function addSauce(Request $request)
    {
        $newsauce = new Sauce();


        // if no component then don't add the sauce
        if ($request->component) {
        
            // info
            $newsauce->name = $request->name;

            // handle picture and car picture files
            // A - picture (required)
            $newsauce->img = time() . '-' . $request->file('img')->getClientOriginalName();

            $request->file('img')->move(public_path('assets/admin/images/sauces/'),  $newsauce->img);


            $newsauce->save();





            // component (multiple)
            $saucePrice = 0;

            for ($i=0; $i < count($request->component); $i++) { 

                $newcomponent = new SauceComponent();

                $newcomponent->sauce_id = $newsauce->id;
                $newcomponent->component_id = $request->component[$i];
                $newcomponent->quantity = $request->quantity[$i];

                $newcomponent->save();

                // get sauce price
                $tmpComponent = Component::find($request->component[$i]);
                $saucePrice += $tmpComponent->price * $request->quantity[$i];



            }


            // add sauce price
            $newsauce->price = $saucePrice;
            $newsauce->save();


            return redirect()->back()->with('success', 'Sauce Added Successfully');


        } //if no sauce don't add anything


        // sauce not added
        else {

            return redirect()->back()->with('error', 'Sauce Not Added');

        }


    } //end method



    public function deleteSauce(Request $request)
    {
        $sauce_id = $request->sauce_id;

       $sauce = Sauce::find($sauce_id);

       $sauce_meals = Meal::where('sauce_id', $sauce_id)->get();

      foreach ($sauce_meals as $meal) {
         $meal_change = Meal::find($meal->id);
         $meal_change->sauce_id = null;
         $meal_change->save();
      }

       $sauce->delete();

       return redirect()->back()->with('success', 'Meal Deleted');

    }







    // ------ Purchased Sauce

    // add sauce
    public function addPurchasedSauce(Request $request)
    {
        $newsauce = new Sauce();
  
        // info
        $newsauce->name = $request->name;
        $newsauce->price = $request->price;


        // handle picture and car picture files
        // A - picture (required)
        $newsauce->img = time() . '-' . $request->file('img')->getClientOriginalName();

        $request->file('img')->move(public_path('assets/admin/images/sauces/'), $newsauce->img);


        $newsauce->save();



        return redirect()->back()->with('success', 'Sauce Added Successfully');



    } //end method






    // ================================ Settings Tab


    // add category
    public function addCategory(Request $request)
    {
        $newcategory = new ComponentCategory();

        $newcategory->name = $request->name;
        $newcategory->purchase_limit = $request->purchase_limit;

        $status = $newcategory->save();

        if ($status) {

            return redirect()->back()->with('success', 'Category Added Successfully');
        } else {

            echo 'error';
        }

    } //end method

      // edit cuisine
      public function editCategory(Request $request)
      {
          $category =  ComponentCategory::find($request->id);
  
          $category->name = $request->name;
          $category->purchase_limit = $request->purchase_limit;
        
          $status = $category->save();
  
          if ($status) {
  
              return redirect()->back()->with('success', 'Category Added Successfully');
          } else {
  
              echo 'error';
          }
  
      } //end method


    // add cuisine
    public function addCuisine(Request $request)
    {
        $newcuisine = new Cuisine();

        $newcuisine->name = $request->name;

        $status = $newcuisine->save();

        if ($status) {

            return redirect()->back()->with('success', 'Cuisine Added Successfully');
        } else {

            echo 'error';
        }

    } //end method

      // edit cuisine
      public function editCuisine(Request $request)
      {
          $cuisine =  Cuisine::find($request->id);
  
          $cuisine->name = $request->name;
  
          $status = $cuisine->save();
  
          if ($status) {
  
              return redirect()->back()->with('success', 'Cuisine Added Successfully');
          } else {
  
              echo 'error';
          }
  
      } //end method


    
    // add promo code
    public function addPromo(Request $request)
    {
        $newpromo = new PromoCode();

        $newpromo->name = $request->name;
        $newpromo->precentage = $request->precentage;
        $newpromo->using_times = $request->using;
        $newpromo->used = 0;

        $status = $newpromo->save();

        if ($status) {

            return redirect()->back()->with('success', 'Cuisine Added Successfully');
        } else {

            echo 'error';
        }

    } //end method

    
    public function deletePromo($id)
    {
        $promo = PromoCode::find($id);

        $promo->delete();
     

          return redirect()->back()->with('success', 'Cuisine Added Successfully');
     
    } //end method


    public function deleteCuisine(Request $request)
    {
        $id = $request->cuisine_id;
      
        $check = Meal::where('cuisine_id', $id)->delete();

     
            $cuisine = Cuisine::find($id);

            $cuisine->delete();
      

          return redirect()->back()->with('success', 'Cuisine Added Successfully');
     
    } //end method

    
    public function deleteCategory(Request $request)
    {
        $id  = $request->category_id;

            $components = Component::where('component_category_id', $id)->get('id');

            $purchase_components = SupplierComponent::where('component_id', $id)->get('id');

            PurchaseComponent::whereIn('id', $purchase_components)->delete();

            SupplierComponent::whereIn('component_id', $components)->delete();


            Component::where('component_category_id', $id)->delete();

            $category = ComponentCategory::find($id);

            $category->delete();
      
     

          return redirect()->back()->with('success', 'Category Added Successfully');
     
    } //end method

    // -------------------------

// add restaurant plan
    public function addRestaurantPlan(Request $request)
    {
        $newplan = new RestaurantMealPlan();

        $newplan->name = $request->name;

        $newplan->save();
      
     
        // check if there's types
        if ($request->meal_types) {

            foreach ($request->meal_types as $type) {
                
             $newplanmeals = new RestaurantMealPlanMeal();
             $newplanmeals->restaurant_meal_plan_id = $newplan->id;
             $newplanmeals->meal_type_id = $type;
             $newplanmeals->save();
            } //end foreach

        } //end if there's types
        

            return redirect()->back()->with('success', 'Plan Added Successfully');

    } //end method


    public function deleteRestPlan($plan_id)
    {
        $delete_types = RestaurantMealPlanMeal::where('restaurant_meal_plan_id', $plan_id)->delete();

        $rest_plan = RestaurantMealPlan::find($plan_id);

        $rest_plan->delete();
     

          return redirect()->back()->with('success', 'Category Added Successfully');
     
    } //end method





} //end controller
