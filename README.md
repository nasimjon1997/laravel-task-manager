# Task Manager 🚀  

Простое веб-приложение для управления задачами на Laravel. Позволяет пользователям регистрироваться, создавать, редактировать и удалять задачи.  

## 📋 Функционал  
✅ Регистрация и авторизация пользователей  
✅ Создание, редактирование и удаление задач  
✅ Маркировка задач как выполненные  
✅ Фильтрация задач по статусу  

## 🛠️ Установка  

### 1. Клонируйте репозиторий  
```bash
git clone https://github.com/nasimjon1997/laravel-task-manager.git
cd laravel-task-manager
```

### 2. Установите зависимости

```bash
composer install
npm install
```

### 3. Скопируйте .env файл и настройте переменные окружения
```bash
cp .env.example .env
```

### 4. Укажите параметры подключения к БД в файле .env:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Сгенерируйте ключ приложения
```bash
php artisan key:generate
```

### 6. Запустите миграции
```bash
php artisan migrate
```

### 7. Запустите локальный сервер
```bash
php artisan serve
```
    Теперь приложение доступно по адресу: http://127.0.0.1:8000


## Стек технологий

    PHP 8.1+
    Laravel 10+
    MySQL 5.7+
    TailwindCSS (для стилизации)
    Livewire (планируется)
    
## Лицензия

    Этот проект распространяется под лицензией MIT.