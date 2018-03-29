<template>
    <form>
        昵称:<br>
        <input type="string" name="nick_name">
        <br>
        性别:<br>
        <input type="radio" name="gender" value="male" checked>男
        <input type="radio" name="gender" value="female">女
        <br>
        生日:
        <select name="year" id="year">
            <option value="na">年</option>
        </select>
        <select name="month" onChange="changeDate(this.options[selectedIndex].value);">
            <option value="na">月</option>
            <option value="1">一月</option>
            <option value="2">二月</option>
            <option value="3">三月</option>
            <option value="4">四月</option>
            <option value="5">五月</option>
            <option value="6">六月</option>
            <option value="7">七月</option>
            <option value="8">八月</option>
            <option value="9">九月</option>
            <option value="10">十月</option>
            <option value="11">十一月</option>
            <option value="12">十二月</option>
        </select>
        <select name="day" id="day">
            <option value="na">日</option>
        </select>
        <script language="JavaScript" type="text/javascript">
            function changeDate(i){
                var e = document.getElementById('day');
                while(e.length>0)
                    e.remove(e.length-1);
                var j=-1;
                if(i=="na")
                    k=0;
                else if(i==2)
                    k=28;
                else if(i==4||i==6||i==9||i==11)
                    k=30;
                else
                    k=31;
                while(j++<k){
                    var s=document.createElement('option');
                    var e=document.getElementById('day');
                    if(j==0){
                        s.text="Day";
                        s.value="na";
                        try{
                            e.add(s,null);}
                        catch(ex){
                            e.add(s);}}
                    else{
                        s.text=j;
                        s.value=j;
                        try{
                            e.add(s,null);}
                        catch(ex){
                            e.add(s);}}}}
            y = 1993;
            while (y-->1940){
                var s = document.createElement('option');
                var e = document.getElementById('year');
                s.text=y;
                s.value=y;
                try{
                    e.add(s,null);}
                catch(ex){
                    e.add(s);}}
        </script>
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
        <br>
    </form>
</template>

<script>
    export default {
        name: "profile"
    }
</script>

<style scoped>

</style>