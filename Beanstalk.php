<?php

namespace Beanstalk;

use Beanstalk\Command\UpdateRepository;
use Beanstalk\Model\Repository;
use Beanstalk\Model\RepositoryRequest;
use Beanstalk\Model\RepositoryResponse;
use GuzzleHttp\Command\Exception\CommandException;
use GuzzleHttp\Command\Guzzle\GuzzleClientInterface;

class Beanstalk
{
    /** @var GuzzleClientInterface */
    private $apiClient;

    /**
     * @param GuzzleClientInterface $apiClient
     */
    public function __construct(GuzzleClientInterface $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @return Repository[]
     */
    public function findAllRepositories()
    {
        return array_map(
            function (RepositoryResponse $response) {
                return $response->getRepository();
            },
            $this->apiClient->findAllRepositories()
        );
    }

    /**
     * @param int $id
     * @throws CommandException
     * @return Repository|null
     */
    public function findRepository($id)
    {
        try {
            return $this->apiClient->findRepository(['id' => $id])->getRepository();
        } catch (CommandException $e) {
            if ($e->getResponse() && 404 == $e->getResponse()->getStatusCode()) {
                return null;
            }

            throw $e;
        }
    }

    /**
     * @param int $id
     * @param UpdateRepository $repository
     */
    public function updateRepository($id, UpdateRepository $repository)
    {
        $this->apiClient->updateRepository(['id' => $id, 'body' => new RepositoryRequest($repository)]);
    }
}
