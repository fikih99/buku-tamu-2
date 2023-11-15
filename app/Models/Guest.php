<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $nullable =['tanggal_checkout'];    
    protected $guarded =['id'];    
    public function petugascheckin() {
        return $this->belongsTo(user::class,'petugas_checkin' ,'id');
        //model tamu ini di miliki oleh user satu user atau satu petugas
    }
    public function petugascheckout() {
        return $this->belongsTo(user::class,'petugas_checkout' ,'id');
        //model tamu ini di miliki oleh user satu user atau satu pengguna 
}

}
