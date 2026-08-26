# CSS

1. ¿Qué es CSS y para qué se usa?

```txt
CSS (Hojas de Estilo en Cascada)  es una tecnología que permite establecer la apariencia de una página web. Separando el contenido del documento HTML de su diseño.
```

2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?

```txt
El funcionamiento de las reglas de estilo está compuesta por:

- Selector: indica qué elemento/s, parte del documento será afectado. Si se aplican las mismas reglas a un grupo, estos deben estar separados por comas.
- Propiedad: indica qué aspecto se quiere modificar. Las propiedades agrupadas deben separarse con punto y coma.
- Valor: define cómo se modificará la propiedad.
```

3. ¿Cuáles son las tres formas de dar estilo a un documento?

```txt
Las tres formas de dar estilo a un documento son:

- A nivel de elemento HTML: se aplica directamente en la etiqueta definida usando "style". Es la menos recomendada por diferentes problemas.
    - Cacheo
    - Aumento en el peso del HTML
    - Mantenimiento del código
Pero se puede usar en casos en que se requiera que el estilo cargue rápidamente.

- A nivel de página: Se definen los estilo en la cabecera <head> del documento encerrados en la etiqueta <style>.

- En un archivo externo: consiste en definir los estilos en un archivo separado con extensión .css y luego vincularlo al HTML usando la etiqueta <link>.
```

4. ¿Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno.

```txt
Los tipos de selectores más utilizados son:

- Selector de etiqueta: aplica el estilo a todas las etiquteas HTML coincidentes. Ej:

  p {
    color: #555555;
    font-family: verdana;
    text-align: justify;
  }

- Selector de Clase: aplica el estilo a múltiples elementos que compartan el atributo. Ej:

.elem {
  background-color: yellow;
}

- Selector Id: aplica el estilo al elmeneto con el identificador indicado. Ej:

  #title {
    margin-bottom: 20px;
  }
```

5. ¿Qué es una pseudo-clase? ¿Cuáles son las más utilizadas aplicadas a vínculos?

```txt
Una pseudo-clase permite aplicar estilos a un elemento basándose en características que van más allá de su nombre, atributos o contenido. Además, las pseudo-clases pueden ser dinámicas, es decir, un elemento puede adquirir o perder una pseudo-clase como consecuencia de la interacción del usuario con el documento.

Algunas de las pseudo-clases más utilizadas aplicadas a vínculos son:

- :link
- :visited
- :active
- :focus
- :hover
```

6. ¿Qué es la herencia?

```txt
La herencia es el mecanismo de CSS mediante el cual algunos valores de las propiedades definidas en un elemento padre son heredados por sus elementos hijos.
```

7. ¿En qué consiste el proceso denominado cascada?

```txt
Cascada es el proceso mediante el cual CSS determina qué regla de estilo debe aplicarse cuando varias reglas afectan a un mismo elemento y propiedad. Para decidir cuál aplicar, se tiene en cuenta primer su origen e importancia, luego la especificidad del selector y, por último, el orden en que fueron declaradas.
```
