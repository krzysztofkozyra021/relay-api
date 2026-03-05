## Relay API
### About application
> This is an API for Relay Project

### Local development
```
cp .env.example .env
task init
```
#### Commands
Before running any of the commands below, you must run shell:
```
make shell
```

| Command                 | Task                                        |
|:------------------------|:--------------------------------------------|
| `composer <command>`    | Composer                                    |
| `composer test`         | Runs backend tests                          |
| `composer analyse`      | Runs Larastan analyse for backend files     |
| `composer cs`           | Lints backend files                         |
| `composer csf`          | Lints and fixes backend files               |
| `php artisan <command>` | Artisan commands                            |


#### Containers

| service    | container name            | default host port               |
|:-----------|:--------------------------|:--------------------------------|
| `app`      | `relay-api-app-dev`     | [50851](http://localhost:60851) |
| `database` | `relay-api-db-dev`      | 50853                           |
| `redis`    | `relay-api-redis-dev`   | 50852                           |
| `mailpit`  | `relay-api-mailpit-dev` | 50854                           |
