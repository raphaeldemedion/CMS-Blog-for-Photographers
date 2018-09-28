<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name for your records
    protected $table = 'posts';

    protected $fillable = [
        'post_title',
        'post_content',
        'add_cover_images_to_posts',
    ];
    // Primary Key for your records
    public $primaryKey ='id';
    // Public Timestamps for your records
    public $timeStamps = 'true';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
