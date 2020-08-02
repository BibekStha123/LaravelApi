<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->detail,
            'price' => $this->price,
            'stock' => $this->stock == 0 ? 'No stock' : $this->stock,
            'discount' => $this->discount,
            'totalPrice' => $this->price - (($this->discount / 100) * $this->price),
            'href' => [
                'reviews' => route('reviews.index', $this->id)
            ]
        ];
    }
}
