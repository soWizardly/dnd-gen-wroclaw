<?php

  use Illuminate\Database\Seeder;

  class ClassSeeder extends Seeder
  {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\DndClass::insert([
        ['name' => "Fighter", "stat" => "str"],
        ['name' => "Barbarian", "stat" => "con"],
        ['name' => "Cleric", "stat" => "wis"],
        ['name' => "Wizard", "stat" => "int"],
        ['name' => "Sorcerer", "stat" => "cha"],
        ['name' => "Rogue", "stat" => "dex"]
      ]);
    }
  }
