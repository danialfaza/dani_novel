<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{

   protected $table = 'novel';
   protected $fillable = ['judul','penerbit','penulis','thn_terbit','kategori','harga','gambar','sinopsis'];
}
