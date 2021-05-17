<form action="{{ url('services/'.$service->id) }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category" id="select_update_service_category" 
                style="width: 100%;" onchange="getCategoryTitle('select_update_service_category','update-note')">
                <option selected="selected" disabled>Choose category</option>
                @foreach ($categories as $cat)
                    <option {{ ($service->name == $cat->title)? 'selected':'' }} value="{{ $cat->id }}">{{ $cat->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="update-note">Notes*</label>
            <input id="update-note" type="text" class="form-control text-capitalize" name="name"
                value="{{ $service->name }}" placeholder="Enter Service Title" readonly="" />
        </div>

        <div class="form-group">
            <label for="t_15">Duration (in minutes)</label>
            <input id="t_15" type="number" class="form-control text-capitalize" name="duration"
                value="{{ $service->duration }}"/>
        </div>

        <div class="form-group">
            <label for="t_30">Rate</label>
            <input id="t_30" type="number" class="form-control text-capitalize" name="rate"
                value="{{ $service->rate }}"/>
        </div>
        {{-- <div class="form-group">
            <label for="description">tags*</label>
            <input type="text" name="tags" class="form-control" placeholder="laravel php" required value="{{ implode(',',array_map('ucwords',$tags)) }}">
        </div> --}}
        {{-- <div class="form-group">
            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" name="status" class="custom-control-input" {{($service->status == 'Active') ?'checked':'' }} id="customSwitch2">
            <label class="custom-control-label p-0" for="customSwitch2">Inactive/Active</label>
            </div>
        </div> --}}
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal"><i class="fas fa-backspace"></i> Cancel</button>
        <button type="submit" class="btn btn-md btn-primary"><i class="fas fa-check-circle"></i> Update Service</button>
    </div>
</form>

<script>      
    $(".select2").select2();
</script>