SELECT * FROM tb_traduccion WHERE tb_traduccion.palabra_1 IN 
(
SELECT t2.palabra_1 FROM tb_palabras t1
INNER JOIN tb_traduccion t2 ON t2.palabra_2 = t1.id_palabra
WHERE t1.palabra = 'perro'
)

SELECT tb_traduccion.palabra_2 FROM tb_traduccion WHERE tb_traduccion.palabra_1 IN 
(
SELECT t2.palabra_1 FROM tb_palabras t1
INNER JOIN tb_traduccion t2 ON t2.palabra_2 = t1.id_palabra
WHERE t1.palabra = 'dormir'
)

---------------------------------------------consulta
SELECT * FROM tb_palabras t1
INNER JOIN tb_palabras_idiomas t2 ON t2.id_palabra = t1.id_palabra
INNER JOIN tb_idiomas t3 ON t3.id_idioma = t2.id_idioma
WHERE t1.id_palabra IN 
(


SELECT tb_traduccion.palabra_2 FROM tb_traduccion WHERE tb_traduccion.palabra_1 IN 
(
SELECT t2.palabra_1 FROM tb_palabras t1
INNER JOIN tb_traduccion t2 ON t2.palabra_2 = t1.id_palabra
WHERE t1.palabra = 'perro'
)
)