<?php


class Address{
    private ?int $id;
    private ?string $street;
    private ?string $complement = null;
    private ?int $number;
    private ?string $zip;
    private ?string $city;
    private ?string $country;

    /**
     * Address constructor.
     * @param int|null $id
     */
    public function __construct(?int $id)
    {
        $this->id = $id;
    }

    /**
     * get the id
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * get street
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * get complement
     * @return string|null
     */
    public function getComplement(): ?string
    {
        return $this->complement;
    }

    /**
     * get number
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * get zip code
     * @return string|null
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * get city
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * get country
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * get street
     * @param string|null $street
     * @return Address
     */
    public function setStreet(?string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * set complement
     * @param string|null $complement
     * @return Address
     */
    public function setComplement(?string $complement): Address
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * set the number
     * @param int $number
     * @return Address
     */
    public function setNumber(int $number): Address
    {
        $this->number = $number;
        return $this;
    }

    /**
     * set zip code
     * @param string|null $zip
     * @return Address
     */
    public function setZip(?string $zip): Address
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * set city
     * @param string|null $city
     * @return Address
     */
    public function setCity(?string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * set country
     * @param string|null $country
     * @return Address
     */
    public function setCountry(?string $country): Address
    {
        $this->country = $country;
        return $this;
    }
    
    /**
     * return the list of data minimal for an Address
     * @return array
     */
    public function getData() : array{
        $AddressArray['id'] = $this->getId();
        $AddressArray['street'] = $this->getStreet();
        $AddressArray['complement'] = $this->getComplement();
        $AddressArray['number'] = $this->getNumber();
        $AddressArray['zip'] = $this->getZip();
        $AddressArray['city'] = $this->getCity();
        $AddressArray['country'] = $this->getCountry();
        return $AddressArray;
    }

}