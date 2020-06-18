<?php
/**
 * Class Internationalization
 *
 * With this class you can change between languages, to add a language just add another array with the language
 * following the name conventions $(language code)_translation ex: $fr_translation for french.
 *
 * In order to have different translations for the same word use the same textKey in the translation array.
 *
 * When the constructor of this class is called, a language code have to be given, this language code will be used
 * to select the translation array ex: if you use new Internationalization('fr') will use $fr_translation array.
 *
 * @author luissanflo
 */
class Internationalization
{
    /**
     * Spanish translations array
     *
     * @var array<string, mixed>
     */
    private $es_translation = [
        'hello_heading' => '<h1>Decir hola en español</h1>',
        'hello_text' => 'Hola!',
        'animals_list' => ['Perro', 'Gato', 'Pajaro']
    ];

    /**
     * English translations array
     *
     * @var array<string, mixed>
     */
    private $en_translation = [
        'hello_heading' => '<h1>Say hello in english</h1>',
        'hello_text' => 'Hello!',
        'animals_list' => ['Dog', 'Cat', 'Bird']
    ];

    /**
     * @var string
     */
    private $languageCode;

    /**
     * Internationalization constructor.
     *
     * @param string $languageCode
     *
     * @return void
     */
    public function __construct($languageCode)
    {
        if ($languageCode == null) {
            $this->languageCode = 'en';
        } else {
            $this->languageCode = $languageCode;
        }
    }

    /**
     * @param string $textKey
     *
     * @return mixed
     */
    public function getTextTranslation($textKey)
    {
        $translationArrayName = sprintf('%s_translation', $this->languageCode);

        return $this->{$translationArrayName}[$textKey];
    }

}
