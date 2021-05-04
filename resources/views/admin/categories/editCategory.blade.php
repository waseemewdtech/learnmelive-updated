<form action="{{ url('dashboard/categories/'.$category->id) }}" method="POST">
    @csrf @method('put')
    <div class="modal-body">
        <div class="form-group">
            <label for="name">Name*</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}" autocomplete="name" placeholder="Enter Category Name" />
        </div>
        <div class="custom-control custom-switch d-flex">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2" name="status" {{ ($category->status == 'active')? 'checked':'' }}>
                                <label class="custom-control-label p-0 m-0" for="customSwitch2">Active</label>
                            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal"></i> Cancel</button>
        <button type="submit" class="btn btn-md bg-3AC574 text-white"></i> Update Category</button>
    </div>
</form>
