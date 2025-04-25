@php
    use App\Models\ShowAbout;
    use App\Models\Information;

    $showabout = ShowAbout::first();
    $information = Information::first();
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
                                    <h2 class="text-white me-4 mb-0">{{$showabout->title}}</h2>

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
                                        <span>{{$information->name}}</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Birthday</span> 
                                        <span>{{$information->birthday}}</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Phone</span> 
                                         <span><a href="tel: 305-240-9671">{{$information->phone}}</a></span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Email</span> 
                                        <span><a href="mailto:hello@josh.design">{{$information->email}}</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">
                                <div class="row">
                                    <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                        <strong class="featured-numbers">{{$information->description_1}}</strong>

                                        <p class="featured-text">Years of Experiences</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                        <strong class="featured-numbers">{{$information->description_2}}</strong>

                                        <p class="featured-text">Happy Customers</p>
                                    </div>

                                    <div class="col-lg-6 col-6 pt-4">
                                        <strong class="featured-numbers">{{$information->description_3}}</strong>

                                        <p class="featured-text">Project Finished</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <strong class="featured-numbers">{{$information->description_4}}</strong>

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
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-12">
                            <h3>Menempuh Pendidikan</h3>
                        </div>
                    </div>

                    <div class="row justify-content-center text-center g-4">
                        <div class="col-6 col-md-2">
                            <img src="{{ $information->logo_1_image ? asset('storage/' . $information->logo_1_image) : asset('front/images/image.jpg') }}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-6 col-md-2">
                            <img src="{{ $information->logo_2_image ? asset('storage/' . $information->logo_2_image) : asset('front/images/image.jpg') }}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-6 col-md-2">
                            <img src="{{ $information->logo_3_image ? asset('storage/' . $information->logo_3_image) : asset('front/images/image.jpg') }}" class="clients-image img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>

</main>