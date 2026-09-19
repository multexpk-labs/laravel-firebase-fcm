<?php

declare(strict_types=1);

final class NotificationService
{
    public function __construct(private readonly FcmClient $client)
    {
    }

    public function prepare(array $message): array
    {
        return $this->client->buildRequest($message);
    }
}
