<?php
namespace App\Models;
use Core\Repo;

class Tags extends  Repo {
    // Table name.
    protected $tableName = 'Tags';

    // Primary key.
    protected $primaryKey = 'tags_id';

    // The attributes that are mass assignable.
    protected $fillable = ['text'];
}