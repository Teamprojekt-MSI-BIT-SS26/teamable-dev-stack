# Teamable dev stack

Teamable frontend, Teamable backend and an own Moodle 4.5 in one Docker Compose project. The same stack runs locally and on the development VM at the HTWG; only `.env` differs.

Documentation (in the [documentation repository](https://github.com/Teamprojekt-MSI-BIT-SS26/documentation)):

- [Local setup with Docker](https://teamprojekt-msi-bit-ss26.github.io/documentation/umsetzung/Deployment/local-docker-setup/): local setup, how the stack works, local troubleshooting
- [Set up the HTWG VM](https://teamprojekt-msi-bit-ss26.github.io/documentation/umsetzung/Deployment/vm-setup/): step-by-step setup and operation of the dev VM (`.env`, TLS, host nginx, Moodle, LTI registration)

## Quick start (local)

```bash
git clone https://github.com/Teamprojekt-MSI-BIT-SS26/teamable-dev-stack.git
cd teamable-dev-stack
git clone -b local-moodle-lti-nrps-import https://github.com/Teamprojekt-MSI-BIT-SS26/teamable-backend.git
git clone https://github.com/Teamprojekt-MSI-BIT-SS26/teamable-frontend.git
cp .env.example .env
docker compose up -d --build
```

Teamable: <http://teamable.localhost:8080>, Moodle: <http://moodle.localhost:8008>. Moodle installation and LTI registration: see the documentation.
