@extends('site.layouts.basico')
@section('titulo', "Super Gestão - $titulo")
@section('conteudo')

    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Página que apresenta os fornecedores!<p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Fornecedores</h1>
                <p>Cadastre-se aqui!<p>
                @component('site.layouts._components.form_contato', ["borda" => "borda-branca"])
                @endcomponent
            </div>
        </div>
    </div>
@endsection