<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text'
    ];

    /**
     * Get the formatted date.
     *
     * @param  date  $value
     * @return string
     */
    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('F j, Y');
    }
}
