<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Domain;


use App\SharedKernel\Domain\AggregateRoot;
use App\ShiftGearModule\Domain\Event\GearIncreased;
use App\ShiftGearModule\Domain\Event\GearReduced;
use App\ShiftGearModule\Domain\Exception\GearCanNotBeIncreased;
use App\ShiftGearModule\Domain\Exception\GearCanNotBeReduced;

final class ShiftGear extends AggregateRoot
{
	private $id;
	private $currentGear;

	public function __construct(ShiftGearId $id, CurrentGear $currentGear)
	{
		$this->id          = $id;
		$this->currentGear = $currentGear;
	}

	public function higherGear(): void
	{
		if ($this->currentGear->isMaximum())
		{
			throw GearCanNotBeIncreased::whenMaximumHasBeenReached($this->id);
		}

		$this->record(new GearIncreased($this->id));
	}

	public function reduceGear(): void
	{
		if ($this->currentGear->isFirst())
		{
			throw GearCanNotBeReduced::whenCurrentIsFirst($this->id);
		}

		$this->record(new GearReduced($this->id));
	}
}
