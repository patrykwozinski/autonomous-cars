<?php
declare(strict_types=1);

namespace App\Module\Engine\Main\Domain\Exception;


use LogicException;

final class CannotStartEngine extends LogicException
{
	public static function whenStartedBefore(): self
	{
		return new self('Can not start the engine when already started');
	}
}
