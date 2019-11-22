<template>
    <div class="container pt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <h6 class="m-0">Se asignara docentes encargados segun nivel para verificar las sesiones y unidades o como algun archivo que se desee verificar.</h6>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header p-2">
                        <div class="float-left"><strong>DELEGAR DOCENTE SEGUN NIVEL</strong></div>
                        <div class="float-right">
                            <button type="button" class="btn btn-sm py-0" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-sm py-0" data-widget="remove"><i class="fa fa-edit"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="m-0">Docentes</label>
                                    <select class="form-control form-control-sm">
                                        <option selected disabled>Docentes</option>
                                        <option value="">Primaria Edi martinez</option>
                                        <option value="">Secundaria Edgar suarez</option>
                                        <option value="">Inicial Bety suarez</option>
                                        <option value="">Inicial Erica suarez</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="m-0">Nivel</label>
                                    <select class="form-control form-control-sm">
                                        <option selected disabled>Elegir nivel</option>
                                        <option value="">Inicial</option>
                                        <option value="">Primaria</option>
                                        <option value="">Secundaria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert alert-warning">
                                    En el cuadro debe de mencionar la forma y formato de enviar una vez realize la revision de las unidades y sesiones de los docentes
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="m-0">Observaciones</label>
                                <textarea name="" id="" cols="30" rows="3" class="form-control form-control-sm"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>