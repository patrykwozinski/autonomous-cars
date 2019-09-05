<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Application\Command\HigherGear;


use App\ShiftGearModule\Domain\ShiftGearId;

final class HigherGearCommand
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
