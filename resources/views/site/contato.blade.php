<!-- PÁGINA PARA CONTATO -->
@extends ('common.mdb-fullpage')
@extends ('parts.navbar')

@section('content')

<div class="container z-depth-1 my-5 px-0">
  <section class="p-5 my-md-6 text-center">
    <!-- TÍTULO -->
    <h3 class="text-center font-weight-bold mt-5 mb-3 ">Contate-nos</h3>
    <h5 class="text-center font-weight-normal mx-auto mb-4 pb-2">Aqui você pode deixar seu feedback, dúvidas ou sugestões.</h5><br>
    <hr size = 15 color="black">

    <form class=" mx-md-5" action="">
      <!-- NOME/EMAIL/TELEFONE -->
      <div class="row">
            <div class="col-md-4 font-weight-bold">
            <input type="text" id="name" class="form-control" placeholder="Nome">
            </div>

            <div class="col-md-4">
            <input type="email" id="email" class="form-control" placeholder="Email">
            </div>

            <div class="col-md-4 mb-4">
            <input type="number" id="phone" class="form-control" placeholder="Telefone">
            </div>
      </div>

      <!--ASSUNTO-->
      <div class="row">
        <div class="col-md-12">
          <input type="text" id="subject" class="form-control" placeholder="Assunto">
        </div>
      </div>

      <!-- AJUDA -->
      <div class="row">
        <div class="col-md-12"> 

          <div class="form-group">
            <textarea class="form-control rounded" id="message" rows="3" placeholder="Como podemos te ajudar?"></textarea>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-elegant">Enviar</button>
          </div>

        </div>
      </div>
    </form>
  </section>
</div>
@endsection