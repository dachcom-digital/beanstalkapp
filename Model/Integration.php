<?php

namespace Beanstalk\Model;

use JMS\Serializer\Annotation\Type;

class Integration {
    /**
     * @var int Unique ID of the User.
     * @Type("integer")
     */
    private $id;

    /**
     * @var int ID of the Account user belongs to.
     * @Type("integer")
     */
    private $accountId;

    /**
     * @var int ID of the Repository belongs to.
     * @Type("integer")
     */
    private $repositoryId;

    /**
     * @var string Type of Integration.
     * @Type("string")
     */
    private $type;

    /**
     * @var boolean Indicates if the integration is active or note.
     * @Type("boolean")
     */
    private $active;

    /**
     * @var string Url of the integration
     * @Type("string")
     */
    private $serviceUrl;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y/m/d H:i:s e'>")
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y/m/d H:i:s e'>")
     */
    private $updatedAt;

    /**
     * @param int $accountId
     */
    public function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    /**
     * @return int
     */
    public function getAccountId() {
        return $this->accountId;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * @return int
     */
    public function getRepositoryId() {
        return $this->repositoryId;
    }

    /**
     * @param int $repositoryId
     */
    public function setRepositoryId($repositoryId) {
        $this->repositoryId = $repositoryId;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type) {
        $this->type = $type;
    }

    /**
     * @return boolean
     */
    public function isActive() {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active) {
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function getServiceUrl() {
        return $this->serviceUrl;
    }

    /**
     * @param string $serviceUrl
     */
    public function setServiceUrl($serviceUrl) {
        $this->serviceUrl = $serviceUrl;
    }
}
