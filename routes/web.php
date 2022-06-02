<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminCalculatorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminDeliveryController;
use App\Http\Controllers\AdminFinanceController;
use App\Http\Controllers\AdminHRController;
use App\Http\Controllers\AdminInventoryController;
use App\Http\Controllers\AdminKitchenController;
use App\Http\Controllers\AdminLeadController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminReportController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\AdminStoreController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CompanyController;

use App\Http\Controllers\KitchenController;
use App\Http\Controllers\KitchenDashboardController;
use App\Http\Controllers\KitchenLabelController;
use App\Http\Controllers\KitchenMealsController;
use App\Http\Controllers\KitchenDeliveriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//User Permission
View::composer('layouts.admin', function ($view) {
    $modules = array();

    $user_role =  DB::table('users')
        ->where('id', Session::get('user_id'))
        ->first();

    if ($user_role) {
        $permissions =  DB::table('role_permissions')
            ->where('access', 1)
            ->where('role_id',  $user_role->role_id)
            ->get();

        foreach ($permissions as $perm) {
            $modules[]  =  $perm->modulename;
        }
    } else {
        $modules[] = "";
    }

    $notis = DB::table('notifications')->orderBy('created_at','desc')->get();

    $view->with('modules', $modules)->with('notis', $notis);
});

// ================================ ADMIN ===============================



// ------------- 1. login
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::get('admin/export', [AdminController::class, 'export'])->name('admin.export');


Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


Route::post('admin/login/check', [AdminController::class, 'checkLogin'])->name('admin.login.check');




// --------------- 2. dashboard
Route::get('admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');




// --------------- 3. calculator
Route::get('admin/calculators', [AdminCalculatorController::class, 'calculators'])->name('admin.calculators');





// --------------- 4. deliveries
Route::get('admin/deliveries', [AdminDeliveryController::class, 'deliveries'])->name('admin.deliveries');



// new driver
Route::post('admin/deliveries/drivers/create', [AdminDeliveryController::class, 'addDriver'])->name('admin.addDriver');



// new charge
Route::post('admin/deliveries/charges/create', [AdminDeliveryController::class, 'addCharge'])->name('admin.addCharge');

Route::post('admin/deliveries/charges/update', [AdminDeliveryController::class, 'updateCharge'])->name('admin.updateCharge');


// new delivery time
Route::post('admin/deliveries/delivery-times/create', [AdminDeliveryController::class, 'addDeliveryTime'])->name('admin.addDeliveryTime');

Route::post('admin/deliveries/days-off/create', [AdminDeliveryController::class, 'addDaysOff'])->name('admin.addDayOff');

Route::get('admin/deliveries/days-off/delete/{id}', [AdminDeliveryController::class, 'deleteDaysOff'])->name('admin.deleteDayOff');


// companies
Route::post('admin/deliveries/companies/create', [AdminDeliveryController::class, 'addCompany'])->name('admin.addCompany');

Route::post('admin/deliveries/companies/update', [AdminDeliveryController::class, 'updateCompany'])->name('admin.updateCompany');


// --------------- 5. finances
Route::get('admin/finances', [AdminFinanceController::class, 'finances'])->name('admin.finances');


// update margin
Route::post('admin/finances/margin/update', [AdminFinanceController::class, 'updateMargin'])->name('admin.updateMargin');





// --------------- 6. hr
Route::get('admin/hr', [AdminHRController::class, 'hr'])->name('admin.hr');



Route::post('admin/hr/create/user', [AdminHRController::class, 'newEmployee'])->name('admin.hr.create.user');

Route::post('admin/hr/edit/user', [AdminHRController::class, 'editEmployee'])->name('admin.hr.edit.user');

Route::post('admin/hr/create/role', [AdminHRController::class, 'newRole'])->name('admin.hr.create.role');

Route::get('admin/hr/delete/role/{role_id}', [AdminHRController::class, 'deleteRole'])->name('admin.hr.delete.role');




// --------------- 6. inventory
Route::get('admin/inventory', [AdminInventoryController::class, 'inventory'])->name('admin.inventory');

Route::post('admin/inventory/', [AdminInventoryController::class, 'filterStock'])->name('admin.filter.stock');



// component
Route::post('admin/inventory/component/create', [AdminInventoryController::class, 'addComponent'])->name('admin.addComponent');

Route::post('admin/inventory/component/edit', [AdminInventoryController::class, 'editComponent'])->name('admin.editComponent');


// supplier
Route::post('admin/inventory/supplier/create', [AdminInventoryController::class, 'addSupplier'])->name('admin.addSupplier');

Route::post('admin/inventory/supplier/edit', [AdminInventoryController::class, 'editSupplier'])->name('admin.editSupplier');

