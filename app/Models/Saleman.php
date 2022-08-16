<?php

namespace App\Models;

use App\Notifications\ResetPassword as ResetPasswordNotification;
use App\Notifications\VerifyEmail as VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Saleman extends Authenticatable implements mustVerifyEmail
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'code',
        'birthcode',
        'market_name'

    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birth_certi_verified_at',
        'pic_verify',
    ];




    public function products()
    {
        return $this->belongsToMany(Product::class);

    }
    public function carts()
    {

        return $this->belongsToMany(Cart::class);
    }

    public function orders()
    {

        return $this->belongsToMany(Order::class);
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }
    public function hasTwoFactorAuthenticatedEnabled()
    {
        return $this->two_factor_type !== 'off';
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
    public function sendEmailVerificationNotification(){
        $this->notify(new VerifyEmail());
    }

    public function activeCode()
    {
        return $this->hasMany(ActiveCode::class);
    }

    public function commments()
    {
        return $this->belongsToMany(Comment::class);
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
