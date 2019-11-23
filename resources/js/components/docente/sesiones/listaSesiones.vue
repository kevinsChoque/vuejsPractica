<template>
    <div class="card card-info card-outline">
        <div class="card-header p-2">
            <div class="float-left"><strong>Lista de Sesiones</strong></div>
            <div class="float-right">
                <button type="button" class="btn btn-sm py-0" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-sm py-0" data-widget="remove"><i class="fa fa-edit"></i></button>
            </div>
        </div>
		<div class="card-body">
		<div class="col-md-6">
            <div class="row">
					<div class="form-group">
						<label for="" class="m-0">Cursos</label>
						<select class="form-control form-control-sm">
							<option selected disabled>Elegir un Tipo</option>
							<option value="">Tipo 1</option>
							<option value="">Tipo 2</option>
							<option value="">Tipo 3</option>
						</select>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="m-0">Buscar &nbsp</label><i class="fa fa-search"></i>
							<input type="text" class="form-control form-control-sm">
							
							</input>
						</div>					
					</div>	
					
			</div>
		</div>
		<div class="row">
		<div class="col-md-12">
		<table class="table table-sm table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Nivel</th>
					<th>Unidad</th>
					<th>Curso</th>
					<th>Archivos</th>
					<th>Obervaciones</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Sesión 1</td>
					<td>Primaria</td>
					<td>Unidad 1</td>
					<td>Curso 2</td>
					<td>3 Archivos</td>
					<td>Sujeto a revisión</td>
					<td>
					<i class="fa fa-eye"></i>
					<i class="fa fa-edit"></i>											
					
					</td>
				</tr>
				<tr>
					<td>Sesión 2</td>
					<td>Primaria</td>
					<td>Unidad 2</td>
					<td>Curso 3</td>
					<td>13 Archivos</td>
					<td>En proceso</td>
					<td>
					<i class="fa fa-eye"></i>
					<i class="fa fa-edit"></i>											
					
					</td>
				</tr>
				<tr>
					<td>Sesión 3</td>
					<td>Secundaria</td>
					<td>Unidad 3</td>
					<td>Curso 2</td>
					<td>30 Archivos</td>
					<td>Inicio de Revision</td>
					<td>
					<i class="fa fa-eye"></i>
					<i class="fa fa-edit"></i>											
					
					</td>
				</tr>
				<tr>
					<td>Sesión 4</td>
					<td>Primaria</td>
					<td>Unidad 4</td>
					<td>Curso 4</td>
					<td>5 Archivos</td>
					<td>Revisado</td>
					<td>
					<i class="fa fa-eye"></i>
					<i class="fa fa-edit"></i>											
					
					</td>
				</tr>
				<tr>
					<td>Sesión 5</td>
					<td>Secundaria</td>
					<td>Unidad 5</td>
					<td>Curso 6</td>
					<td>1 Archivos</td>
					<td>Sujeto a revisión</td>
					<td>
					<i class="fa fa-eye"></i>
					<i class="fa fa-edit"></i>											
					
					</td>
				</tr>
			</tbody>
		</table>
	</div>					
	</div>				
				
			</div>
			<div class="card-footer clearfix">                 
			<ul class="pagination pagination-sm no-margin fa-pull-right">
				<li class="page-item">
					<a class="page-link" href="#"> « </a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#"> 1 </a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#"> 2 </a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#"> 3 </a>
				</li>
				<li class="page-item"> 
					<a class="page-link" href="#"> » </a>
				</li>

			</ul>
		</div>	
			
			
        </div>
    </div>
</template>