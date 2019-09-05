<?php
declare(strict_types=1);

namespace App\Module\ShiftGear\Main\Domain;


use App\Module\SharedKernel\Domain\AggregateRoot;
use App\Module\ShiftGear\Main\Domain\Event\GearIncreased;
use App\Module\ShiftGear\Main\Domain\Event\GearReduced;
use App\Module\ShiftGear\Main\Domain\Exception\GearCanNotBeIncreased;
use App\Module\ShiftGear\Main\Domain\Exception\GearCanNotBeReduced;

final class ShiftGear extends AggregateRoot
{
	/** @var ShiftGearId */
	private $id;
	/** @var CurrentGear */
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
