## Тестирование

1. добавить cron-запись на сервере:
* * * * * cd /path-to-project && php artisan schedule:run >> /dev/null 2>&1
или ручной запуск команды:
php artisan joke:fetch

2. просмотр шуток:
php artisan serve
http://127.0.0.1:8000/jokes