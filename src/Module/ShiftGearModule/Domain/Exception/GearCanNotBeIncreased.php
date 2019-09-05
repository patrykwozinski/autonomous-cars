<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Domain\Exception;


use App\ShiftGearModule\Domain\ShiftGearId;

final class GearCanNotBeIncreased extends \DomainException
{
	public static function whenMaximumHasBeenReached(ShiftGearId $shiftGearId): self
	{
		$message = \sprintf('Can not increase gear when maximum has been reached for shift gear ID: %s', (string)$shiftGearId);

		return new self($message);
	}
}
