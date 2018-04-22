su
git clone https://github.com/gtmdcm/SHUPT.git
yum install php
curl -sS https://getcomposer.org/install | php
composer update
yum install postgresql-server.i686
./install_mac.sh
yum install nginx.i686
cd /etc/nginx/conf.d
#default.conf
service nginx restart