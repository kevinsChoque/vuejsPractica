<template>
    <div class="card card-info card-outline">
        <div class="card-header p-2">
            <div class="float-left"><strong>Búsqueda de Recursos</strong></div>
            <div class="float-right">
                <button type="button" class="btn btn-sm py-0" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-sm py-0" data-widget="remove"><i class="fa fa-edit"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="" class="m-0">Tipo</label>
					<select class="form-control form-control-sm">
						<option selected disabled>Elegir un tipo de Recurso</option>
						<option value="">Tipo 1</option>
						<option value="">Tipo 2</option>
						<option value="">Tipo 3</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="" class="m-0">I.E.</label>
					<select class="form-control form-control-sm">
						<option selected disabled>Elegir una Institucion</option>
						<option value="">I.E. 1</option>
						<option value="">I.E. 2</option>
						<option value="">I.E. 3</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="" class="m-0">Lista de Docentes</label>
					<select class="form-control form-control-sm">
						<option selected disabled>Elegir un Docente</option>
						<option value="">Archivo 1</option>
						<option value="">Archivo 2</option>
						<option value="">Archivo 3</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="" class="m-0">Lista de Cursos</label>
					<select class="form-control form-control-sm">
						<option selected disabled>Elegir un Curso</option>
						<option value="">Curso 1</option>
						<option value="">Curso 2</option>
						<option value="">Curso 3</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				<label for="" class="m-0">Unidad</label>
				<select class="form-control form-control-sm">
					<option selected disabled>Elegir una Unidad</option>
					<option value="">Unidad 1</option>
					<option value="">Unidad 2</option>
					<option value="">Unidad 3</option>
				</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				<label for="" class="m-0">Sesión</label>
				<select class="form-control form-control-sm">
					<option selected disabled>Elegir una Sesion</option>
					<option value="">Sesion 1</option>
					<option value="">Sesion 2</option>
					<option value="">Sesion 3</option>
				</select>
				</div>
			</div>
			
			
			
                               
                
				
			</div>
			<div class="card-footer clearfix">
					<button type="button" class="btn btn-danger float-right" style="margin-left: 10px">
						Buscar
					</button>
					
					<button type="button" class="btn btn-info float-right">
						Limpiar
					</button>
					
				</div>
        </div>
    </div>
</template>