# API REST para Gestión de Tareas

Esta API RESTful permite gestionar tareas a través de operaciones CRUD (Crear, Leer, Actualizar y Eliminar). Los endpoints permiten interactuar con una base de datos que almacena las tareas, cada una con su título, descripción, estado y prioridad. Además, la API está construida usando Laravel y utiliza validación de datos con Form Requests.

## Requisitos

- PHP >= 7.4
- Laravel >= 8.x
- MySQL o cualquier otra base de datos compatible con Laravel
- Composer para la gestión de dependencias

## Instalación

### 1. Clonar el repositorio

```bash
git https://github.com/JhonLandeo/prueba-fullstack-jhon.git
cd prueba-fullstack-jhon
```

### 2. Instalar dependencias

```bash
composer install
```

### 3. Crear la base de datos

```bash
php artisan migrate
```

### 4. Crear un usuario administrador

```bash
php artisan db:seed
```

## Ejecución

### 1. Iniciar el servidor web

```bash
php artisan serve
```
