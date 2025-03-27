# Sistema de Gestión de Inventario/Pos - MarKa

Sistema de gestion de ** Inventario/Pos ** desarrollado con laravel utilizando ademas el paquete tenancy

## Tecnologías
- Laravel 12
- Tenancy For Laravel v3 

## Requisitos previos

- PHP 8.2 o superior
- Composer
- Una base de datos compatible (MySQL, PostgreSQL, SQLite, etc.) por defecto usamos mysql

## Instalación

1. Clona el repositorio:

    ```bash
    git clone https://github.com/rniz06/saas.git && cd saas
    ```

2. En el directorio Instala las dependencias de Composer:
    ```bash
    composer install
    ```

3. Copia el archivo de configuración .env.example a .env y configura tus variables de entorno:
    ```bash
    cp .env.example .env
    ```

4. Genera una nueva clave de aplicación:
    ```bash
    php artisan key:generate
    ```

5. Realiza las migraciones y ejecuta los seeders:
    ```bash
    php artisan migrate --seed
    ```
# En Linux entorno de desarrollo configurar el usuario y grupo de la carpeta y los permisos
6. Configurar el usuario y grupo de la carpeta y los permisos con los siguientes comandos:
    ```bash
    sudo chmod -R apache:apache saas
    sudo chmod -R 755 saas/storage
    ```

¡Listo! Ahora puedes acceder al sistema en tu navegador web.

# Uso

Una vez instalado y si se han ejecutados los seeders, puedes iniciar sesión en el sistema utilizando las siguientes credenciales:

Correo: ronald.niz@marka.com.py
Contraseña: password

# Soporte

Ante dudas o consultas contactar al correo desarrollo@marka.com.py