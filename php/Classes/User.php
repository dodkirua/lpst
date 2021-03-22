<?php


class User{
    private ?int $id;
    private ?string $lastname = null;
    private ?string $firstname = null;
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
     * get the lastname
     * @return string|null
     */
    public function getLastame(): ?string    {
        return $this->lastname;
    }

    /**
     * get the firstname
     * @return string|null
     */
    public function getFirstname(): ?string    {
        return $this->firstname;
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
     * set the lastname
     * @param string|null $lastname
     * @return User
     */
    public function setLastname(?string $lastname): User
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * set the firstname
     * @param string|null $firstname
     * @return User
     */
    public function setFirstname(?string $firstname): User    {
        $this->firstname = $firstname;
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
        $userArray['lastname'] = $this->getLastame();
        $userArray['firstname'] = $this->getFirstname();
        $userArray['mail'] = $this->getMail();
        $userArray['pass'] = $this->getPass();
        $userArray['role'] = $this->getRole();
        return $userArray;
    }

}