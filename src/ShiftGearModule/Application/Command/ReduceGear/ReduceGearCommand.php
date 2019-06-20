<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Application\Command\ReduceGear;


use App\ShiftGearModule\Domain\ShiftGearId;

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
