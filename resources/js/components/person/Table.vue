<template>
    <table class="table mt-4">
        <thead>
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
        <tr v-for="(person, index) in people" :key="index">
            <td>{{ person.name }}</td>
            <td>{{ person.last_name }}</td>
            <td>{{ person.age }}</td>
            <td>{{ person.phone }}</td>
            <td>{{ person.city.name }}</td>
            <td>
                <a :href="`/Person/edit/${person.id}`"></a>
                <button class="btn btn-danger text-white" @click="deletePerson(person)">Delete</button>
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
                await axios.delete(`/Person/delete/${person.id}`).then(res => {
                    if (res.data.delete){
                        this.$parent.people_update.splice(index, 1)
                    }
                })
            }
        }
    
}
</script>

<style scoped>

</style>
