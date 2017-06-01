<?php

namespace xenialdan\BossBarAPI;

use pocketmine\network\mcpe\protocol\DataPacket;
use pocketmine\network\mcpe\protocol\ProtocolInfo;

class BossEventPacket extends DataPacket {
	const NETWORK_ID = ProtocolInfo::BOSS_EVENT_PACKET;
	public $eid;
	public $state;

	public function decode() { }//We do not need to overload the server without use of this..

	public function encode() {
		$this->reset();
		$this->putEntityId($this->eid);
		$this->putUnsignedVarInt($this->state);
	}
}