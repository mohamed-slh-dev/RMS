@extends('layouts.companies')



@section('content')

<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Drivers</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">Manage Drivers</a></li>

                 
                </ol>

            </div>

        </div>

    </div>
</div>

<div class="container page__container">
    <div class="page-section"> 
       
        <div class="card mb-lg-32pt p-4">
            <div class="row card-group-row my-3">
                <div class="col-sm-12">
                     <a class="btn btn-block btn-outline-accent tab-pane" data-toggle="modal" data-target=".new-driver">New Driver</a> 
                </div>
            </div>


            <div class="table-responsive"
                 data-toggle="lists"
                 data-lists-sort-by="js-lists-values-date"
                 data-lists-sort-desc="true"
                 data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>

                <table class="table mb-0 thead-border-top-0 table-nowrap">
                    <thead>
                        <tr>

                          

                            <th>
                                <a href="javascript:void(0)"
                                   class="sort" >Name</a>
                            </th>

                            <th >
                                <a href="javascript:void(0)"
                                   class="sort">Phone</a>
                            </th>

                            <th >
                                <a href="javascript:void(0)"
                                   class="sort">email</a>
                            </th>
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort">City</a>
                            </th>
                            <th >
                                <a href="javascript:void(0)"
                                   class="sort">Districts</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list"
                           id="clients">

                           @foreach ($drivers as $driver)
                                                        
                           <!-- table row -->
                           <tr>


                               <!-- name + pp -->
                               <td>

                                   <div class="media flex-nowrap align-items-center"
                                       style="white-space: nowrap;">
                                       <div class="avatar avatar-32pt mr-8pt">

                                           <img src="{{ asset('assets/companies/images/drivers/profiles/'.$driver->profile_img) }}"
                                               alt="Avatar" class="avatar-img rounded-circle img-fit">

                                       </div>
                                       <div class="media-body">

                                           <div class="d-flex align-items-center">
                                               <div class="flex d-flex flex-column">
                                                   <p class="mb-0">
                                                       <strong class="js-lists-values-name">{{ $driver->name }}</strong>
                                                   </p>
                                               </div>

                                           </div>

                                       </div>
                                   </div>

                               </td>

                               <!-- phone -->
                               <td>
                                   <small class="js-lists-values-policy text-50">+{{ $driver->phone }}</small>
                               </td>

                               <!-- License -->
                               <td>
                                   <small class="js-lists-values-policy text-50">{{ $driver->license }}</small>
                               </td>


                               


                               <!-- city -->
                               <td>
                                   <small class="js-lists-values-days text-50">{{ $driver->city->name }}</small>
                               </td>


                               <!-- district -->
                               <td>

                                   {{-- foreach times --}}
                                   @foreach ($driver->districts as $district)

                                   <small class="js-lists-values-days text-50">{{ $district->district->name }}</small>

                                   @endforeach
                                   {{-- end foreach --}}
                               </td>



                               <td class="text-right">
                                   <a href="" class="text-50"><i
                                           class="material-icons">more_vert</i></a>
                               </td>
                           </tr>
                           <!-- end table row -->



                           @endforeach
                           {{-- end foreach --}}

                    </tbody>
                </table>
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
            <!-- <div class="card-body bordet-top text-right">
15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->

        </div>

    </div>
</div>

@endsection

@section('modals')

<div class="modal fade new-driver" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">New Driver</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
        
          <form action="{{route('company.drivers.create')}}" method="POST" enctype="multipart/form-data">

            @csrf
        
          <div class="modal-body">

            <div class="row">

                <!-- name -->
                <div class="form-group col-4">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="" required="">
                </div>


                <!-- phone -->
                <div class="form-group col-4">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="" required="">
                </div>

                <!-- Email -->
                <div class="form-group col-4">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="" required="">
                </div>


                <!-- License -->
                <div class="form-group col-4">
                    <label class="form-label">License</label>
                    <input type="text" name="license" class="form-control" placeholder="" required="">
                </div>

                <!-- password -->
                <div class="form-group col-4">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="" required="">
                </div>


                


                <!-- city -->
                <div class="form-group col-4">
                    <label class="form-label">City</label>
                    <select id="select02" class="form-control" name="city" required="">
                            
                       @foreach ($cities as $city)
                    <option value="{{$city->id}}"> {{$city->name}} </option>
                       @endforeach

                    
                    </select>
                </div>

                <!-- district -->
                <div class="form-group col-12">
                    <label class="form-label">District</label>

                    
                    <select id="select02" data-toggle="select" name="districts[]" multiple class="form-control" required="">
                        
                        @foreach ($districts->groupBy('city_id') as $city => $city_distrcict)

                    <option disabled>{{$city_distrcict[0]->city->name}}</option>
                            @foreach ($city_distrcict as $district)
                    <option value="{{$district->id}}"> {{$district->name}} </option>
                            @endforeach
                        @endforeach
                      

                    </select>
                </div>




                <!-- attachment lable -->
                <div class="form-group col-12 mt-4 mb-1">
                    <label class="form-label border-bottom-1">Attachments</label>
                </div>


                <!-- Picture -->
                <div class="form-group col-6">
                    <input type="file" name="profile-img" class="custom-file-input" required="">
                    <label  class="custom-file-label" style="width: 355px; margin-left:14px;">Profile
                        Picture</label>
                </div>

                <!-- License File -->
                <div class="form-group col-6">
                    <div>
                        <input type="file"  name="license-img" class="custom-file-input" required="">
                        <label  class="custom-file-label" style="width: 366px; margin-left:14px;">License
                            Picture</label>
                    </div>

                </div>

            </div>



        </div> <!-- end model body -->

          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button class="btn btn-primary">Save</button>
            
          </div>

        </form>

       </div>
    </div>
 </div>
    
@endsection