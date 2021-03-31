<?php

class BreadReservation{
    private ?int $id;
    private ?float $amount;
    private ?int $breadId;
    private ?int $reservationId;

    /**
     * BreadReservation constructor.
     * @param int|null $id
     */
    public function __construct(?int $id)    {
        $this->id = $id;
    }

    /**
     * get the id
     * @return int|null
     */
    public function getId(): ?int    {
        return $this->id;
    }

    /**
     * get amount
     * @return float|null
     */
    public function getAmount(): ?float    {
        return $this->amount;
    }

    /**
     * get bread id
     * @return int|null
     */
    public function getBreadId(): ?int    {
        return $this->breadId;
    }

    /**
     * get reservation id
     * @return int|null
     */
    public function getReservationId(): ?int    {
        return $this->reservationId;
    }

    /**
     * set the amount
     * @param float|null $amount
     * @return BreadReservation
     */
    public function setAmount(?float $amount): BreadReservation
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * set the bread id
     * @param int|null $breadId
     * @return BreadReservation
     */
    public function setBreadId(?int $breadId): BreadReservation
    {
        $this->breadId = $breadId;
        return $this;
    }

    /**
     * set the reservation id
     * @param int|null $reservationId
     * @return BreadReservation
     */
    public function setReservationId(?int $reservationId): BreadReservation
    {
        $this->reservationId = $reservationId;
        return $this;
    }

    /**
     * return bread reservation data
     * @return array
     */
    public function getData() : array {
        $array['id'] = $this->getId();
        $array['amount'] = $this->getAmount();
        $array['bread_id'] = $this->getBreadId();
        $array['reservation_id'] = $this->getReservationId();

        return $array;
    }

}