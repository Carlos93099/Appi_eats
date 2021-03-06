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
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Horarios
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <span>Desde:</span> <input type="time">
                <span>Hasta:</span> <input type="time">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descripción
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dirección
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Codigo Postal
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="number" min="11111" max="99999">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Teléfono
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="tel">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Correo electrónico
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="email">
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
              <button id="save_data" type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </form>
</div>