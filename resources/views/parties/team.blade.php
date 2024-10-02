    <!-- team-section -->
    <section class="team-section centred">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-23.png);"></div>
        <div class="auto-container">
            <div class="sec-title centred">
                <span class="top-text">@lang('info.team.section')</span>
                <h2>@lang('info.team.grandtitre')</h2>
                <p>@lang('info.team.stitre')</p>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none">
                @forelse ($team as $t)
                <div class="team-block-one">
                    <div class="inner-box">
                        <a href="{{ route('team') }}">
                            <figure class="image-box"><img src="{{ asset('storage/'.$t->tache) }}" alt=""></figure>
                            <div class="content-box">
                                <div class="info">
                                    <span class="designation">{{ $t->role }}</span>
                                    <h3>{{ $t->prenom." ".$t->nom }}</h3>
                                </div>
                                <figure class="thumb-box"><img src="{{ asset('storage/'.$t->profil) }}" alt=""></figure>
                                <div class="text">
                                    <p>@lang('info.slogant')</p>
                                </div>
                            </div>
                        
                        </a>
                        <ul class="social-links clearfix">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>                    
                @empty
                    
                @endforelse
            </div>
        </div>
    </section>
    <!-- team-section end -->
