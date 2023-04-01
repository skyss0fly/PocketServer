
<?php

namespace skyss0fly\Event\EventListener;

use PocketServer\Listener
class EventListener implements Listener {

    public function onPlayerCreation(PlayerCreationEvent $event){
        $event->setPlayerClass(MyPlayer::class);
    }
}
