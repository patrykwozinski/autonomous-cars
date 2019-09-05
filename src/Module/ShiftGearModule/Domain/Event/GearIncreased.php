<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Domain\Event;


use App\SharedKernel\Domain\DomainEvent;
use App\ShiftGearModule\Domain\ShiftGearId;

final class GearIncreased implements DomainEvent
{
	private $shiftGearId;

	public function __construct(ShiftGearId $shiftGearId)
	{
		$this->shiftGearId = $shiftGearId;
	}

	public function shiftGearId(): ShiftGearId
	{
		return $this->shiftGearId;
	}
}
