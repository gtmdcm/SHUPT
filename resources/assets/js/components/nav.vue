<template>
    <div>
        <button :onclick="temp1">huaji</button>
    </div>
</template>

<script>
    export default {
        name: "h-nav",
        data: function ( ) {
            return {
                nick_name : "fsda"
            }
        },
        methods :{
            temp1:function ( ) {
                console.log('hu')
            }
        },
        created: function () {
          console.log('hi')
        }
    }
</script>

<style scoped>

</style>