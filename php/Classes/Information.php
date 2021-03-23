<?php


class Information{
    private ?int $id;
    private ?string $title;
    private ?string $description;
    private ?string $image;
    private ?string $location;
    private ?int $user;

    /**
     * Information constructor.
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
     * get title
     * @return string|null
     */
    public function getTitle(): ?string    {
        return $this->title;
    }

    /**
     * get description
     * @return string|null
     */
    public function getDescription(): ?string    {
        return $this->description;
    }

    /**
     * get image
     * @return string|null
     */
    public function getImage(): ?string    {
        return $this->image;
    }

    /**
     * get location
     * @return string|null
     */
    public function getLocation(): ?string    {
        return $this->location;
    }

    /**
     * get user id
     * @return int|null
     */
    public function getUser(): ?int    {
        return $this->user;
    }

    /**
     * set title
     * @param string|null $title
     * @return Information
     */
    public function setTitle(?string $title): Information    {
        $this->title = $title;
        return $this;
    }

    /**
     * set description
     * @param string|null $description
     * @return Information
     */
    public function setDescription(?string $description): Information    {
        $this->description = $description;
        return $this;
    }

    /**
     * set image
     * @param string|null $image
     * @return Information
     */
    public function setImage(?string $image): Information    {
        $this->image = $image;
        return $this;
    }

    /**
     * set location
     * @param string|null $location
     * @return Information
     */
    public function setLocation(?string $location): Information    {
        $this->location = $location;
        return $this;
    }

    /**
     * set user id
     * @param int|null $user
     * @return Information
     */
    public function setUser(?int $user): Information    {
        $this->user = $user;
        return $this;
    }

    /**
     * return the list of data minimal for an Address
     * @return array
     */
    public function getData() : array{
        $informationArray['id'] = $this->getId();
        $informationArray['title'] = $this->getTitle();
        $informationArray['description'] = $this->getDescription();
        $informationArray['image'] = $this->getImage();
        $informationArray['location'] = $this->getLocation();
        $informationArray['user_id'] = $this->getUser();
        return $informationArray;
    }
}