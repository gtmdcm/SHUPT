<template>
    <div>
        <Collapse v-model="value1" accordion>
            <Panel name="basic">
                基本
                <div slot="content">
                    <Collapse accordion v-model="value2">
                        <Panel name="basic-1">
                            SHUPT？
                            <p slot="content">目前只是一个简单的资源交流平台。立志于使就算不懂得计算机专业知识和原理的人也能不被各超大互联网公司的捆绑下载软件坑害。</p>
                            <p slot="content">网站并不提供资源，资源都在各上传的电脑中。下载后即可在他人下载是参与上传，为网站作出一份贡献。</p>
                            <p slot="content">PT提倡人人为我，我为人人的互助精神。不同于私人PT，SHUPT应该会坚持非盈利原则.</p>
                            <p slot="content">进一步了解PT原理，<a href="https://baike.baidu.com/item/pt下载/6883416?fr=aladdin">传送门</a>。
                            </p>
                        </Panel>
                    </Collapse>
                </div>
            </Panel>
            <Panel>
                用户信息
            </Panel>
            <Panel>
                数据统计
            </Panel>
            <Panel>
                上传
            </Panel>
            <Panel>
                下载
            </Panel>
            <Panel>
                如果找不到答案
            </Panel>
        </Collapse>
    </div>
</template>

<script>
    export default {
        name: "help",
        data: function () {
            return {
                value1: '1',
                value2: '1'
            }
        },
    }
</script>

<style scoped>

</style>