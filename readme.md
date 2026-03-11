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

```
http://localhost:50851/docs
```

The API uses **Bearer token authentication** (Laravel Sanctum). Obtain a token by calling `POST /api/login`, then pass it in every subsequent request:

```
Authorization: Bearer <access_token>
```
