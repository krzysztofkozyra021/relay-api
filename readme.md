## Relay API

### About application
>
> This is an API for the Relay Project

---

### Local development

```bash
cp .env.example .env
task init
```

#### Commands

Before running any of the commands below, enter the app container shell:

```bash
task shell
```

| Command                  | Task                                    |
|:-------------------------|:----------------------------------------|
| `composer <command>`     | Composer                                |
| `composer test`          | Runs backend tests                      |
| `composer analyse`       | Runs Larastan analyse for backend files |
| `composer cs`            | Lints backend files                     |
| `composer csf`           | Lints and fixes backend files           |
| `php artisan <command>`  | Artisan commands                        |

#### Containers

| service    | container name            | default host port                |
|:-----------|:--------------------------|:---------------------------------|
| `app`      | `relay-api-app-dev`       | [60851](http://localhost:60851)  |
| `database` | `relay-api-db-dev`        | 50853                            |
| `redis`    | `relay-api-redis-dev`     | 50852                            |
| `mailpit`  | `relay-api-mailpit-dev`   | 50854                            |

---

### API Reference

The base URL for all API endpoints is:

```
http://localhost:60851/api
```

#### Authentication

This API uses **Laravel Sanctum** token-based authentication.
Protected endpoints require a `Bearer` token in the `Authorization` header.

---

##### `POST /api/login`

Authenticate a user and receive an access token.

**Request body (JSON):**

```json
{
  "email": "user@example.com",
  "password": "your-password"
}
```

**Success response `200 OK`:**

```json
{
  "access_token": "1|abc123...",
  "token_type": "Bearer",
  "user": {
    "id": 1,
    "name": "John Doe",
    "email": "user@example.com"
  }
}
```

**Failure response `401 Unauthorized`:**

```json
{
  "message": "Invalid credentials."
}
```

---

#### Making Authenticated Requests

Once you have the `access_token`, include it in every subsequent request as a `Bearer` token:

```
Authorization: Bearer <access_token>
```

**Example with `curl`:**

```bash
# 1. Login and save the token
TOKEN=$(curl -s -X POST http://localhost:60851/api/login \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{"email":"user@example.com","password":"your-password"}' \
  | grep -o '"access_token":"[^"]*"' | cut -d'"' -f4)

# 2. Use the token in subsequent requests
curl http://localhost:60851/api/user \
  -H "Accept: application/json" \
  -H "Authorization: Bearer $TOKEN"
```

---

##### `GET /api/user` [protected]

Returns the currently authenticated user's details.

**Response `200 OK`:**

```json
{
  "id": 1,
  "name": "John Doe",
  "email": "user@example.com"
}
```

---

##### `POST /api/logout` [protected]

Invalidates the current access token.

**Response `200 OK`:**

```json
{
  "message": "Logged out successfully."
}
```

---

#### Devices [protected]

All device endpoints require authentication.

| Method   | Endpoint              | Description           |
|:---------|:----------------------|:----------------------|
| `GET`    | `/api/devices`        | List all devices      |
| `POST`   | `/api/devices`        | Create a device       |
| `GET`    | `/api/devices/{id}`   | Get a single device   |
| `PUT`    | `/api/devices/{id}`   | Update a device       |
| `DELETE` | `/api/devices/{id}`   | Delete a device       |

**Example — list devices:**

```bash
curl http://localhost:60851/api/devices \
  -H "Accept: application/json" \
  -H "Authorization: Bearer <access_token>"
```

---

> [protected] — endpoint requires a valid `Authorization: Bearer <token>` header
