<?php

declare(strict_types=1);

final class FcmClient
{
    public function __construct(private readonly string $endpoint)
    {
    }

    public function endpoint(): string
    {
        return $this->endpoint;
    }

    public function buildRequest(array $message): array
    {
        if (!isset($message['token']) || !is_string($message['token']) || $message['token'] === '') {
            throw new InvalidArgumentException('A destination token is required.');
        }

        return ['message' => $message];
    }
}
