# Ejercitación 2

HTML está compuesto por un conjunto de elementos que son la base de su estructura. Los elementos están compuestos por dos tags (el de apertura y el de cierre) y el contenido en el medio (con excepción de los elementos vacíos ). Cada tag puede tener atributos (proporcionan ciertas características como altura, ancho, color, etc.) y eventos (asocian un script que se ejecuta cuando el evento ocurre).

Analizar los siguientes segmentos de código indicando en qué sección del documento HTML se colocan, cuál es el efecto que producen y señalar cada uno de los elementos, etiquetas, y atributos (nombre y valor), aclarando si es obligatorio.

```txt
<!-- Código controlado el día 12/08/2009 -->

Sección: puede colocarse en cualquier parte del documento HTML pero no dentro de la definición de una etiqueta.

Efecto: es un comentario. Sirve para dejar notas, documentar código o incluso permite inhabilitar porciones de código; ya que no produce ningún efecto en el momento que el navegador las interpreta.

Elemento y etiquetas:
  Apertura: <!--
  Cierre: -->

Atributos: no posee atributos
```

```txt
<div id="bloque1">Contenido del bloque1</div>

Sección: se colocan en el <body>

Efecto: es un contenedor genérico para contenido de tipo bloque que no produce ningún efecto visual y se lo utiliza para agrupar contenido y aplicar estilos o manipulación mediante scripts de JavaScript. Contiene el texto "Contenido del bloque1".

Elemento y etiquetas:
  Apertura: <div>
  Cierre: </div>

Atributos (nombre: valor - aclaración):
  - id: bloque1

```

```txt
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" longdesc="detalles.htm" />

Sección: se coloca en el <body>

Efecto: inserta una imagen en el documento. Sin embargo, al estar vacío el atributo src, el navegador mostrará el texto alternativo "lugar imagen" junto a un ícono de imagen rota. Además, longdesc añade una url con una descripción más detallada de la imagen.

Elemento y etiquetas: es una etiqueta vacía o de autocierre
  Apertura: <img
  Cierre: />

Atributos (nombre: valor - aclaración):
  src: vacío - obligatorio
  alt: lugar imagen - obligatoro
  id: im1
  width: 32 - unidad en px
  height: 32 - unidad en px
  longdesc: detalles.htm - deprecada, se recomienda usar aria-describedby or aria-details.
```

```txt
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />

Sección: se coloca en el <head>

Efecto: añadir información sobre el documento (metadatos). Indica a los motores de búsqueda las palabras clave de la página y especifica que son del idioma español.

Elemento y etiquetas: es una etiqueta vacía o de autocierre
  Apertura: <meta
  Cierre: />

Atributos (nombre: valor - aclaración):
  name: keywords - obligatorio
  lang: es
  content: "casa, compra, venta, alquiler" - obligatorio

<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />

Sección: se coloca en el <head>

Efecto: añadir información sobre el documento (metadatos). Indica la fecha de caducidad del documento mediante una directiva HTTP al navegador y a los servidores caché.

Elemento y etiquetas: es una etiqueta vacía o de autocierre
  Apertura: <meta
  Cierre: />

Atributos:
  http-equiv: expires - obligatorio
  content: 16-Sep-2019 7:49 PM - obligatorio

```

```txt
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help">Resumen HTML </a>

Sección: se coloca en el <body>

Efecto: crea un hipervínculo (enlace). Muestra en pantalla "Resumen HTML" y , al hacer clic, redirigirá al usuario a http://www.e-style.com.ar/resumen.html. Además, los otros atributos informan al navegador que el destino es un archivo HTML en español con codificación UTF-8 y que es un documento de ayuda.

Elemento y etiquetas:
  Apertura: <a>
  Cierre: </a>

Atributos (nombre: valor - aclaración):
  href: http://www.e-style.com.ar/resumen.html - obligatorio
  type: text/html
  hreflang: es
  charset: utf-8
  rel: help

```

```txt
<table width="200" summary="Datos correspondientes al ejercicio vencido">
  <caption align="top"> Título </caption>
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">A</th>
    <th scope="col">B</th>
    <th scope="col">C</th>
  </tr>
  <tr>
    <th scope="row">1º</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">2º</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

Sección: se coloca en el <body>

Efecto: genera una tabla de tres colas por tres filas. Incluye un título "Tïtulo" en la parte superior de la tabla, encabezados tanto para las columnas (A, B, C) como las filas (1°, 2°), y celdas de datos rellenadas con espacios en blanco sin salto. Además, la tabla tendrá un ancho de 200px y una descripción para los lectores de pantalla.

Elemento y etiquetas:
  <table>
    Apertura: <table>
    Cierre: </table>

  <caption>
    Apertura: <caption>
    Cierre: </caption>

  <tr>
    Apertura: <tr>
    Cierre: </tr>

  <th>
    Apertura: <th>
    Cierre: </th>

  <td>
    Apertura: <td>
    Cierre: </td>

Atributos (nombre: valor - aclaración):
  <table>
    width: 200 - unidad en px (pixeles)
    summary: Datos correspondientes al ejercicio vencido

  <caption>
    align: top

  <th>
    scope: col (encabezado de columna) y row (encabezado de fila)
```
