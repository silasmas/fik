@extends("layouts.template",['titre'=>"Don"])

@section("style")
@endsection

@section("content")
   <!-- donation-page-section -->
   <section class="donation-page-section">
    <div class="outer-container">
        <div class="donate-content">
            <div class="sec-title centred">
                <span class="top-text">Faites votre don</span>
                <h2>Creating a Brighter Tomorrow</h2>
            </div>
            <div class="clearfix row">
                <div class="col-lg-6 col-md-12 col-sm-12 donate-column">
                        <div class="donate-box">
                            <div class="donate-option">
                                <h3>Don en nature</h3>


                            </div>

                        </div>
                    </div>
                <div class="col-lg-6 col-md-12 col-sm-12 donate-form">
            <form action="https://api.frobill.com/request/payment" method="post" class="default-form" id="paymentForm">
                        <div class="form-inner">
                            <h3>Donar Information</h3>
                            <div class="clearfix row">
                                <input type="hidden" name="public_key" value="03h0hwLiIcT2AgITaKGefAxEMSUZzW2FcUJMkH1KDZPBcglye0">
                                <input type="hidden" name="currency" value="usd">
                                <input type="hidden" step="0.01" min="1" name="amount" value="">
                                <input type="hidden" name="email" value="">
                                <input type="hidden" name="phone" value="">
                                <input type="hidden" name="name" value="">
                                <input type="hidden" id="is_fallback" name="is_fallback" value="0">
                                <input type="hidden" id="is_test" name="is_test" value="1">
                                <input type="hidden" name="fallback_url" value="">
                                <input type="hidden" name="is_failedcallback" value="null">
                                <input type="hidden" name="failedcallback_url" value="">
                                <input type="hidden" name="purpose" value="test">

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
                                <div class="payment-option">
                                    <h3>Moyen de paiement</h3>
                                    <ul class="clearfix payment-list">
                                        <li>
                                            <input type="radio" id="payment-method-1" name="payment-method" checked="checked" />
                                            <label for="payment-method-1" >Carte bancaire</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="payment-method-2" name="payment-method" />
                                            <label for="payment-method-2">Mobile money</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">

                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Donate Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- donation-page-section end -->


@endsection

@section("script")


@endsection
