<?php

namespace HaloApi\HttpClient\Plugin;

use HaloApi\Exception\RateLimitExceededException;
use HaloApi\Exception\RuntimeException;
use HaloApi\HttpClient\Message\ResponseMediator;
use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ExceptionThrowerPlugin implements Plugin
{
    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first)
    {
        return $next($request)->then(function (ResponseInterface $response) use ($request) {
            if ($response->getStatusCode() < 400 || $response->getStatusCode() > 600) {
                return $response;
            }

            $content = ResponseMediator::getContent($response);

            if (429 === $response->getStatusCode()) {
                $retryAfter = ResponseMediator::getHeader($response, 'Retry-After');
                throw new RateLimitExceededException($retryAfter, $response->getStatusCode());
            }

            throw new RuntimeException(sprintf('Error calling the api, response code "%s".', $response->getStatusCode()));
        });
    }
}
