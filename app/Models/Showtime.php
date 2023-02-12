<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     * $fillable: array of attributes that are mass assignable
     * $guarded: array of attributes that are not mass assignable
     * REMARK: the save() methode does not pass the guarded attributes!
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Relationship between models
     * hasMany('model', 'foreign_key', 'primary_key'):  method name is lowercase and plural case
     * belongsTo('model', 'foreign_key', 'primary_key')->withDefaults():  method name is lowercase and singular case
     */

    public function theater(){
        return $this->belongsTo(Theater::class)->withDefault(); // a showtime belongs to a theater
    }

    public function bookings(){
        return $this->hasMany(Booking::class); // a showtime has many bookings
    }

    public function movie(){
        return $this->belongsTo(Movie::class)->withDefault();// a showtime belongs to a movie
    }


    /**
     * Accessors and mutators (method name is the attribute name)
     * get: transform the attribute after it has retrieved from database
     * set: transform the attribute before it is sent to database
     */
    protected function priceEuro(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) =>  '€ ' . number_format($attributes['price'],2),
        );
    }


    /**
     * Add additional attributes that do not have a corresponding column in your database
     * REMARK: additional attributes are not automatically included to the model!
     *    - add the attributes to the $appends array to include them always to the model
     *    - or append the attributes in runtime with Model::get()->append([])
     */
    protected $appends = [];


    /**
     * Apply the scope to a given Eloquent query builder
     * prefix the method name with 'scope' e.g. 'scopeIsActive()'
     * Utilize the scope in the controller  Model::is_active()->get();
     */


    /**
     * Add attributes that should be hidden to the $hidden array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
