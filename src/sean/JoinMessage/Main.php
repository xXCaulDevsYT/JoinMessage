<?php
namespace Sean_M\JoinMessage;
 
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
      
class Main extends PluginBase implements Listener{

     public function onEnable(){
     $this->getServer()->getPluginManager->registerEvents($this);
     $this->getLogger()->info("[EmeraldMC] Enabled AuroraWelcoming!");
     }

     public function onPlayerJoin(PlayerJoinEvent $event){
     $p = $event->getPlayer();
     $p->sendMessage("§b===============§3===============§r");
     $p->sendMessage("§l         §dAurora§5HCF§r");
     $p->sendMessage("§l§r§b§r");
     $p->sendMessage("§l§a Store:§r§7 AuroraMCPE.buycraft.net");
     $p->sendMessage("§l§a Vote:§r§7 Coming Soon§r");
     $p->sendMessage("§l§a Discord:§r§7 Coming Soon§r");
     $p->sendMessage("§l§a Website:§r§7 Coming Soon§r");
     $p->sendMessage("§l§r§a§r");
     $p->sendMessage("§3===============§b===============§r");
     }
}
