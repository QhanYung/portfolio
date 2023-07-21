<?php

namespace App\Models\HumanResources;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use App\Models\Model;

// db relation class to load
use Illuminate\Database\Eloquent\Relations\HasOne;
// use Illuminate\Database\Eloquent\Relations\HasOneThrough;
// use Illuminate\Database\Eloquent\Relations\HasOneOrMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class HRLeaveApprovalDirector extends Model
{
    use HasFactory;
    // protected $connection = 'mysql';
    protected $table = 'hr_leave_approval_directors';

    /////////////////////////////////////////////////////////////////////////////////////////
    // hasmany relationship
    /////////////////////////////////////////////////////////////////////////////////////////
    // belongsto relationship
    public function belongstostaff(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Staff::class, 'staff_id')->withDefault([
            'name' => 'No data'
        ]);
    }

    public function belongstostaffleave(): BelongsTo
    {
        return $this->belongsTo(HumanResources\HRLeave::class, 'staff_leave_id')->withDefault([
            'name' => 'No data'
        ]);
    }

    public function belongstoleavestatus(): BelongsTo
    {
        return $this->belongsTo(\App\Models\HumanResources\OptLeaveStatus::class, 'leave_status_id')->withDefault([
            'name' => 'No data'
        ]);
    }
}
