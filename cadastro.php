<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylecadastro.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Tela de Login</title>
</head>

<body>
  <div class="col-auto">
    <div class="" style="background-color: #EEF0F2;">
      <div class="d-none d-sm-block">
        <div class="d-flex justify-content-center" style="background-color: #0e0e52; color: #ffff;">
          <img src="img/icons8-literature-50.png" class="mt-1 mb-1" style="width: 20px; height: 20px;" alt="">
          <p class="px-3 h6 mt-1 mb-1">Transforme páginas em pontes: doe um livro, mude um destino!</p>
        </div>
      </div>
      <div class="container">
        <nav class="navbar navbar-expand-sm">
          <a href="index.php" class="navbar-brand d-flex">
            <img src="img/Brown and Beige Modern Bookstore Logo (1).png" style="width: 120px;" alt="">
          </a>
        </nav>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="d-flex justify-content-center align-self-center">
      <div class="cadastro-container mt-5">
        <h2>Cadastro</h2>
        <form class="cadastro-form" method="post" action="">
          <div class="row">
            <div class="col-12">
              <label for="nome">Nome</label>
              <input type="text" name="Nome" placeholder="Digite seu nome completo" id="nome" required>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <label class="mt-2" for="email">Email</label>
              <input type="email" name="email" placeholder="Digite seu email" id="email" required>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <label class="mt-2" for="senha">Senha</label>
              <input type="password" name="senha" placeholder="Crie uma senha forte" id="senha" required>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <label class="mt-2" for="confirmar-senha">Confirmar senha</label>
              <input type="password" name="confirmar-senha" placeholder="confirme sua senha" id="confirmar-senha" required>
            </div>
          </div>
          <div class="btn-cadastrar">
            <button class="mt-3" type="submit">Concluir Cadastro</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="mt-5">
    <div style="background-color: #0e0e52; color: #ffff !important;">
      <div class="container">
        <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-5 mb-4">
            <div class="row">
              <ul class="d-flex px-4" style="gap: 20px;">
                <a href="#">
                  <img src="img/icons8-instagram.svg" style="width: 35px;" alt="">
                </a>
                <a href="#">
                  <img src="img/icons8-facebook.svg" style="width: 35px;" alt="">
                </a>
                <a href="#">
                  <img src="img/icons8-twitter.svg" style="width: 35px;" alt="">
                </a>
              </ul>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-5 mb-4 px-4">
            <div class="row">
              <p class="h5 px-0">asnfdangoaidng</p>
            </div>
            <div class="row">ahofoahfosgdfgs</div>
            <div class="row">ahofoahfosgdfgs</div>
            <div class="row">ahofoahfosgdfgs</div>
            <div class="row">ahofoahfosgdfgs</div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-5 mb-4 px-4">
            <div class="row">
              <p class="h5 px-0">asnfdangoaidng</p>
            </div>
            <div class="row">ahofoahfosgdfgs</div>
            <div class="row">ahofoahfosgdfgs</div>
            <div class="row">ahofoahfosgdfgs</div>
            <div class="row">ahofoahfosgdfgs</div>
          </div>
        </div>
      </div>

    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>