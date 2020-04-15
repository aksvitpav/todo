<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## О ToDo

ToDo - многопользовательский список дел на Laravel.

## Установка

1. Клонируем репозиторий: **git clone https://github.com/aksvitpav/todo.git**
2. Устанавливаем зависимости: **composer install**
3. Создаем файлик с переменными окружения: **cp .env.example .env**
4. В файле .env указываем нужные **переменные окружения**
5. Генерируем ключ приложения: **php artisan key:generate**
6. Создаем даблицы в БД: **php artisan migrate**
7. Наполняем БД тестовыми данными: **php artisan db:seed**
8. После установки в базе будут созданы пользователи:
    * User1: login - user1@gmail.com, password - 12345678
    * User2: login - user2@gmail.com, password - 12345678