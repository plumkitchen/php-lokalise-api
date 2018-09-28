<?php

namespace Lokalise\Endpoints;

use Lokalise\LokaliseApiResponse;
use \Lokalise\Exceptions\LokaliseApiException;

/**
 * Class Contributors
 * @package Lokalise\Endpoints
 * @link https://lokalise.co/api2docs/php/#resource-contributors
 */
class Contributors extends Endpoint implements EndpointInterface
{

    /**
     * @link https://lokalise.co/api2docs/php/#transition-list-all-contributors-get
     *
     * @param string $projectId
     * @param array $queryParams
     *
     * @return LokaliseApiResponse
     * @throws LokaliseApiException
     */
    public function list($projectId, $queryParams = [])
    {
        return $this->request(
            'GET',
            "projects/$projectId/contributors",
            $queryParams
        );
    }

    /**
     * @link https://lokalise.co/api2docs/php/#transition-list-all-contributors-get
     *
     * @param string $projectId
     *
     * @return LokaliseApiResponse
     * @throws LokaliseApiException
     */
    public function fetchAll($projectId)
    {
        return $this->requestAll(
            'GET',
            "projects/$projectId/contributors",
            [],
            [],
            'contributors'
        );
    }

    /**
     * @link https://lokalise.co/api2docs/php/#transition-create-contributors-post
     *
     * @param string $projectId
     * @param array $body
     *
     * @return LokaliseApiResponse
     * @throws LokaliseApiException
     */
    public function create($projectId, $body)
    {
        return $this->request(
            'POST',
            "projects/$projectId/contributors",
            [],
            $body
        );
    }

    /**
     * @link https://lokalise.co/api2docs/php/#transition-retrieve-a-contributor-get
     *
     * @param string $projectId
     * @param int $contributorId
     *
     * @return LokaliseApiResponse
     * @throws LokaliseApiException
     */
    public function retrieve($projectId, $contributorId)
    {
        return $this->request(
            'GET',
            "projects/$projectId/contributors/$contributorId"
        );
    }

    /**
     * @link https://lokalise.co/api2docs/php/#transition-update-a-contributor-put
     *
     * @param string $projectId
     * @param int $contributorId
     * @param array $body
     *
     * @return LokaliseApiResponse
     * @throws LokaliseApiException
     */
    public function update($projectId, $contributorId, $body)
    {
        return $this->request(
            'PUT',
            "projects/$projectId/contributors/$contributorId",
            [],
            $body
        );
    }

    /**
     * @link https://lokalise.co/api2docs/php/#transition-delete-a-contributor-delete
     *
     * @param string $projectId
     * @param int $contributorId
     *
     * @return LokaliseApiResponse
     * @throws LokaliseApiException
     */
    public function delete($projectId, $contributorId)
    {
        return $this->request(
            'DELETE',
            "projects/$projectId/contributors/$contributorId"
        );
    }
}