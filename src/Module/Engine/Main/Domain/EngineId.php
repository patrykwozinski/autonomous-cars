<?php
declare(strict_types=1);

namespace App\Module\Engine\Main\Domain;


final class EngineId
{
	/** @var string */
	private $id;

	private function __construct(string $id)
	{
		$this->id = $id;
	}

	public static function fromString(string $id): self
	{
		return new self($id);
	}

	public function __toString(): string
	{
		return $this->id;
	}
}
