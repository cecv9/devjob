<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{
    public function render()
    {

        //consultra BD
        $salarios=Salario::all();
        $categorias= Categoria::all();

        return view('livewire.crear-vacante',[
            'salarios'=>$salarios,
            'categorias'=>$categorias
        ]);
    }
}
