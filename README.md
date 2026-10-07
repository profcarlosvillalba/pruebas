# Pruebas con PHPUnit: de una suma al CRUD

Material de la presentación visual para Laravel 12 y PHP 8.x.

Abrí `GUIA_VISUAL_PHPUNIT.md`: explica los fundamentos, cada línea y las operaciones completas. El PDF de esa guía acompaña la presentación.

## Preparación

1. Entrá en esta carpeta, donde está `artisan`.
2. Ejecutá `composer install`.
3. Copiá `.env.example` como `.env`.
4. Ejecutá `php artisan key:generate` y `php artisan config:clear`.
5. Verificá `pdo_sqlite` en el PHP de terminal para los casos del CRUD.

## Recorrido

Primero ejecutá solo la suma:

```bash
php vendor/bin/phpunit --filter=test_suma_positivos --testdox
```

Después las tres sumas:

```bash
php vendor/bin/phpunit tests/Unit/CalculadoraTest.php --testdox
```

Después solo guardar:

```bash
php vendor/bin/phpunit --filter=test_guardar --testdox
```

Después los cinco casos del CRUD:

```bash
php vendor/bin/phpunit tests/Feature/ClienteCrudTest.php --testdox
```

La suite completa:

```bash
php vendor/bin/phpunit --testdox
```

Resultados registrados: calculadora 3 tests/3 assertions; CRUD básico 5/21; suite completa 12/33. El código de los fallos demostrados está restaurado.

## Archivos

- `app/Services/Calculadora.php`: el primer ejemplo.
- `tests/Unit/CalculadoraTest.php`: tres casos aislados.
- `tests/Feature/ClienteCrudTest.php`: cinco casos básicos independientes.
- `tests/Feature/ClientePantallasTest.php`: cuatro extensiones opcionales.
- `app/Http/Controllers/ClienteController.php`: el CRUD que probamos.
- `GUIA_VISUAL_PHPUNIT.md`: fundamentos y métodos explicados.
- `GUIA_DOCENTE.md`: recorrido para exponer.
- `material_clase`: ilustraciones, capturas y salidas completas.

La base de los tests es SQLite en memoria y usa RefreshDatabase. Cada caso prepara sus propios registros. Los valores se eligen en $datos y las expectativas del CRUD reutilizan esos valores y el ID del cliente creado por el caso.

## Ver el formulario

Creá un archivo vacío `database/database.sqlite`; ejecutá `php artisan migrate --seed` y `php artisan serve`. Abrí http://127.0.0.1:8000/clientes. Las vistas usan CSS incluido y no necesitan npm.

Las pruebas se ejecutan sin iniciar ese servidor. Su base en memoria es independiente de la base del navegador.

Ejemplo ejecutado con Laravel 12.69.3, PHP 8.3.6 y PHPUnit 11.5.57. `composer.lock` conserva las dependencias utilizadas.
