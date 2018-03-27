<template lang="pug">
    div
        a(:href="pages/mainpage") 主页
        |
        |
        a(href="pages/forums") 论坛
        |
        |
        a(href="pages/upload") 发布
        |
        |
        a(href="pages/viewrequests") 求种
        |
        |
        a(href="pages/torrent") 种子
</template>

<script>
    export default {
        name: "p-nav"
    }
</script>

<style scoped>

</style>