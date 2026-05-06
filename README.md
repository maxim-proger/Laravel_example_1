## Laravel - модуль RandomJoke

1. добавить cron-запись на сервере:<br>
* * * * * cd /path-to-project && php artisan schedule:run >> /dev/null 2>&1<br>
или ручной запуск команды:<br>
php artisan joke:fetch<br>
<br>
2. просмотр шуток:<br>
php artisan serve<br>
http://127.0.0.1:8000/jokes

## JavaScript - фильтрация полей
файлы:<br>
testlist.html<br>
testlist_filter.js<br>
Предпочтение отдано использованию библиотеки jQuery, потому что:<br>
1. она уже была подключена в исходном файле<br>
2. код с ней получется компактнее.<br>
Альтернативное решение:<br>
нативный javascript - код получился бы менее читаемый и больше.
