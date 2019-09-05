<?php
declare(strict_types=1);

namespace App\Module\ShiftGear\Main\Application\Command\HigherGear;


use App\Module\ShiftGear\Main\Domain\ShiftGearId;

final class HigherGearCommand
{
	/** @var ShiftGearId */
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
