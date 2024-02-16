<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> Cames Vote Inscription </title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
  </head>

  <body>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4"> Bienenue Sur Cames Vote </h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="/inscription/traitement" method="post" class="tm-login-form">
                    @csrf
                  <div class="form-group">
                    <label for="username"> Nom Utilisateur </label>
                    <input
                      name="username"
                      type=""
                      class="form-control validate"
                      id="username"
                      value=""
                      placeholder="votre nom "
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="username"> Email </label>
                    <input
                      name="email"
                      type="email"
                      class="form-control validate"
                      id="email"
                      value=""
                      placeholder="xxxx@gmail.com"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="username"> Image </label>
                    <input
                      name="image"
                      type="file"
                      class="form-control validate"
                      id="image"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input
                      name="password"
                      type="password"
                      class="form-control validate"
                      id="password"
                      value=""
                      placeholder="125677a@"
                      required
                    />
                  </div>
                  <div class="form-group mt-4">
                    <input type="submit" class="btn btn-primary btn-block text-uppercase" name="save" value="enregistrez vos informations"><br>
                    <p style="color: white"> Deja connecté(e)?    <a href="connexion" style="color: orange;"> connectez-vous ici </a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
