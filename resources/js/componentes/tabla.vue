<template>
    <table>
        <caption> {{ nombre_tabla }}</caption>

        <thead>
        <tr>
            <th v-for="campo in campos">
               <button @click="ordena(campo)"> {{ campo }} </button>
            </th>
        </tr>
        </thead>

        <tr v-for="fila in filas">
            <td v-for="valor in fila">
                {{ valor }}
            </td>
        </tr>
    </table>
</template>

<script>
export default {
    name: "tabla",
    props: ['nombre_tabla', 'filas_serializadas', 'campos_serializados'],
    data() {
        return {
            filas: [],
            campos: []
        }
    },
    mounted() {
        console.log("Campos antes de decoder" +this.campos_serializados);
        this.filas = JSON.parse(this.filas_serializadas);
        this.campos = JSON.parse(this.campos_serializados);
        console.log("Campos antes ya decodificados" +this.campos);
    },
    methods:{
        ordena:function(campo){
            this.filas = this.filas.sort(((a,b)=>
                a[campo]>b[campo] ? 1:
                    a[campo]<b[campo] ? -1:
                        0 ));
        }
    }
}
</script>
<style scoped>

</style>
