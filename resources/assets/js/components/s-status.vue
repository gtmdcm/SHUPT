<template>
    <Card>
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
                <Icon type="log-out"></Icon>
                退出登陆
            </a>
        </div>
        <div style="text-align:  right;flex: 2;">
            <p>
                上传量: {{up}}
                下载量: {{down}}
                分享率:
                <Icon type="chevron-down"></Icon>
            </p>
            <p>
                <Progress :percent="contribute" status="active"></Progress>
            </p>
        </div>
        <!--<Row type="flex" justify="space-around">-->
        <!--<Col span="6">-->
        <!--ip地址-->
        <!--</Col>-->

        <!--<Col span="6">-->
        <!--<p>-->
        <!--<Avatar src="https://i.loli.net/2017/08/21/599a521472424.jpg">users</Avatar>-->
        <!--{{name}}-->
        <!--</p>-->
        <!--<a href="auth/logout"-->
        <!--onclick="event.preventDefault();-->
        <!--document.getElementById('logout-form').submit();">退出-->
        <!--</a>-->
        <!--</Col>-->

        <!--<Col span="6">-->
        <!--上传量：{{up}}-->
        <!--<Progress :percent="contribute" status="active"></Progress>-->
        <!--下载量::{{down}}-->
        <!--</Col>-->
        <!--</Row>-->
    </Card>

</template>
<script>
    import axios from 'axios'

    export default {
        name: 's-status',
        data: function () {
            return {
                name: 'temp',
                up: 0,
                down: 0,
                user_ip: '192.168.0.0',
                ip_status: 'IPv6',
                contribute: 0,
            }
        },
        methods: {
            downloadData: function () {
                var self = this;
                axios.get();
            }
        },
        mounted: function () {
            var self = this;
            console.log('hi');
            axios.get('/userinfo').then(function (userinfo) {
                let obj = userinfo.data[0];
                self.up = obj.up;
                self.down = obj.down;
                self.name = obj.name;

            })
            axios.get('/contribute').then(function (contribute) {
                console.log(contribute.data);
                self.contribute = contribute.data;
            })
            axios.get('api/ip').then(function (ip) {
                console.log(ip.data);
                self.user_ip = ip.data;
            })
            var l = self.user_ip.length;

            console.log(l);
            if (l < 16) {
                self.ip_status = 'IPv4';
            }
        }
    }
</script>
<style>
    .ivu-card {
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
