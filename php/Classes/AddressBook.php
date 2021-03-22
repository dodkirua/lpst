<?php


class AddressBook{
        private ?int $id;
        private ?string $name;
        private ?string $firstname;
        private ?string $lastname;
        private ?string $phone;
        private ?int $userId;
        private ?int $addressId;

    /**
     * AddressBook constructor.
     * @param int|null $id
     */
    public function __construct(?int $id)
    {
        $this->id = $id;
    }

    /**
     * get id
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * get name
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * get firstname
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * get lastname
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * get the phone number
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * get the user id
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * get the address id
     * @return int|null
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
    }

    /**
     * set the name
     * @param string|null $name
     * @return AddressBook
     */
    public function setName(?string $name): AddressBook
    {
        $this->name = $name;
        return $this;
    }

    /**
     * set the firstname
     * @param string|null $firstname
     * @return AddressBook
     */
    public function setFirstname(?string $firstname): AddressBook
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * set lasttname
     * @param string|null $lastname
     * @return AddressBook
     */
    public function setLastname(?string $lastname): AddressBook
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * set the phone number
     * @param string|null $phone
     * @return AddressBook
     */
    public function setPhone(?string $phone): AddressBook
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * set the user id
     * @param int|null $userId
     * @return AddressBook
     */
    public function setUserId(?int $userId): AddressBook
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * set the address id
     * @param int|null $addressId
     * @return AddressBook
     */
    public function setAddressId(?int $addressId): AddressBook
    {
        $this->addressId = $addressId;
        return $this;
    }

    /**
     * return the list of data minimal for an AddressBook
     * @return array
     */
    public function getData() : array{
        $AddressBookArray['id'] = $this->getId();
        $AddressBookArray['name'] = $this->getName();
        $AddressBookArray['firstname'] = $this->getFirstname();
        $AddressBookArray['lastname'] = $this->getLastname();
        $AddressBookArray['phone'] = $this->getPhone();
        $AddressBookArray['userId'] = $this->getUserId();
        $AddressBookArray['addressId'] = $this->getAddressId();
        return $AddressBookArray;
    }

}