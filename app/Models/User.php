<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'hired',
        'commission',
        'manager_id',
        'department',
        'job_id',
        'salary',
        'password',
        'is_role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    static public function getRecord(Request $request)
    {
        //without search 
        // $return = self::select('users.*')
        //     ->orderBy('id', 'desc')
        //     ->paginate(20);
        // return $return;

        // Search Tables
        $return = self::select('users.*');

        // search term
        $search = $request->get('search');
        if (!empty($search)) {
            $return = $return->where('firstname', 'like', '%' . $search . '%')
                ->orWhere('lastname', 'like', '%' . $search . '%')
                ->orWhere('salary', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('department', 'like', '%' . $search . '%')
                ->orWhere('salary', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%');
        }

        $return = $return->orderBy('id', 'desc')
            ->paginate(20);

        return $return;
    }

    //fetch jobs based on user table job id
    public function user_job()
    {
        return $this->belongsTo(Jobs::class, 'job_id');
    }
}
