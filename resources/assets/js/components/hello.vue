<template>
    <div id="app">
        <h2>{{msg}}</h2>
        <state></state>
    </div>
</template>

<script>
    import state from './state'
    export default {
        data() {
            return {
                msg: 'This is a Laravel with Vue and Element Demo.'
            }
        },
        components: {
            state
        }
    }
</script>

<style>
    .hello {
        font-size: 2em;
        color: green;
    }
</style>