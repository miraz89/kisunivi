<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    const USER_ACTIVE = 'active';
    const USER_INACTIVE = 'inactive';
    const USER_PENDING = 'pending';
    const USER_BAN = 'ban';

    const STATUS_ACTIVE = 'Active';
    const STATUS_INACTIVE = 'Inactive';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'batch_name',
        'company_name',
        'position',
        'no_of_employee',
        'blood',
        'blood_donner',
        'gender',
        'about_you',
        'about_your_business',
        'address',
        'country',
        'nationality',
        'phone',
        'occupation',
        'email',
        'facebook',
        'status',
        'password',
        'profile_photo_path',
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public static function getPermissionGroups(){
        $permission_groups = DB::table('permissions')
            ->select('group_name as name')
            ->groupBy('group_name')
            ->get();

        return $permission_groups;
    }

    public static function getPermissionGroupName($groupName){
        $getPermissionGroupName = DB::table('permissions')
            ->select('name')
            ->where('group_name',$groupName)
            ->get();

        return $getPermissionGroupName;
    }
}
