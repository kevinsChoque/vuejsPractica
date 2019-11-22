<template>
    <div class="card card-info card-outline">
        <div class="card-header p-2">
            <div class="float-left"><strong>SUBIR ARCHIVO DE LA I.E</strong></div>
            <div class="float-right">
                <button type="button" class="btn btn-sm py-0" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-sm py-0" data-widget="remove"><i class="fa fa-edit"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="m-0">Nombre</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="m-0">Lista de carpetas</label>
                        <select class="form-control form-control-sm">
                            <option selected disabled>Elegir una carpeta</option>
                            <option value="">Carpeta 1</option>
                            <option value="">Carpeta 2</option>
                            <option value="">Carpeta 3</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputFile"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrada de archivo</font></font></label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                
                            </div>
                            <div class="input-group-append">
                                <label class="custom-file-label" for="exampleInputFile"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elija el archivo</font></font></label>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-4">
                    <label for="" class="m-0">Cargar archivo</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text">Subir</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="m-0">Observacion / Comentario</label>
                    <textarea name="" id="" cols="30" rows="3" class="form-control form-control-sm"></textarea>
                </div>
            </div>
        </div>
    </div>
</template>
