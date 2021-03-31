<?php


class Reservation{
    private ?int $id;
    private ?int $date;
    private ?int $delivery;
    private ?string $reservationNum;
    private int $validated = 0;
    private ?int $userId;

    /**
     * Reservation constructor.
     * @param int|null $id
     */
    public function __construct(?int $id)    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getDate(): ?int    {
        return $this->date;
    }

    /**
     * @return int|null
     */
    public function getDelivery(): ?int    {
        return $this->delivery;
    }

    /**
     * @return string|null
     */
    public function getReservationNum(): ?string    {
        return $this->reservationNum;
    }

    /**
     * @return int
     */
    public function getValidated(): int    {
        return $this->validated;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int    {
        return $this->userId;
    }

    /**
     * @param int|null $date
     * @return Reservation
     */
    public function setDate(?int $date): Reservation    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param int|null $delivery
     * @return Reservation
     */
    public function setDelivery(?int $delivery): Reservation    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * @param string|null $reservationNum
     * @return Reservation
     */
    public function setReservationNum(?string $reservationNum): Reservation
    {
        $this->reservationNum = $reservationNum;
        return $this;
    }

    /**
     * @param int $validated
     * @return Reservation
     */
    public function setValidated(int $validated): Reservation    {
        $this->validated = $validated;
        return $this;
    }

    /**
     * @param int|null $userId
     * @return Reservation
     */
    public function setUserId(?int $userId): Reservation    {
        $this->userId = $userId;
        return $this;
    }

    public function getData() : array {
        $userArray['id'] = $this->getId();
        $userArray['date'] = $this->getDate();
        $userArray['delivery'] = $this->getDelivery();
        $userArray['reservation_num'] = $this->getReservationNum();
        $userArray['validated'] = $this->getValidated();
        $userArray['user_id'] = $this->getUserId();
        return $userArray;
}

}