<?php

namespace App\Http\Controllers;
use App\Models\CustomerMeal;
use App\Models\MealType;
use App\Models\Package;
use App\Models\Component;
use App\Models\CustomerExclude;
use App\Models\ChifEndTime;



use Illuminate\Http\Request;

class KitchenMealsController extends Controller
{

    public function meals()
    {
        $end_shift = ChifEndTime::where('date',Date('Y-m-d'))->first();

        if (!empty($end_shift)) {

            $customers_meals = CustomerMeal::where('id',0)->get();
            $meal_types = MealType::all();
            $packages = Package::all();
            
        return view('kitchens.meals.index',compact('customers_meals','meal_types','packages'));

      
        } else {
           
         $customers_meals = CustomerMeal::where('date',Date('Y-m-d'))->get();
        $meal_types = MealType::all();
        $packages = Package::all();

        return view('kitchens.meals.index',compact('customers_meals','meal_types','packages'));

        }
        
      
    }

    public function mealsFilter(Request $request)
    {
          // filter here
          $filters = array();

          // id
          if ($request->id != null) {
 
             $filters["id"] = $request->id;
         }

           // status
        if ($request->type != "all") {

            $filters["meal_type_id"] = $request->type;
        }


        // dd($request->status);
        if ($request->status != "all") {

            $filters["status"] = $request->status;
        }
        

        $end_shift = ChifEndTime::where('date',Date('Y-m-d'))->first();

        if (!empty($end_shift)) {
            
            $customers_meals = CustomerMeal::where('id',0)->get();
            $meal_types = MealType::all();
            $packages = Package::all();
            
        return view('kitchens.meals.index',compact('customers_meals','meal_types','packages'));
          
        } else {
              
        $customers_meals = CustomerMeal::where('date',Date('Y-m-d'))
        ->where($filters)
        ->get();

        $meal_types = MealType::all();
        $packages = Package::all();

        return view('kitchens.meals.index',compact('customers_meals','meal_types','packages'));
        }
        
      
    }



    // ================================


    public function cooking($meal_id)
    {

       $meal = CustomerMeal::find($meal_id);

      

       if ($meal->meal) {
        foreach ($meal->meal->meal->components as $component) {
            $stock_component = Component::find($component->component->id);
 
            foreach ($meal->customer->excludes as $exclude) {
            if ($exclude->component->id == $component->component->id) {
               
            }else{
             $stock_component->quantity = $stock_component->quantity - $component->quantity;
             $stock_component->save();
            }
         }
           
           
        }
       }
      
       
        $meal->status = 'cooking';

        $meal->save();

       return redirect()->back()->with('success', 'Status Changed Successfully!');
   }

   public function cooked($meal_id)
   {

      $meal = CustomerMeal::find($meal_id);
      
       $meal->status = 'cooked';

       $meal->save();

      return redirect()->back()->with('success', 'Status Changed Successfully!');
  }

  
  public function allCooked($id)
  {

     $customers_meals = CustomerMeal::where('package_plan_meal_id',$id)->get();

    foreach ($customers_meals as $customer_meal) {
        $customer_excludes = CustomerExclude::where('customer_id', $customer_meal->customer_id)->first();

       if ($customer_excludes) {
          
       }else{

        $meal = CustomerMeal::find($customer_meal->id);

        if ($meal->meal) {
            foreach ($meal->meal->meal->components as $component) {
                $stock_component = Component::find($component->component->id);
      
                foreach ($meal->customer->excludes as $exclude) {
                if ($exclude->component->id == $component->component->id) {
                   
                }else{
                 $stock_component->quantity = $stock_component->quantity - $component->quantity;
                 $stock_component->save();
                }
             }
               
               
            }
           }

           $meal->status = 'cooked';

           $meal->save();
       }
    }

    
    
     
     

     return redirect()->back()->with('success', 'Status Changed Successfully!');
 }

  public function labeled($meal_id)
  {

     $meal = CustomerMeal::find($meal_id);
     
      $meal->status = 'labeled';

      $meal->save();

     return redirect()->back()->with('success', 'Status Changed Successfully!');
 }
}
