@extends('layouts.companies')



@section('content')

<style>

    #earningsTrafficChart {
        width: 100% !important;
    }
    
    </style>

<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Dashboard</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item active">
                        Dashboard
                    </li>

                </ol>

            </div>

        </div>

    </div>
</div>

<div class="container page__container">
    <div class="page-section">

<div class="page-separator">
    <div class="page-separator__text">Overview</div>
</div>


<div class="row card-group-row mb-lg-8pt"> 
    <div class="col-lg-4 col-md-4 card-group-row__col">
        <div class="card card-group-row__card">
            <div class="card-body d-flex align-items-center">
                <div class="flex d-flex align-items-center">
                    <div class="h2 mb-0 mr-3">3.6k</div>
                    <div class="flex">
                        <p class="mb-0"><strong>Customers</strong></p>
                        <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                            31.5%
                            <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                        </p>
                    </div>
                </div>
                <i class="material-icons icon-32pt text-20 ml-8pt">group</i>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 card-group-row__col">
        <div class="card card-group-row__card">
            <div class="card-body d-flex align-items-center">
                <div class="flex d-flex align-items-center">
                    <div class="h2 mb-0 mr-3">12.3k</div>
                    <div class="flex">
                        <p class="mb-0"><strong>Subscription</strong></p>
                        <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                            51.5%
                            <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                        </p>
                    </div>
                </div>
                <i class="material-icons icon-32pt text-20 ml-8pt">card_membership</i>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 card-group-row__col">
        <div class="card card-group-row__card">
            <div class="card-body d-flex align-items-center">
                <div class="flex d-flex align-items-center">
                    <div class="h2 mb-0 mr-3">567</div>
                    <div class="flex">
                        <p class="mb-0"><strong>Orders</strong></p>
                        <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                            20%
                            <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                        </p>
                    </div>
                </div>
             <i class="material-icons icon-32pt text-20 ml-8pt">room_service</i>
            </div>
        </div>
    </div>
</div>


<div class="row card-group-row mb-lg-8pt">
    <div class="col-lg-4 col-md-4 card-group-row__col">
        <div class="card card-group-row__card">
            <div class="card-body d-flex align-items-center">
                <div class="flex d-flex align-items-center">
                    <div class="h2 mb-0 mr-3">3.6k</div>
                    <div class="flex">
                        <p class="mb-0"><strong>Dining</strong></p>
                        <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                            31.5%
                            <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                        </p>
                    </div>
                </div>
                <i class="material-icons icon-32pt text-20 ml-8pt">restaurant_menu</i>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 card-group-row__col">
        <div class="card card-group-row__card">
            <div class="card-body d-flex align-items-center">
                <div class="flex d-flex align-items-center">
                    <div class="h2 mb-0 mr-3">15.4k</div>
                    <div class="flex">
                        <p class="mb-0"><strong>Deliveries</strong></p>
                        <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                            31.5%
                            <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                        </p>
                    </div>
                </div>
             <i class="material-icons icon-32pt text-20 ml-8pt">local_shipping</i>

            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 card-group-row__col">
        <div class="card card-group-row__card">
            <div class="card-body d-flex align-items-center">
                <div class="flex d-flex align-items-center">
                    <div class="h2 mb-0 mr-3">13.3k</div>
                    <div class="flex">
                        <p class="mb-0"><strong>Total Icome</strong></p>
                        <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                            51.5%
                            <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                        </p>
                    </div>
                </div>
                  <i class="material-icons icon-32pt text-20 ml-8pt">monetization_on</i>
            </div>
        </div>
    </div> 
</div>

