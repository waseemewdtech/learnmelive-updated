@extends('layouts.admin.admin') @section('title','Profile') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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

    /* Start Gallery CSS */
    .thumb {
        margin-bottom: 15px;
    }

    .thumb:last-child {
        margin-bottom: 0;
    }

    /* CSS Image Hover Effects: https://www.nxworld.net/tips/css-image-hover-effects.html */
    /* .thumb figure img {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        -webkit-transition: 0.3s ease-in-out;
        transition: 0.3s ease-in-out;
    } */
    .thumb figure:hover img {
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    }

    .ui-sortable-placeholder {
        border: 1px dashed black !important;
        visibility: visible !important;
        background: #eeeeee78 !important;
    }

    .ui-sortable-placeholder * {
        visibility: hidden;
    }

    .RearangeBox.dragElemThumbnail {
        opacity: 0.6;
    }

    .RearangeBox {
        width: 180px;
        height: 240px;
        padding: 10px 5px;
        cursor: all-scroll;
        float: left;
        display: inline-block;
        margin: 5px !important;
        text-align: center;
    }

    .IMGthumbnail {
        max-width: 168px;
        height: 80%;
        margin: auto;
        background-color: #ececec;
        padding: 2px;
        border: none;
    }

    .IMGthumbnail img {
        width: 100%;
        height: 100%;
    }

    .imgThumbContainer {
        margin: 4px;
        border: solid;
        display: inline-block;
        justify-content: center;
        position: relative;
        border: 1px solid rgba(0, 0, 0, 0.14);
        -webkit-box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
    }

    .imgThumbContainer>.imgName {
        text-align: center;
        padding: 2px 6px;
        margin-top: 4px;
        font-size: 13px;
        height: 20%;
        overflow: hidden;
    }

    .imgThumbContainer>.imgRemoveBtn {
        position: absolute;
        right: 2px;
        top: 2px;
        cursor: pointer;
        display: none;
    }

    .RearangeBox:hover>.imgRemoveBtn {
        display: block;
    }

    .img-thumbnail {
        height: 225px !important;
    }

    .px-50 {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }

    .select2-container--default .select2-selection--single {
        border: none !important;
    }

    fieldset,
    label {
        margin: 0;
        padding: 0;
    }

    h1 {
        font-size: 1.5em;
        margin: 10px;
    }

    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: left;
    }

    .rating>input {
        display: none;
    }

    .rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating>label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating>input:checked~label,
    /* show gold star when clicked */
    .rating:not(:checked)>label:hover,
    /* hover current star */
    .rating:not(:checked)>label:hover~label {
        color: #3ac574;
    }

    /* hover previous stars in list */

    .rating>input:checked+label:hover,
    /* hover current star when changing rating */
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    /* lighten current selection */
    .rating>input:checked~label:hover~label {
        color: #3ac574;
    }

</style>
@endsection {{-- head end --}} {{-- content section start --}}
@section('navbar')

