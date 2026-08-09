# Ejercitación 3

En cada caso, explicar las diferencias entre los segmentos de código y sus visualizaciones:

```txt
  <!-- Línea 1 -->
  <a href="http://www.google.com.ar">Click aquí para ir a Google</a>
  <!-- Línea 2 -->
  <a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>
  <!-- Línea 3 -->
  <a href="http://www.google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">
  <!-- Línea 4 -->
    <a href="#">Click aquí para ir a Google</a>
  <!-- Línea 5 -->
  <a href="#arriba">Click aquí para volver arriba</a>
  <!-- Línea 6 -->
  <a name="arriba" id="arriba"></a>

Visualización

  Las líneas 1, 2 y 4: se verán iguales en el navegador, mostrando el texto "Click aquí para ir a Google".
  Línea 5: se verá igual a las líneas antes mencionadas pero mostrando el texto "Click aquí para volver arriba".
  Línea 3: el navegador la autocerró.
  Línea 3 y 6: al no tener contenido (línea 3 fue autocerrada por el navegador). Tienen un ancho de 0px y no muestran nada.

Comportamiento

  Línea 1: al hacer clic el usuario es redireccionado en la misma pestaña.
  Línea 2: al hacer clic se abre una nueva pestaña con la dirección en href="http://www.google.com.ar".
  Línea 3: si bien no se puede hacer clic se puede navegar mediante el teclado hacia este hipervínculo. Al presionar Enter hace lo mismo que la línea 1 pero añade información útil para los motores de búsqueda y navegadores.
  Línea 4: esta línea contiene un ancla "#". Al hacer clic, el navegador desplazará al usuario al inicio de la página actual.
  Línea 5: esta línea contiene un ancla "#arriba". Al hacer clic, el navegador desplazará al usuario y posicionará el foco en la línea 6.
  Línea 6: sirve como marca para la línea 5. No redirecciona ni desplaza al usuario en la pantalla.

```

```
  <!-- Bloque 1 -->
  <p>
    <img src="im1.jpg" alt="imagen1" />
    <a href="http://www.google.com.ar">Click aquí</a>
  </p>

  <!-- Bloque 2 -->
  <p>
    <a href="http://www.google.com.ar">
      <img src="im1.jpg" alt="imagen1" />
    </a>
    Click aquí
  </p>

  <!-- Bloque 3 -->
  <p>
    <a href="http://www.google.com.ar">
      <img src="im1.jpg" alt="ima
      gen1" />
      Click aquí
    </a>
  </p>

  <!-- Bloque 4 -->
  <p>
    <a href="http://www.google.com.ar">
      <img src="im1.jpg" alt="imagen1" />
    </a>
    <a href="http://www.google.com.ar">Click aquí</a>
  </p>

Visualización

  La única diferencia visual es que debido al salto de línea. El alt del tercer bloque se le añade un espacio en blanco, visualizando en el navegador el texto "ima gen1".

Comportamiento
  Observación: Todos los a redireccionan en la pantalla actual.

  Bloque 1: la imagen no redirecciona al usuario hacia la URL indicada. Sólo el texto.
  Bloque 2: caso inverso a lo que sucede en el bloque 1. La imagen redirecciona pero el texto no.
  Bloque 3: dado que el elemento <a> envuelve tanto el texto como la imagen. Hacer clic en cualquiera de estos redirecciona a la URL en <a>.
  Bloque 4: se consigue el mismo comportamiento que en el bloque 3. Pero se el texto y la imagen se encuentra dentro de su respectivo elemento <a>.
```

