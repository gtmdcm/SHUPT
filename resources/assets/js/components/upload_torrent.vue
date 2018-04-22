<template>
    <Col span="18">
    <div style="justify-content: center;">
        <Steps :current="current">
            <Step title="种子信息" content="填写种子相关信息"></Step>
            <Step title="种子文件" content="上传种子到服务器"></Step>
            <Step title="完成" content="感谢你的上传"></Step>
        </Steps>
    </div>
    <div style="height: 10px">
    </div>
    <div>
        <Form v-show="step1_flag" :model="uploadItem" :label-width="80" :rules="formValidate">
            <FormItem label="标题" prop="title">
                <Input v-model="uploadItem.title" clearable style="width:500px" placeholder="请输入标题"></Input>
            </FormItem>
            <!--<FormItem label="副标题">-->
            <!--<Input v-model="uploadItem.subtitle" clearable style="width:500px" placeholder="请输入副标题"></Input>-->
            <!--</FormItem>-->
            <FormItem label="类型" prop="type">
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
            <!--<Upload name="upload_file" action="upload_file" method="POST">-->
            <!--<Button type="ghost" icon="ios-cloud-upload-outline">上传种子</Button>-->
            <!--</Upload>-->
            <!--<FormItem>-->
            <!--<Button type="primary" @click="uploadData">发布</Button>-->
            <!--<Button type="ghost" style="margin-left: 8px">取消</Button>-->
            <!--</FormItem>-->
        </Form>
        <Button v-show="step1_flag" type="primary" @click="uploadData" style="">确认</Button>
        <!--<Button v-show="step1_flag" type="ghost" style="margin-left: 8px">取消</Button>-->
        <!--<Button type="primary" @click="next">Next step</Button>-->
        <Upload v-show="step2_flag" name="upload_file" :action="upload_title+uploadItem.title" method="POST"
                :format="['torrent']"
                :on-format-error="handleFormatError" :on-success="handleSuccess">
            <Button v-show="step2_flag" type="ghost" icon="ios-cloud-upload-outline">上传种子</Button>
        </Upload>
        <Button v-show="step3" type="primary" @click="step2to3">确认</Button>
    </div>
    </Col>
</template>

<script>
    export default {
        name: "upload_step",
        data: function () {
            return {
                uploadItem: {
                    title: '',
                    subtitle: '',
                    type: '',
                    brief_introduction: '',
                },
                upload_title: '/api/upload_file/',
                step1_flag: true,
                step2_flag: false,
                step3: false,
                current: 0,
                formValidate: {
                    title: [{required: true}],
                    type: [{required: true}],
                },
            }
        },
        methods: {
            uploadData: function () {
                console.log('hi');
                this.current += 1;
                this.step1_flag = false;
                this.step2_flag = true;

                // self.upload_tile = "/api/upload_file/" + self.uploadItem.title;
                // console.log(self.uploadItem.title);
                // console.log(self.upload_title);
            },
            step2to3: function () {
                this.current += 1;
                this.step2_flag = false;
                var self = this;
                var params = new URLSearchParams();
                params.append('title', this.uploadItem.title);
                params.append('subtitle', this.uploadItem.subtitle);
                params.append('type', this.uploadItem.type);
                params.append('brief_introduction', this.uploadItem.brief_introduction);
                axios.post('upload', params).then(function (response) {
                    console.log(response);
                    self = response.uploadItem;
                })
                location.href = 'torrent';
            },
            handleFormatError(file) {
                this.$Notice.warning({
                    title: '格式不对！',
                    desc: '一定要torrent文件哦！'
                });
            },
            handleSuccess() {
                this.step3 = true;
            },
        }
    }
</script>

<style scoped>

</style>