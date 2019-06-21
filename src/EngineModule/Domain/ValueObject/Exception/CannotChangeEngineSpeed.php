<?php
declare(strict_types=1);

namespace App\EngineModule\Domain\Exception;


final class CannotChangeEngineSpeed extends \DomainException
{
	public static function whenEngineIsOff(): self
	{
		return new self('Can not change engine speed when engine is turned off');
	}
}
