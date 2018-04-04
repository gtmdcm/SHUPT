<template>
    <div>
    <Menu mode="horizontal" :theme="theme1" active-name="1">
        <MenuItem name="1">
            <Icon type="ios-paper"></Icon>
            <a href="/">主页</a>
        </MenuItem>
        <MenuItem name="2">
            <Icon type="ios-people"></Icon>
            <a href="upload">发布</a>
        </MenuItem>
        <Submenu name="3">
            <template slot="title">
                <Icon type="stats-bars"></Icon>
                <a href="torrent">种子</a>
            </template>
            <MenuGroup title="种子发布">
                <MenuItem name="3-1">temp</MenuItem>
                <MenuItem name="3-2">temp</MenuItem>
                <MenuItem name="3-3">temp</MenuItem>
            </MenuGroup>
            <MenuGroup title="查看种子">
                <MenuItem name="3-4">foo</MenuItem>
                <MenuItem name="3-5">foo</MenuItem>
            </MenuGroup>
        </Submenu>
        <Submenu name="4">
            <template slot="title">
                <Icon type="settings"></Icon>
                <a href="torrent">设置</a>
            </template>
            <MenuGroup>
                <MenuItem name="4-1"><a href="edit_profile">编辑个人资料</a> </MenuItem>
                <MenuItem name="4-2">temp</MenuItem>
            </MenuGroup>
        </Submenu>
    </Menu>
    <br>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                theme1: 'light'
            }
        }
    }
</script>
