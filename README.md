# Backend Original y Creditos
<ul>
    <li>
        <a href="https://github.com/JJRuizDeveloper/vue-example-server">Backend Original</a>
    </li>
    <li>
        <a href="https://www.youtube.com/watch?v=XkRi9_MS3ns&list=LL&index=3">Enunciado Ejercicio Curso Vue3</a>
    </li>
    <li>
        <a href="https://campus-ademass.com/">Más cursos</a>
    </li>
</ul>
# Requisitos previos
1. Composerº
2. PHP 8.1 o más
3. Motor DB (MySQL, MariaDB o PostgreSQL)

# Instalación

1. composer install
2. renombra .env.example a .env
3. crea una bbdd y cumplimenta sus variables en .env
4. php artisan migrate
5. levanta el servidor con php artisan serve


# Rutas Originales

[POST] 127.0.0.1:8000/api/auth/register    -> Crear usuario por POST pasando name, email y password
[POST] 127.0.0.1:8000/api/auth/login    -> Acceder con un usuario por POST pasando email y password
[GET] 127.0.0.1:8000/api/note          -> Leer notas del usuario autenticado
[POST] 127.0.0.1:8000/api/note          -> Guardar nota del usuario pasando 'content'

# Nuevas Rutas
[DELETE] 127.0.0.1:8000/api/delete/{id}      -> Eliminar nota con id {id}

[PUT] 127.0.0.1:8000/api/update/{id}          -> Actualizar nota del usuario pasando 'content'

# TO-DO
- [x] Implement delete note in route /api/delete/{id} 
- [x] Implement edit note in route /api/update/{id} 
- [x] Add title in notes table