@if($categories->count() > 0)
  <h2 class="modal-title pl-5 pr-5 cl-gray" id="exampleModalLabel">SubCategory</h2>
  <div class="border overflow-scroll-reg pl-5 mt-2">
    @foreach($categories as $key=>$category)
      <div class="custom-control custom-checkbox">
        <input type="radio" class="custom-control-input" name="sub_category_id" id="customCheck{{ $key }}" value="{{ $category->id }}">
        <label class="custom-control-label" for="customCheck{{ $key }}">{{ ucwords($category->title) }}</label>
      </div>

    @endforeach
  </div>

@endif
