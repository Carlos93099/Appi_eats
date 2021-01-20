<div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">Editar perfil </h4>
</div>
<div class="modal-body">
    <form class="form-horizontal form-label-left input_mask" method="post" id="add" name="add">
        <div id="result"></div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cuenta Clabe
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="number">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">vehículo
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Placas
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Licencia de manejo
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tarjeta de circulación
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="number">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Identificación
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="file" name="asistencia_img" id="asistencia_img" required capture="camera" accept="image/*">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefóno
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="tel">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Contraseña
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Correo
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
               <input type="email">
            </div>
            <span>
            Adjuntar foto <input type="file" name="asistencia_img" id="asistencia_img" required capture="camera" accept="image/*">
          </span>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
              <button id="save_data" type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </form>
</div>