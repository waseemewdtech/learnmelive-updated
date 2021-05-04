@extends('layouts.admin.admin') @section('title','Profile') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
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

<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.admin_navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')


<p class="border-bottom pl-3 f-21 cl-616161">Edit Your Personal Settings</p>

<p class="pl-3 f-21 cl-000000">Categories</p>
@include('common.messages')
                <div class="table-responsive catTableData" id="catTableData">
                    <button title="Click to Add Service" data-toggle="modal" data-target="#addCatModal"
                        class="btn btn-sm bg-3AC574 text-white m-2" style="float: right;">Add Category</button>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $key => $category)
                            <tr id="target_{{ $category->id }}">
                                <td>{{ $key+1 }}</td>
                               
                                <td class="text-capitalize">{{ $category->name }}</td>
                                <td class="text-capitalize"> <span class="badge badge-sm {{ ($category->status == 'active')? 'badge-success':'badge-danger' }}">{{ $category->status}}</span></td>
                                
                                <td style="min-width: 135px !important;">
                                    <button title="Click to Update Category" class="btn btn-warning btn-sm editCatBtn" id="editCatBtn" data-target=".editCatModal" data-toggle="modal" data-catid="{{ $category->id }}"><i class="fa fa-pencil"></i> </button>

                                    <button title="Click to Delete Category" type="button" class="btn btn-danger btn-sm catDelete" data-toggle="modal" data-target=".deleteCatModal" id="catDelete" data-catid="{{ $category->id }}"><i class="fa fa-trash"></i> </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

 <!-- Modal For Adding Category-->
        <div class="modal fade" id="addCatModal" tabindex="-1" role="dialog" aria-labelledby="addCatModalArea" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCatModalArea" style="font-size: 18px !important;">Add New Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('dashboard/categories') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Name*</label>
                                <input id="name" type="text" class="form-control text-capitalize" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Enter Category Name" />
                            </div>
                            <div class="custom-control custom-switch d-flex">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="status" checked>
                                <label class="custom-control-label p-0 m-0" for="customSwitch1">Active</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-md bg-3AC574 text-white"> Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal For Editing Category-->
        <div class="modal fade editCatModal" id="editCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelcatedit" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelcatedit" style="font-size: 18px !important;">Edit Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="requestCatData"></div>
                </div>
            </div>
        </div>

        <!-- Modal For Deleting Category-->
        <div class="modal fade deleteCatModal" id="deleteCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelcatdelete" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelcatdelete" style="font-size: 18px !important;">Delete Confirmation !</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure, you want to delete this Category?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">No, Cancel</button>
                        <button type="button" class="btn btn-md bg-3AC574 text-white deleteCatBtn" id="deleteCatBtn">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
@endsection 