@extends ('layouts.app')
@section('content')
<div class="row tm-row tm-mb-120">
    <div class="col-12">
        <h2 class="tm-color-primary tm-mb-60 text-center">Kota</h2>
    </div>
    @foreach($Travel as $c)
    <article class="col-12 col-md-4 tm-post">
        <hr class="tm-hr-primary">
        <a href="post.html" class="effect-lily tm-post-link tm-pt-30">
            <div class = "tm-post-link-inner">
                <a href="#">
            </div>
            <span class="position-absolute tm-new-badge"></span>
            <h2 class="tm-pt-30 tm-color-dark tm-post-title">{{$c['nama']}}</h2>
            </a>
            <li style="font-size: 15px;list-style-type:none;">
                Harga : Rp.{{$c['Harga']}}
            </li>
    </article>
    @endforeach
</div>
@endsection