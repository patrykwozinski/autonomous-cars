<?php
declare(strict_types=1);

namespace App\Module\ShiftGear\Main\Domain\Exception;


use App\Module\ShiftGear\Main\Domain\ShiftGearId;

final class GearCanNotBeReduced extends \DomainException
{
	public static function whenCurrentIsFirst(ShiftGearId $shiftGearId): self
	{
		$message = \sprintf('Can not reduce gear when current is first for ID: %s', (string)$shiftGearId);

		return new self($message);
	}
}
