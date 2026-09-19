# Architecture

Client -> Laravel API -> Token Store -> Queue -> Notification Service -> FCM

Keep provider-specific transport behind an adapter so business workflows remain testable without contacting Firebase.

