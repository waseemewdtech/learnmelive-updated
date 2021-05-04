@extends('layouts.admin.specialist.app') @section('title','Appointments | ') @section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">appointments</li>
                </ol>
            </div>
            <!-- /.col -->

            {{-- <div class="col-md-6">
                <button title="Click to Add appointment" data-toggle="modal" data-target="#addappointmentModal" class="btn btn-primary btn-sm" style="float: right;"><i class="fas fa-plus"></i> Add appointment</button>
            </div> --}}
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
               
                <div class="table-responsive appointmentTableData" id="appointmentTableData">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">Client</th>
                                <th scope="col">Timing</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $key => $appointment)
                            <tr id="target_{{ $appointment->id }}">
                                <td>{{ $key +1 }}</td>
                                <td>{{ $appointment->user->name }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>${{ $appointment->rate }}</td>
                                <td>
                                    @if ($appointment->status == "Pending")
                                        
                                    <span class="badge badge-sm badge-warning">{{ $appointment->status }}</span>
                                    
                                    @endif
                                    @if ($appointment->status == "Approved")
                                        
                                    <span class="badge badge-sm badge-info">{{ $appointment->status }}</span>
                                    
                                    @endif
                                    @if ($appointment->status == "Cancelled")
                                        
                                    <span class="badge badge-sm badge-danger">{{ $appointment->status }}</span>
                                    
                                    @endif
                                    @if ($appointment->status == "Completed")
                                        
                                    <span class="badge badge-sm badge-success">{{ $appointment->status }}</span>
                                    
                                    @endif
                                    
                                </td>
                                
                                <td style="min-width: 135px !important; " class="d-flex">
                                    @if ($appointment->status != "Completed")
                                        
                                    <form action="{{ route('appointments.update',$appointment->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        
                                        <input type="hidden" name="status" value="{{ ($appointment->status == 'Pending')? '1':'3' }}">
                                        <button type="submit" class="btn btn-sm btn-success">{{ ($appointment->status == 'Pending')? 'Approve':'completed' }}</button>
                                    </form>
                                    @if ($appointment->status != "Cancelled")
                                        
                                    <form action="{{ route('appointments.update',$appointment->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="status" value="2">
                                        <button type="submit" class="btn btn-sm btn-danger">Cancel</button>
                                    </form>
                                    @endif
                                    @endif
                                    {{-- <button title="Click to Update appointment" class="btn btn-warning btn-sm editappointmentBtn" id="editappointmentBtn" data-appointmentid="{{ $appointment->id }}"><i class="fe fe-pencil"></i> Edit</button>

                                    <button title="Click to Delete appointment" type="button" class="btn btn-danger btn-sm appointmentDelete" id="appointmentDelete" data-appointmentid="{{ $appointment->id }}"><i class="fe fe-trash"></i> Delete</button> --}}
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- END CARD --}}

        <!-- Modal For Adding appointment-->
        <div class="modal fade" id="addappointmentModal" tabindex="-1" role="dialog" aria-labelledby="addappointmentModalArea" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addappointmentModalArea" style="font-size: 18px !important;">Add New appointment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('specialist/appointments') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control select2"  name="category" id="select_category" style="width: 100%;"  onchange="getSubCategories(this);">
                                    <option selected="selected" disabled>Choose category</option>
                                    
                                </select>
                            </div>
                            <div class="form-group sub_categories" >
                                
                            </div>
                            <div class="form-group">
                                <label for="title">Title*</label>
                                <input id="title" type="text" class="form-control text-capitalize" name="title" value="{{ old('title') }}" autocomplete="title" placeholder="Enter appointment Title" />
                            </div>
                            <div class="form-group mb-0">
                                <label for="timing">Timing*</label>
                                <input id="timing" type="number" class="form-control text-capitalize" name="timing" value="{{ old('timing') }}" autocomplete="timing" placeholder="Enter appointment Timing" />
                                <small class="font-italic text-muted m-0 p-0"> ( in minutes )</small>
                            </div>
                            <div class="form-group">
                                <label for="rate">Rate*</label>
                                <input id="rate" type="number" class="form-control text-capitalize" name="rate" value="{{ old('rate') }}" autocomplete="rate" placeholder="Enter appointment Rate" />
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" name="status" class="custom-control-input" checked id="customSwitch3">
                                <label class="custom-control-label" for="customSwitch3">Inactive/Active</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-md btn-danger" data-dismiss="modal"><i class="fas fa-backspace"></i> Cancel</button>
                            <button type="submit" class="btn btn-md btn-primary"><i class="fas fa-check-circle"></i> Add appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal For Editing appointment-->
        <div class="modal fade editappointmentModal" id="editappointmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelappointmentedit" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelappointmentedit" style="font-size: 18px !important;">Edit appointment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="requestappointmentData"></div>
                </div>
            </div>
        </div>

        <!-- Modal For Deleting appointment-->
        <div class="modal fade deleteappointmentModal" id="deleteappointmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelappointmentdelete" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelappointmentdelete" style="font-size: 18px !important;">Delete Confirmation !</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure, you want to delete this appointment?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">No, Cancel</button>
                        <button type="button" class="btn btn-md btn-primary deleteappointmentBtn" id="deleteappointmentBtn">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
    <script>
       
    </script>
@endsection