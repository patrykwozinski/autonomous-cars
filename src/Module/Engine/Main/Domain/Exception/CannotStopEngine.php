<?php
declare(strict_types=1);

namespace App\Module\Engine\Main\Domain\Exception;


use LogicException;

final class CannotStopEngine extends LogicException
{
	public static function whenSpeedTooHigh(): self
	{
		return new self('Can not stop the engine when speed is too high');
	}
}
