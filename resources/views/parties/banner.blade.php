 <!-- Page Title -->
 <section class="page-title" style="background-image: url(../assets/images/background/12.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title">
                <h1>{{ $title['titre'] }}</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route($title['Pretour']) }}">{{ $title['PretourT'] }}</a></li>
                @isset($title['t3'])
                <li><a href="{{ route($title['retourT3']) }}">{{ $title['t3'] }}</a></li>
                @endisset
                <li>{{ $title['t2'] }}</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->
