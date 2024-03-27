<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaCoBan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['maso'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ma_co_ban';


    /**
     * Define relationships if applicable.
     */
    // public function relatedModel()
    // {
    //     return $this->hasOne(RelatedModel::class);
    // }

    /**
     * Boot function to define model events.
     */
    protected static function boot()
    {
        parent::boot();

        // Example of model events
        // static::creating(function ($model) {
        //     // Your logic before creating the model
        // });

        // static::created(function ($model) {
        //     // Your logic after creating the model
        // });
    }

    /**
     * Custom method to generate code.
     *
     * @return string
     */
    public function generateCode()
    {
        // Your code generation logic here
    }
}
