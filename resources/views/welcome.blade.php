<!-- PÁGINA DE PRIMEIRO ACESSO -->
@extends ('common.mdb-fullpage')
@extends ('parts.navbar')

@section('content')

<div class="container mt-5">
    <section class="text-center">
        <!-- CSS -->
        <style>
            @media (max-width: 767px) {
                .social-buttons .btn {
                    padding: 8px 15px;
                    margin: 1px;
                }
            }
        </style>
        <!-- IMAGEM LOGO -->
        <img src="{{ asset('mdb/images/home.jpg') }}" class="img-fluid z-depth-1 rounded mb-4" height="500" width="600" alt="">

        <!-- ENCAMINHAR PARA A PÁGINA PRINCIPAL -->
        <p class="mb-4">
            <h3 class="font-weight-bold py-2">Bem vindo(a) ao Salão de Beleza TodaBela</h3>
            <h4 class="font-weight-bold">Acesse a página principal</h4><br>
            <a class="btn btn-secondary " href="/home"><i class="fas fa-clone left"></i>Home</a><br><br>
        </p>
    </section>
</div>
@endsection