<div class="row mb-lg-8pt">
    <div class="col-lg-6">

      
        <div class="card dashboard-area-tabs"
        id="dashboard-area-tabs" style="height:683px;">
       <div class="card-header p-0 nav">
           <div class="row no-gutters flex"
                role="tablist">
               <div class="col"
                    data-toggle="chart"
                    data-target="#earningsTrafficChart"
                    data-update='{"data":{"datasets":[{"label": "Traffic", "data":[10,2,5,15,10,12,15,25,22,30,25,40]}]}}'
                    data-prefix=""
                    data-suffix="k">
                   <a href="#"
                      data-toggle="tab"
                      role="tab"
                      aria-selected="true"
                      class="dashboard-area-tabs__tab card-body text-center active">
                       <span class="font-weight-bold">Subscription</span>
                       <span class="h2 mb-0 mt-n1">2k</span>
                   </a>
               </div>
               <div class="col border-left"
                    data-toggle="chart"
                    data-target="#earningsTrafficChart"
                    data-update='{"data":{"datasets":[{"label": "Earnings", "data":[7,35,12,27,34,17,19,30,28,32,24,39]}]}}'
                    data-prefix="$"
                    data-suffix="k">
                   <a href="#"
                      data-toggle="tab"
                      role="tab"
                      aria-selected="false"
                      class="dashboard-area-tabs__tab card-body text-center">
                       <span class="font-weight-bold">Orders</span>
                       <span class="h2 mb-0 mt-n1">8.9k</span>
                   </a>
               </div>
           </div>
       </div>
       <div class="card-body text-muted">
           <div id="earningsTrafficChartLegend"
                class="chart-legend mt-0 mb-24pt justify-content-start"></div>
           <div class="chart"
                style="height: 80%;">
               <canvas class="chart-canvas js-update-chart-line"
                       id="earningsTrafficChart"
                       data-chart-suffix="k"
                       data-chart-legend="#earningsTrafficChartLegend">
                   <span style="font-size: 1rem;"><strong>Website Traffic / Earnings</strong> area chart goes here.</span>
               </canvas>
           </div>
       </div>
   </div>



    </div>
    <div class="col-lg-6">

        <div class="card">
            <div class="card-header p-0 nav">
                <div class="row no-gutters flex"
                     role="tablist">
                    <div class="col-auto">
                        <div class="p-card-header">
                            <p class="mb-0"><strong>Customers</strong></p>
                            <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                3k
                                <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                            </p>
                        </div>
                    </div>
                    <div class="col-auto border-left">
                        <div class="p-card-header">
                            <p class="mb-0"><strong>Orders</strong></p>
                            <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                264
                                <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                            </p>
                        </div>
                    </div>
                    <div class="col-auto ml-sm-auto">
                        <div class="p-card-header"><a href="#"><i class="material-icons text-50">more_horiz</i></a></div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="vector-map-revenue"
                     class="map mb-3"
                     style="height: 328px;"
                     data-toggle="vector-map"
                     data-vector-map-map="world_en"
                     data-vector-map-show-tooltip="false"
                     data-vector-map-enable-zoom="true"
                     data-vector-map-scale="0"
                     data-vector-map-pins='{
                            "ae": "<div class=\"map-pin blue\"><span>UAE</span></div>"
                        
                        }'>
                </div> 

                <ul class="list-unstyled dashboard-location-tabs nav flex-column m-0"
                    role="tablist">
                    <li data-toggle="vector-map-focus"
                        data-target="#vector-map-revenue"
                        data-focus="us"
                        data-animate="true">
                        <div class="dashboard-location-tabs__tab active"
                             data-toggle="tab"
                             role="tab"
                             aria-selected="true">
                            <div><strong>Dubai</strong></div>
                            <div class="d-flex align-items-center">
                                <div class="flex mr-2">
                                    <div class="progress"
                                         style="height: 4px;">
                                        <div class="progress-bar"
                                             role="progressbar"
                                             style="width: 72%;"
                                             aria-valuenow="72"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>2.05k</div>
                            </div>
                        </div>
                    </li>
                    <li data-toggle="vector-map-focus"
                        data-target="#vector-map-revenue"
                        data-focus="it"
                        data-animate="true">
                        <div class="dashboard-location-tabs__tab"
                             data-toggle="tab"
                             role="tab"
                             aria-selected="true">
                            <div><strong>Abu Dahbi</strong></div>
                            <div class="d-flex align-items-center">
                                <div class="flex mr-2">
                                    <div class="progress"
                                         style="height: 4px;">
                                        <div class="progress-bar bg-primary"
                                             role="progressbar"
                                             style="width: 39%;"
                                             aria-valuenow="39"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>653</div>
                            </div>
                        </div>
                    </li>
                    <li data-toggle="vector-map-focus"
                        data-target="#vector-map-revenue"
                        data-focus="au"
                        data-animate="true">
                        <div class="dashboard-location-tabs__tab"
                             data-toggle="tab"
                             role="tab"
                             aria-selected="true">
                            <div><strong>Sharjah</strong></div>
                            <div class="d-flex align-items-center">
                                <div class="flex mr-2">
                                    <div class="progress"
                                         style="height: 4px;">
                                        <div class="progress-bar bg-primary"
                                             role="progressbar"
                                             style="width: 25%;"
                                             aria-valuenow="25"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>360</div>
                            </div>
                        </div>
                    </li>
                    <li data-toggle="vector-map-focus"
                    data-target="#vector-map-revenue"
                    data-focus="au"
                    data-animate="true">
                    <div class="dashboard-location-tabs__tab"
                         data-toggle="tab"
                         role="tab"
                         aria-selected="true">
                        <div><strong>Ras Al Khaimah</strong></div>
                        <div class="d-flex align-items-center">
                            <div class="flex mr-2">
                                <div class="progress"
                                     style="height: 4px;">
                                    <div class="progress-bar bg-primary"
                                         role="progressbar"
                                         style="width: 30%;"
                                         aria-valuenow="30"
                                         aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>54</div>
                        </div>
                    </div>
                </li>
                <li data-toggle="vector-map-focus"
                data-target="#vector-map-revenue"
                data-focus="au"
                data-animate="true">
                <div class="dashboard-location-tabs__tab"
                     data-toggle="tab"
                     role="tab"
                     aria-selected="true">
                    <div><strong>Ajman</strong></div>
                    <div class="d-flex align-items-center">
                        <div class="flex mr-2">
                            <div class="progress"
                                 style="height: 4px;">
                                <div class="progress-bar bg-primary"
                                     role="progressbar"
                                     style="width: 60%;"
                                     aria-valuenow="60"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>325</div>
                    </div>
                </div>
            </li>
                </ul>

            </div>
        </div>

    </div>
