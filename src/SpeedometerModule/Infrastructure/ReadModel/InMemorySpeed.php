<?php
declare(strict_types=1);

namespace App\SpeedometerModule\Infrastructure\ReadModel;


use App\SpeedometerModule\Application\Query\CurrentSpeed\CurrentSpeedQuery;
use App\SpeedometerModule\Application\Query\CurrentSpeed\CurrentSpeedReadModel;

final class InMemorySpeed implements CurrentSpeedQuery
{
	public function byId(int $id): CurrentSpeedReadModel
	{
		return new CurrentSpeedReadModel(60);
	}
}
