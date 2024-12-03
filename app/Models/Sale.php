<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Sale extends Model
{
    
    use HasFactory;
    protected $fillable=[
    'client_id','product_id','sale_date'];

                    //funcion client
    public function client():BelongsTo{
        return $this->belongsTo(Client::class,'client_id');
    }

                    //funcion product
    public function product():BelongsTo{
        return $this->belongsTo(Product::class,'product_id');
    }
}
