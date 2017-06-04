<?php

namespace HaloApi;

use HaloApi\Api\AbstractApi;
use HaloApi\Exception\BadMethodCallException;
use HaloApi\Exception\InvalidArgumentException;
use HaloApi\HttpClient\Builder;
use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin;
use Http\Discovery\UriFactoryDiscovery;

/**
 * @method Api\Halo5\Metadata halo5Metadata()
 * @method Api\Halo5\Profile halo5Profile()
 * @method Api\Halo5\Stats halo5Stats()
 */
class Client
{
    public function __construct(Builder $httpClientBuilder, $apiKey)
    {
        $this->httpClientBuilder = $builder = $httpClientBuilder ?: new Builder();

        $builder->addPlugin(new Plugin\RedirectPlugin());
        $builder->addPlugin(new Plugin\AddHostPlugin(UriFactoryDiscovery::find()->createUri('https://www.haloapi.com')));

        $builder->addHeaderValue('Ocp-Apim-Subscription-Key', $apiKey);
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
