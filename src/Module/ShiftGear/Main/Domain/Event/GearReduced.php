<?php
declare(strict_types=1);

namespace App\Module\ShiftGear\Main\Domain\Event;


use App\Module\SharedKernel\Domain\DomainEvent;
use App\Module\ShiftGear\Main\Domain\ShiftGearId;

final class GearReduced implements DomainEvent
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
