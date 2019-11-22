<template>
    <div class="card card-info card-outline">
        <div class="card-header p-2">
            <div class="float-left"><strong>ARCHIVOS DE LA I.E</strong></div>
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
                                <th>Nombre</th>
                                <th>Peso (MB)</th>
                                <th>Observaciones</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Archivo 1</td>
                                <td>3.2 mb</td>
                                <td>Se mando para.....revision</td>
                                <td>
                                    <i class="fa fa-eye"></i>
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Archivo 2</td>
                                <td>1.2 mb</td>
                                <td>Se man.....revision</td>
                                <td>
                                    <i class="fa fa-eye"></i>
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Archivo 3</td>
                                <td>2.5 mb</td>
                                <td>Se realizo.....revision</td>
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
    </div>
</template>
