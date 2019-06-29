<template>
    <div class="container">
        <div class="card">
            <div class="card-header">Lista de usuarios</div>
            <div class="card-body">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>first name</th>
                            <th>last name</th>
                            <th>profession</th>
                            <th>avatar</th>
                            <th>Modify</th>
                        </tr>
                        <tr v-for="user in users.data" :key="user.id">
                            <td>{{user.id}}</td>
                            <td>{{user.firstName}}</td>
                            <td>{{user.lastName}}</td>
                            <td>{{user.profession}}</td>
                            <td>
                                <img :src="getAvatar(user.avatar)" alt="" width="50px">
                            </td>
                            <td>
                                <a href="#" @click="editar(user)"> <i class="fa fa-edit blue"></i> </a>
                                /
                                <a href="#" @click="eliminar(user.id)"> <i class="fa fa-trash red"></i> </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <pagination :data="users" 
                @pagination-change-page="getResults"></pagination>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                users:{}
            }
        },
        methods:{
            getAvatar(avatar){
                return "img/profile/"+ avatar;
            },
            getResults(page = 1) {
                axios.get('api/listarUsuarios?page=' + page)
                    .then(response => {
                        this.users = response.data;
                        console.log(response.data);
                    });
		    },
            loadUsers(){
                axios.get('api/listarUsuarios')
                .then((response) => {
                    // console.log(response.data);
                    this.users = response.data;
                })
                .catch(() => {

                })
            },

            eliminar(id){
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    if(result)
                    {
                        axios.delete(`api/eliminarUsuario/${id}`)
                        .then((response)=>{
                            Fire.$emit('AfterCreate2'); 
                        })
                        .catch(() => {

                        })
                    }
                })
            },

            editar(user){
                Fire.$emit('cargarEdicion',user);
            }
        },
        mounted() {
            axios.get('api/listarUsuarios')
            .then((response) => {
                // console.log(response.data);
                this.users = response.data;
                // axios.get('api/listarUsuarios?page=' + 2)
                //     .then(response => {
                //         this.users = response.data;
                //         console.log(response.data);
                //     });
            })
            .catch(() => {

            })
            Fire.$on('AfterCreate',() => {
                this.loadUsers();                
            })
            Fire.$on('AfterCreate2',() => {
                this.getResults();                
            })
            console.log('Component mounted.')
        }
    }
</script>
