<?php


namespace app\models;


use fw\core\base\Model;

class Contact extends Model
{
    public $attributes = [
        'name' => '',
        'email' => '',
        'phone' => '',
        'textarea' => '',
    ];

    public $rules = [
      'required' => [
          ['name'],
          ['email'],
          ['phone'],
          ['textarea'],
      ],
    ];
}



















