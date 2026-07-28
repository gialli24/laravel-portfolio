<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function technologies() {
        return $this->BelongsToMany(Technology::class);
    }
}
