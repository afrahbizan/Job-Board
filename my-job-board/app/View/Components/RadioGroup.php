<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RadioGroup extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public array $options

    ) {
        //
    }

    public function optionsWithLabels(): array
    {
        if (array_is_list($this->options)) {
            return array_combine(
                array_map('ucfirst', $this->options),
                $this->options
            );
        }
        return $this->options;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.radio-group');
    }
}