// purchase
Route::post('admin/inventory/purchase/create', [AdminInventoryController::class, 'addPurchase'])->name('admin.addPurchase');

Route::post('admin/inventory/purchase/received/', [AdminInventoryController::class, 'received'])->name('admin.purchase.received');

Route::post('admin/inventory/purchase/canceled/', [AdminInventoryController::class, 'canceled'])->name('admin.purchase.canceled');

Route::post('admin/inventory/purchase-order/update', [AdminInventoryController::class, 'updatePurchaseOrder'])->name('admin.updatePurchaseOrder');




// --------------- 7. kitchen
Route::get('admin/kitchen', [AdminKitchenController::class, 'kitchen'])->name('admin.kitchen');

Route::post('admin/kitchen/create/chif', [AdminKitchenController::class, 'newChif'])->name('admin.kitchen.create.chif');


Route::post('admin/kitchen/update/shiftTime', [AdminKitchenController::class, 'shiftTime'])->name('admin.kitchen.update.shiftTime');


// --------------- 8. leads
Route::get('admin/leads', [AdminLeadController::class, 'leads'])->name('admin.leads');



// filter
Route::post('admin/leads', [AdminLeadController::class, 'filterLeads'])->name('admin.filterLeads');

Route::post('admin/source/create', [AdminLeadController::class, 'addSource'])->name('admin.addSource');

Route::get('admin/source/{id}/delete', [AdminLeadController::class, 'deleteSource'])->name('admin.deleteSource');


Route::post('admin/followup/create', [AdminLeadController::class, 'addFollowUp'])->name('admin.addFollowUp');

// create
Route::post('admin/leads/create', [AdminLeadController::class, 'addLead'])->name('admin.addLead');

//update
Route::post('admin/leads/update', [AdminLeadController::class, 'updateLead'])->name('admin.leads.update');

// lost
Route::get('admin/leads/{id}/lost', [AdminLeadController::class, 'lostLead'])->name('admin.leads.lost');

//converted
Route::get('admin/leads/{id}/converted', [AdminLeadController::class, 'convertedLead'])->name('admin.leads.converted');




// --------------- 9. menu
Route::get('admin/menu', [AdminMenuController::class, 'menu'])->name('admin.menu');


// new package
Route::post('admin/menu/packages/create', [AdminMenuController::class, 'addPackage'])->name('admin.addPackage');


// update package
Route::post('admin/menu/packages/update', [AdminMenuController::class, 'updatePackage'])->name('admin.updatePackage');


// delete package
Route::post('admin/menu/packages/delete/', [AdminMenuController::class, 'deletePackage'])->name('admin.deletePackage');



// new meal
Route::post('admin/menu/meals/create', [AdminMenuController::class, 'addMeal'])->name('admin.addMeal');

Route::post('admin/menu/meal/delete/', [AdminMenuController::class, 'deleteMeal'])->name('admin.deleteMeal');




// new category
Route::post('admin/menu/categories/create', [AdminMenuController::class, 'addCategory'])->name('admin.addCategory');

Route::post('admin/menu/categories/edit', [AdminMenuController::class, 'editCategory'])->name('admin.editCategory');

Route::post('admin/menu/category/delete/', [AdminMenuController::class, 'deleteCategory'])->name('admin.deleteCategory');


//new cuisine
Route::post('admin/menu/cuisine/create', [AdminMenuController::class, 'addCuisine'])->name('admin.addCuisine');

Route::post('admin/menu/cuisine/edit', [AdminMenuController::class, 'editCuisine'])->name('admin.editCuisine');

Route::post('admin/menu/cuisine/delete/', [AdminMenuController::class, 'deleteCuisine'])->name('admin.deleteCuisine');


//new Promo code
Route::post('admin/menu/promo/create', [AdminMenuController::class, 'addPromo'])->name('admin.addPromo');

Route::get('admin/menu/promo/delete/{id}', [AdminMenuController::class, 'deletePromo'])->name('admin.deletePromo');

// new restaurant plan
Route::post('admin/menu/restaurant-plans/create', [AdminMenuController::class, 'addRestaurantPlan'])->name('admin.addRestaurantPlan');

Route::get('admin/menu/restaurant-plans/delete/{plan_id}', [AdminMenuController::class, 'deleteRestPlan'])->name('admin.deleteRestPlan');


// new sauce
Route::post('admin/menu/sauces/create', [AdminMenuController::class, 'addSauce'])->name('admin.addSauce');

Route::post('admin/menu/sauce/delete/', [AdminMenuController::class, 'deleteSauce'])->name('admin.deleteSauce');

// purchased sauce
Route::post('admin/menu/sauces/purchased/create', [AdminMenuController::class, 'addPurchasedSauce'])->name('admin.addPurchasedSauce');





