composer install
npm install
cp .env.example .env
php artisan key:generate >> key
str=$(cat key | cut -b 18-68)
sed -i "s/examplekey/$str/" .env
php artisan migrate:fresh
rm key
npm run dev
php artisan serve
