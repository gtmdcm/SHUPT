<template>
    <Form :model="uploadItem" :label-width="80">
        <FormItem label="标题">
            <Input v-model="uploadItem.title" placeholder="请输入标题"></Input>
        </FormItem>
        <FormItem label="副标题">
            <Input v-model="uploadItem.subtitle" placeholder="请输入副标题"></Input>
        </FormItem>
        <FormItem label="类型">
            <Select v-model="uploadItem.type">
                <Option value="00">资料</Option>
                <Option value="01">电影</Option>
                <Option value="02">动漫</Option>
                <Option value="03">剧集</Option>
                <Option value="04">综艺</Option>
                <Option value="05">体育</Option>
                <Option value="06">记录</Option>
                <Option value="07">音乐</Option>
                <Option value="08">MV</Option>
                <Option value="09">软件</Option>
                <Option value="10">游戏</Option>
                <Option value="11">校园</Option>
                <Option value="12">其他</Option>
            </Select>
        </FormItem>
        <FormItem label="简介">
            <Input v-model="uploadItem.brief_introduction" clearable type="textarea" :autosize="{minRows: 1,maxRows: 5}"
                   placeholder="请输入简介"></Input>
        </FormItem>
    </Form>
</template>

<script>
    export default {
        name: "update_torrent",
        data: function () {
            return {
                uploadItem: {
                    title: '',
                    subtitle: '',
                    type: '12',
                    brief_introduction: '',
                }
            }
        }
    }
</script>

<style scoped>

</style>