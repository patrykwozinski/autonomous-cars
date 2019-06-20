<?php
declare(strict_types=1);

namespace App\EngineModule\Domain;


interface Engines
{
	public function oneById(EngineId $engineId): Engine;
}
