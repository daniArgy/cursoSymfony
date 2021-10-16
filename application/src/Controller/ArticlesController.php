<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class ArticlesController extends AbstractController
{

    public function articles(string $locale, int $year, string $title, string $format): Response
    {
        return new Response(
    '<html>
                <body>
                    <ul>
                        <li>Locale: ' . $locale . '</li>
                        <li>Year: ' . $year . '</li>
                        <li>Title: ' . $title . '</li>
                        <li>Format: ' . $format . '</li>
                    </ul>
                </body>
            </html>'
        );
    }

}