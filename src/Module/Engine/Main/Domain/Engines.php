<?php
declare(strict_types=1);

namespace App\Module\Engine\Main\Domain;


interface Engines
{
	public function oneById(EngineId $engineId): Engine;
}
