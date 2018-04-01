composer install
npm install
cp .env.example .env
php artisan key:generate >> key
str=$(cat key | cut -b 18-68)
sed -i "" "s/examplekey/$str/" .env
echo "输入要使用的数据库(默认mysql)"
dbc=mysql
read dbc
sed -i "" "s/examplesql/$dbc/" .env
echo "输入数据库ip地址(默认127.0.0.1)"
dbh=127.0.0.1
read dbh
sed -i "" "s/examplehost/$dbc/" .env
echo "输入数据库开放端口(默认3306)"
dbp=3306
read dbp
sed -i "" "s/exampleport/$dbp/" .env
echo "输入要使用的数据库(默认shupt)"
dbd=shupt
read dbd
sed -i "" "s/exampledatabase/$dbd/" .env
echo "输入数据库用户名(默认root)"
dbu=root
read dbu
sed -i "" "s/exampleusername/$dbu/" .env
echo "输入用户密码"
read dbp
sed -i "" "s/examplepassword/$dbp/" .env
php artisan migrate:fresh
rm key
npm run dev
php artisan serve
