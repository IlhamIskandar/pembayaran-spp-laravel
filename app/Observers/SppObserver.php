<?php

namespace App\Observers;

use App\Models\Spp;

class SppObserver
{
    /**
     * Handle the Spp "created" event.
     *
     * @param  \App\Models\Spp  $spp
     * @return void
     */
    public function created(Spp $spp)
    {
        //
    }

    /**
     * Handle the Spp "updated" event.
     *
     * @param  \App\Models\Spp  $spp
     * @return void
     */
    public function updated(Spp $spp)
    {
        //
    }

    /**
     * Handle the Spp "deleted" event.
     *
     * @param  \App\Models\Spp  $spp
     * @return void
     */
    public function deleted(Spp $spp)
    {
        //
    }

    /**
     * Handle the Spp "restored" event.
     *
     * @param  \App\Models\Spp  $spp
     * @return void
     */
    public function restored(Spp $spp)
    {
        //
    }

    /**
     * Handle the Spp "force deleted" event.
     *
     * @param  \App\Models\Spp  $spp
     * @return void
     */
    public function forceDeleted(Spp $spp)
    {
        //
    }
}
