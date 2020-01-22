<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Task::class, 100)
      // classico modello da callback
            -> make()
            -> each(function($task) {
          $emp = Employee::inRandomOrder() -> first();
          // freccia 2 cose
          $task -> employee() -> associate($emp);
          $task -> save();
      });
    }
}
