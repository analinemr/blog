<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//USE para Relacionamento 1x1
use Illuminate\Database\Eloquent\Relations\HasOne;

class Postagem extends Model
{
    protected $table = 'postagens';

    //Relacionamento 1x1 para retornar o nome da categoria ao puxar o ID pela postagem
    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

}
