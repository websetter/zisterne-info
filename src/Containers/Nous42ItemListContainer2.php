<?php

namespace Nous42\Containers;

use Plenty\Plugin\Templates\Twig;

class Nous42ItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Nous42::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}