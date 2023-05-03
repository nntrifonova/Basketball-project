<?php
namespace Server;
use Repo;

class Tags extends  Repo {
    // Table name.
    protected $tableName = 'Tags';

    // Primary key.
    protected $primaryKey = 'tags_id';

    // The attributes that are mass assignable.
    protected $fillable = ['text'];
}