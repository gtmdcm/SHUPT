<template>
    <Form :model="uploadItem" :label-width="80">
        <FormItem label="标题">
            <Input v-model="uploadItem.title" clearable style="width:500px" placeholder="请输入标题"></Input>
        </FormItem>
        <FormItem label="副标题">
            <Input v-model="uploadItem.subtitle" clearable style="width:500px" placeholder="请输入副标题"></Input>
        </FormItem>
        <FormItem label="类型">
            <Select v-model="uploadItem.type" style="width:200px">
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
            <Input v-model="uploadItem.brief_introduction" clearable style="width:500px"  type="textarea" :autosize="{minRows: 2,maxRows: 5}"
                   placeholder="请输入简介"></Input>
        </FormItem>
        <Upload action="//localhost:8000/upload">
            <Button type="ghost" icon="ios-cloud-upload-outline">上传种子</Button>
        </Upload>
        <FormItem>
            <Button type="primary" @click="uploadData">发布</Button>
            <Button type="ghost" style="margin-left: 8px">取消</Button>
        </FormItem>
    </Form>
</template>

<script>
    import axios from 'axios'

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
        },
        methods:
            {
                uploadData: function () {
                    var self=this;
                    var params = new URLSearchParams();
                    let config = {
                        headers: {'Content-Type': 'multipart/form-data'}
                    }
                    params.append('title',this.uploadItem.title);
                    params.append('subtitle',this.uploadItem.subtitle);
                    params.append('type',this.uploadItem.type);
                    params.append('brief_introduction',this.uploadItem.brief_introduction);
                    axios.post('upload_torrent',params,config).then(function(response) {
                       self=response.uploadItem;
                    })
                },

                created: function () {
                    var self = this;
                    axios.post('/api/upload').then(function (response) {
                        console.log(response.data);
                        self.nick_name = response.data.uploadItem.nick_namedo;


                    })
                }
            }
    }
</script>

<style scoped>
.ivu-upload .ivu-btn {
    margin-left: 80px;
}
</style>