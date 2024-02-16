@include('header')
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="accueil">
                <i class="fas fa-tachometer-alt"></i> statistiques
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
                <a
                  class="nav-link  dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="far fa-file-alt"></i>
                  <span> votes <i class="fas fa-angle-down"></i> </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="voter"> effectuer un vote </a>
                  <a class="dropdown-item" href="accueil"> statistiques </a>
                  <a class="dropdown-item" href="news"> informations partis </a>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="compte ">
                <i class="far fa-user"></i> mon compte
              </a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="deconnexion">
                Admin, <b>Deconnexion</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block"> Mes Informations </h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      > Mon Nom: 
                    </label>
                    <p style="color: orange;"> NGA TAMTO ALAN ULLRICH </p>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      > Mon Email</label
                    >
                    <p style="color: orange;"> ullrichngat@gmail.com </p>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-edit mx-auto">
                  <img src="img/product-image.jpg" alt="Product image" class="img-fluid d-block mx-auto">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('footer')
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
