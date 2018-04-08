<template>
    <Form :model="formItem" :label-width="80">
        <FormItem label="昵称">
            <Input v-model="formItem.nick_name" placeholder="请输入昵称"></Input>
        </FormItem>
        <FormItem label="用户名">
            <Input v-model="formItem.user" placeholder="请输入昵称"></Input>
        </FormItem>
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
            </RadioGroup>
        </FormItem>
        <FormItem label="email">
            <Input v-model="formItem.email" placeholder="请输入邮箱"></Input>
        </FormItem>
        <FormItem label="qq">
            <Input v-model="formItem.qq" placeholder="请输入qq"></Input>
        </FormItem>
        <FormItem label="电话">
            <Input v-model="formItem.tel" placeholder="请输入电话"></Input>
        </FormItem>
        <FormItem label="自我介绍">
            <Input v-model="formItem.self_introduce" type="textarea" :autosize="{minRows: 2,maxRows: 5}"
                   placeholder="请输入自我介绍"></Input>
        </FormItem>
        <FormItem>
            <Button type="primary" @click="temp">Submit</Button>
            <Button type="ghost" style="margin-left: 8px">Cancel</Button>
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
                    user: '',
                    nick_name: '',
                    gender: 'male',
                    birthday: '',
                    email: '',
                    qq: '',
                    tel: '',
                    self_introduce: '',
                }
            }
        },
        methods:
            {

                temp: function () {
                    var self=this;
                    axios.post('doc').then(function (response) {
                        console.log('hi');
                        self =response.formItem;
                    })
                },

                created: function () {
                    var self = this
                    axios.post('/api/documents').then(function (response) {
                        console.log(response.data);
                        self.nick_name = response.data.formItem.nick_namedo;


                    })
                }
            }
    }
</script>
