<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    const OTHER = 0;
    const MALE = 1;
    const FEMALE = 2;

    const SAD = 2;
    const HAPPY = 1;

    const SUSCRIBE = 1;
    const NOT_SUSCRIBE = 0;

    protected $casts = [
      'gender' => 'integer',
      'mood' => 'integer',
    ];

    public function news() {
        return $this->hasMany('App\News');
    }

    public static function gender($gender){
        $genders = [
            self::OTHER => 'Other',
            self::MALE => 'Homme',
            self::FEMALE => 'Femme'
        ];
        return $genders[$gender];
    }

    public static function mood($mood){
        $moods = [
            self::OTHER => 'Other',
            self::SAD => 'Triste',
            self::HAPPY => 'Heureux'
        ];
        return $moods[$mood];
    }

    public static function newsletter($newsletter){
        $newsletters = [
            self::OTHER => 'Other',
            self::SUSCRIBE => 'Abonné',
            self::NOT_SUSCRIBE => 'Non Abonné'
        ];
        return $newsletters[$newsletter];
    }
}
