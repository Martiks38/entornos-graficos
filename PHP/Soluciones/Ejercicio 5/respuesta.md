# Ejercicio 5

## Análisis

Este ejercicio se trata de un contador de visitas persistente cuyo valor se registra en el archivo (contador.dat). El archivo contador.php maneja la lógica. Mientras, visitas.php es la vista donde se muestra la cantidad de visitas.

El archivo contador.php abre el archivo contador.dat en modo lectura para obtener el valor actual de visitas mediante la función fread() y cerrar el flujo de lectura. Para luego, abrir el archivo nuevamente pero en modo escritura. Al hacerlo el archivo es sobreescrito y se actualiza el valor mediante fwrite(). Finalmente, se cierra la conexión al archivo e imprime el total a través de "echo".

Por otro lado, visitas.php define la estructura de la vista del cliente, integrando la lógica haciendo uso de la instrucción include("contador.php").
