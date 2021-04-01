<?php


class BakerDelivery{
    private ?int $id;
    private ?int $bakerId;
    private ?int $deliveryDateId;

    /**
     * BakerDelivery constructor.
     * @param int|null $id
     */
    public function __construct(?int $id)    {
        $this->id = $id;
    }

    /**
     * get id
     * @return int|null
     */
    public function getId(): ?int    {
        return $this->id;
    }

    /**
     * get baker id
     * @return int|null
     */
    public function getBakerId(): ?int    {
        return $this->bakerId;
    }

    /**
     * get delivery date id
     * @return int|null
     */
    public function getDeliveryDateId(): ?int    {
        return $this->deliveryDateId;

    }

    /**
     * set the baker id
     * @param int|null $bakerId
     * @return BakerDelivery
     */
    public function setBakerId(?int $bakerId): BakerDelivery
    {
        $this->bakerId = $bakerId;
        return $this;
    }

    /**
     * set the delivery date id
     * @param int|null $deliveryDateId
     * @return BakerDelivery
     */
    public function setDeliveryDateId(?int $deliveryDateId): BakerDelivery
    {
        $this->deliveryDateId = $deliveryDateId;
        return $this;
    }

    public function getData() : array {
        $array['id'] = $this->getId();
        $array['baker_id'] = $this->getBakerId();
        $array['delivery_date_id'] = $this->getDeliveryDateId();

        return $array;
    }

}