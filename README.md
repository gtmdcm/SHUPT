#SHUPT

现在有像样的路由了！

安装步骤：
- composer install
- npm install (base64-js@0.0.8安装过程较漫长)
4core cpu nvmessd 50M执行此步时间 394.251s请耐心等待
- cp .env.example .env
- 在.env中修改数据库信息
- php artisan migrate:fresh
- 将"Application key [BASE64KEY] set successfully."中[BASE64KEY]复制至.env中APP_KEY后
- php artisan key:generate
- npm run dev
- php artisan serve