<?php

namespace exepx;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\player{PlayerJoinEvent, PlayerQuitEvent};


class main extends PluginBase implements Listener
{

    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN . "Welcome Plugin has been enabled");
    }

    public function onDisable(): void
    {
        $this->getLogger()->info(TextFormat::RED . "Welcome plugin has been disabled");
    }

    public function onJoin(PlayerJoinEvent $event)
    {
        $player = $event->getPlayer();
        $event->setJoinMessage($player . " welcome to the server");
    }

    public function onQuit(PlayerQuitEvent $event)
    {
        $player = $event->getPlayer();
        $event->getQuitMessage($player . " has left the server ");
    }

}