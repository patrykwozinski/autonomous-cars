<?php
declare(strict_types=1);

namespace App\Module\Engine\Api;


use App\Module\Engine\Main\Domain\Exception\CannotStartEngine;
use App\Module\Engine\Main\Domain\Exception\CannotStopEngine;

interface Engine
{
	/** @throws CannotStartEngine */
	public function start(string $engineId): void;

	/** @throws CannotStopEngine */
	public function turnOff(string $engineId): void;

	public function increaseSpeed(string $engineId): void;

	public function decreaseSpeed(string $engineId): void;
}
