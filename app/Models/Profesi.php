<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesi extends Model
{
    protected $table = "nama_profesi";

    protected $primaryKey = "id";

    protected $fillable = ["kode","nama_profesi"];

    public function response(){
        return $this->belongsTo(HasilResponse::class, 'kode', 'profesi');
    }
}
