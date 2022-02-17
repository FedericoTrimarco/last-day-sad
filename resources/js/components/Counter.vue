<template>
    <div>
        <h2>{{ counter }}</h2>
        <button class="btn btn-primary" @click="addCounter">add</button>
        <button class="btn btn-danger" @click="removeCounter" :disabled="counter == 0">remove</button>
    </div>
</template>

<script>
export default {
    name: 'Counter',
    data() {
        return {
            counter: 0,
        }
    },
    methods: {
        addCounter(){
            this.counter++;
        },
        removeCounter(){
            if(this.counter > 0){
                this.counter--;
            }
        }
    }
}
</script>

<style>

</style>