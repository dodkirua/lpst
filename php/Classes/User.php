<?php


class User{
    private ?int $id;
    private ?string $name = null;
    private ?string $surname = null;
    private ?string $mail = null;
    private ?string $pass = null;
    private ?string $phone = null;
    private bool $verificated = false;
    private ?int $role = null;
    private ?int $adress = null;

    /**
     * User constructor.
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
     * get the surname
     * @return string|null
     */
    public function getSurname(): ?string    {
        return $this->surname;
    }

    /**
     * get the mail
     * @return string|null
     */
    public function getMail(): ?string    {
        return $this->mail;
    }

    /**
     * get the pass
     * @return string|null
     */
    public function getPass(): ?string    {
        return $this->pass;
    }

    /**
     * get the phone
     * @return string|null
     */
    public function getPhone(): ?string    {
        return $this->phone;
    }

    /**
     * get the role id
     * @return int|null
     */
    public function getRole(): ?int    {
        return $this->role;
    }

    /**
     * get the  adress id
     * @return int|null
     */
    public function getAdress(): ?int    {
        return $this->adress;
    }

    /**
     * get the verificated check
     * @return bool
     */
    public function isVerificated(): bool
    {
        return $this->verificated;
    }

    /**
     * set the name
     * @param string|null $name
     * @return User
     */
    public function setName(?string $name): User
    {
        $this->name = $name;
        return $this;
    }

    /**
     * set the surname
     * @param string|null $surname
     * @return User
     */
    public function setSurname(?string $surname): User    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * set the mail
     * @param string|null $mail
     * @return User
     */
    public function setMail(?string $mail): User    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * set the pass
     * @param string|null $pass
     * @return User
     */
    public function setPass(?string $pass): User    {
        $this->pass = $pass;
        return $this;
    }

    /**
     * set the phone
     * @param string|null $phone
     * @return User
     */
    public function setPhone(?string $phone): User    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * set the role id
     * @param int|null $role
     * @return User
     */
    public function setRole(?int $role): User    {
        $this->role = $role;
        return $this;
    }

    /**
     * set the adress id
     * @param int|null $adress
     * @return User
     */
    public function setAdress(?int $adress): User    {
        $this->adress = $adress;
        return $this;
    }

    /**
     * set the verification statut
     * @param bool $verificated
     * @return User
     */
    public function setVerificated(bool $verificated): User  {
        $this->verificated = $verificated;
        return $this;
    }

    /**
     * return the list of data minimal for a user
     * @return array
     */
    public function getBaseData() : array{
        $userArray['id'] = $this->getId();
        $userArray['lastname'] = $this->getName();
        $userArray['firstname'] = $this->getSurname();
        $userArray['mail'] = $this->getMail();
        $userArray['pass'] = $this->getPass();
        $userArray['role'] = $this->getRole();
        return $userArray;
    }

}