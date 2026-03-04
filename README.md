# Relay API - Backend

Backend API written in Python using FastAPI for Relay project.

## Requirements

* [**Docker**](https://docs.docker.com/get-docker/) & [**Docker Compose**](https://docs.docker.com/compose/install/)
* [**uv**](https://docs.astral.sh/uv/) for Python package and environment management.
* [**Go Task**](https://taskfile.dev/installation/) (Task runner used for automation).

## Quick Start

### 1. Initialization

Set up your environment and initialize the database:

```bash
# Set up environment variables
cp .env.example .env

# Initialize project (builds containers, runs migrations, seeds data)
task init
```

### 2. Development

Start the development server with hot-reload enabled:

```bash
task dev
```

---

## General Workflow

By default, the dependencies are managed with [uv](https://docs.astral.sh/uv/).

From `./backend/` you can install all the dependencies with:

```console
uv sync
```

Then you can activate the virtual environment with:

```console
source .venv/bin/activate
```

Make sure your editor is using the correct Python virtual environment, with the interpreter at `backend/.venv/bin/python`.

Modify or add SQLModel models for data and SQL tables in `./backend/app/models.py`, API endpoints in `./backend/app/api/`, CRUD (Create, Read, Update, Delete) utils in `./backend/app/crud.py`.

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

## VS Code

There are already configurations in place to run the backend through the VS Code debugger, so that you can use breakpoints, pause and explore variables, etc.

The setup is also already configured so you can run the tests through the VS Code Python tests tab.

---

## Docker Compose Watch & Override

During development, you can change Docker Compose settings in `compose.override.yml`. These only affect the local environment.

The directory with the backend code is synchronized in the Docker container, allowing you to test changes live without rebuilding images.

To start the stack with watch mode:

```console
docker compose watch
```

To get inside the container with a `bash` session:

```console
docker compose exec backend bash
```

From inside the container, you can run the live reloading server manually:

```console
fastapi run --reload app/main.py
```

---

## Backend tests

To run tests:

```console
task test
```

Or manually using the script:

```console
bash ./scripts/test.sh
```

The tests run with Pytest. Modify and add tests to `./backend/tests/`.

### Test running stack

If your stack is already up, you can run tests inside the container:

```bash
docker compose exec backend bash scripts/tests-start.sh
```

To pass extra arguments to pytest (e.g., stop on first error):

```bash
docker compose exec backend bash scripts/tests-start.sh -x
```

### Test Coverage

When tests are run, a file `htmlcov/index.html` is generated. Open it in your browser to see the coverage report.

---

## Migrations

Alembic is configured to import your SQLModel models from `./backend/app/models.py`.

* Start an interactive session in the backend container:

```console
docker compose exec backend bash
```

* Create a revision after changing a model:

```console
alembic revision --autogenerate -m "Add column last_name to User model"
```

* Run the migration:

```console
alembic upgrade head
```

* Commit the generated files in the alembic directory.

If you don't want to use migrations, uncomment `SQLModel.metadata.create_all(engine)` in `./backend/app/core/db.py` and comment the alembic line in `scripts/prestart.sh`.

---

## Email Templates

The email templates are in `./backend/app/email-templates/`.

1. Install [MJML extension](https://github.com/mjmlio/vscode-mjml) in VS Code.
2. Create/edit `.mjml` files in `src`.
3. Export to HTML (Ctrl+Shift+P -> `MJML: Export to HTML`).
4. Save the generated `.html` file in the `build` directory.

---

## Local Endpoints

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
