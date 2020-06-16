<?php
//Import class
require('Internacionalizacion.php');

/*################################################ E N G L I S H #####################################################*/

//Initialize the object with the required language, english in this case
$internationalization = new Internacionalizacion('en');

//Print heading
echo $internationalization->getTextTranslation('hello_heading');

//Print text
echo $internationalization->getTextTranslation('hello_text');

//Print list
echo '<ul>';
foreach ($internationalization->getTextTranslation('animals_list') as $animal) {
    echo sprintf('<li>%s</li>', $animal);
}
echo '</ul>';

/*################################################ S P A N I S H #####################################################*/

//Inicializa el objeto con el lenguaje requerido, español en este caso
$internationalization = new Internacionalizacion('es');

//Imprimir titulo
echo $internationalization->getTextTranslation('hello_heading');

//Imprimir texto
echo $internationalization->getTextTranslation('hello_text');

//Imprimir lista
echo '<ul>';
foreach ($internationalization->getTextTranslation('animals_list') as $animal) {
    echo sprintf('<li>%s</li>', $animal);
}
echo '</ul>';