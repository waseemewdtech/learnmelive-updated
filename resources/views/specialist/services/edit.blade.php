 <form action="{{ url('services/'.$service->id) }}" method="POST">
    @method('put')
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control select2"  name="category" id="select_category" style="width: 100%;"  onchange="getSubCategoriesForServices(this);">
                                    <option selected="selected" disabled>Choose category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ ($category->id == $service->category_id) ? "selected":'' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group sub_categories" >
                                <label>Sub Category</label>
                                <select class="select2" name="sub_categories[]" multiple="multiple" data-placeholder="Select subcategory" style="width: 100%;">
                                    @foreach ($service_subcategories as $service_subcategory)
                                    @foreach ($subcategories as $subcategory)
                                        @if ($service_subcategory == $subcategory->id)
                                            
                                        <option value="{{ $subcategory->id }}" selected>{{ $subcategory->name }}</option>
                                        @endif
                                    @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Notes*</label>
                                <input id="title" type="text" class="form-control text-capitalize" name="title" value="{{ $service->title }}" autocomplete="title" placeholder="Enter Service Title" />
                            </div>
                            <div class="form-group mb-0">
                                <label for="timing">Timing*</label>
                                <input id="timing" type="number" class="form-control text-capitalize" name="timing" value="{{ $service->timing }}" autocomplete="timing" placeholder="Enter Service Timing" />
                                <small class="font-italic text-muted m-0 p-0"> ( in minutes )</small>
                            </div>
                            <div class="form-group">
                                <label for="rate">Rate*</label>
                                <input id="rate" type="number" class="form-control text-capitalize" name="rate" value="{{ $service->rate }}" autocomplete="rate" placeholder="Enter Service Rate" />
                            </div>
                            <div class="form-group">
                                <label for="description">Description*</label>
                               <textarea id="description" class="form-control summernote" name="description" required> {{ $service->description }}</textarea>
                            </div>
                            {{-- <div class="form-group">
                                <label for="description">tags*</label>
                               <input type="text" name="tags" class="form-control" placeholder="laravel php" required value="{{ implode(',',array_map('ucwords',$tags)) }}">
                            </div> --}}
                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" name="status" class="custom-control-input" {{($service->status == 'Active') ?'checked':'' }} id="customSwitch2">
                                <label class="custom-control-label p-0" for="customSwitch2">Inactive/Active</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-md btn-danger" data-dismiss="modal"><i class="fas fa-backspace"></i> Cancel</button>
                            <button type="submit" class="btn btn-md btn-primary"><i class="fas fa-check-circle"></i> Update Service</button>
                        </div>
                    </form>

<script>      
    $(".select2").select2();
</script>