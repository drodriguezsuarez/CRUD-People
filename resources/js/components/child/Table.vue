<template>
    <table class="table mt-4">
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(son, index) in sons" :key="index">
            <td>{{ person.name }}</td>
            <td>{{ person.age }}</td>
            <td>{{ person.parent.name }}</td>
            <td>
                <a :href="`/Person/edit/${son.id}`"></a>
                <button class="btn btn-danger text-white" @click="deleteSon(son)">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
        props: ['sons'],
        methods: {
            async deleteSon(Son) {
                await axios.delete(`/Son/delete/${son.id}`).then(res => {
                    if (res.data.delete){
                        this.$children.sons_update.splice(index, 1)
                    }
                });
            }
        },
    
};
</script>

<style scoped>

</style>
