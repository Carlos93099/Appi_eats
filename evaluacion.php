<div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">Evalucación </h4>
</div>
<div class="modal-body">
    <form class="form-horizontal form-label-left input_mask" method="post" id="add" name="add">
        <div id="result"></div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Puntuación
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="number" min="1" max="5">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Comentario
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text">
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