<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBox extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'table_box_home';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nameBox_US',
        'descriptionBox_US',
        'nameBox_VN',
        'descriptionBox_VN',
        'image',
        'target_url',
        'active'

    ];
}
