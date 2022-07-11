set -e
echo "Deploying application"

#Enter maintenance mode

(php artisan down --message 'The website is been quickly updated. Please tey again in minutes.') || true
  #update codebase
  git pull origin master

#exit maintainance mode
composer install
composer dump-autoload
php artisan migrate --force
php artisan optimize
php artisan up


echo "Website deployed"

