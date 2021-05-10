@extends('layouts.frontend.setting') @section('title','Services') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }

    body {
        background-image: none;
    }

    .nav-pills .nav-link.active {
        background-color: #3ac574 !important;
    }




    .px-50 {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }

</style>
@endsection {{-- head end --}} {{-- content section start --}}
@section('navbar')

<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')


<p class="border-bottom pl-3 f-21 cl-616161">Services</p>
{{-- <button title="Click to Add Service" data-toggle="modal" data-target="#addServiceModal"
    class="btn btn-sm bg-3AC574 text-white m-2 add_service" style="float: right;">Add Service</button> --}}
<div class="table-responsive ServiceTableData px-3" id="ServiceTableData">
    <table id="example1" class="table table-hover example1"  style="width:100%;">
        <thead>
            <tr class="text-uppercase">
                <th scope="col">#</th>
                <th scope="col">service</th>
                <th scope="col">Time 15</th>
                <th scope="col">Time 30</th>
                <th scope="col">Time 45</th>
                <th scope="col">Time 60</th>
                {{-- <th scope="col">Status</th> --}}
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr >
                <td>1</td>
                <td>{{ Auth::user()->serviceCategory->name }}</td>
                <td>{{ Auth::user()->serviceCategory->t_15 }}</td>
                <td>{{ Auth::user()->serviceCategory->t_30 }}</td>
                <td>{{ Auth::user()->serviceCategory->t_45 }}</td>
                <td>{{ Auth::user()->serviceCategory->t_60 }}</td>
                <td style="min-width: 135px !important;">
                    <button title="Click to Update Service" class="btn btn-warning btn-sm editServiceBtn"
                        id="editServiceBtn" data-toggle="modal" data-target="#editServiceModal"
                        data-Serviceid="">
                        <i class="fe fe-pencil"></i> Edit
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Modal For Adding Service-->
    <div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalArea"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addServiceModalArea" style="font-size: 18px !important;">Add New Service
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('services') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category" 
                                style="width: 100%;">
                                <option selected="" value="{{ $category->id }}">{{ $category->title }}</option>
                            </select>
                        </div>
                        <div class="form-group sub_categories"></div>
                        <div class="form-group">
                            <label for="title">Notes*</label>
                            <input id="title" type="text" class="form-control text-capitalize" name="title"
                                value="{{ $category->title }}" autocomplete="title" placeholder="Enter Service Title" readonly="" />
                        </div>
                        <div class="form-group mb-0">
                            <label for="timing">Timing*</label>
                            <select id="timing" type="number" class="form-control text-capitalize" name="timing">
                                <option selected="" disabled="" hidden="">Enter Service Timing</option>
                                <option value="15">15</option>
                                <option value="30">30</option>
                                <option value="45">45</option>
                                <option value="60">60</option>
                            </select>                               
                        </div>
                        <div class="form-group">
                            <label for="rate">Rate*</label>
                            <input id="rate" type="number" class="form-control text-capitalize" name="rate"
                                value="{{ old('rate') }}" autocomplete="rate" placeholder="Enter Service Rate" />
                        </div>

                       {{--  <div class="form-group">
                            <label for="description">Description*</label>
                            <textarea id="description" class="form-control summernote" name="description"
                                required> </textarea>
                        </div> --}}

                        {{-- <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" name="status" class="custom-control-input" checked
                                    id="customSwitch3" />
                                <label class="custom-control-label p-0" for="customSwitch3">Inactive/Active</label>
                            </div>
                        </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal"> Cancel</button>
                        <button type="submit" class="btn btn-md bg-3AC574 text-white"> Add
                            Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal For Editing Service-->
    <div class="modal fade editServiceModal" id="editServiceModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabelServiceedit" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelServiceedit" style="font-size: 18px !important;">Edit
                        Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('services.update',Auth::user()->serviceCategory->id) }}" method="POST">
                    @csrf
                    @method('put');
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category" id="select_service_category" 
                                style="width: 100%;" onchange="getCategoryTitle()">
                                <option selected="selected" disabled>Choose category</option>
                                @foreach ($categories as $cat)
                                    <option {{ ($category->id==$cat->id)? 'selected':'' }} value="{{ $cat->id }}">{{ $cat->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="update-note">Notes*</label>
                            <input id="update-note" type="text" class="form-control text-capitalize" name="name"
                                value="{{ $category->title }}" placeholder="Enter Service Title" readonly="" />
                        </div>

                        <div class="form-group">
                            <label for="t_15">Time 15</label>
                            <input id="t_15" type="number" class="form-control text-capitalize" name="t_15"
                                value="{{ Auth::user()->serviceCategory->t_15 }}"/>
                        </div>

                        <div class="form-group">
                            <label for="t_30">Time 30</label>
                            <input id="t_30" type="number" class="form-control text-capitalize" name="t_30"
                                value="{{ Auth::user()->serviceCategory->t_30 }}"/>
                        </div>

                        <div class="form-group">
                            <label for="t_45">Time 45</label>
                            <input id="t_45" type="number" class="form-control text-capitalize" name="t_45"
                                value="{{ Auth::user()->serviceCategory->t_45 }}"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="t_60">Time 60</label>
                            <input id="t_60" type="number" class="form-control text-capitalize" name="t_60"
                                value="{{ Auth::user()->serviceCategory->t_60 }}"/>
                        </div>

                       {{--  <div class="form-group">
                            <label for="description">Description*</label>
                            <textarea id="description" class="form-control summernote" name="description"
                                required> </textarea>
                        </div> --}}

                        {{-- <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" name="status" class="custom-control-input" checked
                                    id="customSwitch3" />
                                <label class="custom-control-label p-0" for="customSwitch3">Inactive/Active</label>
                            </div>
                        </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal"> Cancel</button>
                        <button type="submit" class="btn btn-md bg-3AC574 text-white">Update Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal For Deleting Service-->
    <div class="modal fade deleteServiceModal" id="deleteServiceModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabelServicedelete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelServicedelete" style="font-size: 18px !important;">
                        Delete Confirmation !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure, you want to delete this Service?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">No, Cancel</button>
                    <button type="button" class="btn btn-md btn-primary deleteServiceBtn" id="deleteServiceBtn"
                        data-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>

@endsection
{{-- footer section start --}} @section('extra-script')


<script>
    
    function getCategoryTitle(){
        $('#update-note').val($('#select_service_category option:selected').text());
    }

    if(window.location.href == "{{ url('services') }}?add_new"){
        $('.add_service').click()
    }

    function getSubCategoriesForServices(ele) {
        let id = $(ele).val();
        $.ajax({
            url: "{{ url('sub_categories') }}",
            type: "get",
            data: {
                id: id
            },
            success: function (data) {
                $(".sub_categories").empty();
                $(".sub_categories").html(data);
            },
        });
    }

</script>
@endsection {{-- footer section end --}}
