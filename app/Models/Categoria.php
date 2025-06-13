<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use OwenIt\Auditing\Auditable;

class Categoria extends Model implements AuditableContract
{
    use Auditable;

    protected $table = 'Categorias';

    protected $fillable = ['nome'];
}
