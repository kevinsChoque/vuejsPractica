<template>
    <div class="container">
        <div class="card">
            <div class="card-header">FORMULARIO</div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="firstName" class="control-label">first name:</label>
                        <input type="text" name="firstName" id="firstName" class="form-control"
                        v-model="user.firstName">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="lastName" class="control-label">last name:</label>
                        <input type="text" name="lastName" id="lastName" class="form-control"
                        v-model="user.lastName">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="" class="control-label">profesion:</label>
                        <select name="" id="" class="form-control" v-model="user.profession">
                            <option v-for="profession in professions" 
                            :key="profession.id" 
                            :value="profession.descripcion">
                                {{profession.descripcion}}
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">avatar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile"
                            @change="subirAvatar">
                            <label class="custom-file-label" for="exampleInputFile">Elije tu avatar</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <img :src="loaderAvatar()" alt="" width="200px">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input v-if="editMode" type="button" class="btn btn-default" value="cancel" @click="cancelarEdicion">
                <input v-if="editMode" type="button" class="btn btn-success" value="guardar cambios" @click="editarUser">
                <input v-else type="button" class="btn btn-primary" value="guardar" @click="guardarUser">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                editMode:false,
                user:{
                    id:'',
                    firstName:'',
                    lastName:'',
                    profession:'',
                    avatar:''
                },
                professions:{}

            }
        },
        methods:{
            loaderAvatar(){
                if(this.user.avatar != null)
                {
                    return (this.user.avatar.length > 200) ? this.user.avatar : "img/profile/"+ this.user.avatar ;
                }
            },
            subirAvatar(e){
                let file = e.target.files[0];
                let reader = new FileReader();
                reader.onloadend = (file) => {
                    this.user.avatar = reader.result;
                }
                reader.readAsDataURL(file);
                console.log(file)
            },
            cancelarEdicion(){
                this.limpiarCampos();
                this.editMode = false;
            },
            limpiarCampos(){
                // console.log(this.firstName);
                this.user.firstName = '';
                this.user.lastName = '';
                this.user.profession = '';
                this.user.avatar = '';
            },
            guardarUser(){
                const userCreate = {
                    firstName:this.user.firstName,
                    lastName:this.user.lastName,
                    profession:this.user.profession,
                    avatar:this.user.avatar
                }
                // console.log(userCreate)
                axios.post('api/guardarUser',userCreate)
                .then((data) => {
                    this.limpiarCampos();
                    // Fire.$emit('AfterCreate'); 
                    Fire.$emit('AfterCreate2'); 
                    // swal.fire('Guardado!','Se guardo el user corre..','success');
                    toast.fire({
                        type:'success',
                        title:'user created in successfully'
                    });
                })
                .catch(() => {
                    
                })
            },
            editarUser(){
                axios.put(`api/actualizarUsuario/${this.user.id}`,this.user)
                .then((response) => {
                    Fire.$emit('AfterCreate');
                    this.editMode = false;
                    this.limpiarCampos();
                    toast.fire({
                        type:'success',
                        title:'user edited in successfully'
                    });
                })
                .catch(() => {

                })
            }
        },
        mounted() {
            // console.log('Component mounted.');
            // console.log(this.user)
            axios.get('api/listarProfession')
            .then((data) => {
                this.professions = data.data;
                // console.dir(data.data);
            })
            .catch(() => {

            })
            Fire.$on('cargarEdicion',(user) => {
                this.editMode=true;
                this.user.id = user.id;
                this.user.firstName = user.firstName;
                this.user.lastName = user.lastName;
                this.user.profession = user.profession;
                this.user.avatar = user.avatar;
            })
        }
    }
</script>
