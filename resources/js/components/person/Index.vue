<template>
    <section>
        <form-person :cities="cities"> </form-person>
        <table-person :people="people_update"> </table-person>
    </section>
</template>

<script>
import FormPerson from './Form.vue'
import TablePerson from './Table.vue'

export default {
    props: ['cities', 'people'],
    components: {
        FormPerson,
        TablePerson
    },
    data() {
        return{
            people_update: this.people
        }
    }
}
</script>

<style scoped>

</style>
