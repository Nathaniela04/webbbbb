<?php

function textLoad() {
    $words = ["Portofolio", "Website", "Profile"];
    $index = 0;
    $wordIndex = 0;
    $currentWord = "";

    function typeWord() {
        global $words, $index, $wordIndex, $currentWord;
        if ($wordIndex < strlen($words[$index])) {
            $currentWord .= $words[$index][$wordIndex];
            echo $currentWord;
            $wordIndex++;
            setTimeout('typeWord()', 150);
        } else {
            setTimeout('eraseWord()', 1000);
        }
    }

    function eraseWord() {
        global $currentWord;
        if (strlen($currentWord) > 0) {
            $currentWord = substr($currentWord, 0, -1);
            echo $currentWord;
            setTimeout('eraseWord()', 100);
        } else {
            $wordIndex = 0;
            $index = ($index + 1) % count($words);
            setTimeout('typeWord()', 500);
        }
    }

    typeWord();
}

textLoad();

?>