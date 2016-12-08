<?php

namespace ShiftOneLabs\LaravelCascadeDeletes\Tests\Models;

trait BootsCascadesDeletesTrait
{
    protected static function boot()
    {
        parent::boot();

        static::bootCascadesDeletes();
    }
}
