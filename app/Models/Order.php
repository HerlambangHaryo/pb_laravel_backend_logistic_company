<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User; 

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'no_job',
        'nama_pengirim',
        'alamat_pengirim',
        'provinsi_pengirim',
        'kota_pengirim',
        'kecamatan_pengirim',
        'kelurahan_pengirim',
        'latitude_pengirim',
        'longitude_pengirim',
        'nama_penerima',
        'alamat_penerima',
        'provinsi_penerima',
        'kota_penerima',
        'kecamatan_penerima',
        'kelurahan_penerima',
        'latitude_penerima',
        'longitude_penerima',
        'is_asuransi',
        'admin_id',
        'is_approval',
        'total_biaya',
        'is_deliver',
        'is_user_accept', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }

    protected $hidden = ["deleted_at"];
}
