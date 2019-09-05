<?php
declare(strict_types=1);

namespace App\Module\Engine\Main\Domain\ValueObject;


use App\Module\Engine\Main\Domain\Exception\CannotChangeEngineSpeed;

final class Speed
{
	private const INITIAL_SPEED = 750;

	private $value;

	public function __construct(int $value)
	{
		$this->value = $value;
	}

	public static function initial(): self
	{
		return new self(self::INITIAL_SPEED);
	}

	public function increase(): self
	{
		if (0 === $this->value)
		{
			throw CannotChangeEngineSpeed::whenEngineIsOff();
		}

		return new self(++$this->value);
	}

	public function decrease(): self
	{
		if (0 === $this->value)
		{
			throw CannotChangeEngineSpeed::whenEngineIsOff();
		}

		return new self(--$this->value);
	}
}