```
  <!-- Columna 1 -->
  <ul>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
  </ul>

  <!-- Columna 2 -->
  <ol>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
  </ol>

  <!-- Columna 3 -->
  <ol>
    <li>xxx</li>
  </ol>
  <ol>
    <li value="2">yyy</li>
  </ol>
  <ol>
    <li value="3">zzz</li>
  </ol>

  <!-- Columna 4 -->
  <blockquote>
    <p>
      1. xxx<br />
      2. yyy<br />
      3. zzz
    </p>
  </blockquote>

Visualización
  Columna 1: muestra una lista con viñetas.
  Columna 2: muestra una lista secuencial. Es decir, 1 - item, 2 - item, 3 - item, ...
  Columna 3: se obtiene el mismo resultado secuencial debido al atributo value pero estan separados debido a que el elemento <ol> tiene margin-top y margin-bottom por defecto.
  Columna 4: parece una lista pero no lo es. Se visualiza desplazado más a la derecha debido a la sangría aplicada por la etiqueta <blockquote> y separados en renglones por las etiquetas <br />.

Comportamiento
  Columna 1: representa una lista desordenada.
  Columna 2: representa una lista ordenada.
  Columna 3: son 3 listas ordenadas que inician con la siguiente numeración a la lista ordenada anterior.
  Columna 4: si bien como se mencionó anteriormente parece una lista. Su comportamiento real es el de un bloque de cita que contiene un párrafo.
```

```
  <!-- Tabla 1 -->
  <table border="1" width="300">
    <tr>
      <th>Columna 1</th>
      <th>Columna 2</th>
    </tr>
    <tr>
      <td>Celda 1</td>
      <td>Celda 2</td>
    </tr>
    <tr>
      <td>Celda 3</td>
      <td>Celda 4</td>
    </tr>
  </table>

  <!-- Tabla 2 -->
  <table border="1" width="300">
    <tr>
      <td>
        <div align="center"><strong>Columna 1</strong></div>
      </td>
      <td>
        <div align="center"><strong>Columna 2</strong></div>
      </td>
    </tr>
    <tr>
      <td>Celda 1</td>
      <td>Celda 2</td>
    </tr>
    <tr>
      <td>Celda 3</td>
      <td>Celda 4</td>
    </tr>
  </table>

Visualización
  La visualización de ambas tablas son iguales. Sin embargo, la segunda tabla no hace un uso correcto de la semántica.

Comportamiento
  La segunda tabla utiliza el align="center" y la etiqueta <strong> para emular la apariencia de una tabla correcta.
```

```
  <!-- Tabla 1 -->
  <table width="200">
    <caption>Título</caption>
    <tr>
      <td bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">
        &nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
      </tr>
    </table>

  <!-- Tabla 2 -->
  <table width="200">
    <tr></tr>
    <td colspan="3">
      <div align="center">Título</div>
    </td>
     </tr><tr>
      <td bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
  </table>

Visualización y comportamiento

  Ambas tablas se ven iguales. Sin embargo, la primera tabla hace un uso correcto de la semántica mientas que la segunda emula los estilos mediante el atributo align="center" en el elemento <div> y expande el <td> para que lo incluya con un colspan="3".
```

```
  <!-- Tabla 1 -->
  <table width="200">
    <tr>
      <td colspan="3"><div align="center">Título</div></td>
    </tr>
    <tr>
      <td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
  </table>

  <!-- Tabla 2 -->
  <table width="200">
    <tr>
      <td colspan="3"><div align="center">Título</div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
      <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
  </table>

Visualización
  Ambas son muy similares excepto a que en la primera tabla hace que la primera columna fusione ambas filas. Mientras que en la segunda tabla, fusiona en la primera fila las dos primeras columnas.
```

```
  <!-- Tabla 1 -->
  <table width="200" border="1">
    <tr>
      <td colspan="3"><div align="center">Título</div></td>
    </tr>
    <tr>
      <td colspan="2"rowspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="50%">&nbsp;</td>
    </tr>
  </table>

  <!-- Tabla 2 -->
  <table width="200" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2"><div align="center">Título</div></td>
    </tr>
    <tr>
      <td rowspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="50%">&nbsp;</td>
    </tr>
  </table>

Visualización
  El espacio entre los bordes de las celdas y la tabla es menor en la segunda que en la primera.

Comportamiento
  La primera tabla necesita una columna adicional para lograr el mismo efecto que el width="50%" en la segunda.
```

