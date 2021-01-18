<?php


namespace App\User\Entity;


use App\Database\Entity\Entity;

class UserEntity extends Entity {
    private $id;
    private $group_id;
    private $username;
    private $email;
    private $password;
    private $salt;
    private $last_login;
    private $created_at;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getGroupId() {
        return $this->group_id;
    }

    /**
     * @param mixed $group_id
     * @return UserEntity
     */
    public function setGroupId($group_id) {
        $this->group_id = $group_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return UserEntity
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return UserEntity
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return UserEntity
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastLogin() {
        return $this->last_login;
    }

    /**
     * @param mixed $last_login
     * @return UserEntity
     */
    public function setLastLogin($last_login) {
        $this->last_login = $last_login;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return UserEntity
     */
    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalt() {
        return $this->salt;
    }

    /**
     * @param mixed $salt
     */
    public function setSalt($salt) {
        $this->salt = $salt;
        return $this;
    }
}