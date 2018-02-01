<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ServiceScope;

class Service extends Model
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ServiceScope);
    }

}
