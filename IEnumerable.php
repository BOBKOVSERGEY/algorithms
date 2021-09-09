<?php

class IEnumerable
{
    public static function ReadInt(string $filePath)
    {
        $handle = fopen($filePath, "r");

        if ($handle) {
            while (( $line = fgets($handle)) !== false) {
               echo $line . '<br>';
                // process the line read.
            }

            fclose($handle);
        } else {
            echo 'Не могу открыть файл';
        }
    }

}

$readFile = IEnumerable::ReadInt('1Kints.txt');