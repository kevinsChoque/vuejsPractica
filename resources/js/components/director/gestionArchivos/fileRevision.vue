<template>
    <div class="card card-info card-outline">
        <div class="card-header p-2">
            <div class="float-left"><strong>ARCHIVOS A MANDAR A REVISION (ESPECIALISTA)</strong></div>
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
                                <th>Archivo a revisar</th>
                                <th>Nombre</th>
                                <th>Peso (MB)</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>revisar 1</td>
                                <td>nombre</td>
                                <td>3.2 mb</td>
                                <td><span class="right badge badge-success">revisado</span></td>
                                <td>
                                    <i class="fa fa-eye"></i>
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>revisar 2</td>
                                <td>nombre</td>
                                <td>1.2 mb</td>
                                <td><span class="right badge badge-danger">no subio</span></td>
                                <td>
                                    <i class="fa fa-eye"></i>
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>revisar 3</td>
                                <td>nombre</td>
                                <td>2.5 mb</td>
                                <td><span class="right badge badge-warning">proceso</span></td>
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
        <div class="card-footer p-2">
            <input type="button" class="btn btn-primary btn-sm w-100" value="Enviar a revision">
        </div>
    </div>
</template>
