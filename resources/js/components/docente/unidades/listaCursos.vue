<template>
    <div class="card card-info card-outline">
        <div class="card-header p-2">
            <div class="float-left"><strong>Lista de Cursos</strong></div>
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
					<th>Unidades</th>
					<th>Observaciones</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Curso 1</td>
					<td>Primaria</td>
					<td>14 unidades</td>
					<td>Se imparte... mismo.</td>
					<td>
					<i class="fa fa-list"></i>
					<i class="fa fa-eye"></i>
					<i class="fa fa-edit"></i>											
					<i class="fa fa-plus"></i>
					</td>
				</tr>
				<tr>
					<td>Curso 2</td>
					<td>Secundaria</td>
					<td>2 unidades</td>
					<td>Se man.....revision</td>
					<td>
					<i class="fa fa-list"></i>
					<i class="fa fa-eye"></i>
					<i class="fa fa-edit"></i>											
					<i class="fa fa-plus"></i>
					</td>
				</tr>
				<tr>
					<td>Curso 3</td>
					<td>Secundaria</td>
					<td>3 unidades</td>
					<td>Se realizo.....revision</td>
					<td>
						<i class="fa fa-list"></i>
						<i class="fa fa-eye"></i>
						<i class="fa fa-edit"></i>											
						<i class="fa fa-plus"></i>

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