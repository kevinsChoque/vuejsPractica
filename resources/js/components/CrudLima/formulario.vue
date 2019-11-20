<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-3">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="account">account</label>
                                    <input type="text" class="form-control" id="account" name="account" 
                                    v-model="user.account">
                                </div>
                                <div class="form-group">
                                    <label for="firstName">firstName</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" v-model="user.firstName">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">lastName</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" v-model="user.lastName">
                                </div>
                                <label for="">status</label>
                                <div class="form-group">
                                    <input type="radio" name="radio" id="r1" v-model="user.status" value="active">
                                    <label for="r1"> active</label>
                                    <input type="radio" name="radio" id="r2" v-model="user.status" value="suspended">
                                    <label for="r2"> suspended</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="dateBirth">date Birth</label>
                                    <input type="date" class="form-control" id="dateBirth" name="dateBirth" v-model="user.dateBirth">
                                </div>
                                <div class="form-group">
                                    <label for="state">state</label>
                                    <select name="state" id="state" class="form-control"
                                    v-model="state" @change="changeCities(state)">
                                        <option value="cas">escoja el state</option>
                                        <option v-for="state in states"
                                        :key="state.id"
                                        :value="state.id">
                                            {{state.nombre}}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city">city</label>
                                    <select name="city" id="city" class="form-control" v-model="user.id_city">
                                        <option value="cas">choose a city</option>
                                        <option v-for="city in cities" 
                                        :key="city.id"
                                        :value="city.id">
                                            {{city.nombre}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="button" value="save & continue editing" class="btn btn-success float-right">
                        <input type="button" value="save" class="btn btn-primary float-right" @click="save()">
                        <router-link to="/EjercicioLima2" class="btn btn-default float-right">
                            cancel
                        </router-link>
                        
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
                states:{},
                cities:{},
                state:'',
                user:{
                    account:'',
                    firstName:'',
                    lastName:'',
                    status:'',
                    dateBirth:'',
                    id_city:''
                }
            }
        },
        methods:{
            save(){
                axios.post('api/saveClient',this.user)
                .then((response) => {
                    console.log(response)
                }).catch(() => {

                })
                // this.$router.go("EjercicioLima2");
                this.$router.push("/EjercicioLima2")
            },

            changeCities(id)
            {
                axios.get(`api/chooseCity/${id}`)
                .then((response) => {
                    this.cities = response.data;
                })
                .catch(() => {

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios.get('api/getState')
            .then((response) => {
                this.states = response.data;
            })
            .catch(() => {
                console.log('entro al catch de getState')
            })
        }
    }
</script>
