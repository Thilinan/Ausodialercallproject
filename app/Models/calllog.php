<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calllog extends Model
{
    use HasFactory;
    protected $fillable = [
        'SCO1',
        'SCO2',
        'Contact_no',
        'Land_no',
        'Customer_name',
        'Product_Description',
        'language',
        'Model_Description',
        'Status',
        'Status_1',
        'Status_2',
        'Description',
        'Comment'
    ];

}
