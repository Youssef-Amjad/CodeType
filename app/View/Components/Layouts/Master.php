<?php

namespace App\View\Components\Layouts;

use App\Enums\ThemeEnum;
use Illuminate\View\Component;
use Illuminate\View\View;

class Master extends Component
{

    public ThemeEnum $theme = ThemeEnum::LIGHT;


    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $description,
        public string $keywords,
        public string $image = '',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.master');
    }

    public function getTheme(): ThemeEnum
    {
        return $this->theme;
    }
}
