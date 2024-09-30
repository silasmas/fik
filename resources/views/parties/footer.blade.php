 <!-- subscribe-section -->
<section class="subscribe-section">
    <div class="bg-layer"></div>
    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="left-column pull-left">
                <div class="logo-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                    <figure class="logo"><a href=""><img src="{{asset("assets/images/4.png")}}" alt=""></a></figure>
                </div>
                <div class="text">
                    <h3><i class="icon-email-open-sketched-envelope">
                        </i>Abonnez-vous <br> à la newsletter</h3>
                </div>
            </div>
            <div class="right-column pull-right clearfix">
                <div class="form-inner">
                    <form action="contact.html" method="post" class="subscribe-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Votre addresse mail..." required="">
                            <button type="submit">Abonnez-vous</button>
                        </div>
                    </form>
                </div>
                <ul class="social-style-one clearfix">
                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-section end -->
 <!-- main-footer -->
 <section class="main-footer">
    <div class="footer-top">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="title-box">
                            <div class="icon-box"><i class="icon-hand"></i></div>
                            <span>FIK</span>
                            <h3>Devenez notre partenaire</h3>
                        </div>
                        <div class="text">
                            <p>Dites un mots</p>
                            <a href="#" class="theme-btn btn-one">Faire un don</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-30">
                        <div class="widget-title">
                            <h3>Raccourcis</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route('home') }}">Accueil</a></li>
                                <li><a href="{{ route('apropos') }}">Apropos</a></li>
                                <li><a href="{{ route('activites') }}">Nos activités</a></li>
                                <li><a href="{{ route('archives') }}">Archives</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-30">
                        <div class="widget-title">
                            <h3>Donations</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="index.html">En espèce</a></li>
                                <li><a href="index.html">En nature</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget ml-30">
                        <div class="title-box">
                            <div class="icon-box"><i class="icon-donation-2"></i></div>
                            <span>FIK</span>
                            <h3>Don / Adhésion</h3>
                        </div>
                        <div class="widget-content">
                            <div class="single-item">
                                <h3><a href="tel:23345678901">+243 857 000 908</a></h3>
                                <p><a href="mailto:example@info.com">info@fik-rdc.com</a></p>
                            </div>
                            <div class="single-item">
                                <h5>Adresse :</h5>
                                <p> Av/Kwango 3 Q/ Jolie parc C/Ngaliema</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="copyright pull-left">
                    <p>&copy; 2024 <a href="{{ route('home') }}">FIK,</a> Tout droits reservé.</p>
                </div>
                <ul class="footer-card pull-right clearfix">
                    <li><span>Canaux de donations :</span></li>
                    <li><a href="{{ route('home') }}"><img src="assets/images/resource/card-1.png" alt=""></a></li>
                    <li><a href="{{ route('home') }}"><img src="assets/images/resource/card-2.png" alt=""></a></li>
                    <li><a href="{{ route('home') }}"><img src="assets/images/resource/card-3.png" alt=""></a></li>
                    <li><a href="{{ route('home') }}"><img src="assets/images/resource/card-4.png" alt=""></a></li>
                    <li><a href="{{ route('home') }}"><img src="assets/images/resource/card-5.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- main-footer end -->


<!-- donate popup -->
<div id="donate-popup" class="donate-popup">
    <div class="close-donate"><i class="icon-close"></i></div>
    <div class="popup-inner">
        <div class="donate-content">
            <div class="sec-title centred">
                <span class="top-text">Make Your Donation</span>
                <h2>Creating a Brighter Tomorrow</h2>
            </div>
            <form action="index.html" method="post" class="default-form">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 donate-column">
                        <div class="donate-box">
                            <div class="donate-option">
                                <h3>How Much?</h3>
                                <ul class="donate-list clearfix">
                                    <li>
                                        <input type="radio" id="donate-amount-1" name="donate-amount" checked="checked" />
                                        <label for="donate-amount-1" data-amount="1000" >$10</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="donate-amount-2" name="donate-amount" />
                                        <label for="donate-amount-2" data-amount="2000">$20</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="donate-amount-3" name="donate-amount" />
                                        <label for="donate-amount-3" data-amount="3000">$50</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="donate-amount-4" name="donate-amount" />
                                        <label for="donate-amount-4" data-amount="4000">$100</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="donate-amount-5" name="donate-amount" />
                                        <label for="donate-amount-5" data-amount="5000">$500</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="donate-amount-6" name="donate-amount" />
                                        <label for="donate-amount-6" data-amount="5000">$1000</label>
                                    </li>
                                </ul>
                                <div class="other-amount">
                                    <div class="text">
                                        <h4>Like to Donate</h4>
                                        <p>Enter your custom amount</p>
                                    </div>
                                    <div class="amount-box">
                                        <div class="item-quantity"><input class="quantity-spinner" type="text" value="750" name="quantity"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-option">
                                <h3>Choose Payment Option</h3>
                                <ul class="payment-list clearfix">
                                    <li>
                                        <input type="radio" id="payment-method-1" name="payment-method" checked="checked" />
                                        <label for="payment-method-1" >Net Banking</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="payment-method-2" name="payment-method" />
                                        <label for="payment-method-2">Credit - Debit Card</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="payment-method-3" name="payment-method" />
                                        <label for="payment-method-3">Offline Payment</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 donate-form">
                        <div class="form-inner">
                            <h3>Donar Information</h3>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Your Name <span>*</span></label>
                                        <input type="text" name="name" placeholder="example name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Email Address <span>*</span></label>
                                        <input type="email" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Donate Now</button>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label class="custom-control material-checkbox">
                                            <input type="checkbox" class="material-control-input">
                                            <span class="material-control-indicator"></span>
                                            <span class="description">I would like to donate automatically repeat each month</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- donate popup -->


<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="index-2.html" class="close-side-widget"><i class="icon-close"></i></a>
            </div>
            <div class="sidebar-textwidget">
            <div class="sidebar-info-contents">
                <div class="content-inner">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('assets/images/lg.png') }}" alt="" /></a>
                    </div>
                    <div class="content-box">
                        <h4>Apropos</h4>
                        <p></p>
                    </div>
                    <div class="form-inner">
                        <h4>Get a free quote</h4>
                        <form action="index.html" method="post">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Message..."></textarea>
                            </div>
                            <div class="form-group message-btn">
                                <button class="theme-btn btn-one">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- sidebar widget item end -->
