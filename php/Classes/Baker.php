<?php


class Baker{
    private ?int $id;
    private ?string $name;
    private ?int $addressId;

    /**
     * Baker constructor.
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
     * get the address id
     * @return int|null
     */
    public function getAddressId(): ?int    {
        return $this->addressId;
    }

    /**
     * set the name
     * @param string|null $name
     * @return Baker
     */
    public function setName(?string $name): Baker    {
        $this->name = $name;
        return $this;
    }

    /**
     * the the address id
     * @param int|null $addressId
     * @return Baker
     */
    public function setAddressId(?int $addressId): Baker    {
        $this->addressId = $addressId;
        return $this;
    }

    /**
     * return Baker information
     * @return array
     */
    public function getData() : array {

        $array['id'] = $this->getId();
        $array['name'] = $this->getName();
        $array['address_id'] = $this->getAddressId();

        return $array;
    }


}