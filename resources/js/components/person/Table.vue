<template>
    <table class="table mt-4">
        <thead class="text-white font-weight-bold thead-dark">
        <tr>
            <th>Name</th>
            <th>Last name</th>
            <th>Age</th>
            <th>Phone</th>
            <th>City</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(person, index) in people" :key="index" >
            <td>{{ person.name }}</td>
            <td>{{ person.last_name }}</td>
            <td>{{ person.age }}</td>
            <td>{{ person.phone }}</td>
            <td>{{ person.city.name }}</td>
            <td>
                <!-- <a :href="`/Person/edit/${person.id}`"></a> -->
                <button class="btn btn-danger text-white" @click="deletePerson(person, index)" >Delete</button>
                <button class="btn btn-dark text-white" @click="editPerson(person, index)">Edit</button>
            </td>

        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    props: ['people'],
        methods: {
            async deletePerson(person) {
                await axios.delete(`/People/delete/${person.id}`).then(res => {
                    if (res.data.delete){
                        this.$parent.people_update.splice(index, 1)
                    }
                })
            },
            async editPerson(person) {
                await axios.edit(`/People/edit/${person.id}`).then(res => {
                    if (res.data.edit){
                        this.$parent.people_update.splice(index, 1)                    
                    }
                })
            }
        }

}
</script>
<style scoped>

</style>
