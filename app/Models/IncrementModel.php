<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncrementModel extends Model
{
    use HasFactory;

    protected $table ='INCREMENT_INFO';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'empno',
        'prev_designation',
        'cur_designation',
        'prev_ot_ent',
        'cur_ot_ent',
        'prev_gross',
        'incr_type',
        'increment_amt',
        'cur_gross',
        'incr_date',
        'remark_text',
        'prev_house_rent',
        'prev_medical',
        'prev_basic',
        'cur_house_rent',
        'cur_medical',
        'cur_basic',
        'effective_date',
        
    ];
}
