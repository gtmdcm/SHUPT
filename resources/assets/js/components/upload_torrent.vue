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
                <Option value="0000">资料</Option>
                <Option value="0001">电影</Option>
                <Option value="0002">动漫</Option>
                <Option value="0003">剧集</Option>
                <Option value="0004">综艺</Option>
                <Option value="0005">体育</Option>
                <Option value="0006">记录</Option>
                <Option value="0007">音乐</Option>
                <Option value="0008">MV</Option>
                <Option value="0009">软件</Option>
                <Option value="0010">游戏</Option>
                <Option value="0011">校园</Option>
                <Option value="0012">其他</Option>
            </Select>
        </FormItem>
        <FormItem label="简介">

            <Input v-model="uploadItem.brief_introduction" clearable style="width:500px" type="textarea"
                   :autosize="{minRows: 2,maxRows: 5}"
                   placeholder="请输入简介"></Input>
        </FormItem>
        <Upload name="upload_file" action=upload_title>
            <Button type="ghost" icon="ios-cloud-upload-outline">上传种子</Button>
        </Upload>
        <FormItem>
            <Button type="primary" @click="uploadData">发布</Button>
            <Button type="ghost" style="margin-left: 8px">取消</Button>
        </FormItem>
    </Form>
    <!--<form action="/api/upload_file" method="post" enctype="multipart/form-data">-->
    <!--<input type="file" name="upload_file" value="选择jar包"/>-->
    <!--<input id="submit_form" type="submit" class="btn btn-success save" value="保存"/>-->
    <!--</form>-->
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
                    type: '0012',
                    brief_introduction: '',
                },
                upload_title: '',
            }
        },
        methods:
            {
                uploadData: function () {
                    var self = this;
                    var params = new URLSearchParams();
                    params.append('title', this.uploadItem.title);
                    params.append('subtitle', this.uploadItem.subtitle);
                    params.append('type', this.uploadItem.type);
                    params.append('brief_introduction', this.uploadItem.brief_introduction);
                    axios.post('upload', params).then(function (response) {
                        self = response.uploadItem;
                    })
                    self.upload_title = "/api/upload_file/" + self.uploadItem.title;
                    console.log(self.upload_title);
                },
            }
    }
</script>

<style scoped>
    .ivu-upload .ivu-btn {
        margin-left: 80px;
    }
</style>
