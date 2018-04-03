#########################################################################
# File Name: dbinit.sh
# Author: JackySong
# mail: 1055335350@qq.com
# Created Time: 二  4/ 3 14:40:27 2018
#########################################################################
#!/bin/sh

php artisan migrate:fresh
php artisan db:seed --class=CatagoryTableSeeder
php artisan db:seed --class=StandardTableSeeder
php artisan db:seed --class=SchoolsTableSeeder