// -------- 9.1

// 1- package plan
Route::get('admin/menu/packages/{id}/plan', [AdminMenuController::class, 'packagePlan'])->name('admin.packagePlan');

// filter
Route::post('admin/menu/packages/{id}/plan', [AdminMenuController::class, 'packagePlanFilter'])->name('admin.packagePlanFilter');


// create
Route::post('admin/menu/packages/{id}/plan/create', [AdminMenuController::class, 'createPackagePlan'])->name('admin.createPackagePlan');



// -------- 9.2


// package meal
Route::get('admin/menu/packages/{id}/meals', [AdminMenuController::class, 'packageMeal'])->name('admin.packageMeal');





// --------------- 10. orders
Route::get('admin/orders', [AdminOrderController::class, 'orders'])->name('admin.orders');

// create
Route::post('admin/orders/create', [AdminOrderController::class, 'create'])->name('admin.createOrder');

// create onetime order
Route::post('admin/orders/create-onetime-order', [AdminOrderController::class, 'createOnetimeOrder'])->name('admin.createOnetimeOrder');


// --------------- 11. reports
Route::get('admin/reports', [AdminReportController::class, 'reports'])->name('admin.reports');





// --------------- 12. settings
Route::get('admin/settings', [AdminSettingController::class, 'settings'])->name('admin.settings');

Route::post('admin/settings/update', [AdminSettingController::class, 'updateSettings'])->name('admin.settings.update');


Route::get('admin/settings/export', [AdminSettingController::class, 'export'])->name('admin.settings.export');


// single export
Route::post('admin/settings/single-export', [AdminSettingController::class, 'singleExport'])->name('admin.settings.singleExport');



// --------------- 13. store
Route::get('admin/store', [AdminStoreController::class, 'store'])->name('admin.store');


// create item
Route::post('admin/store/item/create', [AdminStoreController::class, 'createItem'])->name('admin.createItem');


// confirm purchase
Route::get('admin/store/confirmPurchase/{id}/{date}', [AdminStoreController::class, 'confirmPurchase'])->name('admin.confirmPurchase');

// cancel purchase
Route::get('admin/store/cancelPurchase/{id}/{date}', [AdminStoreController::class, 'cancelPurchase'])->name('admin.cancelPurchase');



// --------------- 14. customers
Route::get('admin/customers', [AdminCustomerController::class, 'customers'])->name('admin.customers');

Route::post('admin/customers/freez', [AdminCustomerController::class, 'freez'])->name('admin.customers.freez');

Route::post('admin/customers/renew', [AdminCustomerController::class, 'renew'])->name('admin.customers.renew');



//customer signup page 
Route::get('customers/signup', [AdminCustomerController::class, 'signup'])->name('customers.signup');

// 1- create customer (this actually have separate tab (new customer) )
Route::get('admin/customers/create', [AdminCustomerController::class, 'create'])->name('admin.createCustomer');


Route::post('admin/customers/create/new', [AdminCustomerController::class, 'createCustomer'])->name('admin.newCustomer');

// 2- edit customer
Route::get('admin/customers/{id}/edit', [AdminCustomerController::class, 'edit'])->name('admin.editCustomer');


// 3- update customer
Route::post('admin/customers/{id}/update', [AdminCustomerController::class, 'update'])->name('admin.updateCustomer');


// 4- create feedback
Route::post('admin/customers/feedback/create/{id}', [AdminCustomerController::class, 'addFeedback'])->name('admin.addFeedback');


// 5- customer chat
Route::get('admin/customers/chats', [AdminCustomerController::class, 'customerChat'])->name('admin.customerChat');



// 5-1 (specific customer chat)
Route::get('admin/customers/chats/{id}', [AdminCustomerController::class, 'customerChatActive'])->name('admin.customerChatActive');



// 6- send message
Route::post('admin/customers/chats/send-message', [AdminCustomerController::class, 'sendMessage'])->name('admin.sendMessage');



// ================================ KITCHEN ===============================



// ------------- 1. login
Route::get('kitchen/login', [KitchenController::class, 'login'])->name('kitchen.login');


Route::get('kitchen/logout', [KitchenController::class, 'logout'])->name('kitchen.logout');


Route::post('kitchen/login/check', [KitchenController::class, 'checkLogin'])->name('kitchen.login.check');



// ------------- 2. dashboad
Route::get('kitchen/dashboard', [KitchenDashboardController::class, 'dashboard'])->name('kitchen.dashboard');

Route::get('kitchen/dashboard/endShift', [KitchenDashboardController::class, 'endShift'])->name('kitchen.endShift');


