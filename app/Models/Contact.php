<?php

namespace App\Models;

 
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable=['contact_type','identity_number','full_name','nick_name','fname','sname','tname','','lname','responsible','address_id','short_description','description','personal_phone_primary','personal_phone_secondary','work_phone_primary','work_phone_secondary','note','attchments','properties','isFavorite'];

    protected $casts =[
        'attchments' => 'json',
        'properties' => 'json',
    ];

    public function contactTypeName() {
        return $this->hasOne(Status::class,'id','contact_type');
    }

    public static function rules($name) {
        return [
           $name=>['required'],
        ];
    }

}

















