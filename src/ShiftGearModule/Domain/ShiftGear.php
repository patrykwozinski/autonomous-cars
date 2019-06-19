<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Domain;


use App\SharedKernel\Domain\AggregateRoot;
use App\ShiftGearModule\Domain\Event\GearIncreased;
use App\ShiftGearModule\Domain\Event\GearReduced;

final class ShiftGear extends AggregateRoot
{
	private $id;

	public function __construct(ShiftGearId $id)
	{
		$this->id = $id;
	}

	public function higherGear(): void
	{
		$this->record(new GearIncreased($this->id));
	}

	public function reduceGear(): void
	{
		$this->record(new GearReduced($this->id));
	}
}
