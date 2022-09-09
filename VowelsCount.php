<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class VowelsCount
{
    //contar las vocales
    // devolver número (ej: 6)
    // devolver letra posición del abecedario (ej: f)
    // repetir letra tantas veces como el número posición (ej: ffffff

    const VOWELS = [
            "a",
            "e",
            "i",
            "o",
            "u"
        ];



    public function countTheVowelsOfTheString(string $stringToCount): int
    {
        $result = 0;

        foreach (self::VOWELS as $stringOfVowels) {
            $result += substr_count($stringToCount, $stringOfVowels);
        }

        return $result;
    }

}


$vowelsCountObject = new VowelsCount();
echo $vowelsCountObject->countTheVowelsOfTheString("hello hola kaixg g hgf hif yrdfu tdr uffiyfrreto");

