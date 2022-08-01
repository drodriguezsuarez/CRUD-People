<template>
    <table class="table mt-4">
        <thead class="text-white font-weight-bold thead-dark">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Parents</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(person, index) in parents " :key="index">
            <td>{{son.name}}</td>
            <td>{{son.age}}</td>
            <td>{{parent.person.name}}</td>
            <td>
                <!-- <a :href="`/Person/edit/${person.id}`"></a> -->
                <button class="btn btn-danger text-white" @click="deleteSon(person, index)" >Delete</button>
                <button class="btn btn-dark text-white" @click="editSon(person, index)">Edit</button>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
        props: ['sons'],
        methods: {
            async deleteSon(son) {
                await axios.delete(`/Son/delete/${son.id}`).then(res => {
                    if (res.data.delete){
                        this.$children.sons_update.splice(index, 1)
                    }
                })
            }
        },
            async editSon(son) {
                await axios.edit(`/Son/edit/${son.id}`).then(res => {
                    if (res.data.edit){
                        this.$children.sons_update.splice(index, 1)                    
                }
            })
        }    
}
</script>

<style scoped>

</style>
