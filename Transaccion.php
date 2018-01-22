<?php
include("recursos/head.php")
 ?>
<div class="row">
  <div class="col-sm-3">
    <div class="titulomargin">
          <img src="img/logo.png" width="150" height="150">
    </div>
  </div>
  <div class="col-sm-6">
    <div class="titulomarginn">
          <h1>Transaccion</h1>
    </div>
  </div>
  <div class="col-sm-3">
    <div align="right" class="marginright">
      1PasteCoin=0.0000001ether
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
  </div>
  <div class="col-sm-6">
    <form class="frmtransaccion" action="transaccion.php" method="post" name="frm">
      <p><input class="inputtrans" type="text" style="width:500px;height:30px" placeholder="De quien" name="de"/></p>
      <p><input class="inputtrans" type="text" style="width:500px;height:30px" placeholder="Para quien" name="para"/></p>
      <p>
        <h3>Cantidad</h3>
      </p>
      <p>
        <input class="inputtrans" type="text" style="width:300px;height:30px" placeholder="99999" name="cantidad"/>
      </p>
        <button type="button" class="btn btn-primary btnl">Aceptar</button>
        <button type="button" class="btn btn-danger btnr">Cancelar</button>
    </form>
  </div>
  <div class="col-sm-3">
    <h3>Disponibilidad:</h3>
    <p>1000,000,000.000</p>
  </div>
</div>



 <?php
include("recursos/footer.php")
  ?>
