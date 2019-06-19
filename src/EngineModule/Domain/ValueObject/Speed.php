<?php
declare(strict_types=1);

namespace App\EngineModule\Domain\ValueObject;


final class Speed
{
	private $value;

	public function __construct(int $value)
	{
		$this->value = $value;
	}
}
