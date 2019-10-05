<?php

namespace App\Console\Commands;

use App\MyClasses\Menu;
use Illuminate\Console\Command;

class my_menu extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'menu:show';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo of nested menues';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(){
        $menu = new Menu();
        var_dump($menu->popup_menu(["black","white"]));
        var_dump($menu->popup_menu(["blue","red"]));
    }
}
