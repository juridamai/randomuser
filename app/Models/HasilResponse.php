<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilResponse extends Model
{
    protected $table = "hasil_response";

    protected $primaryKey = "id";

    protected $fillable = ["jenis_kelamin","nama","nama_jalan","email","angka_kurang","angka_lebih","profesi","plain_json"];

}
