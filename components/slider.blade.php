
@component
[
    "name"=>"slider",
    "type"=>"multiple" 
]
@componentend
@attributes
[ 
    {   
    'componentMedia'=>'',
    'TitleMain' => 'New Arrivals',
    'TitleDescription' => 'Leather Simple',
    'TitleDescriptionScnd' => 'Backpacks',
    'Description' => "Discover our collection with leather simple backpacks. Less is more never out trend.",
    'BtnText' => 'Explore Now',
    'BtnLink' => '/ExploreNow',
    'ImagePath'=>'assets/images/slider/hm-1-slider-1.png'
    },

    {
    'componentMedia'=>'',
    'TitleMain' => 'New Arrivals',
    'TitleDescription' => 'Leather Simple',
    'TitleDescriptionScnd' => 'Backpacks',
    'Description' => "Discover our collection with leather simple backpacks. Less is more never out trend.",
    'BtnText' => 'Explore Now',
    'BtnLink' => '/ExploreNow',
    'ImagePath'=>'assets/images/slider/hm-1-slider-1.png'
    }
];
@attributesend
@balde
 <div class="slider-area bg-gray">
    <div class="hero-slider-active-1 hero-slider-pt-1 nav-style-1 dot-style-1">
     @foreach ($attributes as $key=> $value)
     <div class="single-hero-slider single-animation-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="hero-slider-content-1 hero-slider-content-1-pt-1 slider-animated-1">
                        <h4 class="animated">{{$value->TitleMain}}</h4>
                        <h1 class="animated">{{$value->TitleDescription}} <br>{{$value->TitleDescriptionScnd}}</h1>
                        <p class="animated">{{$value->Description}}</p>
                        <div class="btn-style-1">
                            <a class="animated btn-1-padding-1" href="{{$value->BtnLink}}">{{$value->BtnText}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="hero-slider-img-1 slider-animated-1">
                        <img class="animated" src="{{$item->ImagePath}}" alt="">
                        <h1>{{{{$item->Dynamicdata}}}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
     @endforeach
    </div>
</div>
@end
