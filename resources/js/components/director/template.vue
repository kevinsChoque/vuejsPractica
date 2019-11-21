<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <datos-ie></datos-ie>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header p-2">Cursos por docente</div>
                    <div class="card-body p-3">
                        <table class="table table-sm table-bordered">
                            <thead class="bg-info">
                                <tr>
                                    <th>Curso</th>
                                    <th>Docente</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Aritmetica</td>
                                    <td>carlos quispe</td>
                                    <td><a href=""><i class="fa fa-edit"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Algebra</td>
                                    <td>Erica sauñe</td>
                                    <td>
                                        <a href=""><i class="fa fa-edit"></i></a>
                                        <a href=""><i class="fa fa-trash"></i></a>    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header p-2">Cursos por docente</div>
                    <div class="card-body p-3">
                        <table class="table table-sm">
                            <thead class="bg-info">
                                <tr>
                                    <th>Curso</th>
                                    <th>Docente</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header p-2">Report 1</div>
                    <div class="card-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam ab rem, cum sit culpa ipsam dolor, sint, ratione repellendus magnam totam voluptates architecto odio illum temporibus in aut nam labore.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header p-2">Report 2</div>
                    <div class="card-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam ab rem, cum sit culpa ipsam dolor, sint, ratione repellendus magnam totam voluptates architecto odio illum temporibus in aut nam labore.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header p-2">Report 3</div>
                    <div class="card-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam ab rem, cum sit culpa ipsam dolor, sint, ratione repellendus magnam totam voluptates architecto odio illum temporibus in aut nam labore.</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
