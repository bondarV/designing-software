<?php

namespace visitors;

use LightElementNode;
use LightTextNode;

class RetrieveMetaVisitor implements IVisitor
{

    public function visitTextNode(LightTextNode $textNode): void
    {
        if ($textNode->charsData() === null) {
            return;
        }
        $amountOfLetters = 0;
        foreach ($textNode->charsData() as $i => $val) {
            echo "There were $val instance(s) of \"", chr($i), "\" in the string.\n";
        }
        for ($i = 0; $i < strlen($textNode->getText()); $i++) {
            if (ctype_alpha($textNode->getText()[$i])) {
                $amountOfLetters++;
            }
        }
        echo 'Count of letters: ', $amountOfLetters, "\n";
    }

    public function visitElementNode(LightElementNode $elementNode): void
    {
        echo 'Count of childrens: '. $elementNode->getChildrenCount();
        //..... I could literally put into file (file_puts) anything I desired to store
    }
}