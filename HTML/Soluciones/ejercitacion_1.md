# Ejercitación 1

## Cuestionario

1. Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?
2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?
3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?
4. Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?
5. Qué son los metadatos y cómo se especifican en HTML?

```TXT
1.
HTML (HyperText Markup Languaje) es un lenguaje de marcado estandarizado utilizado para la elaborar páginas web. Se emplea para definir la estructura del contenido de una página web mediante el uso de etiquetas (tags), dando como resultado un documento HTML.
HTML fue creado a inicios de la década de 1990 y proliferó con el crecimiento de la Web. Esto llevó a la necesidad de establecer convenciones y posteriormente estandarizar el lenguaje. A lo largo de su evolución se crearón distintas versiones, entre ellas HTML 2.0, HTML 3.0, HTML 3.2, HTML 4.0 Y HTML 4.01.
Posteriormente surgió HTML5. Actualmente, HTML5 continúa incorporando mejoras y corrigiendo erroes sin cambiar de versión.
```

```TXT
2.
Los principios básiccos que el W3C recomienda seguir para la creación de documentos con HTML son:

  1. Separar estructura y presentación
    Enuncia la separación de responsabilidades donde HTML debe centrarse en la estructura del código y no en el diseño visual. Por ejemplo, muchas etiquetas y atributos han sido reemplazados por mecanismos como hojas de estilos (stylesheet) de CSS.
  2. Considerar la accesibilidad universal a la Web
    Enuncia que los creadores de sitios web deberían considerar como diseñarlos para que un mayor número de personas puedan emplearlos siempre y cuando sea posible. Para ello, existen mecanismos tales como los atributos aria-*, alt, proporcionar el idioma natural del sitio, añadir internacionalización.
  3. Ayudar con la representación incremental
    Estructurar el documento HTML de forma tal que los agentes de usuario puedan procesar y mostrar el contenido de forma rápida.

```

```TXT
3.
DESAPROBADO
Un elemento o atributo queda desaprobado cuando existen nuevas estructuras que hagan los mismo o más de forma más eficiente. Por ejemplo: la etiqueta <font> fue reemplazada por las propiedades font de CSS para dar estilos al texto.
Además, un elemento que está desaprobado se debe seguir dando soporte por compatibilidad pero en un futuro puede pasar a ser declarado como obsoleto.

OBSOLETO
Un elemento o atributo queda obsoleto cuando no existe garantía de soporte por parte de los agentes de usuario. Quedando fuera de la especificación, pero se listan para mantener un registro. Retomando el ejemplo anterior la etiqueta <font> se encuentra obsoleta actualmente en MDN.
```

4. Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01? 5. Qué son los metadatos y cómo se especifican en HTML?

```TXT
4.
El DTD (Document Type Definition o Definición del Tipo de Documento) es la declaración del tipo de documento. Indicando la versión de HTML utilizada en nuestro caso.
Existen tres DTDs para HTML 4.01 y varían en cuanto a los elementos que soportan:

  - DTD Estricto (Strict DTD): incluye todos los elmentos y atributos que no han sido desaprobados o que no aparecen en documentos con marcos.
  - DTD Transicional (Transitional DTD): incluye al DTD estrito más los elementos y atributos desaprobados. Entre ellos, los que están orientados a la presentación visual.
  - DTD para Documentos con Marcos (Frameset DTD): incluye todo lo del DTD transicional más los elementos necesarios para trabajar con marcos (frames).
```

```TXT
5.
Los metadatos son información sobre un documento más que el contenido del propio documento. Sirven para los motores de búsqueda, sintetizadores de voz y agentes de usuario.
Se pueden especificar mediante la etiqueta <meta> dentro de la cabecera <head>.
Por ejemplo:
  <meta name="authro" content="Dave Raggett" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-5" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
```
