<?php
include('recursos/head.php');
?>
<div class="container">
  <br>
  <div class="row">
    <div class="col-md-12">
      <div class="card contrato">
        <div class="card-header">
          Fecha de vencimiento
        </div>
        <div class="card-body">
          <h5 class="card-title">Contrato numero 2</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <h4 class="text-center">Monto a pagar: $13,900.00</h4>
          <div class="col-md-4">
            <select class="custom-select">
              <option selected>Contratar por mas tiempo</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-12 text-center">
            <button type="button" class="btn btn-light"data-toggle="modal" data-target="#pagoModal">Pagar</button>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="pagoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contrato numero 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <h3>Disponibilidad:</h3>
                    <p>1000,000,000.000</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Token</label>
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="ID Cuenta">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Cantidad</label>
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="Cantidad a pagar">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Acepto</label>
                  </div>

                </form>

              <div class="modal-footer">
                  <button type="submit" class="btn btn-light">Pagar</button>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-12">
      <div class="card contrato">
        <div class="card-header">
          Fecha de vencimiento
        </div>
        <div class="card-body">
          <h5 class="card-title">Contrato numero 1</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <h4 class="text-center">Monto a pagar: $13,900.00</h4>
          <div class="col-md-4">
            <select class="custom-select">
              <option selected>Contratar por mas tiempo</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-12 text-center">
            <button type="button" class="btn btn-light"data-toggle="modal" data-target="#pagoModal">Pagar</button>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-12">
      <div class="card contrato">
        <div class="card-header">
          Fecha de vencimiento
        </div>
        <div class="card-body">
          <h5 class="card-title">Contrato numero 5</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <h4 class="text-center">Monto a pagar: $13,900.00</h4>
          <div class="col-md-4">
            <select class="custom-select">
              <option selected>Contratar por mas tiempo</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-12 text-center">
            <button type="button" class="btn btn-light"data-toggle="modal" data-target="#pagoModal">Pagar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<?php
include('recursos/footer.php');
?>
