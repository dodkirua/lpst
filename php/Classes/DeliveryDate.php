<?php


class DeliveryDate{
    private ?int $id;
    private ?string $day;
    private ?string $time;

    /**
     * DeliveryDate constructor.
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
     * get the day
     * @return string|null
     */
    public function getDay(): ?string    {
        return $this->day;
    }

    /**
     * get the time
     * @return string|null
     */
    public function getTime(): ?string    {
        return $this->time;
    }

    /**
     * set the day
     * @param string|null $day
     * @return DeliveryDate
     */
    public function setDay(?string $day): DeliveryDate
    {
        $this->day = $day;
        return $this;
    }

    /**
     * set the time
     * @param string|null $time
     * @return DeliveryDate
     */
    public function setTime(?string $time): DeliveryDate
    {
        $this->time = $time;
        return $this;
    }

    /**
     * get the DeliveryDate data
     * @return array
     */
    public function getData() : array{
        $array['id'] = $this->getId();
        $array['day'] = $this->getDay();
        $array['time'] = $this->getTime();

        return $array;
    }

}