<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>vistas plataforma de criptomoneda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
  </head>
  <body>

      <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
      <header>
        <nav class="navbar navbar-light bg-light">
          <div class="col-6 col-sm-8 col-md-10">
          </div>
          <div class="col-3 col-sm-2 col-md-1">
            <!-- Button trigger modal -->
            <button type="button" class=" btn btn-light" data-toggle="modal" data-target="#iniciarModal">
            <i class="fas fa-sign-in-alt"></i> Iniciar
            </button>

            <!-- Modal -->
            <div class="modal fade" id="iniciarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre de usuario</label>
                      <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de usuario">
                      <small id="emailHelp" class="form-text text-muted">Nombre de usuario unico e intransferible para uso de la plataforma</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                  </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-light">Entrar</button>
                </div>
              </div>
            </div>
            </div>

          </div>
          <div class="col-3 col-sm-2 col-md-1">
            <!-- Button trigger modal -->
            <button type="button" class=" btn btn-light" data-toggle="modal" data-target="#registrarseModal">
            <i class="fas fa-sign-in-alt"></i> Registrarse
            </button>

            <!-- Modal -->
            <div class="modal fade" id="registrarseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-row">
                      <div class="form-group">
                        <label for="inputAddress">Nombre de usuario</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Juan Hdez">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Confirm Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Acepto terminos
                        </label>
                      </div>
                    </div>

                  </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-light">Registrar</button>
                </div>
              </div>
            </div>
            </div>
          </div>

        </nav>
        <div class="row">
          <div class="col-md-4 text-center ">
            <img class="logotipo"src="img/logo.png" alt="">
          </div>
          <div class="col-md-8">
            <ul class="nav menu">
              <li class="nav-item">
                <a class="nav-link" href="index.php">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Pagos.php">PAGOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Transaccion.php">TRANSACCIONES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Compras.php">COMPRAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Fondo-Social.php">FONDO SOCIAL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Asistencia.php">ASISTENCIA <i class="far fa-question-circle"></i></a>
              </li>

            </ul>
          </div>
        </div>

      </header>
