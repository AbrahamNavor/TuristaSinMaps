<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{

    public $Titulo;
    public $Mensaje;
    public $Boton;


    public function __construct($Titulo, $Mensaje, $Boton)
    {
        $this->Titulo = $Titulo;
        $this->Mensaje = $Mensaje;
        $this->Boton = $Boton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }

}
