<?php


class User{
    private ?int $id;
    private ?string $name;
    private ?string $surname;
    private ?string $mail;
    private ?string $pass;
    private ?string $phone = null;
    private bool $verificated = false;
    private ?int $role = null;
    private ?int $adress = null;

    /**
     * User constructor.
     * @param int|null $id
     * @param string|null $name
     * @param string|null $surname
     * @param string|null $mail
     * @param string|null $pass
     */
    public function __construct(?int $id, ?string $name, ?string $surname, ?string $mail, ?string $pass)    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
        $this->pass = $pass;
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
     * set the name
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
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
     * set the surname
     * @param string|null $surname
     */
    public function setSurname(?string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * set the mail
     * @param string|null $mail
     */
    public function setMail(?string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * set the pass
     * @param string|null $pass
     */
    public function setPass(?string $pass): void
    {
        $this->pass = $pass;
    }

    /**
     * set the phone
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * set the role id
     * @param int|null $role
     */
    public function setRole(?int $role): void
    {
        $this->role = $role;
    }

    /**
     * set the adress id
     * @param int|null $adress
     */
    public function setAdress(?int $adress): void
    {
        $this->adress = $adress;
    }

    /**
     * set the verification statut
     * @param bool $verificated
     */
    public function setVerificated(bool $verificated): void
    {
        $this->verificated = $verificated;
    }



}