<h1>MONETA</h1>

Moneta ist eine moderne Budgetplaner-App, die es Nutzern ermöglicht, Transaktionen in Budgetplänen zu verwalten. Die Anwendung basiert auf Vue.js im Frontend und PHP Laravel im Backend. Als Datenbank wird PostgreSQL genutzt, und das gesamte Projekt kann mit Docker betrieben werden.

<h3>Technologien</h3>

Frontend: Vue.js, Bootstrap

Backend: PHP Laravel

Datenbank: PostgreSQL

Containerisierung: Docker

<h3>Funktionen</h3>

- Erstellen und Verwalten von Budgetplänen

- Hinzufügen, Bearbeiten und Löschen von Transaktionen

- Übersichtliche Darstellung von Einnahmen und Ausgaben

- Responsive Design mit Bootstrap

- API-Schnittstelle zur Kommunikation zwischen Frontend und Backend

<h3>Installation & Einrichtung</h3>

Voraussetzungen

Node.js & npm

PHP & Composer

Docker & Docker Compose

Backend (Laravel) Setup

<h3>Repository klonen:</h3>

git clone https://github.com/maxthnd/moneta-webapp.git
cd moneta-webapp/backend

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

