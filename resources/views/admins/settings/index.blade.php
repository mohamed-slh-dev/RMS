@extends('layouts.admin')



{{-- section --}}
@section('content')



{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Settings</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="dashboard.html">Settings</a></li>



                </ol>

            </div>
        </div>


    </div>
</div>
{{-- end breadcrubms --}}





{{-- content --}}
<div class="container page__container">
    <div class="page-section">

        <div class="page-separator">
            <div class="page-separator__text">Manage Settings</div>
        </div>

        <div class="list-group-item" id="custom">
            <div class="form-group row align-items-center mb-0">
                <div class="form-group col-sm-4">
                    <label class="form-label" for="exampleInputEmail1">Company Name:</label>
                    <input type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group col-sm-4">
                    <label class="form-label" for="exampleInputEmail1">E-mail:</label>
                    <input type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group col-sm-4">
                    <label class="form-label" for="exampleInputEmail1">Phone:</label>
                    <input type="text" class="form-control" placeholder="">
                </div>



                <div class="form-group col-sm-4">
                    <label for="file" class="form-label">Logo : <span class=""> <img
                                src="{{ asset('assets/admin/images/logo/RESTAURANT.png') }}" width="100" height="100"></span> </label>
                    <input type="file" id="file" class="form-control">


                </div>



                <div class="form-group col-sm-12 ">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>

                <div class="form-group col-sm-12 ">
                   <h4>Export all database tables</h4>
                   <a href=" {{route('admin.settings.export')}} " class="btn btn-success">Export</a>
                </div>

                <div class="form-group col-sm-12 ">
                    <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date"
                    data-lists-sort-desc="true"
                    data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone",
                    "js-lists-values-date"]'>
                    
                    <table class="table mb-0 thead-border-top-0 table-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Download</th>
                              
                            </tr>
                        </thead>
                    
                        <tbody>
                    
                            @foreach ($exports as $export)
                    
                            <tr>
                    
                                <td>{{ $export->id }}</td>
                    
                    
                                <td>{{ $export->name }}</td>
                    
                                <td>{{ $export->created_at }}</td>
                    
                                <td>
                                    <a href=" {{ asset('assets/admin/dbs/'.$export->name) }} " download="">
                                    Download</a>
                                </td>
                               
                             
                            </tr>
                    
                            @endforeach
                            {{-- end foreach --}}
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>



{{-- end content --}}









{{-- modals --}}



{{-- end modals --}}




@endsection
{{-- end section --}}