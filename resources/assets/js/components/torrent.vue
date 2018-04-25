<template>
    <div style="height: 50%; width:80%;">
        <Table :columns="historyColumns" :data="historyData" :height="pageHeight"></Table>
        <Page :total="dataCount" :page-size="pageSize" size="small" show-elevator class="paging"
              @on-change="changepage"></Page>

    </div>
</template>
<style scoped>
    .paging {
        float: right;
        margin-top: 10px;
    }
</style>
<script>

    export default {
        data() {
            return {

                pageHeight: 450,

                username: 'error',

                ajaxHistoryData: [],
                // 初始化信息总条数
                dataCount: 0,
                // 每页显示多少条
                pageSize: 10,
                historyColumns: [
                    {
                        title: '资源名',
                        key: 'name'
                    },
                    {
                        title: '发布者',
                        key: 'owner'
                    },
                    {
                        title: '类型',
                        key: 'catagory'
                    },
                    {
                        title: '操作',
                        key: 'action',
                        width: 150,
                        align: 'center',
                        render: (h, params) => {
                            return h('div', [
                                h('Button', {
                                    props: {
                                        type: 'primary',
                                        size: 'small'
                                    },
                                    style: {
                                        marginRight: '5px'
                                    },
                                    on: {
                                        click: () => {
                                            this.download(params.row.name)
                                        }
                                    }
                                }, '下载'),
                                // h('Button', {
                                //     props: {
                                //         type: 'error',
                                //         size: 'small'
                                //     },
                                //     on: {
                                //         click: () => {
                                //             this.remove(params.index)
                                //         }
                                //     }
                                // }, '删除')
                            ]);
                        }
                    }
                ],
                historyData: [],
                testData: {
                    "histories": []
                }
            }
        },
        methods: {
            // 获取历史记录信息
            handleListApproveHistory() {

                // 保存取到的所有数据
                this.ajaxHistoryData = this.testData.histories
                this.dataCount = this.testData.histories.length;
                // 初始化显示，小于每页显示条数，全显，大于每页显示条数，取前每页条数显示
                if (this.testData.histories.length < this.pageSize) {
                    this.historyData = this.ajaxHistoryData;
                } else {
                    this.historyData = this.ajaxHistoryData.slice(0, this.pageSize);
                }


            },
            changepage(index) {
                var _start = (index - 1) * this.pageSize;
                var _end = index * this.pageSize;
                this.historyData = this.ajaxHistoryData.slice(_start, _end);
            },
            download(index) {

                window.location = 'api/download/public/seed/' + index;
            }

        },
        created() {
            this.handleListApproveHistory();
        }
        ,
        mounted: function () {
            var self = this;
            axios.get('userinfo',).then(function (userinfo) {
                console.log(userinfo);
                self.username = userinfo.data[0].name;

            });
            axios.get('/api/resource',).then(function (resource) {
                self.testData.histories = resource.data;
                for (var i in  self.testData.histories) {
                    switch (self.testData.histories[i].catagory) {
                        case "0000":
                            self.testData.histories[i].catagory = '资料';
                            break;

                        case "0001":
                            self.testData.histories[i].catagory = '电影';
                            break;

                        case "0002":
                            self.testData.histories[i].catagory = '动漫';
                            break;

                        case "0003":
                            self.testData.histories[i].catagory = '剧集';
                            break;

                        case "0004":
                            self.testData.histories[i].catagory = '综艺';
                            break;

                        case "0005":
                            self.testData.histories[i].catagory = '体育';
                            break;

                        case "0006":
                            self.testData.histories[i].catagory = '记录';
                            break;

                        case "0007":
                            self.testData.histories[i].catagory = '英语';
                            break;

                        case "0008":
                            self.testData.histories[i].catagory = 'MV';
                            break;

                        case "009":
                            self.testData.histories[i].catagory = '软件';
                            break;

                        case "0010":
                            self.testData.histories[i].catagory = '游戏';
                            break;

                        case "0011":
                            self.testData.histories[i].catagory = '校园';
                            break;

                        case "0012":
                            self.testData.histories[i].catagory = '其他';
                            break;

                        default:
                            self.testData.histories[i].catagory = 'error';
                    }
                }
                self.handleListApproveHistory()
            })
        }
        ,

    }
</script>

<style>
</style>