<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model

{
  protected $fillable = [
    "name",
    "description"
  ];

  // Task model
  public function employee() {
  return $this -> belongsTo(Employee::class);
  }
}
