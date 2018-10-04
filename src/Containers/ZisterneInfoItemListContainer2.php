<?php

namespace ZisterneInfo\Containers;

use Plenty\Plugin\Templates\Twig;

class ZisterneInfoItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('ZisterneInfo::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}