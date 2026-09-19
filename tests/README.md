# Tests

Recommended automated coverage:
- PHPUnit unit tests for payload validation and notification services
- Feature tests for authenticated device-token APIs
- Queue dispatch tests
- Invalid-token cleanup tests
- Retry and backoff behavior using fake provider responses
- Authorization and notification-preference tests

Keep public CI deterministic and never require production Firebase credentials.
