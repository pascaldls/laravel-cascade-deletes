<?php

namespace ShiftOneLabs\LaravelCascadeDeletes\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class SoftProfile extends Profile
{
    use SoftDeletingTrait;

    protected $table = 'profiles';

    public function user()
    {
        return $this->belongsTo('\ShiftOneLabs\LaravelCascadeDeletes\Tests\Models\User');
    }
}
