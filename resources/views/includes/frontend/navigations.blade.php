<!-- 2 N D S E C T I O N -->
@if(count(categories()) > 0)
    <section class=" main_padding pt-5">
        <div>
            <ul class="listStyle-none p-0  d-flex robotoRegular f-18 ul_main_tabs m-0 d-flex justify-content-around" >
                @foreach (categories()->take(6) as $category)
                    <li class="pl-3"> <a href="{{ route('category_specialists',$category->id) }}" class="cl-3b3b3b3">{{ ucwords($category->title) }}</a></li>
                @endforeach
                @if (count(categories()->skip(6)) > 0)
                    <li>
                        <div class="btn-group">
                            <a href="" class=" dropdown-toggle dropdown-toggle-split cl-3b3b3b3"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More...</a>
                            <div class="dropdown-menu dropdown-menu-nav overflow-y height-300">
                                @foreach (categories()->skip(6) as $category)
                                <a class="dropdown-item " href="{{ route('category_specialists',$category->id) }}">{{ ucwords($category->title) }}</a>
                                    
                                @endforeach
                                
                            </div>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </section>
@endif
