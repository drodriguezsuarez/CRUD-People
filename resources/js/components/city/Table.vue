<template>
    <section>
        <div class="card mt-2">
        <table class="table mt-4">
            <thead>
            <tr>
                <th>City</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                    <tr v-for="(city, index) in cities" :key="index">
                        <td>{{ city.name }}</td>
                        <td>
                            <!-- <a :href="`/Person/edit/${city.id}`"></a> -->
                            <button class="btn btn-danger text-white" @click="deleteCity(city, index)">Delete</button>
                            <button class="btn btn-dark text-white" @click="editCity(city, index)">Edit</button>
                        </td>
                    </tr>    
            </tbody>
        </table>
        </div>
    </section>
</template>
<script>
export default {
  props: ['cities'],
  methods: {
    async deleteCity(city, index) {
        await axios.delete(`/City/delete/${city.id}`).then(res =>{
            if (res.data.delete){
                alert('Ciudad borrada correctamente')
                this.$parent.cities_update.splice(index, 1)
                }
            })
        }
    },
    async editCity(city) {
        await axios.edit(`/City/edit/${city.id}`).then(res => {
            if (res.data.edit){
                this.$parent.cities_update.splice(index, 1)                    
                }
            })
        }
  
}
</script>

<style scoped>

</style>