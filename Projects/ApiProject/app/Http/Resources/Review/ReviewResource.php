<?php

namespace App\Http\Resources\Review;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'product_name' => Product::where('id', $this->product_id)->first()->name,
            'customer' => $this->customer,
            'review' => $this->review,
            'star' => $this->star
        ];
    }
}
