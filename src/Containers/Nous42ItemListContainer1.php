<?php

namespace Nous42\Containers;

use Plenty\Plugin\Templates\Twig;

class Nous42ItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Nous42::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}