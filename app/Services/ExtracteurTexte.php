<?php

namespace App\Services;

use Smalot\PdfParser\Parser;
use ZipArchive;

class ExtracteurTexte
{
    public function extraire(string $cheminAbsolu, int $max = 12000): string
    {
        $ext = strtolower(pathinfo($cheminAbsolu, PATHINFO_EXTENSION));

        $texte = match ($ext) {
            'pdf'  => (new Parser())->parseFile($cheminAbsolu)->getText(),
            'docx' => $this->docx($cheminAbsolu),
            'txt'  => file_get_contents($cheminAbsolu),
            default => throw new \RuntimeException("Format .$ext non supporté"),
        };

        $texte = trim(preg_replace('/\s+/', ' ', $texte));

        return mb_substr($texte, 0, $max); // évite de dépasser le contexte du modèle
    }

    private function docx(string $chemin): string
    {
        $zip = new ZipArchive();
        $zip->open($chemin);
        $xml = $zip->getFromName('word/document.xml');
        $zip->close();

        $xml = str_replace('</w:p>', "\n", $xml);
        return strip_tags($xml);
    }
}