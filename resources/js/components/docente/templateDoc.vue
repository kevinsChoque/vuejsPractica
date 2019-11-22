<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <datos-do></datos-do>
            </div>
            <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">
                    <a data-toggle="collapse" href="#collapse-example12" aria-expanded="true" aria-controls="collapse-example12" id="heading-example" class="d-block">
                        <i class="fa fa-chevron-down pull-right"></i>
                        Cursos del Aula Virtual
                    </a>
                </h5>
                <div id="collapse-example12" class="collapse show" aria-labelledby="heading-example">
                    <div class="card-body">
                    <table class="table table-sm table-bordered">
                    <thead class="bg-info">
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
							<th>Fecha de Publicación</th>
							<th>Docente</th>
							<th>Asignatura</th>
							<th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>C0001</td>
							<td>Metodologia de Investigación</td>
							<td>12/08/2018</td>
							<td>Carlos Quispe</td>
							<td>Aritmetica</td>
							<td>
							<a href=""><i class="fas fa-eye"></i></a>
							<a href=""><i class="fa fa-edit"></i></a>
                            <a href=""><i class="fa fa-trash"></i></a>  </td>
                        </tr>
                        <tr>
								<td>C0002</td>
								<td>Programación orientada a Objetos</td>
								<td>22/09/2018</td>
								<td>Carlos Olivera</td>
								<td>Programación</td>
								<td>
								<a href=""><i class="fas fa-eye"></i></a>
								<a href=""><i class="fa fa-edit"></i></a>
								<a href=""><i class="fa fa-trash"></i></a>  </td>
                        </tr>
                        <tr>
								<td>C0003</td>
								<td>Metodo de la Bisección</td>
								<td>29/10/2019</td>
								<td>Carlos Quispe</td>
								<td>Álgebra</td>
								<td>
								<a href=""><i class="fas fa-eye"></i></a>
								<a href=""><i class="fa fa-edit"></i></a>
								<a href=""><i class="fa fa-trash"></i></a>  </td>
                        </tr>
                        <tr>
								<td>C0004</td>
								<td>Álgebra Booleana</td>
								<td>11/01/2014</td>
								<td>Juan Quispe</td>
								<td>Matemáticas Discretas</td>
								<td>
								<a href=""><i class="fas fa-eye"></i></a>
								<a href=""><i class="fa fa-edit"></i></a>
								<a href=""><i class="fa fa-trash"></i></a>  </td>
                        </tr>
                    </tbody>
                </table>
                    </div>
                    <div class="card-footer clearfix">                 
                        <ul class="pagination pagination-sm no-margin fa-pull-right">
                            <li>
                                <a href="#"> « </a>
                            </li>
                            <li>
                                <a href="#"> 1 </a>
                            </li>
                            <li>
                                <a href="#"> 2 </a>
                            </li>
                            <li>
                                <a href="#"> 3 </a>
                            </li>
                            <li>
                                <a href="#"> » </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            </div>     

            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">
                        <a data-toggle="collapse" href="#collapse-example10" aria-expanded="true" aria-controls="collapse-example10" id="heading-example" class="d-block">
                            <i class="fa fa-chevron-down pull-right"></i>
                            Unidades
                        </a>
                    </h5>
                    <div id="collapse-example10" class="collapse show" aria-labelledby="heading-example">
					<div class="card-body">

					<table class="table table-sm">
                            <thead class="bg-info">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Asignatura</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>U0001</td>
                                    <td>Primera Unidad</td>
                                    <td>Aritmetica</td>
                                    <td><a href=""><i class="fas fa-eye"></i></a>
                                        <a href=""><i class="fa fa-edit"></i></a>
                                        <a href=""><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>U0002</td>
                                    <td>Segunda Unidad</td>
                                    <td>Geometría</td>
                                    <td><a href=""><i class="fas fa-eye"></i></a>
                                        <a href=""><i class="fa fa-edit"></i></a>
                                        <a href=""><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
					</div>
					<div class="card-footer clearfix">                 
                        <ul class="pagination pagination-sm no-margin fa-pull-right">
                            <li>
                                <a href="#"> « </a>
                            </li>
                            <li>
                                <a href="#"> 1 </a>
                            </li>
                            <li>
                                <a href="#"> 2 </a>
                            </li>
                            <li>
                                <a href="#"> 3 </a>
                            </li>
                            <li>
                                <a href="#"> » </a>
                            </li>

                        </ul>
                    </div>
                    </div>
                </div>
			</div>
			<div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">
                        <a data-toggle="collapse" href="#collapse-example11" aria-expanded="true" aria-controls="collapse-example11" id="heading-example" class="d-block">
                            <i class="fa fa-chevron-down pull-right"></i>
                            Secciones
                        </a>
                    </h5>
                    <div id="collapse-example11" class="collapse show" aria-labelledby="heading-example">
					<div class="card-body">
					<table class="table table-sm">
					<thead class="bg-info">
						<tr>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Nivel</th>
							<th>Institución Educativa</th>
							<th>Horario</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>S0001</td>
							<td>Sección 'B'</td>
							<td>Secundaria</td>
							<td>I.E Rosario</td>
							<td>8:00 am</td>
							<td><a href=""><i class="fas fa-eye"></i></a>
								<a href=""><i class="fa fa-edit"></i></a>
								<a href=""><i class="fa fa-trash"></i></a>
							</td>
						</tr>
						<tr>
							<td>S0002</td>
							<td>Sección 'A'</td>
							<td>Primaria</td>
							<td>I.E. Rosario</td>
							<td>11:00 am</td>
							<td><a href=""><i class="fas fa-eye"></i></a>
								<a href=""><i class="fa fa-edit"></i></a>
								<a href=""><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					</tbody>
				</table>

					</div>
					<div class="card-footer clearfix">                 
                        <ul class="pagination pagination-sm no-margin fa-pull-right">
                            <li>
                                <a href="#"> « </a>
                            </li>
                            <li>
                                <a href="#"> 1 </a>
                            </li>
                            <li>
                                <a href="#"> 2 </a>
                            </li>
                            <li>
                                <a href="#"> 3 </a>
                            </li>
                            <li>
                                <a href="#"> » </a>
                            </li>

                        </ul>
                    </div>
                    </div>
                </div>
            </div>
		   
			
			
        </div>
    </div>
</template>
<script>  
        

</script>
