<?php

namespace App\DTO;

class LowestPriceEnquiry implements PromotionEnquryInterface
{
    private ?int $productId;

    private ?int $quantity;

    private ?string $requestLocation;

    private ?string $requestDate;

    private ?string $voucherCode;

    private ?string $price;

    private ?int $discountedPrice;

    private ?string $promotionName;

    /**
     * @return int|null
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int|null $productId
     * @return static
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int|null $quantity
     * @return static
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequestLocation(): ?string
    {
        return $this->requestLocation;
    }

    /**
     * @param string|null $requestLocation
     * @return static
     */
    public function setRequestLocation(?string $requestLocation): self
    {
        $this->requestLocation = $requestLocation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequestDate(): ?string
    {
        return $this->requestDate;
    }

    /**
     * @param string|null $requestDate
     * @return static
     */
    public function setRequestDate(?string $requestDate): self
    {
        $this->requestDate = $requestDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVoucherCode(): ?string
    {
        return $this->voucherCode;
    }

    /**
     * @param string|null $voucherCode
     * @return static
     */
    public function setVoucherCode(?string $voucherCode): self
    {
        $this->voucherCode = $voucherCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * @param string|null $price
     * @return static
     */
    public function setPrice(?string $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDiscountedPrice(): ?int
    {
        return $this->discountedPrice;
    }

    /**
     * @param int|null $discountedPrice
     * @return static
     */
    public function setDiscountedPrice(?int $discountedPrice): self
    {
        $this->discountedPrice = $discountedPrice;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    /**
     * @param string|null $promotionName
     * @return static
     */
    public function setPromotionName(?string $promotionName): self
    {
        $this->promotionName = $promotionName;
        return $this;
    }


}