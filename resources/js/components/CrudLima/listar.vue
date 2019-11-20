<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="float-left">Lista de usuarios</h5>
                        <!-- <input type="button" value="add" class="btn btn-success float-right"> -->
                        <router-link to="/EjercicioLima2Formulario" class="btn btn-success float-right">
                            ADD
                        </router-link>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ACCOUNT</th>
                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>DATE OF BIRTH</th>
                                    <th>STATE</th>
                                    <th>CITY</th>
                                    <th>STATUS</th>
                                    <th>CREATED</th>
                                    <th>UPDATE</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="client in clients" :key="client.id">
                                    <td>{{client.account}}</td>
                                    <td>{{client.firstName}}</td>
                                    <td>{{client.lastName}}</td>
                                    <td>{{client.dateBirth}}</td>
                                    <td>{{client.city.state.nombre}}</td>
                                    <td>{{client.city.nombre}}</td>
                                    <td>{{client.status!=null ? client.status : 'null'}}</td>
                                    <td>{{client.created_at}}</td>
                                    <td>{{client.updated_at}}</td>
                                    <td>
                                        <router-link v-bind:to="'/EjercicioLima2Edit/'+client.id" class="fa fa-cog">
                                        </router-link>
                                        <a href="#" > <i class="fa fa-edit blue"></i> </a>
                                        /
                                        <a href="#" @click="deleteClient(client.id)"> <i class="fa fa-trash red"></i> </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            clients:{}
        }
    },
    methods:{
        getClient()
        {
            axios.get('api/getClients')
            .then((response) => {
                this.clients = response.data
                console.log(response.data)
            })
            .catch(() => {
                console.log('entro a catch de getClient')
            })
        },
        deleteClient(id)
        {
            console.log(id)
            axios.delete(`api/deleteClient/${id}`)
            .then((response) => {
                Fire.$emit('getClientAfter');
            })
            .catch(() => {

            })
        }
    },
    created(){
        this.getClient();
        Fire.$on('getClientAfter',() => {
            this.getClient();                
        })       
    }
}
</script>

