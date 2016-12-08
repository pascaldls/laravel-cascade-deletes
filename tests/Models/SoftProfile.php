<?php

namespace ShiftOneLabs\LaravelCascadeDeletes\Tests\Models;

class SoftProfile extends Profile
{
    protected $softDelete = true;

    protected $table = 'profiles';

    public function user()
    {
        return $this->belongsTo('\ShiftOneLabs\LaravelCascadeDeletes\Tests\Models\User');
    }
}
