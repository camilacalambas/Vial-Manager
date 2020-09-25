<div class="page-inner">
    <form action="<?php echo getUrl("Caso","Caso","postUpdate"); ?>" method="POST">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Registrar Caso</div>
                </div>

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Entorno</label>
                            <div class="input-group">
                                <input type="text" class="form-control" style="color:black;" name="entorno" id="entorno" value="Entorno" readonly>
                                <div class="input-group-prepend">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#modalEntorno" type="button">
                                        <span class="btn-label">
                                            <i class="fas fa-street-view"></i>
                                        </span>
                                        Buscar
                                    </button>
                                </div>
                                <input type='hidden' name="entorno_id" id="entorno_id" value="">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Tramo</label>
                            <div class="input-group">
                                <input type="text" class="form-control" style="color:black;" name="tramo_id" id="tramo" value="Tramo" readonly>
                                <div class="input-group-prepend">
                                    <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#modalTramo">
                                        <span class="btn-label">
                                            <i class="fas fa-road"></i>
                                        </span>
                                        Buscar
                                    </button>
                                </div>
                                <input type='hidden' name="tramo_id" id="tramo_id" value="">
                            </div>
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="form-group form-group-default col-md-6">
                            <label>Adjuntar Imagen inicial de la via</label>
                            <input type="file" class="form-control" name="cas_fotografia_inicio" id="fotografia_inicio">
                        </div>
                        <div class="form-group form-group-default col-md-5 ml-3">
                            <label>Seleccione el tipo de pavimento</label>
                            <select name="tipo_pavimento_id" class="form-control">
                                <?php
                                while ($tiposP = pg_fetch_assoc($eject2)) {
                                    echo "<option value='" . $tiposP['pav_id'] . "'>" . $tiposP['pav_descripcion'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-row col-md-12">
                        <label>Causa</label>
                        <textarea class="form-control" name="cas_causa" id="cas_causa" rows="4" maxlength="200"></textarea>
                    </div>

                    <div class="form-row">
                        
                        <!-- <div id="div_det"> -->
                            <div id="d1" class="form-group col-md-5">
                                <label>Deterioro</label>
                                <div class="input-group">
                                    <input type="text" class="form-control inputcito" id="inputDeterioro1" style="color:black;" name="deterioro" value="Deterioro" readonly>
                                    <div class="input-group-prepend">
                                        <button class="btn btn-warning botonInput" id="1" type="button" data-toggle="modal" onclick="enviarID(this.id);" data-target="#modalDeterioro">
                                            <span class="btn-label">
                                                <i class="fas fa-road"></i>
                                            </span>
                                            Buscar
                                        </button>
                                    </div>
                                    <input type='hidden' name="deterioro_id" id="deterioro_id" value="">
                                </div>
                            </div>
    
                            <div id="d2" class="form-group col-md-2" style="padding: 15px">
                                <label>Gravedad</label>
                                <select name="gravedad" class="form-control"></select>
                            </div>
    
                            <div id="d3" class="form-group" style="padding: 12px">
                                <label>Area</label>
                                <div class="input-group">
                                    <input type="number" name="area" class="form-control">
                                </div>
                            </div>
                        <!-- </div> -->
                                

                        <div style="margin-top: 40px;" class="col-md-1 col-sm-1 col-xd-12">
                            <button type="button" id="search_det" class="btn btn-success">añadir</button>
                        </div>
                    </div>

                    
                    <div class="" id="copy">

                    </div>

                    <div class="card-action">
                        <div>
                            <button type="submit" class="btn btn-danger">Cancelar</button>
                            <button type="submit" class="btn btn-success ml-2" id="enviar">Aceptar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
<?php
    include_once '../View/Caso/modalTramo.php';
    include_once '../View/Caso/modalEntorno.php';
    include_once '../View/Caso/modalDeterioro.php';
?>
</div>