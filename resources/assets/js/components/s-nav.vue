<template>
    <Menu mode="horizontal" :theme="theme1" active-name="1" @on-select="onMenuSelect">
        <MenuItem name="logo">
            <span style="margin-bottom: 30px;
            color: black;">
                    <Avatar shape="square" src="images/logo.png" size="small"></Avatar>
                SHUPT
            </span>
        </MenuItem>
        <MenuItem name="torrent">
            <Icon type="android-download"></Icon>
            种子
            <!--<MenuGroup title="种子发布">-->
            <!--<MenuItem name="3-1">首页</MenuItem>-->
            <!--<MenuItem name="3-2">temp</MenuItem>-->
            <!--<MenuItem name="3-3">temp</MenuItem>-->
            <!--</MenuGroup>-->
            <!--<MenuGroup title="查看种子">-->
            <!--<MenuItem name="3-4">首页</MenuItem>-->
            <!--<MenuItem name="3-5">foo</MenuItem>-->
            <!--</MenuGroup>-->
        </MenuItem>
        <!--<MenuItem name="mainpage">-->
        <!--<Icon type="android-home"></Icon>-->
        <!--主页-->
        <!--</MenuItem>-->
        <MenuItem name="upload">
            <Icon type="android-upload"></Icon>
            发布
        </MenuItem>

        <MenuItem name="setting-1">
            <Icon type="person"></Icon>
            编辑个人资料
        </MenuItem>
        <!--<Submenu name="setting">-->
        <!--<template slot="title">-->
        <!--<Icon type="wrench"></Icon>-->
        <!--设置-->
        <!--</template>-->
        <!--</Submenu>-->

        <MenuItem name="rules">
            <Icon type="alert"></Icon>
            规则
        </MenuItem>
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
                if (name === "logo") {
                    window.location.href = '/'
                }
                if (name === "upload") {
                    window.location.href = '/upload'
                }
                if (name === "torrent") {
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
</style>