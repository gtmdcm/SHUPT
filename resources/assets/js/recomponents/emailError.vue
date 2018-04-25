<template>
    <div>
        <div style="height: 40%;"></div>
        <Card style="width:320px; margin-left:auto;margin-right:auto;">
            <div style="text-align:center">
                <a href="/">
                    <Avatar shape="square" src="images/logo.png" size="large"></Avatar>
                </a>
                <h3>请先认证邮箱哦!</h3>
                <h3>邮件已发送至{{email}}</h3>
            </div>
        </Card>
    </div>
</template>

<script>
    export default {
        name: "emailerror",
        data: function () {
            return {
                email: '',
            }
        },
        mounted: function () {
            var self = this;
            axios.get('/mail').then(function (mail) {
                console.log(mail);
                self.email = mail.data[0].email;
            })
        }
    }
</script>

<style scoped>

</style>