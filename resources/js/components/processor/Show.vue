<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link :to='{ name: "createProcessor" }' class="btn btn-success"><i
                    class="fas fa-plus-circle"></i></router-link>
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
                        <tr v-if="processors.length > 0" v-for="processor in processors" :key="processor.id">
                            <td>{{ processor.id }}</td>
                            <td>{{ processor.description }}</td>
                            <td>
                                <!-- llamamos al componente para Editar     -->
                                <router-link :to='{ name: "editProcessor", params: { id: processor.id } }'
                                    class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                <a type="button" @click="borrarProcessor(processor.id)" class="btn btn-danger"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr v-else>
                            <td colspan="3">No hay registros</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "processors",
    data() {
        return {
            processors: []
        }
    },
    mounted() {
        this.mostrarProcessors()
    },
    methods: {
        async mostrarProcessors() {
            await this.axios.get('/api/processor').then(response => {
                this.processors = response.data
                console.log(response)
            }).catch(error => {
                console.log(error)
                this.processors = []
            })
        },
        borrarProcessor(id) {
            if (confirm("¿Confirma eliminar el registro?")) {
                this.axios.delete(`/api/processor/${id}`).then(response => {
                    this.mostrarProcessors()
                }).catch(error => {
                    console.log(error)
                })
            }
        }
    }
}
</script>