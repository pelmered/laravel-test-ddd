<?php

namespace Domain\Test\Models;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends BaseModel
{
    use SoftDeletes;

    protected $casts = [];
}
