<?php
/**
 * Created by PhpStorm.
 * User: maxsarandev
 * Date: 17/04/2018
 * Time: 14:14
 */

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // define guarded
    protected $guarded = ['id'];
    // define fillable
    protected $fillable = ['firstName', 'lastName', 'company', 'email', 'phone'];


    // Basic 1-1 relationship with companies (override the foreign key)
    public function company()
    {
        return $this->hasOne('App\Http\Company', 'company');
    }

}