<template>
    <Card>
        <div style="flex: 2;">
            <div>当前IP: {{user_ip}}</div>
            <div>网络: {{ip_status}}</div>
        </div>
        <div class="profile-avator" style="flex: 4;text-align:  center;">
            <a href="edit_profile">
                <!--<Avatar src="https://i.loli.net/2017/08/21/599a521472424.jpg">users</Avatar>-->
                <!--{{image}}-->
                <Avatar v-show="customAvatarFlag" :src="image"/>
                <Avatar v-show="normalAvatarFlag" style="background-color: #5cadff" icon="person"/>
                {{name}}
            </a>
            <a href="logout">
                退出登陆
            </a>
            <br>
            <span>©shupt</span>
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
                image: '',
                normalAvatarFlag: false,
                customAvatarFlag: false,

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

            axios.get('/userinfo').then(function (userinfo) {
                let obj = userinfo.data[0];
                self.up = obj.up;
                self.down = obj.down;
                self.name = obj.name;
                // axios.get('/api/ifAvatar/'+self.name).then(function (avatarflag) {
                //     if (avatarflag){
                //         self.customAvatarFlag = true;
                //     } else{
                //         self.normalAvatarFlag = true;
                //     }
                // })
                console.log(location.href = "'/api/ifAvatar/' + self.name");
            })
            axios.get('/contribute').then(function (contribute) {
                self.contribute = contribute.data;
            })
            axios.get('api/ip').then(function (ip) {
                self.user_ip = ip.data;
            })
            var l = self.user_ip.length;
            if (l < 16) {
                self.ip_status = 'IPv4';
            }
            axios.get('getImage').then(function (image) {
                // console.log(image);
                self.image = image.data;
            })
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
