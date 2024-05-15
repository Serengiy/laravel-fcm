<?php

namespace App\Models;

use App\Notifications\FirebaseNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    protected $with = [
        'fcmTokens'
    ];

    public function fcmTokens()
    {
        return $this->hasMany(FcmToken::class, 'user_id', 'id');
    }

    public function routeNotificationForFcm(FirebaseNotification $notification)
    {
        return $this->getDeviceToken($notification);   // <- can be array of tokens
    }

    private function getDeviceToken(FirebaseNotification $notification):string
    {
        $record = $this->fcmTokens->where('type', $notification->type)->first();
        if($record){
            return $record->token;
        }
        return '';
    }

}
