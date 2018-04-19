<template>
    <Col span="18">
        <Collapse v-model="value1" accordion>

            <Panel name="1">
                账号规则
                <p slot="content">违规账号会被<span style="color: #ed3f14;">封禁</span></p>
                <p slot="content">一位用户只能拥有<span style="color: #ed3f14;">一个</span>账户
                    ，注册多个账号将<span style="color: #ed3f14;">全部封禁</span></p>
                <p slot="content">一个账号只允许<span style="color: #ed3f14;">一位</span>用户使用，被<span
                        style="color: #ed3f14;">共用</span>的账号将被<span style="color: #ed3f14;">封禁</span>。</p>
                <p slot="content">作弊、买卖、转赠的帐号将被<span style="color: #ed3f14;">封禁</span></p>
            </Panel>
            <Panel name="2">
                下载规则
                <p slot="content">只能使用特定软件下载资源，详见<a href="/help?join=3">帮助</a></p>
                <p slot="content">过低的<a href="/help?join=4">分享率</a>会导致账号被封禁一段时间</p>
            </Panel>
            <Panel name="3">
                上传规则
                <p slot="content">站内全体人员任意上传速度限制不得低于<span style="color: #ff9900;">1MB/s</span>，否则将会被警告或封禁</p>
                <p slot="content">对于自己发布的资源，发布者将获得<span style="color: #ff9900;">双倍</span>的上传量</p>
                <p slot="content">发布资源者必须对锁发布对内容拥有合法的传播权，<span style="color: #ed3f14;">相应法律及版权纠纷由用户个人承担</span></p>
                <p slot="content">吐槽、剧透等内容请勿出现</p>
                <p slot="content">各分区对相应资源命名规则、介绍规范、禁发规则、重复规则、打包规则、删种规则等有详细规定，发布前请认真阅读，详见<a href="/help">帮助</a></p>
                <p slot=""></p>
                <!--此处添加分区规则-->
                <p slot="content">违规资源会被删除</p>
                <p slot="content">任何内容填写不规范，且经提醒未修改等资源会被删除</p>
                <p slot="content">发布后24小时为作种的资源会被删除</p>
                <p slot="content">因坏块无法被100%下载的资源会被删除</p>
                <p slot="content">总体积小于 <span style="color: #ff9900;">50MB</span>以下且网上易于找到的资源禁止发布</p>
            </Panel>
            <!--添加聊天/论坛后此处添加言论总和-->
            <Panel name="4">
                图片、用户名和昵称使用规则
                <p slot="content">头像图片允许格式 .jpg</p>
                <p slot="content">头像大小限制 <span style="color: #ff9900;">150KB</span></p>
                <p slot="content">请勿使用色情、血腥、宗教、政治敏感问题或包含对他人人身攻击的可能引起其他用户反感的图片、用户名、昵称。一经发现相关信息会被删除，第二次将会被封禁账号</p>
                <p slot="content" style="color: #ff9900;">在腾讯各产品没有办法更换头像、昵称的时候。我们也将停止更换。</p>
            </Panel>
        </Collapse>
    </Col>
</template>

<script>
    export default {
        name: "rules",
        data: function () {
            return {
                value1: '1'
            }
        },
    }
</script>

<style scoped>

</style>