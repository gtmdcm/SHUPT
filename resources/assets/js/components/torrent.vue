<template>
    <div style="height: 59%; width:80%;">
        <Table :columns="historyColumns" :data="historyData"></Table>
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
                                            this.show(params.index)
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
                    "histories": [
                        {
                            name: 'test01',
                            owner: 'zd'
                        },
                        {
                            name: 'test02',
                            owner: 'zd'
                        }
                    ]
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

            show(index) {

            }
        },
        created() {
            this.handleListApproveHistory();
        },
        mounted: function () {
            var self = this;
            axios.get('userinfo',).then(function (userinfo) {
                self.username = userinfo.data[0].name;

            });
            axios.get('/api/resource',).then(function (resource) {
                self.testData.histories = resource.data;
                self.handleListApproveHistory()
            })
        },

    }
</script>