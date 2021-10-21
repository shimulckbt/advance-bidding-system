# advance-bidding-system

  cd client
  npm install
  npm run dev

  cd server
  composer install
  cp .env.example .env
  php artisan key:generate
  php artisan migrate --seed
  php artisan passport:install
