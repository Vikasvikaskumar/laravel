<?php
 
 namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class stock extends Model
{
    // public $table = 'stock';
    protected $fillable = [
        'stock_name',
        'ticket',
        'value'       
    ];
    // public $timestamps = false;
}