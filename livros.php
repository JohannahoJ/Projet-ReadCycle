<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styleLivros.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="col-auto">
    <div class="fixed-top" style="background-color: #EEF0F2;">
      <div class="d-none d-sm-block">
        <div class="d-flex justify-content-center" style="background-color: #0e0e52; color: #ffff;">
          <img src="img/icons8-literature-50.png" class="mt-1 mb-1" style="width: 20px; height: 20px;" alt="">
          <p class="px-3 h6 mt-1 mb-1">Transforme páginas em pontes: doe um livro, mude um destino!</p>
        </div>
      </div>
      <div class="container">
        <nav class="navbar  navbar-expand-sm">
          <a href="index.php" class="navbar-brand d-flex">
            <img src="img/Brown and Beige Modern Bookstore Logo (1).png" style="width: 120px;" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
            <span class=""><img src="img/icons8-menu-48.png" style="width: 38px;" alt=""></span>
          </button>
          <div class="collapse navbar-collapse" id="menuNavbar">
            <div class="navbar-nav ms-auto">
              <a href="index.php" class="nav-link">Home</a>
              <a href="livros.php" class="nav-link active">Livros</a>
              <a href="sobreNos.php" class="nav-link">Sobre Nós</a>
              <a href="contato.php" class="nav-link" style="margin-right: 10px;">Contatos</a>
              <a class="register d-flex align-items-center px-3 text-center text-decoration-none text-light" href="login.php">Entrar</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <hr class="mt-5" style="margin-bottom: 64px;">

  <!-- BARRA DE PESQUISA -->

  <div class="container">
    <div class="row">
      <form class="d-flex mt-5">
        <input style="border-radius: 30px;" type="search" class="form-control me-2" placeholder="Pesquisar" aria-label="Pesquisar" oninput="filterBooks()">
      </form>
    </div>
  </div>

  <!-- LISTA DE GENEROS -->

  <div class="container">
    <div class="row">
      <div class="d-flex justify-content-center mt-5">
        <div class="row d-flex justify-content-center" style="list-style: none; gap: 50px;">
          <div class="col-auto">
            <img src="https://placehold.co/150x150/png" alt="" style=" border-radius:50%;">
            <p class="text-center">Romance</p>
          </div>
          <div class="col-auto">
            <img src="https://placehold.co/150x150/png" alt="" style=" border-radius:50%;">
            <p class="text-center">Suspense</p>
          </div>
          <div class="col-auto">
            <img src="https://placehold.co/150x150/png" alt="" style=" border-radius:50%;">
            <p class="text-center">Ficção cientifica</p>
          </div>
          <div class="col-auto">
            <img src="https://placehold.co/150x150/png" alt="" style=" border-radius:50%;">
            <p class="text-center">Terror</p>
          </div>
          <div class="col-auto">
            <img src="https://placehold.co/150x150/png" alt="" style=" border-radius:50%;">
            <p class="text-center">Autoajuda</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- LISTA DE LIVROS -->

  <div class="container">
    <div class="row mt-5">
      <h3 class="text-center">Nossos livros</h3>
    </div>
    <div class="row mt-5 d-flex justify-content-center" style="list-style: none; gap: 120px;">
      <div class="col-auto text-center livro limite " data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Titulo do livro</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Nome do doador</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#terror">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Terror</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="terror" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por Joao</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Titulo do livro</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por Joao</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Titulo do livro</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por Joao</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Titulo do livro</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por Joao</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Titulo do livro</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por Joao</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Titulo do livro</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por Joao</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Titulo do livro</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por Joao</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Titulo do livro</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por Joao</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Titulo do livro</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por Joao</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Titulo do livro</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por Joao</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" alt="">
        <p class="limite mb-0">Titulo do livro</p>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por Joao</h6>
            </div>
            <div class="modal-footer">
              <a class="container-fluid" href="https://wa.me/5599999999999"><button type="button" class="botao">Contatar</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <div class="mt-5" style="background-color: #0e0e52; color: #ffff !important;">
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

  <div class="link-top">
    <a href="#">
      <img src="img/icons8-up-squared-50.png" alt="" style="width:50px;">
    </a>
  </div>

  <script>
    function filterBooks() {
      const searchValue = document.querySelector('input[type="search"]').value.toLowerCase();
      const books = document.querySelectorAll('.livro');

      books.forEach(book => {
        const title = book.querySelector('p').textContent.toLowerCase();

        if (title.includes(searchValue)) {
          book.style.display = 'block';
        } else {
          book.style.display = 'none';
        }
      });
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>