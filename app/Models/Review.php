<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Review extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'content_id',
        'status',
        'user_id',
        'IP',
        'subject',
        'review',
        'rate',
    ];

    public function content(){
        return $this->belongsTo(Content::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