</div>


<div class="card  ">
    <div class="card-header p-0 nav">
        <div class="row no-gutters"
             role="tablist" style=" width: 100%; ">
            <div class="col-auto" style="cursor: pointer; width: 100%;">
                <a  href="#tab-a" data-value="#a" 
                   data-toggle="tab"
                   role="tab"
                   aria-selected="true"
                   class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                    <span class="h2 mb-0 mr-3">1</span>
                    <span class="flex d-flex flex-column">
                        <strong class="card-title">Deliveries</strong>
                        <small class="card-subtitle text-50">Today Deliveries</small>
                    </span>
                </a>
            </div>
           
           
        </div>
    </div>




    <div class="tab-content ">
   
    <div class="table-responsive table-bordered tab-pane active" data-id="a" id="tab-a">
         <div>

          
                <table class="table mb-0 thead-border-top-0 table-nowrap">
                    <thead>
                        <tr>

                      
                            <th>
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-name">#</a>
                            </th>
                            <th>
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-name">Name</a>
                            </th>
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-status">Phone</a>
                            </th>
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-reason">City</a>
                            </th>
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-reason">District</a>
                            </th>
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-available">Address</a>
                            </th> 
                          
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-available">Timing</a>
                            </th>  
                            
                            <th>
                                <a href="javascript:void(0)"
                                   class="sort"
                                   data-sort="js-lists-values-available">Status</a>
                            </th> 
                        
                          
                        </tr>
                    </thead>
                    <tbody class="list"
                           id="leaves">

                        <tr>

                      
                            <td>

                                <div class="media flex-nowrap align-items-center"
                                     style="white-space: nowrap;">
                                     
                                    <div class="media-body">

                                        <div class="d-flex align-items-center">
                                            <div class="flex d-flex flex-column">
                                                <p class="mb-0"><strong class="js-lists-values-name">#235</strong></p>
                                             </div>

                                        </div>

                                    </div>
                                </div>

                            </td>

                            <td>

                                <div class="media flex-nowrap align-items-center"
                                     style="white-space: nowrap;">
                                    <div class="avatar avatar-32pt mr-8pt">

                                        <span class="avatar-title rounded-circle">BN</span>

                                    </div>
                                    <div class="media-body">

                                        <div class="d-flex align-items-center">
                                            <div class="flex d-flex flex-column">
                                                <p class="mb-0"><strong class="js-lists-values-name">Oussama Zerki</strong></p>
                                             </div>

                                        </div>

                                    </div>
                                </div>

                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                   +97145681993
                                </div>
                            </td>
                            <td>Abu Dahbi</td>
                            <td>Duabi</td>

                            <td>dubai address 51 ST</td>

                            <td>2:00 PM - 6:00 PM</td>
                            <td> Pendding </td>
                         
                       
                         
                        </tr>

                        <tr>

                      
                            <td>

                                <div class="media flex-nowrap align-items-center"
                                     style="white-space: nowrap;">
                                     
                                    <div class="media-body">

                                        <div class="d-flex align-items-center">
                                            <div class="flex d-flex flex-column">
                                                <p class="mb-0"><strong class="js-lists-values-name">#235</strong></p>
                                             </div>

                                        </div>

                                    </div>
                                </div>

                            </td>

                            <td>

                                <div class="media flex-nowrap align-items-center"
                                     style="white-space: nowrap;">
                                    <div class="avatar avatar-32pt mr-8pt">

                                        <span class="avatar-title rounded-circle">BN</span>

                                    </div>
                                    <div class="media-body">

                                        <div class="d-flex align-items-center">
                                            <div class="flex d-flex flex-column">
                                                <p class="mb-0"><strong class="js-lists-values-name">Oussama Zerki</strong></p>
                                             </div>

                                        </div>

                                    </div>
                                </div>

                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                   +97145681993
                                </div>
                            </td>
                            <td>Abu Dahbi</td>
                            <td>Duabi</td>
                            <td>dubai address 51 ST</td>
                            <td>2:00 PM - 6:00 PM</td>
                            <td> Pendding </td>
                         
                       
                         
                        </tr>

                    
                        

                    </tbody>
                </table>
                
            </div>

         
    </div>

    
</div>

   <div class="card-footer p-8pt">

       <ul class="pagination justify-content-start pagination-xsm m-0">
           <li class="page-item disabled">
               <a class="page-link"
                  href="#"
                  aria-label="Previous">
                   <span aria-hidden="true"
                         class="material-icons">chevron_left</span>
                   <span>Prev</span>
               </a>
           </li>
           <li class="page-item dropdown">
               <a class="page-link dropdown-toggle"
                  data-toggle="dropdown"
                  href="#"
                  aria-label="Page">
                   <span>1</span>
               </a>
               <div class="dropdown-menu">
                   <a href=""
                      class="dropdown-item active">1</a>
                   <a href=""
                      class="dropdown-item">2</a>
                   <a href=""
                      class="dropdown-item">3</a>
                   <a href=""
                      class="dropdown-item">4</a>
                   <a href=""
                      class="dropdown-item">5</a>
               </div>
           </li>
           <li class="page-item">
               <a class="page-link"
                  href="#"
                  aria-label="Next">
                   <span>Next</span>
                   <span aria-hidden="true"
                         class="material-icons">chevron_right</span>
               </a>
           </li>
       </ul>

   </div>
    
   
   

   

</div>

</div>
</div>
@endsection