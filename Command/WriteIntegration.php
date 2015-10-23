<?php

namespace Beanstalk\Command;

use JMS\Serializer\Annotation\Type;

class WriteIntegration {
    /**
     * Service url
     * @var string
     * @Type("string")
     */
    protected $serviceUrl;

    /**
     * Service login
     * @var string
     * @Type("string")
     */
    protected $serviceLogin;

    /**
     * Service password
     * @var string
     * @Type("string")
     */
    protected $servicePassword;

    /**
     * Service project key
     * @var string
     * @Type("string")
     */
    protected $serviceProjectName;

    /**
     * Integration type
     * @var string
     * @Type("string")
     */
    protected $type;

    /**
     * Integration state
     * @var boolean
     * @Type("boolean")
     */
    protected $active;

    /**
     * @param string $serviceUrl
     * @param string $serviceLogin
     * @param string $servicePassword
     * @param string $serviceProjectName
     * @param string $type
     */
    public function __construct($serviceUrl, $serviceLogin, $servicePassword, $serviceProjectName, $type) {
        $this->serviceUrl = $serviceUrl;
        $this->serviceLogin = $serviceLogin;
        $this->servicePassword = $servicePassword;
        $this->serviceProjectName = $serviceProjectName;
        $this->type = $type;
        $this->active = true;
    }
}
