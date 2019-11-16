<?php

namespace App\Observers;

use App\Character;
use App\DndClass;
use Illuminate\Support\Facades\Log;

class CharacterObserver
{
    /**
     * Handle the character "created" event.
     *
     * @param  \App\Character  $character
     * @return void
     */
    public function created(Character $character)
    {
        // Assign Character Class
        $stat = $character->only(["str", "dex", "con", "int", "wis", "cha"]);

        arsort($stat);

        $stat = array_key_first($stat);

        $class = DndClass::where("stat", $stat)->limit(1)->first();

        $character->class_id = $class->id;

        $character->save();

        // Log new character
        Log::info("New Character {$character->name} the {$class->name} generated");

    }

    /**
     * Handle the character "updated" event.
     *
     * @param  \App\Character  $character
     * @return void
     */
    public function updated(Character $character)
    {
        //
    }

    /**
     * Handle the character "deleted" event.
     *
     * @param  \App\Character  $character
     * @return void
     */
    public function deleted(Character $character)
    {
        //
    }

    /**
     * Handle the character "restored" event.
     *
     * @param  \App\Character  $character
     * @return void
     */
    public function restored(Character $character)
    {
        //
    }

    /**
     * Handle the character "force deleted" event.
     *
     * @param  \App\Character  $character
     * @return void
     */
    public function forceDeleted(Character $character)
    {
        //
    }
}
