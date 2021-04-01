<?php


class Bread{
    private ?int $id;
    private ?string $name;
    private ?float $price;
    private ?float $weight;
    private ?string $description;
    private ?string $image;
    private ?int $bakerId;

    /**
     * Bread constructor.
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
     * get the name
     * @return string|null
     */
    public function getName(): ?string    {
        return $this->name;
    }

    /**
     * get the price
     * @return float|null
     */
    public function getPrice(): ?float    {
        return $this->price;
    }

    /**
     * get the weight
     * @return float|null
     */
    public function getWeight(): ?float    {
        return $this->weight;
    }

    /**
     * get the description
     * @return string|null
     */
    public function getDescription(): ?string    {
        return $this->description;
    }


    /**
     * get the baker id
     * @return int|null
     */
    public function getBakerId(): ?int    {
        return $this->bakerId;
    }

    /**
     * get image
     * @return string|null
     */
    public function getImage(): ?string    {
        return $this->image;
    }

    /**
     * set the name
     * @param string|null $name
     * @return Bread
     */
    public function setName(?string $name): Bread    {
        $this->name = $name;
        return $this;
    }

    /**
     * set the price
     * @param float|null $price
     * @return Bread
     */
    public function setPrice(?float $price): Bread
    {
        $this->price = $price;
        return $this;
    }

    /**
     * set the weight
     * @param float|null $weight
     * @return Bread
     */
    public function setWeight(?float $weight): Bread
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * set description
     * @param string|null $description
     * @return Bread
     */
    public function setDescription(?string $description): Bread
    {
        $this->description = $description;
        return $this;
    }

    /**
     * set the baker id
     * @param int|null $bakerId
     * @return Bread
     */
    public function setBakerId(?int $bakerId): Bread
    {
        $this->bakerId = $bakerId;
        return $this;
    }

    /**
     * @param int|null $image
     * @return Bread
     */
    public function setImage (?int $image): Bread    {
        $this->image = $image;
        return $this;
    }

    public function getData() : array {

        $array['id'] = $this->getId();
        $array['name'] = $this->getName();
        $array['price'] = $this->getPrice();
        $array['weight'] = $this->getWeight();
        $array['description'] = $this->getDescription();
        $array['image'] = $this->getImage();
        $array['baker_id'] = $this->getBakerId();
        return $array;
    }



}