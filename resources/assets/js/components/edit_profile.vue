<template>
    <Form :model="formItem" :label-width="80">
        <Upload name="avatar" :action="'/api/Avatar/'+formItem.name" method="POST"
                :format="['png']" multiple type="drag">
            <div style="padding: 20px 0">
                <Icon type="ios-cloud-upload" size="52" style="color: #3399ff"></Icon>
                <p>拖拽或点击上传</p>
            </div>
        </Upload>
        <!--<Upload-->
        <!--name="Avatar"-->
        <!--multiple-->
        <!--type="drag"-->
        <!--action="/api/uploadAvatar">-->
        <!--<div style="padding: 20px 0">-->
        <!--<Icon type="ios-cloud-upload" size="52" style="color: #3399ff"></Icon>-->
        <!--<p>拖拽或点击上传</p>-->
        <!--</div>-->
        <!--</Upload>-->
        <FormItem label="生日">
            <Row>
                <Col span="11">
                <DatePicker type="date" placeholder="选择日期" v-model="formItem.birthday"></DatePicker>
                </Col>
            </Row>
        </FormItem>
        <FormItem label="性别">
            <RadioGroup v-model="formItem.gender">
                <Radio label="male">男</Radio>
                <Radio label="female">女</Radio>
                <Radio label="secret">保密</Radio>
            </RadioGroup>
        </FormItem>
        <FormItem label="学校">
            <Select v-model="formItem.school" style="width:200px">
                <Option v-for="item in school_list" :value="item.schoolid" :key="item.schoolid">{{item.name}}</Option>
            </Select>
        </FormItem>
        <FormItem label="签名 ">
            <Input v-model="formItem.signature" clearable style="width:500px" type="textarea"
                   :autosize="{minRows: 2,maxRows: 5}"
                   placeholder="请输入签名"></Input>
        </FormItem>
        <FormItem>
            <Button type="primary" @click="uploadData">发布</Button>
            <Button type="ghost" style="margin-left: 8px">取消</Button>
            <!--<Button type="primary" @click="downloadData">foobar</Button>-->
        </FormItem>
    </Form>
</template>
<script>
    import axios from 'axios'

    export default {
        name: "edit_profile",
        data: function () {
            return {
                id: '',
                formItem: {
                    name: '',
                    gender: 'secret',
                    birthday: '',
                    school: '',
                    signature: '',
                },
                school_list: []
            }
        },
        methods:
            {
                uploadData: function () {
                    var self = this;
                    var params = new URLSearchParams();
                    params.append('gender', this.formItem.gender);
                    params.append('school', this.formItem.school);
                    params.append('signature', this.formItem.signature);
                    params.append('birthday', this.formItem.birthday.toLocaleDateString());
                    axios.post('edit_profile', params).then(function (response) {
                        self = response.formItem;
                    })
                    this.$Message.success('成功啦(๑•̀ω•́๑)');
                    this.$Notice.warning({
                        title: '注意',
                        desc: '头像上传有一定网络延迟，刷新下页面就好了'
                    });
                },

                downloadData: function () {
                    var self = this;
                    axios.get('/api/school');
                },

                returnToMain: function () {

                },


            },
        mounted: function () {
            var self = this;
            axios.get('/api/school').then(function (schoolData) {
                self.school_list = schoolData.data;
            });
            // 这边改了api

            axios.get('/userinfo',).then(function (userinfo) {
                let obj = userinfo.data[0];
                self.formItem = obj;

            })
        }
    }
</script>

