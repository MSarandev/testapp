<?php
/**
 * Created by PhpStorm.
 * User: maxsarandev
 * Date: 17/04/2018
 * Time: 13:58
 */

namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    // Define the inverse 1-1 relationship with the employee
    public function employee()
    {
        return $this->belongsTo('App\Http\Employee', 'name', 'company');
    }

}