```
  <!-- Formulario 1 -->
  <form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
    <fieldset>
      <legend>LOGIN</legend>
      Usuario: <input type="text" id="usu1" name="usu1" value="xxx" />
      <br />
      Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
    </fieldset>
    <input type="submit" id="boton1" name="boton1" value="Enviar" />
  </form>

  <!-- Formulario 2 -->
  <form id="form2" name="form2" action="" method="get" target="_blank">LOGIN<br />
    <label>Usuario: <input type="text" id="usu2" name="usu2" /></label>
    <br />
    <label>Clave: <input type="text" id="clave2" name="clave2" /></label>
    <br />
    <input type="submit" id="boton2" name="boton2" value="Enviar" />
  </form>

  <!-- Formulario 3 -->
  <form id="form3" name="form3" action="mailto:xx@xx.com” enctype="text/plain" method="post" target="_blank">
    <fieldset>
      <legend>LOGIN</legend>
      Usuario: <input type="text" id="usu3" name="usu3" />
      <br />
      Clave: <input type="password" id="clave3" name="clave3" />
    </fieldset>
    <input type="reset" id="boton3" name="boton3" value= "Enviar" />
  </form>

Visualización

  El formulario 1 y el formulario 3 se ven casi iguales salvo que el primero ya tiene valores cargados al ser representado. Mientras que el segundo no tiene el fieldset, legenda del campo del formulario y el input de la contraseña no oculta los valores introducidos.

Comportamiento

  Formulario 1 envía los datos al archivo procesar.php utilizando el método POST. Con lo que los datos no se visualizan en la barra de direcciones. Por último, la respuesta se abre en una nueva pestaña.

  Formulario 2 utiliza la etiqueta semántica <label> envolviendo al texto y al input. Lo que se consigue que al hacer clic en el texto vaya al input correspondiente. Por otro lado, el envío utiliza el método GET (los datos se mostrarán en la barra de direcciones) y se abrirá una nueva pestaña.

  Formulario 3, el botón en lugar de enviar reinicia el formulario borrando los datos en lugar de enviarlos a la dirección de correo indicada en el action en texto plano.
```

```
  <!-- Label 1 -->
  <label>Botón 1
    <button type="button" name="boton1" id="boton1">
      <img src="logo.jpg" alt="Botón con imagen " width="30" height="20" />
      <br />
      <b>CLICK AQUÍ</b>
    </button>
  </label>

  <!-- Label 2 -->
  <label>Botón 2
    <input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" />
  </label>

Visualización

  En ambos se visualizará el texto "CLICK AQUÍ". Pero, en el primer segmento se visualizará además la imagen de un logo y, por último, el texto está en negrita.

Comportamiento

  En el segundo fragmento de código, al ser input una etiqueta vacía no puede mostrar otra cosa que texto plano.
```

```
 <!-- Bloque 1 -->
  <p>
    <label><input type="radio" name="opcion" id="X" value="X" />X</label>
    <br />
    <label><input type="radio" name="opcion" id="Y" value="Y" />Y</label>
  </p>

  <!-- Bloque 2 -->
  <p>
    <label><input type="radio" name="opcion1" id="X" value="X" />X</label>
    <br />
    <label><input type="radio" name="opcion2" id="Y" value="Y" />Y</label>
  </p>

Visualización y comportamiento

  Ambos bloques de elección se visualizan exactamente igual. Sin embargo, el primero se comporta de forma correcta debido a que tienen el mismo valor en el atributo name. En cambio, en el segundo bloque los elementos se comportan de forma independiente, similar a un checkbox, debido a que poseen valores de name diferentes.
```

```
  <!-- Select 1 -->
  <select name="lista">
    <optgroup label="Caso 1">
      <option>Mayo</option>
      <option>Junio</option>
    </optgroup>
    <optgroup label="Caso 2">
      <option>Mayo</option>
      <option>Junio</option>
    </optgroup>
  </select>

  <!-- Select 2 -->
  <select name="lista[]" multiple="multiple">
    <optgroup label=" Caso 1">
      <option>Mayo</option>
      <option>Junio</option>
    </optgroup>
    <optgroup label=" Caso 2">
      <option>Mayo</option>
      <option>Junio</option>
    </optgroup>
  </select>

Visualización

  El primer select se visualiza como una lista desplegable mientras que el segundo se puede visualizar la lista completa. Ambas listas con dos grupos de opciones "Caso 1" y "Caso 2"

Comportamiento

  El usuario podrá seleccionar un solo valor en el primer select. Pero, a diferencia del anterior el segundo tiene el atributo multiple, con lo cual el usuario podrá seleccionar múltiples valores
```
