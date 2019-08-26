<?php

namespace LeosPartnerDto\Dto\Fulfilment;

class FulfilmentShipmentItem
{
    /** @var string */
    public $sku;

    /** @var int */
    public $quantity;

    /** @var float */
    public $price;

    /** @var string|null */
    public $ean;

    /** @var float|null */
    public $weight;

    /** @var array */
    public $datamatrixes = [];

    /** @return string */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setNomenclature($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string|null
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string|null $ean
     *
     * @return FulfilmentShipmentItem
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float|null $weight
     *
     * @return FulfilmentShipmentItem
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return array
     */
    public function getDatamatrixes()
    {
        return $this->datamatrixes;
    }

    /**
     * @param array $datamatrix
     *
     * @return FulfilmentShipmentItem
     */
    public function setDatamatrixes($datamatrixes)
    {
        $this->datamatrixes = $datamatrixes;

        return $this;
    }
}
