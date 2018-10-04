<?php

namespace ZisterneInfo\Containers;

use Plenty\Plugin\Templates\Twig;

class ZisterneInfoContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('ZisterneInfo::Stylesheet');
    }
}