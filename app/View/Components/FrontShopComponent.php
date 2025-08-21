<?php

namespace App\View\Components;

use Closure;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FrontShopComponent extends Component
{
    //protected $categories ; 
    //protected $data;
    //protected $id ;
    
    
    public function __construct(/*$id = null*/)
    {
       // $this->categories = Category::paginate(4);
       // if ($id) {
       //     $this->data = Category::find($id);
       // }
       //  else {
       // $this->data = null;
       //}
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-shop-component', [
           // 'categories' => $this->categories,
            //'data' => $this->data
        ]);
    }
}
