<?php
include('recursos/head.php');
?>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center">Obtener Coin's</h3>

    </div>
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
      <form>

        <div class="form-group">
          <label for="formGroupExampleInput">Forma de pago</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="forma de pago">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Cantidad</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Cantidad de compra">
        </div>
        <div class="form-group text-center">
          <button type="button" class="btn btn-light"data-toggle="modal" data-target="">Comprar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<br>
<?php
include('recursos/footer.php');
?>
