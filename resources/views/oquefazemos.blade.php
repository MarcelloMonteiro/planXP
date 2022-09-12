@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">/O que fazemos</div>
                <img class="img2card" src="{{asset('img/2.png')}}">
                <div class="card-body">
                    <p class="games">/Games</p>
                </div>
                <div class="textOF">
                    <p class="textOF1">Desenvolvimento de games digitais.</p>
                    <p class="textOF2">Empresa especialiazada em desenvolvimento games digitais e gamificação</p>
                    <p class="textOF3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam ultricies sollicitudin. <br/>Cras vehicula congue odio, quis lobortis leo gravida non. In ornare erat tortor, mattis sodales <br/> leo efficitur at. In hac habitasse platea dictumst. Quisque ante tortor, egestas a lorem a, <br/>tempor lacinia nisi.</p>
                </div>
            </div>
            <div class="card1">
                <img class="cardImg1" src="{{asset('img/img1.png')}}">
                <div class="card-body">
                  <p class="card-text1">A <b>PlanXP</b> tem uma equipe qualificada para o <b>desenvolvimento de jogos digitais</b> para <b>dispositivos móveis</b>(smartphones, tablets e afins).</p>
                </div>
            </div>
            <div class="card2">
                <img class="cardImg2" src="{{asset('img/img2.png')}}">
                <div class="card-body">
                  <p class="card-text2">Desenvolvemos games para anunciar seus produtos e serviços, através da 
                    <b>gamificação</b> (aplicações que utilizam dinâmincas de jogos para engajamento de usúarios, 
                    resolução de problemas e melhoria no aprendizado).</p>
                </div>
            </div>
            <div class="card3">
                <img class="cardImg3" src="{{asset('img/img3.png')}}">
                <div class="card-body">
                  <p class="card-text3">Utilizando as útimas tecnologias para a <b>criação de games</b>, trabalhamos de acordo
                    com as necessidades dos clientes, sempre buscando oferecer o resultado que ele busca.
                  </p>
                </div>
            </div>
            <div class="card4">
                <img class="cardImg4" src="{{asset('img/img4.png')}}">
                <div class="card-body">
                  <p class="card-text4">Experimente inovar com a <b>PlanXP</b> para <b>desenvolver os seus jogos digitais!</b>
                  </p>
                  <p class="cardContato" href="">ENTRE EM CONTATO AGORA MESMO</p><img class="cardImg5" src="{{asset('img/seta.png')}}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection