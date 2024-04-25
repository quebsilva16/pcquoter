
<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link :to='{name:"crearProcessor"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="processor in processors" :key="processor.id">
                                    <td>{{ processor.id }}</td>
                                    <td>{{ processor.desription }}</td>
                                    <td>
                                        <!-- llamamos al componente para Editar     -->
                                        <router-link :to='{name:"editarProcessir",params:{id:processor.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrarProcessor(processor.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>                          
        </div>
    </div>
</template>

<script>
export default {
    name:"processors",
    data(){
        return {
            processors:[]
        }
    },
    mounted(){
        this.showProcessor()
    },
    methods:{
        async showProcessor(){
            await this.axios.get('/api/processor').then(response=>{
                this.processors = response.data
            }).catch(error=>{
                console.log(error)
                this.processors = []
            })
        },
        borrarProcessor(id){
            if(confirm("¿Confirma eliminar el registro?")){
                this.axios.delete(`/api/processor/${id}`).then(response=>{
                    this.showProcessor()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>
