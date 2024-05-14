<?php
namespace Modules\Contacts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
    ];
}
