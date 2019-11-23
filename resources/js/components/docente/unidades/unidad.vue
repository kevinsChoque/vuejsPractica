<template>
    <div class="card card-info card-outline">
        <div class="card-header p-2">
            <div class="float-left"><strong>Agregar Unidad</strong></div>
            <div class="float-right">
                <button type="button" class="btn btn-sm py-0" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-sm py-0" data-widget="remove"><i class="fa fa-edit"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="m-0">Nombre de la Unidad</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
				<div class="form-group">
					<label for="" class="m-0">Sesiones</label>
					<input type="text" class="form-control form-control-sm">
				</div>
                </div>                
                <div class="col-md-4">
				<div class="form-group">
					<label for="" class="m-0">Aprendizajes Esperados</label>
					<input type="text" class="form-control form-control-sm">
				</div>
                </div>
				
			</div>
			<div class="card-footer clearfix">
					<button type="button" class="btn btn-info float-right" style="margin-left: 10px">
						Guardar
					</button>
					
					<button type="button" class="btn btn-warning float-right">
						Limpiar
					</button>
					
				</div>
        </div>
    </div>
</template>