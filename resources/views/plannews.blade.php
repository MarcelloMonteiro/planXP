@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">/Plan news</div>
                <img class="img2card" src="{{asset('img/3.png')}}">
                <div class="card-body">
                    <p class="games">/Cases Games</p>
                    <p class="cardBlog">CLIQUE PARA VER TODOS O BLOG </p><img class="cardImg6" src="{{asset('img/seta.png')}}">
                </div>
            </div>
            <div class="">
                <div class="cardBlog1" style="background-color: #292929;">
                    <img class="img1Blog" src="{{asset('img/ska.png')}}">
                    
                    <div class="card-body1">
                      <div style="background-color: #939598;
                      width: 2rem;
                      top: 10px;
                      position: relative;">
                        <p class="ska">SKA</p>
                      </div>
                      <div style="width: 13rem">
                        <h5 class="card-title-ska">Plan criar o novo site da SKA</h5>
                        <p class="cardSka1">Aliquam ullamcorper augue a ligula aliquam rhoncus. Nullam accumsan auctor elementum Nam fermentum mattis ligula vulputate bibendum...</p>
                        <a href="#" class="btn btn-primary">Visitar</a>
                      </div>
                    </div>
                  </div>
                  <img class="img2Blog" src="{{asset('img/quadrado.png')}}">
                  <img class="img3Blog" src="{{asset('img/controle.png')}}">
            </div>
        </div>
    </div>
</div>
@endsection