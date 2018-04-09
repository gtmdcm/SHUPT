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
            <RadioGroup v-model="formItem.school">
                <Radio label="0000">上海大学</Radio>
                <Radio label="0001">南京农业大学</Radio>
                <Radio label="0002">中山大学</Radio>
                <Radio label="0003">中国石油大学</Radio>
                <Radio label="0004">云南大学</Radio>
                <Radio label="0005">河海大学</Radio>
                <Radio label="0006">南开大学</Radio>
                <Radio label="0007">兰州大学</Radio>
                <Radio label="0008">合肥工业大学</Radio>
                <Radio label="0009">安徽大学</Radio>
                <Radio label="0010">中国海洋大学</Radio>
                <Radio label="0011">复旦大学</Radio>
                <Radio label="0012">西北大学</Radio>
                <Radio label="0013">郑州大学</Radio>
                <Radio label="0014">四川大学</Radio>
                <Radio label="0015">华中科技大学</Radio>
                <Radio label="0016">天津大学</Radio>
                <Radio label="0017">山东大学</Radio>
                <Radio label="0018">中央民族大学</Radio>
                <Radio label="0019">苏州大学</Radio>
                <Radio label="0020">重庆大学</Radio>
                <Radio label="0021">东北农业大学</Radio>
                <Radio label="0022">北京工业大学</Radio>
                <Radio label="0023">湖南师范大学</Radio>
                <Radio label="0024">东北大学</Radio>
                <Radio label="0025">电子科技大学</Radio>
                <Radio label="0026">西安电子科技大学</Radio>
                <Radio label="0027">北京化工大学</Radio>
                <Radio label="0028">南京航空航天大学</Radio>
                <Radio label="0029">南京理工大学</Radio>
                <Radio label="0030">西北工业大学</Radio>
                <Radio label="0031">天津医科大学</Radio>
                <Radio label="0032">北京林业大学</Radio>
                <Radio label="0033">华南师范大学</Radio>
                <Radio label="0034">浙江大学</Radio>
                <Radio label="0035">长安大学</Radio>
                <Radio label="0036">武汉理工大学</Radio>
                <Radio label="0037">河北工业大学</Radio>
                <Radio label="0038">南京师范大学</Radio>
                <Radio label="0039">中国农业大学</Radio>
                <Radio label="0040">厦门大学</Radio>
                <Radio label="0041">第二军医大学</Radio>
                <Radio label="0042">北京理工大学</Radio>
                <Radio label="0043">北京大学</Radio>
                <Radio label="0044">上海外国语大学</Radio>
                <Radio label="0045">北京科技大学</Radio>
                <Radio label="0046">西北农林科技大学</Radio>
                <Radio label="0047">中南大学</Radio>
                <Radio label="0048">华南理工大学</Radio>
                <Radio label="0049">武汉大学</Radio>
                <Radio label="0050">福州大学</Radio>
                <Radio label="0051">同济大学</Radio>
                <Radio label="0052">中国传媒大学</Radio>
                <Radio label="0053">湖南大学</Radio>
                <Radio label="0054">上海财经大学</Radio>
                <Radio label="0055">国防科学技术大学</Radio>
                <Radio label="0056">吉林大学</Radio>
                <Radio label="0057">大连理工大学</Radio>
                <Radio label="0058">中国人民大学</Radio>
                <Radio label="0059">上海交通大学</Radio>
                <Radio label="0060">西安交通大学</Radio>
                <Radio label="0061">江南大学</Radio>
                <Radio label="0062">南京大学</Radio>
                <Radio label="0063">南昌大学</Radio>
                <Radio label="0064">太原理工大学</Radio>
                <Radio label="0065">中国地质大学</Radio>
                <Radio label="0066">清华大学</Radio>
                <Radio label="0067">广西大学</Radio>
                <Radio label="0068">中国矿业大学</Radio>
                <Radio label="0069">四川农业大学</Radio>
                <Radio label="0070">东北师范大学</Radio>
                <Radio label="0071">哈尔滨工业大学</Radio>
                <Radio label="0072">北京航空航天大学</Radio>
                <Radio label="0073">北京交通大学</Radio>
                <Radio label="0074">西南交通大学</Radio>
                <Radio label="0075">中国科学技术大学</Radio>
                <Radio label="0076">北京外国语大学</Radio>
                <Radio label="0077">北京邮电大学</Radio>
                <Radio label="0078">西安建筑科技大学</Radio>
                <Radio label="0079">新疆大学</Radio>
                <Radio label="0080">东南大学</Radio>
                <Radio label="0081">对外经济贸易大学</Radio>
                <Radio label="0082">北京中医药大学</Radio>
                <Radio label="0083">暨南大学</Radio>
                <Radio label="0084">北京语言大学</Radio>
                <Radio label="0085">华中师范大学</Radio>
                <Radio label="0086">北京师范大学</Radio>
                <Radio label="0087">哈尔滨工程大学</Radio>
                <Radio label="0088">内蒙古大学</Radio>
                <Radio label="0089">东华大学</Radio>
                <Radio label="0090">解放军信息工程大学</Radio>
                <Radio label="0091">上海交通大学医学院 </Radio>
                <Radio label="0092">华东理工大学</Radio>
                <Radio label="0093">第四军医大学</Radio>
                <Radio label="0094">大连海事大学</Radio>
                <Radio label="0095">华东师范大学</Radio>
                <Radio label="0096">辽宁大学</Radio>
                <Radio label="0097">深圳大学</Radio>
                <Radio label="0098">中央音乐学院</Radio>
                <Radio label="0099">中国协和医科大学</Radio>
                <Radio label="0099">中国协和医科大学</Radio>
            </RadioGroup>
        </FormItem>
        <FormItem label="签名 ">
            <Input v-model="formItem.signature" type="textarea" :autosize="{minRows: 2,maxRows: 5}"
                   placeholder="请输入签名"></Input>
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
                    gender: 'secret',
                    birthday: '',
                    school: '',
                    signature: '',
                }
            }
        },
        methods:
            {

                temp: function () {
                    var self=this;
                    var params = new URLSearchParams();
                    params.append('gender', this.formItem.gender);
                    params.append('school', this.formItem.school);
                    params.append('signature', this.formItem.signature);
                    console.log(this.formItem);
                    axios.post('edit_profile',params).then(function (response) {
                        self =response.formItem;
                    })
                },

                returnToMain: function () {

                },

                created: function () {
                    var self = this;
                    axios.post('/api/documents').then(function (response) {
                        console.log(response.data);
                        self.nick_name = response.data.formItem.nick_namedo;


                    })
                }
            }
    }
</script>
