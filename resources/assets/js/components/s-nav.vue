<template>
    <div>
        <Menu mode="horizontal" :theme="theme1" active-name="1" @on-select="onMenuSelect">
            <MenuItem name="1">
                <Icon type="ios-paper"></Icon>
                主页
            </MenuItem>
            <MenuItem name="2">
                <Icon type="ios-people"></Icon>
                <a href="upload">发布</a>
            </MenuItem>
            <Submenu name="3">
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
            <Submenu name="4">
                <template slot="title">
                    <Icon type="settings"></Icon>
                    设置
                </template>
                <MenuGroup>
                    <MenuItem name="4-1"><a href="edit_profile">编辑个人资料</a></MenuItem>
                    <MenuItem name="4-2">temp</MenuItem>
                </MenuGroup>
            </Submenu>
        </Menu>
        <br>
    </div>
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
                if (name === "1") {
                    window.location.href = '/'
                }
                if (name === "2") {
                    window.location.href = '/upload'
                }
                if (name === "3-1") {
                    window.location.href = '/torrent'
                }
                if (name === "3-4") {
                    windows.location.href = '/upload'
                }
                if (name === "4-1") {
                    window.location.href = '/edit_profile'
                }
            }
        }
    }
</script>
