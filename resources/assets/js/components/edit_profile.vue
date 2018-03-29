<template>
    <form action="test" method="post">
        昵称:<br>
        <input type="string" name="nick_name">
        <br>
        性别:<br>
        <input type="radio" name="gender" value="male" checked>男
        <input type="radio" name="gender" value="female">女
        <br>
        生日:
        <select name="month" onChange="changeDate(this.options[selectedIndex].value);">
            <option value="na">Month</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
        <select name="day" id="day">
            <option value="na">日</option>
        </select>
        <select name="year" id="year">
            <option value="na">年</option>
        </select>
        <br/>
        地区:<br>
        <input type="string" name="city">
        <br>
        邮箱:<br>
        <input type="string" name="email">
        <br>
        QQ:<br>
        <input type="string" name="qq">
        <br>
        电话:<br>
        <input type="string" name="tel">
        <br>
        自我介绍:<br>
        <input type="string" name="nick_name"
               size="200">
        <button type="submit">确定</button>
        <br>
    </form>
</template>

<script>
    export default {
        name: "edit_profile"
    }
</script>

<style scoped>

</style>