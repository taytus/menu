<?php

namespace App\MyClasses;

use PhpSchool\CliMenu\Action\ExitAction;
use PhpSchool\CliMenu\Builder\CliMenuBuilder;
use PhpSchool\CliMenu\CliMenu;


class Menu {
    private $latest_menu_selection;

    public function popup_menu($options){
        $itemCallable = function (CliMenu $menu) {
            $menu->close();
            $this->latest_menu_selection=$menu->getSelectedItem()->getText();
        };

        $menu = (new CliMenuBuilder)
            ->disableDefaultItems()
            ->setTitle('Basic CLI Menu');

        foreach ($options as $item){
            $menu->addItem($item, $itemCallable);
        }


        $menu->setBorder(1, 2, 'yellow')
            ->setPadding(2, 4)
            ->setMarginAuto()
            ->addItem('Exit', new ExitAction) //add an exit button
            ->build()->open();

        return $this->latest_menu_selection;
    }
}