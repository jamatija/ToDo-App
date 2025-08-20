# Laravel Project Setup

## Instalacija

1. Kloniraj repozitorijum:
   git clone <repo-url>
   cd <project-folder>

2. Instaliraj PHP zavisnosti:
   composer install

3. Instaliraj JavaScript zavisnosti:
   npm install

4. Kopiraj .env fajl i generiši aplikacioni ključ:
   cp .env.example .env
   php artisan key:generate

5. Pokreni migracije:
   php artisan migrate

---

## Pokretanje projekta

Pokreni Laravel server:
   php artisan serve

Pokreni Vite development server:
   npm run dev

---

Sada možeš otvoriti aplikaciju na:
   http://localhost:8000
