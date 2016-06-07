<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
    * MassAssignmentException: The following are protected against mass assignment
    */
    protected $guarded = [
      'id'
    ];

    public function FA()
    {
      $batch = Batch::where([['admission_year',$this->admission_year],['stream',$this->stream]])->first();
      $fa = $batch->FA;
      return $fa;
    }


}
