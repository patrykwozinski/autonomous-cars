<?php
declare(strict_types=1);

namespace App\EngineModule\Domain\ValueObject;


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
		return new self(++$this->value);
	}

	public function decrease(): self
	{
		return new self(--$this->value);
	}
}
