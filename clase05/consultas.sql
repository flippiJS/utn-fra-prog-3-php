/* INSERT */

/* Insertamos un nuevo registro en la tabla usuarios - FORMATO YYYY-MM-DD - NOW() - CURRENT_DATE() */
INSERT INTO usuarios (nombre, apellido, fecha_nacimiento) 
VALUES ('Juan', 'Gomez', '1972-02-22');

/* UPDATE */

/* Actualizamos todos los registros de la tabla usuarios donde apellido sea 'Diaz'*/
UPDATE usuarios 
SET nombre = 'Jorgecito', apellido = 'Diaaz', fecha_nacimiento = '1969-07-11'
WHERE apellido = 'Diaz';

/* DELETE */

/* Borramos todos los registros de la tabla usuarios donde apellido sea 'Diaz'*/
DELETE FROM usuarios WHERE apellido = 'Diaz';

/* SELECT */

/* Todos los registros de la tabla */
SELECT * FROM usuarios;

/* Solo los registros nombre y apellido */
SELECT nombre, apellido FROM usuarios;

/* Ejemplo seleccionar registros condicionales de tabla usuarios */
SELECT * FROM usuarios WHERE apellido = 'Diaz';

SELECT * FROM usuarios WHERE fecha_nacimiento > '1970-01-01';

SELECT * FROM usuarios WHERE fecha_nacimiento >= '1970-01-01';