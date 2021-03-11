<?php


class User{
    private ?int $id;
    private ?string $name;
    private ?string $surname;
    private ?string $mail;
    private ?string $pass;
    private ?string $phone = null;
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
    public function __construct(?int $id, ?string $name, ?string $surname, ?string $mail, ?string $pass)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
        $this->pass = $pass;
    }


}