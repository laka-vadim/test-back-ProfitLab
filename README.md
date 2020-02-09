# Backend для тестового ProfitLab (PHP, Lumen Framework)
Проверит данные на валидность. В случае успеха вернет данные обратно. Так же устанавливает заголовки, чтобы проходили CORS запросы

Все обращения с фронта к серверу идут по адрусу localhost.
Установите послединию версию [Composer](https://getcomposer.org/download/) и [PHP](https://www.php.net/downloads)

Далее клонируйте репозиторий, установите зависимости, запустите локальный сервер

```
git clone https://github.com/laka-vadim/test-back-ProfitLab.git # клонирует данный репозиторий
# переходим в папку репозитория
composer install # установит все зависимости
php -S localhost:8000 -t public # запустить локальный сервер
```

Фронт находится в этом [репозитории](https://github.com/laka-vadim/test-ProfitLab.git)
Или по адресу [GH-Pages](https://laka-vadim.github.io/test-ProfitLab/)
