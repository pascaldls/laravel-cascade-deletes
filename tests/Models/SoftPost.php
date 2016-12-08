<?php

namespace ShiftOneLabs\LaravelCascadeDeletes\Tests\Models;

class SoftPost extends Post
{
    protected $softDelete = true;

    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo('\ShiftOneLabs\LaravelCascadeDeletes\Tests\Models\SoftUser');
    }

    public function childPosts()
    {
        return $this->hasMany('\ShiftOneLabs\LaravelCascadeDeletes\Tests\Models\SoftPost', 'parent_id');
    }

    public function parentPost()
    {
        return $this->belongsTo('\ShiftOneLabs\LaravelCascadeDeletes\Tests\Models\SoftPost', 'parent_id');
    }

    public function comments()
    {
        return $this->hasMany('\ShiftOneLabs\LaravelCascadeDeletes\Tests\Models\Comment', 'post_id');
    }
}
