composer install
npm install
cp .env.example .env
php artisan key:generate >> key
str=$(cat key | cut -b 18-68)
sed -e '4d' ./.env
echo APP_KEY=$str >> ./.env
read -p "输入要使用的数据库(默认mysql)" dbc
if [ -z "${dbc}" ];then
    dbc=mysql
fi
sed -i "" "s/examplesql/$dbc/" .env
read -p "输入数据库ip地址(默认127.0.0.1)" dbh
if [ -z "${dbh}" ];then
    dbh='127.0.0.1'
fi
sed -i "" "s/examplehost/$dbh/" .env
read -p "输入数据库开放端口(默认3306)" dbp
if [ -z "${dbp}" ];then
    dbp=3306
fi
sed -i "" "s/exampleport/$dbp/" .env
read -p "输入要使用的数据库(默认shupt)" dbd
if [ -z "${dbd}" ];then
    dbd=shupt
fi
sed -i "" "s/exampledatabase/$dbd/" .env
read -p "输入数据库用户名(默认root)" dbu
if [ -z "${dbu}" ];then
    dbu=root
fi
sed -i "" "s/exampleusername/$dbu/" .env
echo
read -p "输入用户密码" dbp
sed -e '14d' ./.env
php artisan migrate:fresh
rm key
npm run dev
php artisan serve
