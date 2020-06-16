# basicphpinternationalization
Basic php internationalization class

#ENG
This repository offers a simple class that choose between different custom translations.
The only thing you have to do is put Internationalization class in your project, put your translations in the class arrays or add an array
for the language you want, import this class in your file, instantiate the class passing the language code in constructor (you can use a 
cookie to remember user language preference and pass that code here) and just use that object to call the function getTextTranslation 
passing the text key of your array and this function will return the value depending of the language code and the value registered on 
the corresponding array.
For more information see class documentation and example.php file.

#SPA
Este repositorio ofrece una simple clase que escoge entre diferentes traducciones personalizadas.
Lo único que tienes que hacer es poner la clase Internationalization en tu proyecto, poner tus traducciones en los arreglos de la clase o 
agregar arreglos para el lenguaje que tu desees, importar la clase en el archivo, instanciar la clase pasando el codigo de lenguaje al 
constructor (puedes hacer uso de una cookie para recordar las preferencias de lenguaje del usuario y poner el código aquí) y solo usar ese 
objeto para llamar la funcion getTextTranslation pasando el la clave del texto de tu array y esta función devolverá el valor 
dependiendo del código de lenguaje seleccionado y el valor registrado en el arreglo correspondiente.
Para mas información ver la documentación de la clase y el archivo example.php
