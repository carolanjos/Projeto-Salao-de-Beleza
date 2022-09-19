<!-- PÁGINA SOBRE O SALÃO -->
@extends ('common.mdb-fullpage')
@extends ('parts.navbar')

@section('content')
<div class="container mt-5">

  <section class="dark-grey-text text-center">

    <h2 class="font-weight-bold mb-4 pb-2 text-dark">Sobre o TodaBela</h2>
    <p class="text-center mx-auto w-responsive mb-5 text-dark">O TodaBela é um salão que busca realçar e aprimorar a beleza que já existe em você.<br> Realizamos diversos tipos de procedimentos com excelente qualidade. Temos uma equipe de profissionais especializados que estão dispostos a te atender com carinho e total dedicação. 
       <br>Estamos sempre à disposição para entregar o melhor para você! 
    </p>

    <!-- PRIMEIRA IMAGEM E TITULO 1 -->
    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="view overlay rounded z-depth-2 mb-4">
          <img class="img-fluid" src="{{ asset('mdb/images/salao.jpg') }}" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <h4 class="font-weight-bold mb-3 text-dark"><strong>Ambiente Agradável</strong></h4>
      </div>

      <!-- SEGUNDA IMAGEM E TITULO 2 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="view overlay rounded z-depth-2 mb-4">
          <img class="img-fluid" src="{{ asset('mdb/images/cliente.jpg') }}" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <h4 class="font-weight-bold mb-3 text-dark"><strong>Profissionais Especializados</strong></h4>
      </div>

      <!-- TERCEIRA IMAGEM E TITULO 3 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="view overlay rounded z-depth-2 mb-4">
          <img class="img-fluid" src="{{ asset('mdb/images/make1.jpg') }}" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <h4 class="font-weight-bold mb-3 text-dark"><strong>Produtos de Qualidade</strong></h4>
      </div>

    </div>
  </section>
</div>
@endsection