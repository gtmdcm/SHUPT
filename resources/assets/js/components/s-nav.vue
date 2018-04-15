<template>
    <Menu mode="horizontal" :theme="theme1" active-name="1" @on-select="onMenuSelect">
        <MenuItem name="mainpage">
            <Icon type="ios-paper"></Icon>
            主页
        </MenuItem>
        <MenuItem name="upload">
            <Icon type="ios-people"></Icon>
            发布
        </MenuItem>
        <Submenu name="torrent">
            <template slot="title">
                <Icon type="stats-bars"></Icon>
                种子
            </template>
            <MenuGroup title="种子发布">
                <MenuItem name="3-1">首页</MenuItem>
                <MenuItem name="3-2">temp</MenuItem>
                <MenuItem name="3-3">temp</MenuItem>
            </MenuGroup>
            <MenuGroup title="查看种子">
                <MenuItem name="3-4">首页</MenuItem>
                <MenuItem name="3-5">foo</MenuItem>
            </MenuGroup>
        </Submenu>
        <Submenu name="setting">
            <template slot="title">
                <Icon teype="settings"></Icon>
                设置
            </template>
            <MenuItem name="setting-1">编辑个人资料</MenuItem>
            <MenuItem name="rules">
                <Icon type="alert"></Icon>
                规则
            </MenuItem>
        </Submenu>
        <MenuItem name="help">
            <Icon type="help"></Icon>
            帮助
        </MenuItem>
    </Menu>
</template>
<script>
    export default {
        data() {
            return {
                theme1: 'light'
            }
        },
        methods: {
            onMenuSelect: function (name) {
                if (name === "mainpage") {
                    window.location.href = '/mainpage'
                }
                if (name === "upload") {
                    window.location.href = '/upload'
                }
                if (name === "3-1") {
                    window.location.href = '/torrent'
                }
                if (name === "3-4") {
                    windows.location.href = '/upload'
                }
                if (name === "setting-1") {
                    window.location.href = '/edit_profile'
                }
                if (name === "rules") {
                    window.location.href = '/rules'
                }
                if (name === "help") {
                    window.location.href = '/help'
                }
            }
        }
    }
</script>
<style scoped>
    .ivu-menu {
        position: fixed;
        top: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }
</style>