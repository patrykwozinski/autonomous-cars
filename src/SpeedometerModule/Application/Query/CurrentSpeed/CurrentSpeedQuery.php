<?php
declare(strict_types=1);

namespace App\SpeedometerModule\Application\Query\CurrentSpeed;


interface CurrentSpeedQuery
{
	public function byId(int $id): CurrentSpeedReadModel;
}
