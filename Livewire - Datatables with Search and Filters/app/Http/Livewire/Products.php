<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $searchColumnsName, $searchColumnsPriceMin, $searchColumnsPriceMax, $searchColumnsDescription, $searchColumnsCategoryId;



    public function render()
    {
        $query = Product::query();

        $query->when($this->searchColumnsName != "", function($q){
            return $q->where('product_name', 'ilike', '%'.$this->searchColumnsName.'%');
        });

        $query->when($this->searchColumnsPriceMin != "" || $this->searchColumnsPriceMax != "" , function($q){

            if($this->searchColumnsPriceMin != "" && $this->searchColumnsPriceMax != ""){

                return $q->whereBetween('product_price', [$this->searchColumnsPriceMin, $this->searchColumnsPriceMax]);

            }else if($this->searchColumnsPriceMin != ""){

                return $q->where('product_price', '>=', $this->searchColumnsPriceMin);

            }else if($this->searchColumnsPriceMax != ""){

                return $q->where('product_price', '<=', $this->searchColumnsPriceMax);

            }

        });

        $query->when($this->searchColumnsDescription != "", function($q){
            return $q->where('description', 'ilike', '%'.$this->searchColumnsDescription.'%');
        });

        $query->when($this->searchColumnsCategoryId != "", function($q){
            return $q->where('category_id', $this->searchColumnsCategoryId);
        });



        $products = $query->latest()->paginate(5);

        return view('livewire.products', compact('products'));
    }
}
