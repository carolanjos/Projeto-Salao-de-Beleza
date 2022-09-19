<!-- PÁGINA PRINCIPAL -->
@extends ('common.mdb-fullpage')
@extends ('parts.navbar')

@section('content')
<!--PRIMEIRA DIV CONTAINER-->
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

    <!--IMAGEM LOGO -->
    <img src="{{ asset('mdb/images/home.jpg') }}" class="img-fluid z-depth-1 rounded mb-4" alt="">

    <p class="mb-4">
      <h1 class="font-weight-bold py-2">Bem vindo(a) ao Salão de Beleza TodaBela</h1>
      <a class="btn btn-secondary" href="/sobre"><i class="fas fa-clone left"></i>SOBRE A EMPRESA</a><br><br>
      <hr size=15 color="black">
      <h3 class="font-weight-bold py-2">Conheça os nossos serviços:</h3><br>
    </p>
  </section>
</div>

<!-- INCLUIR O ARQUIVO BLOG-POST -->
@include('parts.posts')

<!-- FOOTER (RODAPÉ) -->
<footer class="page-footer font-small unique-color-dark pt-4">
  <div class="container">
    <div class="container text-center text-md-left">
      <div class="row">

        <!-- HORÁRIO -->
        <div class="col-md-3 mx-auto">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center">HORÁRIOS</h5>
          <p class="card-text text-center">Segunda - Sábado: 08:00 - 20:00
            <br>Domingo e Feriado: 08:00 - 13:00
          </p>
        </div>

        <hr class="clearfix w-100 d-md-none">

        <!-- ENDEREÇO -->
        <div class="col-md-3 mx-auto">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center">ENDEREÇO</h5>
          <p class="card-text text-center">Rua Jardim das Flores, número 385 Parque São Francisco, Guarulhos, SP - Brasil</p>
        </div>

        <!-- TELEFONES -->
        <div class="col-md-3 mx-auto">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center">TELEFONES</h5>
          <p class="card-text text-center">Telefone: (11) 2555-5858
            <br>WhatsApp: (11) 95858-1515
          </p>
        </div>

        <!-- REDES SOCIAIS -->
        <div class="container">
          <div class="row">
            <div class="col-md-12 py-5">
              <div class="mb-5 flex-center">

                <!-- Facebook -->
                <a class="fb-ic">
                  <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!-- Twitter -->
                <a class="tw-ic">
                  <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!-- Google +-->
                <a class="gplus-ic">
                  <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!--Linkedin -->
                <a class="li-ic">
                  <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!--Instagram-->
                <a class="ins-ic">
                  <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!--Pinterest-->
                <a class="pin-ic">
                  <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

  <div class="footer-copyright text-center py-3">Atividade Linguagem de Programação 2 - Carolina dos Anjos Figueiredo

</div>
</footer>
@endsection