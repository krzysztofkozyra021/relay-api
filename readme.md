# Relay API

> Backend API for the Relay Project.

---

## Local development

```bash
cp .env.example .env
task init
```

Enter the app container shell before running commands:

```bash
task shell
```

| Command                 | Task                                    |
|:------------------------|:----------------------------------------|
| `composer test`         | Runs backend tests                      |
| `composer analyse`      | Runs Larastan static analysis           |
| `composer cs`           | Lints backend files                     |
| `composer csf`          | Lints and fixes backend files           |
| `php artisan <command>` | Artisan commands                        |

## Containers

| Service    | Container name            | Host port                          |
|:-----------|:--------------------------|:-----------------------------------|
| `app`      | `relay-api-app-dev`       | [50851](http://localhost:50851)    |
| `database` | `relay-api-db-dev`        | 50853                              |
| `redis`    | `relay-api-redis-dev`     | 50852                              |
| `mailpit`  | `relay-api-mailpit-dev`   | 50854                              |

---

## API Documentation

Full, interactive API documentation is available at:

```text
http://localhost:50851/docs
```

The API uses stateless **JWT (JSON Web Token) authentication** combined with an optional TOTP 2FA layer for admins.

### Authentication Flow Guide

Always include the `-H "Accept: application/json"` header in your requests.

1. **Standard Login / Register** (`POST /api/login`, `POST /api/register`)
   - Users receive an `access_token` JWT immediately unless the account requires 2FA.
   - Admins who have 2FA configured do *not* receive a JWT outright. Instead, they receive an intermediate state map: `{"requires_2fa": true, "intermediate_token": "..."}`.

2. **Two-Factor Authentication Verification** (`POST /api/auth/2fa/verify`)
   - Re-submit the `intermediate_token` alongside the 6-digit TOTP `code`. Upon success, the API issues the final JWT.

3. **Google OAuth2** (`POST /api/auth/google`)
   - Clients request the Google Access Token natively on device and send it via JSON `{"provider_token": "..."}`. The server statelessly fetches profiles and logs users in. 2FA conditions seamlessly apply if the Google account matches an admin setup.

4. **2FA Setup** (`POST /api/auth/2fa/setup`)
   - Requires an authenticated Bearer JWT. Generates and returns a TOTP `secret`, an array of `recovery_codes`, and an inline `qr_code_svg` graphic representation.

5. **2FA Enforcement Policy**
   - If an `is_admin` profile has not set up 2FA yet, the backend's `enforce.2fa` middleware intercepts and blocks interaction with protective endpoints (like `GET /api/devices`), rendering a `403` status `{"action_required": "setup_2fa"}` until `POST /api/auth/2fa/setup` is fulfilled.

Once you retrieve your JWT through any of the resolved login flows, pass it inside every subsequent request mapping:

```http
Authorization: Bearer <access_token>
```
