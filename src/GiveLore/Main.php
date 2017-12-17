<?php

namespace GiveLore;

use pocketmine\item\Item;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Command\Command;
use pocketmine\Command\CommandSender;
class Main extends PluginBase{
	
	public function onEnable(){
		$this->getServer()->getLogger()->info("BasicCommands enabled!");
	}
	
	public function onDisable(){
		$this->getServer()->getLogger()->info("BasicCommands disabled!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		
		switch($cmd->getName()){
			
			case "GiveLore":
       if($sender->hasPermission("GiveLore.use")} {
				$item = Item::get(264,0,1);
        $item->setCustomName("§bSiêu kim cương");
        $item->setLore(["§b▁§c▂§a▃§e▄§d▅§9▆§6▇ §f§lSUPER DIAMOND§r §6▇§9▆§d▅§e▄§a▃§c▂§b▁", "§bCục kim cương này éo có td j hết :3"]);
        if(!$sender->hasPermission("GiveLore.use")} {
          $sender->sendMessage("§cTrình loz để lấy kc :3");
			  }
			break;
			
	  	}
		  return true;
	}
}
