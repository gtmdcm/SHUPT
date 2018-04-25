<template>
    <div>
        <div style="height: 40%"></div>
        <Card style="width:60%; margin-left:auto;margin-right:auto;">
            <div style="text-align:center">
                <Avatar shape="square" src="images/logo.png" size="large"></Avatar>
                <h1>SHUPT</h1>
                <div style="height:2%;"></div>
                <Input v-model="inputSearch" style="width: 90%;margin-left:auto;margin-right:auto;">
                <Select v-model="select" slot="prepend" style="width:80px;">
                    <Option value="torrent">
                        种子
                    </Option>
                    <Option value="user">
                        用户
                    </Option>
                </Select>
                <Button slot="append" icon="ios-search"></Button>
                </Input>
            </div>
        </Card>
    </div>
</template>

<script>
    export default {
        name: "search.vue",
        data: function () {
            return {
                inputSearch: '',
                select: 'torrent',
            }
        }
    }
</script>

<style scoped>

</style>