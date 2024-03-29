{{--
<section id="clients" class="page-section">
    <div class="container">
        <div class="section-title">
            <!-- Heading -->
            <h2 class="title">Our Concerns</h2>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="owl-carousel navigation-1" data-pagination="false" data-items="6" data-autoplay="true" data-navigation="true">
                    <a href="#">
                        <img src="img/sections/clients/1.png" width="170" height="170" alt="" />
                    </a>
                    <a href="#">
                        <img src="img/sections/clients/2.png" width="170" height="170" alt="" />
                    </a>
                    <a href="#">
                        <img src="img/sections/clients/3.png" width="170" height="170" alt="" />
                    </a>
                    <a href="#">
                        <img src="img/sections/clients/4.png" width="170" height="170" alt="" />
                    </a>
                    <a href="#">
                        <img src="img/sections/clients/5.png" width="170" height="170" alt="" />
                    </a>
                    <a href="#">
                        <img src="img/sections/clients/6.png" width="170" height="170" alt="" />
                    </a>
                    <a href="#">
                        <img src="img/sections/clients/1.png" width="170" height="170" alt="" />
                    </a>
                    <a href="#">
                        <img src="img/sections/clients/2.png" width="170" height="170" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
--}}


<section id="clients" class="page-section">
    <div class="container">
        <div class="section-title">
            <!-- Heading -->
            <h2 class="title">Our Concerns</h2>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="owl-carousel navigation-1" data-pagination="false" data-items="6" data-autoplay="true" data-navigation="true">
                    @php
                        $concrens = \App\OurConcerns::where('status',1)->get();
                    @endphp
                    @foreach($concrens as $concren)
                        <a href="{{$concren->concern_url}}" target="_blank">
                            <img src="{{asset('storage/app/public/concern_image_folder/'.$concren->concern_image)}}" width="170" height="170" alt="{{$concren->concren_title}}" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
