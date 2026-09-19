<?php
declare(strict_types=1);

function validate_notification_payload(array $payload): void
{
    if (!isset($payload['title']) || !is_string($payload['title']) || trim($payload['title']) === '') {
        throw new InvalidArgumentException('Notification title is required.');
    }

    if (isset($payload['data']) && !is_array($payload['data'])) {
        throw new InvalidArgumentException('Notification data must be an array.');
    }
}
