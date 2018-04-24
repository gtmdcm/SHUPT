<template>
    <Row span="24">
        <Col span="24">
        <div>
            <Row span="24">
                <Col type="flex" justify="center" span="24">
                <Steps :current="current">
                    <Step title="种子信息" content="填写种子相关信息"></Step>
                    <Step title="种子文件" content="上传种子到服务器"></Step>
                    <Step title="完成" content="感谢你的上传"></Step>
                </Steps>
                </Col>
            </Row>
        </div>
        <div style="height: 10px">
        </div>
        <div>
            <Form ref="uploadItem" v-show="step1_flag" :model="uploadItem" :label-width="80" :rules="ruleValidate">
                <FormItem label="标题" prop="title">
                    <Input v-model="uploadItem.title" clearable style="width:500px" placeholder="请输入标题"></Input>
                </FormItem>
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
            </Form>
            <Row type="flex" justify="center">
                <Button v-show="step1_flag" type="primary" @click="uploadData('uploadItem')" style="">确认</Button>
            </Row>
            <Row type="flex" justify="center">
                <Upload v-show="step2_flag" name="upload_file" :action="upload_title+uploadItem.title" method="POST"
                        :format="['torrent']"
                        :on-format-error="handleFormatError" :on-success="handleSuccess">
                    <Button v-show="step2_flag" type="ghost" icon="ios-cloud-upload-outline">上传种子</Button>
                </Upload>
            </Row>
            <Row type="flex" justify="center">
                <Button v-show="step3" type="primary" @click="step2to3">确认</Button>
            </Row>
        </div>
        </Col>
    </Row>
</template>

<script>
    export default {
        name: "upload_step",
        data: function () {
            return {
                uploadItem: {
                    title: '',
                    // subtitle: '',
                    type: '',
                    brief_introduction: '',
                },
                upload_title: '/api/upload_file/',
                step1_flag: true,
                step2_flag: false,
                step3: false,
                step3_flag: false,
                current: 0,
                ruleValidate: {
                    title: [{required: true}],
                    type: [{required: true}],
                },
            }
        },
        methods: {
            uploadData(name) {
                var self = this;
                this.$refs[name].validate((valid) => {
                    axios.get('/api/ifExists/' + self.uploadItem.title).then(function (avatarflag) {
                        if (avatarflag.data) {
                            self.$Message.error('这个种子重名了哦');
                        } else {
                            if (valid) {
                                self.$Message.success('填写信息成功');

                                self.current += 1;
                                self.step1_flag = false;
                                self.step2_flag = true;
                            } else {
                                self.$Message.error('输入必要信息');
                            }
                        }
                    })

                })

                // self.upload_tile = "/api/upload_file/" + self.uploadItem.title;
                // console.log(self.uploadItem.title);
                // console.log(self.upload_title);
            },
            step2to3: function () {
                var self = this;
                if (self.step3_flag == false) {
                    this.current += 1;
                    this.step2_flag = false;
                    var params = new URLSearchParams();
                    params.append('title', this.uploadItem.title);
                    // params.append('subtitle', this.uploadItem.subtitle);
                    params.append('type', this.uploadItem.type);
                    params.append('brief_introduction', this.uploadItem.brief_introduction);
                    axios.post('upload', params).then(function (response) {
                        // console.log(response);
                        self = response.uploadItem;
                    })
                    console.log('hi');
                    self.$Message.success('上传成功快去看看');
                    self.step3_flag = true;
                }
                else {
                    location.href = 'torrent';
                }
            }
            ,
            handleFormatError(file) {
                this.$Notice.warning({
                    title: '格式不对！',
                    desc: '一定要torrent文件哦！'
                });
            }
            ,
            handleSuccess() {
                this.$Notice.success({
                    title: '成功',
                    desc: '点击确认发布吧！'
                })
                this.step3 = true;
            }
            ,
        }
    }
</script>

<style scoped>

</style>