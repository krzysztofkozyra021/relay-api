# Relay API

Backend API written in Python using FastAPI for Relay project.

## Quick Start

### 1. Prerequisites

Ensure you have the following installed:

* [**Docker**](https://docs.docker.com/get-docker/) & [**Docker Compose**](https://docs.docker.com/compose/install/)
* [**Go Task**](https://taskfile.dev/installation/) (Task runner used for all commands)
* [**uv**](https://docs.astral.sh/uv/) (Python package manager, optional for local dev)

### 2. Initialization

Set up your environment and initialize the database:

```bash
# Set up environment variables
cp .env.example .env

# Initialize project (builds containers, runs migrations, seeds data)
task init
```

### 3. Development

Start the development server with hot-reload enabled:

```bash
task dev
```

---

## Essential Commands

| Command | Action |
| :--- | :--- |
| `task init` | Initial setup (Build + Up + Migrate + Seed) |
| `task up` | Start all services in the background |
| `task dev` | Start in watch mode with hot-reloading |
| `task stop` | Stop all services |
| `task test` | Run tests with coverage inside Docker |
| `task fix` | Auto-format and lint code (Ruff + Mypy) |
| `task shell` | Enter the backend container shell |
| `task logs` | Follow logs (e.g., `task logs -- backend`) |
| `task reset` | Full reset (Wipe volumes + Re-initialize) |

---

## Local Endpoints

Once running, the following services are available:

* **Backend API:** [http://api.relay.localhost](http://api.relay.localhost)
* **Swagger UI (Docs):** [http://api.relay.localhost/docs](http://api.relay.localhost/docs)
* **Database Admin (Adminer):** [http://adminer.relay.localhost](http://adminer.relay.localhost)
* **MailCatcher:** [http://localhost:1080](http://localhost:1080)
* **Traefik Dashboard:** [http://localhost:8090](http://localhost:8090)

---

## Project Structure

```text
.
├── backend/
│   ├── app/            # FastAPI application logic
│   ├── scripts/        # Internal CI/CD & setup scripts
│   ├── tests/          # Pytest suite
│   ├── alembic.ini     # Database migration config
│   └── pyproject.toml  # Python dependencies & tools
├── Taskfile.yml        # Project-level automation commands
├── compose.yml         # Main Docker orchestration
└── .env                # Environment configuration
```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

Structure based on [full-stack-fastapi-template](https://github.com/tiangolo/full-stack-fastapi-template)
