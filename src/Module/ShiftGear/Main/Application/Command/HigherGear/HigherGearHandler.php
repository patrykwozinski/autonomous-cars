<?php
declare(strict_types=1);

namespace App\Module\ShiftGear\Main\Application\Command\HigherGear;


use App\Module\ShiftGear\Main\Domain\ShiftGears;

final class HigherGearHandler
{
	private $shiftGears;

	public function __construct(ShiftGears $shiftGears)
	{
		$this->shiftGears = $shiftGears;
	}

	public function __invoke(HigherGearCommand $command): void
	{
		$shiftGear = $this->shiftGears->oneById($command->shiftGearId());
		$shiftGear->higherGear();
	}
}
