@php
    use App\Models\ShowAbout;

    $showabout = ShowAbout::first();
@endphp

<main>
        <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{ $showabout->logo_image ? asset('storage/' . $showabout->logo_image) : asset('front/images/image.jpg') }}" class="about-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">

                                <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                    <h2 class="text-white me-4 mb-0">My Story</h2>

                                    <img src="{{ $showabout->profile_image ? asset('storage/' . $showabout->profile_image) : asset('front/images/image.jpg') }}" class="avatar-image img-fluid" alt="">
                                </div>

                                <h3 class="pt-2 mb-3">{{$showabout->point}}</h3>

                                <p>{{$showabout->description_1}}</p>

                                <p>{{$showabout->description_2}}</p>

                                <p>{{$showabout->description_3}}</p>
                                
                                <p>{{$showabout->description_4}}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="profile-thumb">
                                <div class="profile-title">
                                    <h4 class="mb-0">Information</h4>
                                </div>

                                <div class="profile-body">
                                    <p>
                                        <span class="profile-small-title">Name</span> 
                                        <span>Joshua Morgan</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Birthday</span> 
                                        <span>Aug 12, 1986</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Phone</span> 
                                         <span><a href="tel: 305-240-9671">120-240-9600</a></span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Email</span> 
                                        <span><a href="mailto:hello@josh.design">hello@josh.design</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">
                                <div class="row">
                                    <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                        <strong class="featured-numbers">20+</strong>

                                        <p class="featured-text">Years of Experiences</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                        <strong class="featured-numbers">245</strong>

                                        <p class="featured-text">Happy Customers</p>
                                    </div>

                                    <div class="col-lg-6 col-6 pt-4">
                                        <strong class="featured-numbers">640</strong>

                                        <p class="featured-text">Project Finished</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <strong class="featured-numbers">72+</strong>

                                        <p class="featured-text">Digital Awards</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="clients section-padding">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-12 col-12">
                            <h3 class="text-center mb-5">Companies I've had worked</h3>
                        </div>

                        <div class="col-lg-2 col-4 ms-auto clients-item-height">
                            <img src="{{ asset ('front/images/clients/cachet.svg') }}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="{{ asset ('front/images/clients/guitar-center.svg') }}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="{{ asset ('front/images/clients/tokico.svg') }}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="{{ asset ('front/images/clients/shopify.svg') }}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 me-auto clients-item-height">
                            <img src="{{ asset ('front/images/clients/profil-rejser.svg') }}" class="clients-image img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </section>
</main>