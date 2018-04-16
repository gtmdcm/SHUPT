<template>
    <Form :model="formItem" :label-width="80">
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
            <Input v-model="formItem.signature" clearable style="width:500px" type="textarea" :autosize="{minRows: 2,maxRows: 5}"
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
                formItem: {
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
                    var self=this;
                    var params = new URLSearchParams();
                    params.append('gender', this.formItem.gender);
                    params.append('school', this.formItem.school);
                    params.append('signature', this.formItem.signature);
                    params.append('birthday', this.formItem.birthday.toLocaleDateString());
                    axios.post('edit_profile',params).then(function (response) {
                        self =response.formItem;
                    })
                    this.$Message.success('成功啦(๑•̀ω•́๑)');
                },

                downloadData: function () {
                    var self=this;
                    axios.get('/api/school');
                },

                returnToMain: function () {

                },


            },
        mounted: function () {
            var self = this;
            console.log('hi');
            axios.get('/api/school').then(function (schoolData) {
                self.school_list = schoolData.data;
            });
        }
    }
</script>
