<!--NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-dark unique-color-dark">
  
  <a class="navbar-brand" href="/home"><img src="{{ asset('mdb/images/logo1.png') }}" height="90" width="100" alt="TODABELA" /></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="basicExampleNav">

    <ul class="navbar-nav mr-auto">
        <!--HOME-->
        <li class="nav-item active">
          <a class="nav-link" href="/home">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>

        <!--SOBRE-->
        <li class="nav-item">
          <a class="nav-link" href="/sobre">Sobre</a>
        </li>

        <!--DROPDOWN-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Cabelo</a>
            <a class="dropdown-item" href="#">Maquiagem</a>
            <a class="dropdown-item" href="#">Manicure</a>
          </div>
        </li>

        <!--CONTATO-->
        <li class="nav-item">
          <a class="nav-link" href="/contato">Contato</a>
        </li>
    </ul>

    <!--PESQUISAR-->
    <form class="form-inline">
      <div class="md-form my-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Pesquisar">
      </div>
    </form>
  </div>
</nav>