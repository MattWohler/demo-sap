<?php

namespace Containers\User\Models;

use Altek\Accountant\Recordable;
use Altek\Eventually\Eventually;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Containers\Publisher\Models\Publisher;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Containers\Publisher\Containers\Deal\Models\Deal;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Altek\Accountant\Contracts\Recordable as RecordableContract;
use Containers\User\Containers\Permission\Traits\ExposePermissions;

class User extends Authenticatable implements RecordableContract
{
    use Notifiable, HasRoles, Recordable, Eventually, ExposePermissions;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = [
        'full_name', 'all_permissions', 'can',
    ];

    public function publishers() : BelongsToMany
    {
        return $this->belongsToMany(Publisher::class);
    }

    public function deals() : BelongsToMany
    {
        return $this->belongsToMany(Deal::class, 'user_deal');
    }

    public function getFullNameAttribute() : string
    {
        return sprintf('%s %s', $this->first_name, $this->last_name);
    }

    public function setPasswordAttribute($value) : void
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
