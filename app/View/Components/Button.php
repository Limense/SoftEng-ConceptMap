<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $href;
    public $bgColor;
    public $textColor;

    public function __construct($href = '#', $bgColor = 'bg-red-primary', $textColor = 'text-white')
    {
        $this->href = $href;
        $this->bgColor = $bgColor;
        $this->textColor = $textColor;
    }

    public function render()
    {
        return view('components.button');
    }
}