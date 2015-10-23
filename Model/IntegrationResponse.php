<?php

namespace Beanstalk\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\HandlerCallback;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\JsonDeserializationVisitor;

class IntegrationResponse
{
    /**
     * @var \Beanstalk\Model\Integration
     * @Type("Beanstalk\Model\Integration")
     */
    private $integration;

    /**
     * @return \Beanstalk\Model\Integration
     */
    public function getIntegration()
    {
        return $this->integration;
    }

    /**
     * @HandlerCallback("json", direction = "deserialization")
     */
    public function deserializeFromJson(JsonDeserializationVisitor $visitor, $data, DeserializationContext $context)
    {
        $this->integration = $context->accept(current($data), ['name' => 'Beanstalk\Model\Integration']);
    }
}
