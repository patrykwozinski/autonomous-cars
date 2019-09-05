<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Application\Command\ReduceGear;


use App\ShiftGearModule\Domain\ShiftGears;

final class ReduceGearHandler
{
	private $shiftGears;

	public function __construct(ShiftGears $shiftGears)
	{
		$this->shiftGears = $shiftGears;
	}

	public function __invoke(ReduceGearCommand $command): void
	{
		$shiftGear = $this->shiftGears->oneById($command->shiftGearId());
		$shiftGear->higherGear();
	}
}
