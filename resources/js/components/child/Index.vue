<template>
    <section>
        <form-son :parents="parents"></form-son>
        <table-son :sons="sons_update"></table-son>
    </section>
</template>

<script>
import FormSon from './Form.vue'
import TableSon from './Table.vue'

export default {
    props: ['parents', 'sons'],
    components: {
        FormSon,
        TableSon
    },
    data() {
        return{
            sons_update: this.sons
        }
    }
}
</script>

<style scoped>

</style>
