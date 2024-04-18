<!--MixitUp Galery-->
<div class="mixitup-gallery">

    <!--Filter-->
    <div class="filters clearfix">

        <ul class="filter-tabs filter-btns text-center clearfix">

            @foreach ($categories as $rw )
                <li class="filter" data-role="button" data-filter=".{{ $rw->title  }}">{{$rw->title}}</li>
            @endforeach

        </ul>

    </div>

    <div class="filter-list row clearfix">
        @foreach ($template as $rw )
        <!-- Project Block -->
        <div class="project-block mix {{ $rw->category_title  }} col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box wow zoomInDown animated" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="image">
                    <img data-original="{{ url('storage/'.$rw->images) }}" alt="" />
                    <div class="overlay-box">
                        <a href="{{ url('images/gallery/7.jpg') }}" data-fancybox="gallery-2" data-caption=""
                            class="plus flaticon-plus-symbol"></a>
                    </div>
                </div>
                <div class="lower-content">
                    <h5><a  onclick='getTemplateVal("{{ $rw->title  }}","{{ $rw->url  }}","{{ $rw->category_title  }}")' >{{ $rw->title }}</a></h5>
                    <div class="designation">{{ $rw->category_title  }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
<script>

     function getTemplateVal(title,url,category){
        $(".select-template-pop").show()
        $('#show-template-iframe').attr('src', url);
        $('#template_category').html(category);
        $('#template_title').html(title);
        $('#order-now').attr('href','{{ url("order-now") }}/'+title);
     }
     $("img").lazyload({
	    effect : "fadeIn"
	});
</script>

@endpush