Route::get('kitchen/dashboard/meal-breakdown/{id}', [KitchenDashboardController::class, 'mealBreakdown'])->name('kitchen.mealBreakdown');



// ------------- 3. lables
Route::get('kitchen/labels', [KitchenLabelController::class, 'labels'])->name('kitchen.labels');



Route::post('kitchen/labels', [KitchenLabelController::class, 'labels'])->name('kitchen.labels');

// ------------- 4. meals
Route::get('kitchen/meals', [KitchenMealsController::class, 'meals'])->name('kitchen.meals');

Route::post('kitchen/meals', [KitchenMealsController::class, 'mealsfilter'])->name('kitchen.meals');


// ------------- 5. deliverid
Route::get('kitchen/deliveries', [KitchenDeliveriesController::class, 'deliveries'])->name('kitchen.deliveries');

Route::post('kitchen/deliveries', [KitchenDeliveriesController::class, 'deliveriesFilter'])->name('kitchen.deliveries');



Route::get('kitchen/meals/cooking/{meal_id}', [KitchenMealsController::class, 'cooking'])->name('kitchen.meals.cooking');

Route::get('kitchen/meals/cooked/{meal_id}', [KitchenMealsController::class, 'cooked'])->name('kitchen.meals.cooked');

Route::get('kitchen/meals/labeled/{meal_id}', [KitchenMealsController::class, 'labeled'])->name('kitchen.meals.labeled');

Route::get('kitchen/deliveries/ready/{delivery_id}', [KitchenDeliveriesController::class, 'ready'])->name('kitchen.deliveries.ready');

Route::get('kitchen/meals/all/cooked/{id}', [KitchenMealsController::class, 'allCooked'])->name('kitchen.meals.all.cooked');


Route::get('/', function () {
    return view('admins.logins.index');
});






// ================================ Customer App ===============================

// -------------------- login
Route::get('customer/login', [CustomerController::class, 'login'])->name('customer.login');

// check user
Route::post('customer/login', [CustomerController::class, 'checkUser'])->name('customer.checkUser');




// ---------------------- home
Route::get('customer', [CustomerController::class, 'home'])->name('customer.home');



// ---------------------- chat
Route::get('customer/chat', [CustomerController::class, 'chat'])->name('customer.chat');

Route::get('customer/chat/room', [CustomerController::class, 'chatRoom'])->name('customer.chatRoom');

Route::post('customer/chat/room/send-message', [CustomerController::class, 'sendMessage'])->name('customer.sendMessage');





// ---------------------- store
Route::get('customer/store', [CustomerController::class, 'store'])->name('customer.store');

Route::post('customer/store/purchase', [CustomerController::class, 'storePurchase'])->name('customer.storePurchase');






// ---------------------- plan
Route::get('customer/plan', [CustomerController::class, 'plan'])->name('customer.plan');


Route::get('customer/plan/{id}/meals', [CustomerController::class, 'planMeals'])->name('customer.planMeals');


// update customer plan Meals
Route::post('customer/plan/{id}/meals/update', [CustomerController::class, 'updatePlanMeals'])->name('customer.updatePlanMeals');




// update excludes
Route::post('customer/plan/update-excludes', [CustomerController::class, 'updateExcludes'])->name('customer.updateExcludes');



// ---------------------- profile
Route::get('customer/profile', [CustomerController::class, 'profile'])->name('customer.profile');


// edit and update profile
Route::get('customer/profile/edit', [CustomerController::class, 'profileEdit'])->name('customer.profileEdit');

Route::post('customer/profile/edit', [CustomerController::class, 'updateProfile'])->name('customer.updateProfile');




// ================================ Customer App ===============================

// -------------------- login


Route::get('company/login/', [CompanyController::class, 'login'])->name('company.login');

Route::get('company/logout/', [CompanyController::class, 'logout'])->name('company.logout');

Route::post('company/login/check', [CompanyController::class, 'checkLogin'])->name('company.login.check');

Route::get('company/dashboard/', [CompanyController::class, 'dashboard'])->name('company.dashboard');

Route::get('company/deliveries/', [CompanyController::class, 'deliveries'])->name('company.deliveries');

Route::get('company/operationHealth/', [CompanyController::class, 'operationHealth'])->name('company.operation.health');

Route::post('company/drivers/assign', [CompanyController::class, 'assignDriver'])->name('company.drivers.assign');


Route::get('company/drivers/', [CompanyController::class, 'drivers'])->name('company.drivers');

Route::post('company/drivers/create', [CompanyController::class, 'addDriver'])->name('company.drivers.create');

Route::get('company/settings/', [CompanyController::class, 'settings'])->name('company.settings');

Route::post('company/settings/update', [CompanyController::class, 'updateSettings'])->name('company.settings.update');
