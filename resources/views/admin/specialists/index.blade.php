@extends('layouts.admin.admin') @section('title','Specialists | ') @section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Specialists</li>
                </ol>
            </div>
            <!-- /.col -->

            <div class="col-md-6">
                <button title="Click to Add Category" data-toggle="modal" data-target="#addCatModal" class="btn btn-primary btn-sm" style="float: right;"><i class="fas fa-plus"></i> Add Category</button>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<section class="content">
    <!-- CONTAINER FLUID -->
    <div class="container-fluid">
        <!-- END ROW 1 -->
        <br />

        <div class="card">
            <div class="card-body">
               
                <div class="table-responsive catTableData" id="catTableData">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">Specialist</th>
                                {{-- <th scope="col">Email</th> --}}
                                <th scope="col">Business Name</th>
                                <th scope="col">Business Phone</th>
                                <th scope="col">Business Location</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">Payment Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($specialists as $key => $specialist)
                                
                            <tr id="target_{{ $specialist->id }}">
                                <td>{{ $key +1 }}</td>
                                <td>{{ $specialist->user->name }}</td>
                                {{-- <td>{{ $specialist->User->email }}</td> --}}
                                <td>{{ $specialist->business_name }}</td>
                                <td>{{ $specialist->business_phone }}</td>
                                <td>{{ $specialist->business_phone }}</td>
                                <td>{{ $specialist->payment_method }}</td>
                                <td>{{ $specialist->payment_email }}</td>
                                <td>
                                    @if ($specialist->user->status == 'inactive')
                                        <span class="badge badge-sm badge-danger">{{ $specialist->user->status }}</span>
                                        @else
                                        <span class="badge badge-sm badge-success">{{ $specialist->user->status }}</span>
                                        
                                        @endif
                                    
                                </td>
                                
                                <td style="min-width: 135px !important;" class="d-flex">
                                    <form action="{{ route('specialists.update',$specialist->user->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        @if ($specialist->user->status == 'inactive')
                                        <input type="hidden" name="status" value="active">
                                        <button type="submit" class="btn btn-sm btn-success">Activate</button>
                                        @else
                                        <input type="hidden" name="status" value="inactive">
                                        <button type="submit" class="btn btn-sm btn-danger">Block</button>
                                        
                                        @endif
                                    </form>

                                    <button title="Click to Delete Category" type="button" class="btn btn-danger btn-sm catDelete ml-2" id="catDelete" data-catid=""><i class="fe fe-trash"></i> Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- END CARD --}}

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
                    <form action="" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Name*</label>
                                <input id="name" type="text" class="form-control text-capitalize" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Enter Category Name" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-md btn-danger" data-dismiss="modal"><i class="fas fa-backspace"></i> Cancel</button>
                            <button type="submit" class="btn btn-md btn-primary"><i class="fas fa-check-circle"></i> Add Category</button>
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
                        <button type="button" class="btn btn-md btn-primary deleteCatBtn" id="deleteCatBtn">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
