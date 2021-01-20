<div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">Aprobar solicitud de pedidos y actualizar estado </h4>
</div>
<div class="modal-body">
    <form class="form-horizontal form-label-left input_mask" method="post" id="add" name="add">
        <div id="result"></div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Estado
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <select class="form-control" name="project_id" id="project_id" required onchange="camara(this.value);">
                    <option selected="" value="">-- Selecciona --</option>
                      <?php foreach($projects as $p):?>
                        <option value="<?php echo $p['id']; ?>"><?php echo $p['name']; ?></option>
                      <?php endforeach; ?>
                </select>
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