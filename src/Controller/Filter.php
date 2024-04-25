<?php
namespace App\Controller\Filter;

class OffensiveLanguageFilter

{
    private $badWords = ['bad', 'words', 'list'];

    public function filter($content)
    {
        foreach ($this->badWords as $word) {
            $content = str_ireplace($word, '***', $content);
        }
        return $content;
    }
}
