<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <datos-do></datos-do>
            </div>
            <div class="col-md-12">


            <div class="card card-info card-outline">
            <div class="card-header p-2">
                <div class="float-left"><strong>Cursos del Aula Virtual</strong></div>
                <div class="float-right">
                    <button type="button" class="btn btn-sm py-0" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-sm py-0" data-widget="remove"><i class="fa fa-edit"></i></button>
                </div>
            </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Unidades</th>
                                        <th>Sesiones</th>
                                        <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>C0001</td>
                                        <td>Metodología de Investigación</td>
                                        <td>5 Unidades</td>
                                        <td>24 Sesiones</td>
                                        <td>
                                            <i class="fa fa-eye"></i>
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C0002</td>
                                        <td>Programación orientada a objetos</td>
                                        <td>2 Unidades</td>
                                        <td>14 Sesiones</td>
                                        <td>
                                            <i class="fa fa-eye"></i>
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C0003</td>
                                        <td>Matemáticas Discretas</td>
                                        <td>3 Unidades</td>
                                        <td>8 Sesiones</td>
                                        <td>
                                            <i class="fa fa-eye"></i>
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C0004</td>
                                        <td>Álgebra Lineal</td>
                                        <td>5 Unidades</td>
                                        <td>9 Sesiones</td>
                                        <td>
                                            <i class="fa fa-eye"></i>
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash"></i>
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

            <div class="col-md-6">
            <div class="card card-info card-outline">
            <div class="card-header p-2">
                <div class="float-left"><strong>Unidades</strong></div>
                <div class="float-right">
                    <button type="button" class="btn btn-sm py-0" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-sm py-0" data-widget="remove"><i class="fa fa-edit"></i></button>
                </div>
            </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>U0001</td>
                                        <td>Primera Unidad</td>
                                        <td>Esta unidad.... afines.</td>
                                        <td>
                                            <i class="fa fa-eye"></i>
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>U0002</td>
                                        <td>Segunda Unidad</td>
                                        <td>Segunda uni.... afines.</td>
                                        <td>
                                            <i class="fa fa-eye"></i>
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>U0003</td>
                                        <td>Tercera Unidad</td>
                                        <td>Esta unidad.... afines.</td>
                                        <td>
                                            <i class="fa fa-eye"></i>
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash"></i>
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
            

			<div class="col-md-6">
            <div class="card card-info card-outline">
            <div class="card-header p-2">
                <div class="float-left"><strong>Secciones</strong></div>
                <div class="float-right">
                    <button type="button" class="btn btn-sm py-0" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-sm py-0" data-widget="remove"><i class="fa fa-edit"></i></button>
                </div>
            </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>S0001</td>
                                        <td>Primera Sección</td>
                                        <td>Esta sección.... afines.</td>
                                        <td>
                                            <i class="fa fa-eye"></i>
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>S0002</td>
                                        <td>Segunda Sección</td>
                                        <td>Segunda uni.... afines.</td>
                                        <td>
                                            <i class="fa fa-eye"></i>
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>S0003</td>
                                        <td>Tercera Sección</td>
                                        <td>Esta unidad.... afines.</td>
                                        <td>
                                            <i class="fa fa-eye"></i>
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash"></i>
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
		   
			
			
        </div>
    </div>
</template>
<script>  
        

</script>
