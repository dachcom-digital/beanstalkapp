<?php

namespace Beanstalk\Model;

use Beanstalk\Command\WriteIntegration;

class IntegrationRequest
{
    /**
     * @var WriteIntegration
     */
    private $integration;

    /**
     * @param WriteIntegration $integration
     */
    public function __construct(WriteIntegration $integration)
    {
        $this->integration = $integration;
    }
}
