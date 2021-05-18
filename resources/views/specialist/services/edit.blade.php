<form action="{{ route('services.update',$service->id) }}" method="POST">
    @csrf
    @method('put');
    <div class="modal-body">
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category" id="select_update_service_category" 
                style="width: 100%;" onchange="getCategoryTitle('select_update_service_category','update-note')">
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
                value="{{ $service->t_15 }}"/>
        </div>

        <div class="form-group">
            <label for="t_30">Time 30</label>
            <input id="t_30" type="number" class="form-control text-capitalize" name="t_30"
                value="{{ $service->t_30 }}"/>
        </div>

        <div class="form-group">
            <label for="t_45">Time 45</label>
            <input id="t_45" type="number" class="form-control text-capitalize" name="t_45"
                value="{{ $service->t_45 }}"/>
        </div>

        <div class="form-group">
            <label for="t_60">Time 60</label>
            <input id="t_60" type="number" class="form-control text-capitalize" name="t_60"
                value="{{ $service->t_60 }}"/>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal"> Cancel</button>
        <button type="submit" class="btn btn-md bg-3AC574 text-white">Update Service</button>
    </div>
</form>

{{-- <form action="{{ url('services/'.$service->id) }}" method="POST">
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
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal"><i class="fas fa-backspace"></i> Cancel</button>
        <button type="submit" class="btn btn-md btn-primary"><i class="fas fa-check-circle"></i> Update Service</button>
    </div>
</form> --}}

<script>      
    $(".select2").select2();
</script>