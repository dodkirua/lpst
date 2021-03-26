<?php


class User{
    private ?int $id;
    private ?string $lastname = null;
    private ?string $firstname = null;
    private ?string $mail = null;
    private ?string $pass = null;
    private ?string $phone = null;
    private int $checked = 0;
    private ?int $role = null;
    private ?string $image = null;
    private ?string $key = null;
    private ?int $date = null;

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
    public function getLastname(): ?string    {
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
     * get the  check
     * @return int
     */
    public function getChecked(): int
    {
        return $this->checked;
    }

    /**
     * get the image
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * get the validation key
     * @return string|null
     */
    public function getKey(): ?string    {
        return $this->key;
    }

    /**
     * get the date
     * @return int|null
     */
    public function getDate(): ?int    {
        return $this->date;
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
     * set the verification statut
     * @param int $check
     * @return User
     */
    public function setChecked(int $check): User  {
        $this->checked = $check;
        return $this;
    }

    /**
     * set image
     * @param string|null $image
     * @return User
     */
    public function setImage(?string $image): User
    {
        $this->image = $image;
        return $this;
    }

    /**
     * set the validation key
     * @param string|null $key
     * @return User
     */
    public function setKey(?string $key): User
    {
        $this->key = $key;
        return $this;
    }

    /**
     * set the date
     * @param int|null $date
     * @return User
     */
    public function setDate(?int $date): User    {
        $this->date = $date;
        return $this;
    }



    /**
     * return the list of data minimal for a user
     * @return array
     */
    public function getBaseData() : array{
        $userArray['id'] = $this->getId();
        $userArray['lastname'] = $this->getLastname();
        $userArray['firstname'] = $this->getFirstname();
        $userArray['mail'] = $this->getMail();
        $userArray['pass'] = $this->getPass();
        $userArray['role'] = $this->getRole();
        return $userArray;
    }

    /**
     * return all user information
     * @return array
     */
    public function getData() : array {
        foreach ($this->getBaseData() as $key => $item){
            $userArray[$key]=$item;
        }
        $userArray['phone'] = $this->getPhone();
        $userArray['image'] = $this->getImage();
        $userArray['checked'] = $this->getChecked();
        $userArray['key_verification'] = $this->getKey();
        $userArray['date_token'] = $this->getDate();
        return $userArray;
    }
}