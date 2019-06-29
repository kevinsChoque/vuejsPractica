<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">DESCRIPCION DEL EJERCICIO DE LIMA</div>
                    <div class="card-body">
                        este es el ejercicio que me dieron en lima
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <crud-formulario></crud-formulario>
            </div>
            <div class="col-lg-6">
                <crud-tabla-usuarios></crud-tabla-usuarios>
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
