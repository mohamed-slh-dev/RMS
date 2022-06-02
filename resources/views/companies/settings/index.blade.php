@extends('layouts.companies')



@section('content')

<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Settings</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Manage Company Settings</a></li>

                   

                </ol>

            </div>

        </div>

    </div>
</div>

<div class="container page__container">
    <div class="page-section"> 

         <div class="page-separator">
                <div class="page-separator__text">Manage Settings</div>
            </div>

<div class="list-group-item" id="custom">
<form action="{{route('company.settings.update')}}" method="POST">

    @csrf

     <div class="form-group row align-items-center mb-0">
         <div class="form-group col-sm-4">
             <label class="form-label"
                                   for="exampleInputEmail1">Company Name:</label>
         <input name="name" value="{{$company->name}}" type="text"
                                   class="form-control"
                                   placeholder="">
         </div>

          <div class="form-group col-sm-4">
             <label class="form-label"
                                   for="exampleInputEmail1">E-mail:</label>
                            <input name="email" value="{{$company->email}}" type="text"
                                   class="form-control"
                                   placeholder="">
         </div>

          <div class="form-group col-sm-4">
             <label class="form-label"
                                   for="exampleInputEmail1">Phone:</label>
                            <input name="phone" value="{{$company->phone}}" type="text"
                                   class="form-control"
                                   placeholder="">
         </div>

         <div class="form-group col-sm-4">
            <label class="form-label"
                                  for="exampleInputEmail1">City:</label>
                          <select name="city" id="select01" data-toggle="select" class="form-control" required="">
                              @foreach ($cities as $city)
                                  
                              @if ($company->city_id == $city->id)
                          <option selected value="{{$city->id}}">{{$city->name}}</option>
                             @else
                          <option value="{{$city->id}}">{{$city->name}}</option>
                          @endif
                              @endforeach
                             
                            

                          </select>
        </div>

        <div class="form-group col-sm-4">
            <label class="form-label" for="exampleInputEmail1">Districts:</label>

                                  <select id="select02" data-toggle="select" multiple class="form-control" name="districts[]" required="">
                                    
                                    @foreach ($districts->groupBy('city_id') as $city => $city_distrcict)


                                    <option disabled>{{$city_distrcict[0]->city->name}}</option>
                                            @foreach ($city_distrcict as $district)
                                            @if (array_key_exists($district->id, $company_districts_array))
                                    <option selected value="{{$district->id}}"> {{$district->name}} </option>
                                                
                                            @else
                                            <option value="{{$district->id}}"> {{$district->name}} </option>

                                            @endif

                                            @endforeach
                                        @endforeach

                                  </select>
                          
        </div>

         

         
     

        <div class="form-group col-sm-12 ">
             <button type="submit" class="btn btn-success">Update</button>
        </div>

                    <div class="form-group col-12">
                        <hr>
                    <h5>Delivery Chagrge For Cities</h5>
                    </div>
                    <div class="form-group col-sm-3">
                        <label class="form-label">Dubai</label>
                    <input type="number" class="form-control" disabled value="{{$company->dubai_charge}}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Abu Dhabi</label>
                        <input type="number" class="form-control" disabled value="{{$company->abudhabi_charge}}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Sharjah</label>
                        <input type="number" class="form-control" disabled value="{{$company->sharjah_charge}}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Ajman</label>
                        <input type="number" class="form-control" disabled value="{{$company->ajman_charge}}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Umm Alquwain</label>
                        <input type="number" class="form-control" disabled value="{{$company->ummalquwain_charge}}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">Al Ain</label>
                        <input type="number" class="form-control" disabled value="{{$company->alain_charge }}" >
                    </div>

                    <div class="form-group col-sm-3">
                        <label class="form-label">RAK</label>
                        <input type="number" class="form-control" disabled value="{{$company->rak_charge}}" >
                    </div>


     </div>

    </form>


  </div>

  
 
        
        

    </div>
</div>


@endsection