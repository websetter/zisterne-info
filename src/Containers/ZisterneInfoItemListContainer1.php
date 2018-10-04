<?php

namespace ZisterneInfo\Containers;

use Plenty\Plugin\Templates\Twig;

class ZisterneInfoItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('ZisterneInfo::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}