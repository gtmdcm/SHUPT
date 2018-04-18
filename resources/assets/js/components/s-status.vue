<template>
    <Card class="status_menu">
        <div style="flex: 2;">
            <div>当前IP: {{user_ip}}</div>
            <div>网络: {{ip_status}}</div>
        </div>
        <div class="profile-avator" style="flex: 4;text-align:  center;">
            <div>
            <Avatar src="https://i.loli.net/2017/08/21/599a521472424.jpg">users</Avatar>
            {{name}}
            </div>
            <a href="http://localhost:8000/logout" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                退出登陆
            </a>
        </div>
        <div style="text-align:  right;flex: 2;">
            <div>
            上传量: {{upload_quantity}}
            </div>
            <div>
            下载量: {{download_quantity}}
            </div>
        </div>
    </Card>

</template>
<script>
    import axios from 'axios'

    export default {
        name: 's-status',
        data: function() {
            return {
                name: '临时用户',
                upload_quantity: 0,
                download_quantity: 0,
                user_ip: '192.168.0.0',
                ip_status: 'IPv4',
            }
        },
        methods: {
            downloadData: function () {
                var self=this;
                axios.get();
            }
        },
        mounted: function () {
            var self=this;
            console.log('hi');
        }
    }
</script>
<style>
    .ivu-card{
        position: fixed;
        bottom: 0;
        width: 100%;
        display: flex;
    }
    .ivu-card-body {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }
</style>
