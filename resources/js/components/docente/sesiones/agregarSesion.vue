<template>
    <div class="card card-info card-outline">
        <div class="card-header p-2">
            <div class="float-left"><strong>Agregar Sesion</strong></div>
            <div class="float-right">
                <button type="button" class="btn btn-sm py-0" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-sm py-0" data-widget="remove"><i class="fa fa-edit"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="" class="m-0">Nivel</label>
					<select class="form-control form-control-sm">
						<option selected disabled>Elegir una curso</option>
						<option value="">Inicial</option>
						<option value="">Primaria</option>
						<option value="">Secundaria</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="" class="m-0">Lista de Cursos</label>
					<select class="form-control form-control-sm">
						<option selected disabled>Elegir una curso</option>
						<option value="">Curso 1</option>
						<option value="">Curso 2</option>
						<option value="">Curso 3</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="" class="m-0">Lista de Unidades</label>
					<select class="form-control form-control-sm">
						<option selected disabled>Elegir una Unidades</option>
						<option value="">Unidad 1</option>
						<option value="">Unidad 2</option>
						<option value="">Unidad 3</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="" class="m-0">Lista de Archivos</label>
					<select class="form-control form-control-sm">
						<option selected disabled>Elegir una carpeta</option>
						<option value="">Archivo 1</option>
						<option value="">Archivo2</option>
						<option value="">Archivo 3</option>
					</select>
				</div>
			</div>
			<div class="col-md-8">
                    <label for="" class="m-0">Cargar archivos</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text">Subir</span>
                        </div>
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