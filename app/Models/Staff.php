<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

// db relation class to load
// use Illuminate\Database\Eloquent\Relations\HasOne;
// use Illuminate\Database\Eloquent\Relations\HasOneThrough;
// use Illuminate\Database\Eloquent\Relations\HasOneOrMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\Relations\HasManyThrough;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\BelongsToMany;


// class Staff extends Model
class Staff extends Authenticatable
{
    use Notifiable, HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'staffs';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'status_id', 'image', 'name', 'email', 'id_card_passport', 'location_id', 'leave_need_backup', 'religion_id', 'gender_id', 'race_id', 'address', 'place_of_birth', 'country_id', 'marital_status_id', 'mobile', 'phone', 'dob', 'cimb_account', 'epf_no', 'income_tax_no', 'active', 'join_at', 'confirmed_at', 'resignation_letter_at', 'resign_at', 'remarks'
    ];

    public function getEmailForPasswordReset()
    {
        return $this->email;
    }

    // this is important for sending email
    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }

	/////////////////////////////////////////////////////////////////////////////////////////////////////
	// db relation hasMany/hasOne
    public function hasmanylogin(): HasMany
    {
        return $this->hasMany(Login::class, 'staff_id');
    }

    public function hasmanyemergency()
    {
        return $this->hasMany(HumanResources\HREmergency::class, 'staff_id');
    }

    public function hasmanyleaveentitlements()
    {
        return $this->hasMany(HumanResources\HRLeaveEntitlements::class, 'staff_id');
    }

	/////////////////////////////////////////////////////////////////////////////////////////////////////
	// db relation belongsTo
    /////////////////////////////////////////////////////////////////////////////////////////////////////
}
