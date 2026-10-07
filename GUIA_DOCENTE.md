# Recorrido docente de la presentación visual

La explicación completa está en GUIA_VISUAL_PHPUNIT.md. La presentación tiene 45 diapositivas y notas para cada una.

## Apertura

“Si le pedimos a un programa sumar 2 y 3, sabemos que debería devolver 5. Ejecutamos y comparamos. Esa es la idea de una prueba. PHPUnit la ejecuta y un assert escribe la condición que esperamos.”

## Orden

1. Diapositivas 1–7: historia, esperado/real, pasos y assert.
2. 8–15: método de la calculadora, caso PHPUnit, ejecución, fallo y otras entradas.
3. 16–22: operaciones del CRUD, respuesta y base, datos propios y clase Feature.
4. 23–28: guardar, cambiar valores, ejecutar y explicar un fallo.
5. 29–37: listar, actualizar, eliminar y rechazar una entrada inválida.
6. 38–42: distinguir unitarias e integración, adaptar y practicar.
7. 43–45: configuración y documentación de consulta.

## Preguntas para comprobar comprensión

- ¿De dónde viene el esperado de una suma?
- ¿Qué contiene $resultado? ¿Qué contiene $respuesta?
- ¿Por qué revisar la base además de la redirección?
- ¿Dónde se eligen los valores de ejemplo del CRUD?
- ¿Por qué actualizar y eliminar usan el ID del cliente que crearon?
- ¿Por qué una prueba de datos inválidos puede pasar?

## Práctica

Primero otra suma, después guardar otros valores válidos y finalmente una entrada con email inválido. La guía completa tiene las soluciones comentadas para revisar después del intento.

Para la primera clase usá las tres sumas y los cinco casos básicos. Las cuatro extensiones de pantallas y 404 son opcionales. Cada método prepara una situación independiente.

## Resultados

Calculadora: 3 tests/3 assertions. CRUD: 5/21. Suite completa: 12/33. Los errores provocados están corregidos en el proyecto entregado.

La calculadora es una prueba unitaria aislada. El CRUD está en Feature y ejercita integración. Ambos se ejecutan con PHPUnit.
