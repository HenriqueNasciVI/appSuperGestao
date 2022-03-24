@extends('site.layouts.basico')

{{-- title page --}}
@section('titulo', $titulo)
@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato', ['classe' => 'borda-preta'])
                    <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível.</p>
                    <p>Nosso tempo médio de resposta é de 48 horas.</p>
                @endcomponent
            </div>
        </div>  
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Todas as Redes sociais</h2>
            <img src="{{asset('img/facebook.png')}}">
            <img src="{{asset('img/linkedin.png')}}">
            <img src="{{asset('img/youtube.png')}}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(21) 999999-55555</span>
            <br>
            <span>supergestaoapp@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{asset('img/mapa.png')}}">
        </div>
    </div>
@endsection