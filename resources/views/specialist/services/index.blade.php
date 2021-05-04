@extends('layouts.admin.specialist.app') @section('title','services | ') @section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">services</li>
                </ol>
            </div>
            <!-- /.col -->

            <div class="col-md-6">
                <button title="Click to Add Service" data-toggle="modal" data-target="#addServiceModal" class="btn btn-primary btn-sm" style="float: right;"><i class="fas fa-plus"></i> Add Service</button>
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
               
                <div class="table-responsive ServiceTableData" id="ServiceTableData">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">service</th>
                                <th scope="col">Timing</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $key => $service)
                            <tr id="target_{{ $service->id }}">
                                <td>{{ $key +1 }}</td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->timing }} Minutes</td>
                                <td>${{ $service->rate }}</td>
                                <td>
                                    @if ($service->status == "Active")
                                        
                                    <span class="badge badge-sm badge-success">{{ $service->status }}</span>
                                    @else
                                        
                                    <span class="badge badge-sm badge-danger">{{ $service->status }}</span>
                                    @endif
                                    
                                </td>
                                
                                <td style="min-width: 135px !important;">
                                    <button title="Click to Update Service" class="btn btn-warning btn-sm editServiceBtn" id="editServiceBtn" data-Serviceid="{{ $service->id }}"><i class="fe fe-pencil"></i> Edit</button>

                                    <button title="Click to Delete Service" type="button" class="btn btn-danger btn-sm ServiceDelete" id="ServiceDelete" data-Serviceid="{{ $service->id }}"><i class="fe fe-trash"></i> Delete</button>
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- END CARD --}}

        <!-- Modal For Adding Service-->
        <div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalArea" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addServiceModalArea" style="font-size: 18px !important;">Add New Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('specialist/services') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control select2"  name="category" id="select_category" style="width: 100%;"  onchange="getSubCategories(this);">
                                    <option selected="selected" disabled>Choose category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group sub_categories" >
                                
                            </div>
                            <div class="form-group">
                                <label for="title">Title*</label>
                                <input id="title" type="text" class="form-control text-capitalize" name="title" value="{{ old('title') }}" autocomplete="title" placeholder="Enter Service Title" />
                            </div>
                            <div class="form-group mb-0">
                                <label for="timing">Timing*</label>
                                <input id="timing" type="number" class="form-control text-capitalize" name="timing" value="{{ old('timing') }}" autocomplete="timing" placeholder="Enter Service Timing" />
                                <small class="font-italic text-muted m-0 p-0"> ( in minutes )</small>
                            </div>
                            <div class="form-group">
                                <label for="rate">Rate*</label>
                                <input id="rate" type="number" class="form-control text-capitalize" name="rate" value="{{ old('rate') }}" autocomplete="rate" placeholder="Enter Service Rate" />
                            </div>
                            <div class="form-group">
                                <label for="description">Description*</label>
                               <textarea id="description" class="form-control summernote" name="description" required> </textarea>
                            </div>
                            <div class="form-group">
                                <label for="description">tags*</label>
                               <input type="text" name="tags" class="form-control" placeholder="laravel,php" required>
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
                            <button type="submit" class="btn btn-md btn-primary"><i class="fas fa-check-circle"></i> Add Service</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal For Editing Service-->
        <div class="modal fade editServiceModal" id="editServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelServiceedit" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelServiceedit" style="font-size: 18px !important;">Edit Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="requestServiceData"></div>
                </div>
            </div>
        </div>

        <!-- Modal For Deleting Service-->
        <div class="modal fade deleteServiceModal" id="deleteServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelServicedelete" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelServicedelete" style="font-size: 18px !important;">Delete Confirmation !</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure, you want to delete this Service?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">No, Cancel</button>
                        <button type="button" class="btn btn-md btn-primary deleteServiceBtn" id="deleteServiceBtn">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
    <script>
        function getSubCategories(ele)
      {
          let id = $(ele).val();
          $.ajax({
              url:"{{ route('service.get_subcategories') }}",
              type:"get",
              data:{id:id},
              success:function(data)
              {
                  $('.sub_categories').empty();
                  $('.sub_categories').html(data);

              }
          });
      }
    </script>
@endsection