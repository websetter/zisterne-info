<?php

namespace ZisterneInfo\Containers;

use Plenty\Plugin\Templates\Twig;

class ZisterneInfoItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('ZisterneInfo::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}