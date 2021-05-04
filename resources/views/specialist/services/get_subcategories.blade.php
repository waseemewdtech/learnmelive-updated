<label>Sub Category</label>
<select class="select3" name="sub_categories[]" multiple="multiple" data-placeholder="Select subcategory" style="width: 100%;">
    @foreach ($subcategories as $subcategory)
    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
    @endforeach

</select>

<script>
     
    $(".select3").select2();
</script>