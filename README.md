# Laravel Firebase FCM

Production-oriented research and reusable patterns for Laravel applications using Firebase Cloud Messaging (FCM) for mobile and web push notifications.

## Scope
- Firebase Cloud Messaging architecture
- Laravel notification services and queues
- Device-token registration and lifecycle
- Topic and direct-token messaging
- Android, iOS, and web push concepts
- Notification payload design
- Delivery, retry, failure, and invalid-token handling
- API endpoints and database design
- Testing, observability, and troubleshooting

## Reference Architecture
Client -> Laravel API -> Device Token Store -> Queue -> Notification Service -> FCM -> Android / iOS / Web

## Device Token Lifecycle
Register -> Validate -> Store -> Refresh -> Use -> Failure/Invalidation -> Remove

A token is not a permanent identity. Clients can receive new tokens, and previously valid tokens can become unusable. Handle refresh and provider delivery errors explicitly.

## Laravel Integration
Keep controllers thin and separate validation, application notification logic, queue jobs, provider adapters, result normalization, and logging.

## Queueing
Use bounded retries, backoff, timeout limits, failed-job handling, idempotency where needed, structured logs, and worker health monitoring.

## Security
Never commit Firebase service-account private keys, API credentials, real device tokens, production database credentials, or customer notification history. Use environment variables or managed secrets and least privilege.

## Testing
Use mocks, fake clients, and synthetic tokens. Test registration, refresh, duplicates, payload validation, queue dispatch, provider success, invalid tokens, transient failures, authorization, and preferences.

## Research Method
Find -> Clone -> Inspect -> Understand -> Document -> Reimplement -> Test -> Improve

Respect project licenses and attribution requirements. Build original implementations rather than copying source code without permission.

## Repository Structure
docs/architecture.md
docs/device-tokens.md
docs/notification-service.md
docs/queues-and-retries.md
docs/firebase-configuration.md
docs/api-design.md
docs/security.md
docs/testing.md
laravel/FcmClient.php
laravel/NotificationService.php
php/payload_validator.php
python/payload_fixture_check.py
bash/laravel-env-check.sh
examples/
tests/

## Related MULTEXPK LABS Work
php-laravel-engineering, mobile-push-notifications, whatsapp-automation, ai-agents-automation, database-backend-engineering.

## About MULTEXPK LABS
Technical education, AI/LLM research, infrastructure engineering, and open-source learning.

MULTEXPK LTD ®™
Secure Cloud • VPS • Hosting • Automation

Website: https://multexpk.com
Cloud/VPS: https://webvpsserver.com
WhatsApp: +92 312 6565434

Public education and research come first. MULTEXPK cloud services are a secondary resource for development, testing, and deployment.