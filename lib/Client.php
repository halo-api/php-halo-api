<?php

namespace HaloApi;

use HaloApi\Api\AbstractApi;
use HaloApi\Exception\BadMethodCallException;
use HaloApi\Exception\InvalidArgumentException;
use HaloApi\HttpClient\Builder;
use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin;
use Http\Client\HttpClient;
use Http\Discovery\UriFactoryDiscovery;

/**
 * @method Api\Halo5\Metadata halo5Metadata()
 * @method Api\Halo5\Profile halo5Profile()
 * @method Api\Halo5\Stats halo5Stats()
 * @method Api\Halo5\Ugc halo5Ugc()
 * @method Api\HaloWars2\Metadata halowars2Metadata()
 * @method Api\HaloWars2\Stats halowars2Stats()
 */
class Client
{
    public function __construct($apiKey, Builder $httpClientBuilder = null)
    {
        $this->httpClientBuilder = $builder = $httpClientBuilder ?: new Builder();

        $builder->addPlugin(new Plugin\RedirectPlugin());
        $builder->addPlugin(new Plugin\AddHostPlugin(UriFactoryDiscovery::find()->createUri('https://www.haloapi.com')));

        $builder->addHeaderValue('Ocp-Apim-Subscription-Key', $apiKey);
    }

    /**
     * Create a Github\Client using a HttpClient.
     *
     * @param HttpClient $httpClient
     *
     * @return Client
     */
    public static function createWithHttpClient(HttpClient $httpClient)
    {
        $builder = new Builder($httpClient);
        return new self($builder);
    }

    /**
     * @param string $name
     *
     * @throws InvalidArgumentException
     *
     * @return AbstractApi
     */
    public function api($name)
    {
        switch ($name) {
            case 'h5Metadata':
            case 'halo5Metadata':
                $api = new Api\Halo5\Metadata($this);
                break;
            case 'h5Profile':
            case 'halo5Profile':
                $api = new Api\Halo5\Profile($this);
                break;
            case 'h5Stats':
            case 'halo5Stats':
                $api = new Api\Halo5\Stats($this);
                break;
            case 'h5Ugc':
            case 'halo5Ugc':
                $api = new Api\Halo5\Ugc($this);
                break;
            case 'hw2Metadata':
            case 'halowars2Metadata':
                $api = new Api\HaloWars2\Metadata($this);
                break;
            case 'hw2Stats':
            case 'halowars2Stats':
                $api = new Api\HaloWars2\Stats($this);
                break;
            default:
                throw new InvalidArgumentException(sprintf('Undefined api instance called: "%s"', $name));
        }

        return $api;
    }

    /**
     * @param string $name
     *
     * @throws BadMethodCallException
     *
     * @return AbstractApi
     */
    public function __call($name, $args)
    {
        try {
            return $this->api($name);
        } catch (InvalidArgumentException $e) {
            throw new BadMethodCallException(sprintf('Undefined method called: "%s"', $name));
        }
    }

    /**
     * @return HttpMethodsClient
     */
    public function getHttpClient()
    {
        return $this->getHttpClientBuilder()->getHttpClient();
    }

    /**
     * @return Builder
     */
    protected function getHttpClientBuilder()
    {
        return $this->httpClientBuilder;
    }
}
