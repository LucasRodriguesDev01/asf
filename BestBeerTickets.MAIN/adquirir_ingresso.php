<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adquirir Ingresso - BestBeerTickets</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top bg-primary-color">
      <div class="container py-3">
        <a class="navbar-brand primary-color" href="#">
          <img src="../assets/images/logobar.png" alt="BestBeerTickets" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items" aria-controls="navbar-items" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
          </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbar-items">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link primary-color" href="../BestBeerTickets.html">INÍCIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link primary-color" href="login.html">LOGIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link primary-color" href="cadastro.html">CADASTRAR</a>
            </li>
          </ul>
        </div>
    </nav>
  </header>
  <main>
    <h1>Adquirir Ingresso</h1>
    <section class="container card border-0 shadow py-3">
      <form class="row g-3" method="POST" action="processar_ingresso.php">
        <!-- Adicione aqui os campos necessários para adquirir o ingresso -->
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </form>
    </section>
  </main>

  <footer class="container-fluid bg-dark-color">
    <div class="container">
      <!-- Footer content here -->
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
