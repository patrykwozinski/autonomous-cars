<?php
declare(strict_types=1);

namespace App\Module\ShiftGear\Main\Application\Command\ReduceGear;


use App\Module\ShiftGear\Main\Domain\ShiftGearId;

final class ReduceGearCommand
{
	private $shiftGearId;

	public function __construct(string $shiftGearId)
	{
		$this->shiftGearId = ShiftGearId::fromString($shiftGearId);
	}

	public function shiftGearId(): ShiftGearId
	{
		return $this->shiftGearId;
	}
}
