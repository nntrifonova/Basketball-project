<?php

namespace Server\App;

use Server\Repo;

class Posts extends Repo
{
    // Table name.
    protected $tableName = 'Posts';

    // Primary key.
    protected $primaryKey = 'posts_id';

    // The attributes that are mass assignable.
    protected $fillable = ['title', 'text', 'image', 'date'];

}