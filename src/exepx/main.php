<?php

namespace exepx;

use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;


class Main extends PluginBase implements Listener {

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
        $player = $event->getPlayer(); //this gets the player
        $name = $player->getName();
        $inv = $player->getInventory(); //this gets the player inventory

        $this->getServer()->broadcastMessage(TextFormat::GREEN . "Welcome to the server buddy");
        $item = Item::BEDROCK;

    }

    public function onQuit(PlayerQuitEvent $event)
    {
        $player = $event->getPlayer();
        $event->getQuitMessage($player . " The player has left the server  ");
    }

}