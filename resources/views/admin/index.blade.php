@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Olá, {{ Auth::user()->name }} !</div>

                    <div class="panel-body">
                        Bem vindo ao painel de controle do ACERVO DIGITAL, use o menu acima para navegação!
                        <br>
                        Algumas instruções de uso:
                        <ul>
                            <li>Os arquivos inseridos no acervo devem primeiro ser compactados em uma pasta .ZIP em seu
                            computador.</li>
                            <li>Todas as imagens postadas pelo Administrador são de responsabilidade própria.</li>
                            <li>O uso do Sistema é de exclusividade do Cliente.</li>
                            <li>Qualquer dúvida ou sugestão, entre em contato conosco pelo email: contato@yellowti.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop