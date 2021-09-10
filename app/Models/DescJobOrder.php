<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescJobOrder extends Model
{
    use HasFactory;

    protected $table = 'desc_job_order';

    protected $fillable = [
        'word_kz',
        'word_ru'
    ];
}
