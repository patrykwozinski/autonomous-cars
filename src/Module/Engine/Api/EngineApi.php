<?php
declare(strict_types=1);

namespace App\Module\Engine\Api;


interface EngineApi
{
	public function start(string $engineId): void;

	public function turnOff(string $engineId): void;

	public function increaseSpeed(string $engineId): void;

	public function decreaseSpeed(string $engineId): void;
}
