<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  /**
  * MassAssignmentException: The following are protected against mass assignment
  */
  protected $guarded = [
    'id'
  ];
}
