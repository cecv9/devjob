<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{

    use WithFileUploads;
    public $cv;
    public $vacante;
    protected $rules=[
        'cv'=>'required|mimes:pdf'
    ];

    public function mount(Vacante $vacante){

            $this->vacante =$vacante;



    }

    public function postularme()
    {

     $datos=   $this->validate();

        //Almacenar  CV 
        $cv = $this->cv->store('public/cv');
        $datos['cv']= str_replace('public/cv/','',$cv);


        //Crear el candidato a la Vacante
        $this->vacante->candidatos()->create([

            'user_id'=>auth()->user()->id,
            'cv'=>$datos['cv']

        ]);


        //Crear notificaciones y enviar el email



        //Mostrar el usuario un mensaje de ok
        session()->flash('mensaje','Se envio correctamente tu informacion , Mucha Suerte');
        return redirect()->back();

    }





            public function render()
    {
        return view('livewire.postular-vacante');
    }
}
