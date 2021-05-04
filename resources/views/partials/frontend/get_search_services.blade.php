@if($services->count() > 0)
  
  @foreach($services as $key=>$service)
    <tr class="border-bottom">
      <th scope="row">{{ ++$key }}</th>
      <td>{{ ucwords($service->title) }}</td>
      <td>{{ ucwords($service->category->name) }}</td>
      @php
        $subcategories = App\SubCategory::whereIn('id',json_decode($service->sub_categories))->get()->pluck('name')->toArray();
      @endphp 
      <td>{{ implode(',',array_map('ucwords',$subcategories)) }}</td>
      <td>{{ $service->timing }} Minutes</td>
      <td> ${{ number_format($service->rate) }} (USD)</td>
      <td>{{ $service->status }}</td>
      <td><a href="{{ route('appointment_request',encrypt($service->id)) }}" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" target="_blank">Book</a></td>
    </tr>

  @endforeach
@else
  <tr class="border-bottom">
    <td colspan="8" class="text-center">No Serivce Found</td>
  </tr>
@endif
