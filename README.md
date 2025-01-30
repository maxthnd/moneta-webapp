<h1>MONETA</h1>

Moneta ist eine moderne Budgetplaner-App, die es Nutzern ermöglicht, Transaktionen in Budgetplänen zu verwalten. Die Anwendung basiert auf Vue.js im Frontend und PHP Laravel im Backend. Als Datenbank wird PostgreSQL genutzt, und das gesamte Projekt kann mit Docker betrieben werden.

<h2>Technologien</h2>

Frontend: Vue.js, Bootstrap

Backend: PHP Laravel

Datenbank: PostgreSQL

Containerisierung: Docker

<h2>Funktionen</h2>

- Erstellen und Verwalten von Budgetplänen

- Hinzufügen, Bearbeiten und Löschen von Transaktionen

- Übersichtliche Darstellung von Einnahmen und Ausgaben

- Responsive Design mit Bootstrap

- API-Schnittstelle zur Kommunikation zwischen Frontend und Backend

<h2>Installation & Einrichtung</h2>

Voraussetzungen

Node.js & npm

PHP & Composer

Docker & Docker Compose

Backend (Laravel) Setup

<h2>Repository klonen:</h2>

git clone https://github.com/maxthnd/moneta-webapp.git
cd moneta-api

Abhängigkeiten installieren:

composer install

Umgebungsvariablen konfigurieren:

cp .env.example .env

Passe die .env-Datei an (insbesondere Datenbankverbindung).

Datenbank migrieren:

php artisan migrate --seed

Backend starten:

php artisan serve

Frontend (Vue.js) Setup

Zum Frontend wechseln:

cd ../frontend

Abhängigkeiten installieren:

npm install

Frontend starten:

npm run dev

Mit Docker starten

Docker-Container starten:

docker-compose up -d

Die Anwendung ist nun unter http://localhost:8000 erreichbar.

API-Endpunkte

| Methode | Endpoint          | Beschreibung                 |
| ------- | ----------------- | ---------------------------- |
| GET     | /api/plan      | Alle Budgetpläne abrufen     |
| POST    | /api/plan      | Neuen Budgetplan erstellen   |
| GET     | /api/plan/{id} | Einzelnen Budgetplan abrufen |
| PUT     | /api/plan/{id} | Budgetplan aktualisieren     |
| DELETE  | /api/plan/{id} | Budgetplan löschen           |

