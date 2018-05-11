<template>
    <Menu mode="horizontal" :theme="theme" @on-select="onClick">
        <MenuItem name="main">
            SHUPT
        </MenuItem>
        <MenuItem name="torrent">
            种子
        </MenuItem>
        <MenuItem name="upload">
            下载
        </MenuItem>
        <MenuItem name="help">
            帮助
        </MenuItem>
        <MenuItem name="rule">
            规则
        </MenuItem>
        <MenuItem name="search" style="float: right;">
            <div style="height: 12px"></div>
            <Input v-model="inputSearch">
            <Select v-model="select" slot="prepend" style="width:80px;">
                <Option value="torrent">
                    种子
                </Option>
                <Option value="user">
                    用户
                </Option>
            </Select>
            <Button slot="append" icon="ios-search"></Button>
            </Input>
        </MenuItem>
    </Menu>
</template>

<script>
    export default {
        name: "renav",
        data: function () {
            return {
                theme: 'light',
                inputSearch: '',
                select: 'torrent',
            }
        },
        methods: {
            onClick: function (name) {
                switch (name) {
                    case 'main' : {
                        location.href = '/re';
                        break;
                    }
                    case 'torrent' : {
                        location.href = '/retorrent';
                        break;
                    }
                    case 'upload' : {
                        location.href = '/reupload';
                        break;
                    }
                    case 'help' : {
                        location.href = '/rehelp';
                        break;
                    }
                    case 'rule' : {
                        location.href = 'rerule';
                        break;
                    }
                    case 'search' : {
                        location.href = '/research';
                    }
                }
            },
        },
    }
</script>

<style scoped>

</style>