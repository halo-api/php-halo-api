<?php

namespace HaloApi\Exception;

class RateLimitExceededException extends RuntimeException
{
    /**
     * Retry after xx seconds
     *
     * @var int
     */
    private $reset;

    public function __construct(int $reset = 10, int $code = 0, $previous = null)
    {
        $this->reset = (int)$reset;

        parent::__construct(sprintf('You have reached the api rate limit! Try again after %ds', $reset), $code, $previous);
    }

    public function getResetTime(): int
    {
        return $this->reset;
    }
}
