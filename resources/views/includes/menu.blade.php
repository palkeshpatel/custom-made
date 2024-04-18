<ul class="navigation clearfix">
    <li  class='{{ activeClass(null) }}'><a  href="{{url('')}}">Home</a></li>
    <li  class='{{ activeClass('about-us') }}'><a href="{{ url('about-us') }}">About Us</a></li>
    <li class="dropdown {{ activeClass('html-website-design')}}
    {{ activeClass('wordpress-development')}}
    {{ activeClass('social-media-marketing')}}
    {{ activeClass('business-online-presence') }}
    {{ activeClass('festival-post-design') }}
    {{ activeClass('search-engine-optimization')}}
    {{ activeClass('digital-marketing')}}
    {{ activeClass('content-writing')}}
    "><a href="{{ url('services') }}">Services</a>
        <ul>
            <li class='{{ activeClass('html-website-design')}}' ><a href="{{ url('html-website-design') }}">HTML Website Design</a></li>
            <li class='{{ activeClass('wordpress-development')}}'><a href="{{ url('wordpress-development') }}">WordPress Development </a></li>
            <li class='{{ activeClass('social-media-marketing')}}'><a href="{{ url('social-media-marketing') }}">Social Media Marketing</a></li>
            <li class='{{ activeClass('business-online-presence')}}'><a href="{{ url('business-online-presence') }}">Business Online Presence</a>
            </li>
            <li class='{{ activeClass('festival-post-design')}}'><a href="{{ url('festival-post-design') }}">Festival Post Design</a></li>
            <li class='{{ activeClass('search-engine-optimization')}}'><a href="{{ url('search-engine-optimization') }}">Search Engine Optimization</a></li>
            <li class='{{ activeClass('digital-marketing')}}'><a href="{{ url('digital-marketing') }}">Digital Marketing</a></li>
            <li class='{{ activeClass('content-writing')}}'><a href="{{ url('content-writing') }}">Content Writing</a></li>
        </ul>
    </li>
    <li class='{{ activeClass('html-templates')}}'><a href="html-templates">Select Template</a></li>
    <li class='{{ activeClass('contact-us')}}'><a href="contact-us">Contact us</a></li>
</ul>
