<template>
    <div id="info_block">
        {{ name }}
        {{ state }}
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: "state",
        data: function () {
            return {
                name: '',
                state: ''
            }
        },
        created: function () {
            var self = this
            axios.get('./test').then(function (response) {
                console.log(response.data)
                self.name = response.data.name;
                self.state = response.data.state;
            })
        }
    }
</script>

<style scoped>

</style>