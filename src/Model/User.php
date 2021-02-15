<?php


namespace App;


class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */

    private $username;

    /**
     * @var string
     */
    private $password;

    public function setUsername(string $username): self
    {
        $this->username=$username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): self
    {
        $this->password=$password;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id=$id;
    }
}
