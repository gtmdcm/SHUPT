<template>
    <div>
        <p>一定要熟悉规则哦 <br>
            <span style="color: #2d8cf0;" title="被你发现了">蓝色的字把鼠标放上去会有说明哦</span>!<br>
            <span style="color: #ff9900;">橙色的是和使用相关的东西</span><br>
            <span style="color: #ed3f14;">红色非常重要</span></p>
        <Collapse v-model="value2" accordion>

            <Panel name="1">
                账号规则
                <p slot="content" style="color: #ed3f14;">违规账号会被<span title="永久封禁，应该只有站长可以解禁把～" style="color: #2d8cf0;">封禁</span>！
                </p>
                <p slot="content" style="color: #ff9900;">以为用户只能拥有 <span style="color: #ed3f14;">一个</span>账户
                    ，注册多个账号将<span style="color: #ed3f14;">全部封禁</span></p>
                <p slot="content" style="color: #ff9900;">一个账号只允许<span style="color: #ed3f14;">一位</span>用户使用，被<span
                        style="color: #ed3f14;">共用</span>的账号将被<span style="color: #ed3f14;">封禁</span>。</p>
                <p slot="content" style="color: #ff9900;">作弊、买卖、转赠的帐号将被<span style="color: #ed3f14;">封禁</span></p>
            </Panel>
            <Panel name="2">
                下载规则
                <P slot="content" style="">只能使用特定软件下载资源，详见<span href="/help">帮助</span></P>

            </Panel>
        </Collapse>
    </div>
</template>

<script>
    export default {
        name: "rules",
        data: function () {
            return {
                value2: '1'
            }
        },
    }
</script>

<style scoped>

</style>