<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.admin_navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')


    <p class="border-bottom pl-3 f-21 cl-616161">SubCategories</p>

    {{-- <p class="pl-3 f-21 cl-000000">SubCategories</p> --}}
    @include('common.messages')

        <div class="table-responsive catTableData" id="catTableData">
            <button title="Click to Add Service" data-toggle="modal" data-target="#add-modal"
                class="btn btn-sm bg-3AC574 text-white m-2" style="float: right;">Add SubCategory</button>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-uppercase">
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subcategories as $key => $subcategory)
                        <tr id="target_{{ $subcategory->id }}">
                            <td>{{ $key+1 }}</td>
                            
                            <td >{{ ucwords($subcategory->category->name) }}</td>
                            <td >{{ ucwords($subcategory->name) }}</td>
                            <td >{{ ucfirst($subcategory->description) }}</td>
                            
                            <td style="min-width: 135px !important;" class="d-flex">
                                
                                <div class="modal fade editCatModal{{ $subcategory->id }}" id="editCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelcatedit" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelcatedit" style="font-size: 18px !important;">Edit SubCategory</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                        
                                                <form action="{{ route('subcategories.store') }}" method="post" id="edit-subcategories-form-{{$subcategory->id}}" >
                                                    @csrf
                                                    @method('put')
                                                    <div class="pl-5 pr-5 first-step-html-change">
                                                    
                                                        <div class="row justify-content-between">
                                                            <div
                                                                class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                                                <div class="d-flex"><em class="fa fa-list d-flex justify-content-center align-items-center"></em>
                                                                </div>
                                                                <div class="w-100">
                                                                    <select id="country" name="category" class="form-control country-select w-100 border-0">
                                                                        @foreach ($categories as $category)
                                                                            <option {{ $subcategory->category_id == $category->id?"selected":''}} value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                                                <div class="d-flex"><em class="fa fa-list d-flex justify-content-center align-items-end pb-2"></em>
                                                                </div>
                                                                <div class="w-100 d-flex align-items-end">
                                                                    <input type="text" class="w-100 form-control border-0" placeholder="Enter SubCategory Name" name="name"
                                                                            aria-label="" aria-describedby="basic-addon1" value="{{ $subcategory->name }}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                        <div class="row justify-content-between">
                                                            <div class="input-group mb-3 col-md-12 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                                                <div>
                                                                    
                                                                    <em class="fa fa-bars"></em>
                                                                </div>
                                                                <div class="w-100">
                                                                    <textarea name="description" type="text" id="description" class="form-control border-0" placeholder="Type SubCategory Description..."
                                                                        >{{ $subcategory->description }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                        <div class="row justify-content-end">
                                                            <button type="button" class="btn btn-sm bg-3AC574 text-white" onclick="editSubCategory({{$subcategory->id}});">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button title="Click to Update SubCategory" class="btn btn-warning btn-sm editCatBtn" id="editCatBtn" data-target=".editCatModal{{ $subcategory->id }}" data-toggle="modal" data-catid="{{ $subcategory->id }}"><i class="fa fa-pencil"></i></button>
                                <form method="post" id="delete-subcategories-form-{{ $subcategory->id }}" action="{{ route('subcategories.destroy',$subcategory->id) }}">
                                    @csrf
                                    @method('delete')
                               </form>
                               <button title="Click to Delete SubCategory" type="button" class="btn btn-danger btn-sm ml-1" onclick="deleteSubcategory({{ $subcategory->id }});"><i class="fa fa-trash"></i></button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal For Adding Category-->
        <div class="modal fade " tabindex="-1" role="dialog" id="add-modal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ml-4">Add SubCategory</h5>
                        <button type="button" class="close mr-2 close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('subcategories.store') }}" method="post" id="add-subcategories-form" >
                            @csrf
                            <div class="pl-5 pr-5 first-step-html-change">
                            
                                <div class="row justify-content-between">
                                    <div
                                        class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                        <div class="d-flex"><em class="fa fa-list d-flex justify-content-center align-items-center"></em>
                                        </div>
                                        <div class="w-100">
                                            <select id="country" name="category" class="form-control country-select w-100 border-0">
                                                @foreach ($categories as $subcategory)
                                                    <option value="{{ $subcategory->id }}">{{ ucwords($subcategory->name) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div
                                        class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                        <div class="d-flex"><em class="fa fa-list d-flex justify-content-center align-items-end pb-2"></em>
                                        </div>
                                        <div class="w-100 d-flex align-items-end">
                                            <input type="text" class="w-100 form-control border-0" placeholder="Enter SubCategory Name" name="name"
                                                    aria-label="" aria-describedby="basic-addon1" value="" />
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row justify-content-between">
                                    <div class="input-group mb-3 col-md-12 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                        <div>
                                            
                                            <em class="fa fa-bars"></em>
                                        </div>
                                        <div class="w-100">
                                            <textarea name="description" type="text" id="description" class="form-control border-0" placeholder="Type SubCategory Description..."
                                                ></textarea>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row justify-content-end">
                                    <button type="button" class="btn btn-sm bg-3AC574 text-white" onclick="addSubCategory();">Add</button>
                                </div>
                            </div>
                        </form>

                    </div>

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
                    <div class="modal-body">

                        <form action="{{ route('subcategories.store') }}" method="post" id="edit-subcategories-form" >
                            @csrf
                            <div class="pl-5 pr-5 first-step-html-change">
                            
                                <div class="row justify-content-between">
                                    <div
                                        class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                        <div class="d-flex"><em class="fa fa-list d-flex justify-content-center align-items-center"></em>
                                        </div>
                                        <div class="w-100">
                                            <select id="country" name="category" class="form-control country-select w-100 border-0">
                                                @foreach ($categories as $subcategory)
                                                    <option value="{{ $subcategory->id }}">{{ ucwords($subcategory->name) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div
                                        class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                        <div class="d-flex"><em class="fa fa-list d-flex justify-content-center align-items-end pb-2"></em>
                                        </div>
                                        <div class="w-100 d-flex align-items-end">
                                            <input type="text" class="w-100 form-control border-0" placeholder="Enter SubCategory Name" name="name"
                                                    aria-label="" aria-describedby="basic-addon1" value="" />
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row justify-content-between">
                                    <div class="input-group mb-3 col-md-12 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                        <div>
                                            
                                            <em class="fa fa-bars"></em>
                                        </div>
                                        <div class="w-100">
                                            <textarea name="description" type="text" id="description" class="form-control border-0" placeholder="Type SubCategory Description..."
                                                ></textarea>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row justify-content-end">
                                    <button type="button" class="btn btn-sm bg-3AC574 text-white" onclick="addSubCategory();">Add</button>
                                </div>
                            </div>
                        </form>

                    </div>
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
                        <button type="button" class="btn btn-md btn-primary deleteCatBtn" id="deleteCatBtn">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
@endsection 
@section('extra-script')
    <script>

        @if (session("message"))

        swal('success', 'SubCategory has been deleted successfully', 'success')
                .then((value) => {
	                                // window.location.href = '';
	                            });
        @endif
        function addSubCategory()
        {
            var myform = document.getElementById("add-subcategories-form");
            var fd = new FormData(myform);
            fd.append("_token", "{{ csrf_token() }}");
            $.ajax({
                url: "{{ route('subcategories.store') }}",
                type: "post",
                processData: false,
                contentType: false,
                data: fd,
                success: function (data) {
                    if (data.success == true) {
                        swal('success', data.message, 'success')
                            .then((value) => {
                                window.location = " ";
                            });
                    } else {
                        if (data.hasOwnProperty('message')) {
                            var wrapper = document.createElement('div');
                            var err = '';
                            $.each(data.message, function (i, e) {
                                err += '<p>' + e + '</p>';
                            })

                            wrapper.innerHTML = err;
                            swal({
                                icon: "error",
                                text: "{{ __('Please fix following error!') }}",
                                content: wrapper,
                                type: 'error'
                            });
                            //setTimeout("pageRedirect()", 3000);
                            //$('.actions  li:first-child a').click();
                        }
                    }

                }
            });
        }

        function editSubCategory(id)
        {
            var myform = document.getElementById("edit-subcategories-form-"+id);
            var fd = new FormData(myform);
            fd.append("_token","{{ csrf_token() }}");
            var c_url = '{{ route("subcategories.update", ":id") }}';
            c_url = c_url.replace(':id',id);
            $.ajax({
                url: c_url,
                type: "post",
                processData: false,
                contentType: false,
                data: fd,
                success: function (data) {
                    if (data.success == true) {
                        swal('success', data.message, 'success')
                            .then((value) => {
                                window.location = " ";
                            });
                    } else {
                        if (data.hasOwnProperty('message')) {
                            var wrapper = document.createElement('div');
                            var err = '';
                            $.each(data.message, function (i, e) {
                                err += '<p>' + e + '</p>';
                            })

                            wrapper.innerHTML = err;
                            swal({
                                icon: "error",
                                text: "{{ __('Please fix following error!') }}",
                                content: wrapper,
                                type: 'error'
                            });
                            //setTimeout("pageRedirect()", 3000);
                            //$('.actions  li:first-child a').click();
                        }
                    }

                }
            });
        }

        function deleteSubcategory(id)
        {
            swal({
                title: "Do you want to delete this subcategory?",
                text: "Once deleted, you will not be able to recover this subcategory!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete)
                {
                    var myform = document.getElementById("delete-subcategories-form-"+id).submit();
                    // var fd = new FormData(myform);
                    // fd.append("_token","dssfsdfsdfertwer32/sfdf/@sdfsdf345345534dffg");
                    // var c_url = '{{ route("subcategories.destroy", ":id") }}';
                    // c_url = c_url.replace(':id',id);
                    // $.ajax({
                    //     url: c_url,
                    //     type: "delete",
                    //     processData: false,
                    //     contentType: false,
                    //     data:fd,
                    //     success: function (data) {
                    //         if (data.success == true) {
                    //             swal('success', data.message, 'success')
                    //                 .then((value) => {
                    //                     window.location = " ";
                    //                 });
                    //         } 
                    //     }
                    // });
                    } 
                });

        }


        
    </script>
@endsection
