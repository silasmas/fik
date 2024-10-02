@extends("layouts.template",['titre'=>"Contact"])

@section("style")
@endsection

@section("content")
@include("parties.banner")
        <!-- contact-section -->
        <section class="contact-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="contact-info-inner">
                            <div class="sec-title">
                                <span class="top-text">Contactez nous </span>
                                <h2>Fondation IK</h2>
                                <p>@lang('info.slogant')</p>
                            </div>
                            <div class="info-box">
                                <div class="single-item">
                                    <h4>Nos informations</h4>
                                    <div class="text">
                                        <div class="icon-box"><i class="icon-phone-call"></i></div>
                                        <p>Téléphone<br /><a href="tel:243857000908">+243 857 000 908</a></p>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <h4>Addresse Email :</h4>
                                    <div class="text">
                                        <div class="icon-box"><i class="icon-letter"></i></div>
                                        <p>Email à :<br /><a href="mailto:info@fik-rdc.com">info@fik-rdc.com</a></p>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <h4>Addresse :</h4>
                                    <div class="text">
                                        <div class="icon-box"><i class="icon-location"></i></div>
                                        <p>Av/Kwango 3 Q/ Jolie parc C/Ngaliema</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                        <figure class="image-box"><img src="assets/images/resource/contact-1.png" alt=""></figure>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="contact-form-inner">
                            <div class="sec-title">
                                <span class="top-text">Laissez-nous un message</span>
                                <h2>remplissez le formulaire</h2>
                                <p>@lang("info.slogant")</p>
                            </div>
                            <div class="form-inner">
                                <form method="post" action="" id="contact-formd" class="default-form">
                                    <div class="form-group">
                                        <i class="far fa-user"></i>
                                        <input type="text" name="nom" placeholder="Votre nom" required="">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-user"></i>
                                        <input type="text" name="prenom" placeholder="Votre prénom" required="">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Addresse mail" required="">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-phone"></i>
                                        <input type="text" name="phone" required="" placeholder="Téléphone">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-sticky-note"></i>
                                        <input type="text" name="sujet" required="" placeholder="Sujet">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-text-height"></i>
                                        <textarea name="message" placeholder="Votre message"></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button class="theme-btn btn-one" type="submit" name="submit-form">Envoyer Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- essentials-section -->
        <section class="essentials-section centred">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="bg-layer" style="background-image: url(assets/images/resource/contact-1.jpg);"></div>
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                                    <div class="shape-2" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                                    <i class="icon-chatting"></i>
                                </div>
                                <h3>Chat with a Live</h3>
                                <p>Let’s chat with our live experts to get answer your questions.</p>
                                <a href="contact.html" class="theme-btn btn-one">Live Chat</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="bg-layer" style="background-image: url(assets/images/resource/contact-1.jpg);"></div>
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                                    <div class="shape-2" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                                    <i class="icon-loyalty"></i>
                                </div>
                                <h3>Become a Partner</h3>
                                <p>Become a business partner with us and get an opportunity to grow.</p>
                                <a href="contact.html" class="theme-btn btn-one">Join With Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="bg-layer" style="background-image: url(assets/images/resource/contact-1.jpg);"></div>
                                <div class="icon-box"><div class="shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                                    <div class="shape-2" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                                    <i class="icon-search-1"></i>
                                </div>
                                <h3>Charity FAQ’s</h3>
                                <p>You can find the answers in our list of frequently asked questions.</p>
                                <a href="contact.html" class="theme-btn btn-one">Get Answer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- essentials-section end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner">
                <div
                    class="google-map"
                    id="contact-google-map"
                    data-map-lat="40.712776"
                    data-map-lng="-74.005974"
                    data-icon-path="assets/images/icons/map-marker.png"
                    data-map-title="Brooklyn, New York, United Kingdom"
                    data-map-zoom="12"
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </section>
        <!-- google-map-section -->





@endsection

@section("script")
<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="{{ asset('assets/js/gmaps.js') }}"></script>
<script src="{{ asset('assets/js/map-helper.js')}} "></script>

@endsection
