<?php

namespace App\Filter;

use App\DTO\PromotionEnquiryInterface;

class LowestPriceFilter implements PromotionsFilterInterface
{

    public function apply(PromotionEnquiryInterface $promotionEnquiry): PromotionEnquiryInterface
    {
        $promotionEnquiry->setPrice(1000)->setPromotionName('ZARAsss SALE');

        return $promotionEnquiry;
    }
}