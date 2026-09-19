# Queues and Retries

Use asynchronous delivery when provider latency or notification volume makes synchronous requests undesirable.

Use bounded retries and backoff. Distinguish transient failures from permanent failures such as invalid tokens. Use idempotency where duplicate delivery would be harmful.
