<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [

            [
                'category' => ['PHP', 'JavaScript'],
                'title' => 'E-commerce website with PHP and JavaScript',
                'image' => url('/img/yii2-ecommerce.jpg'),
                'github' => 'https://github.com/sejesila/jamboshop'
            ],
            [
                'category' => ['PHP', 'Laravel'],
                'title' => 'Laravel MPESA Integration',
                'image' => url('/img/laravel-rest-api.png'),
                'github' => 'https://github.com/sejesila/mpesa-laravel-integration'
            ],

            [
                'category' => ['JavaScript'],
                'title' => 'CyWeather application',
                'image' => url('/img/cyweather.jpg'),
                'github' =>  'https://github.com/sejesila/mpesa-laravel-integration'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
