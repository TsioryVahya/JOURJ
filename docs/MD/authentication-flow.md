# Flux d’authentification (Front / Back / Webservice)

Ce document décrit les points d’entrée et les principales classes/méthodes utilisées pour l’authentification dans ce projet PrestaShop.

---

## 1) Webservice (API)

### Points d’entrée
- **Fichier**: `classes/webservice/WebserviceRequest.php`
- **Classe**: `WebserviceRequestCore`
- **Méthodes clés**:
  - `fetch(...)` → lance la requête Webservice.
  - `webserviceChecks()` → chaîne les contrôles.
  - `authenticate()` → valide la clé API (Basic Auth, login=clé, pas de mot de passe).
  - `checkResource()` / `checkHTTPMethod()` → permissions par ressource/méthode.

### Validation de la clé
- **Fichier**: `classes/webservice/WebserviceKey.php`
- **Classe**: `WebserviceKeyCore`
- **Méthodes**:
  - `isKeyActive($auth_key)`
  - `getPermissionForAccount($auth_key)`
  - `getClassFromKey($auth_key)` (si compte lié à une classe)

### Résumé du flux
`/api/*` → `WebserviceRequest::fetch()` → `webserviceChecks()` → `authenticate()` → `WebserviceKey::*` → permissions OK → réponse

---

## 2) Front Office (Client)

### Points d’entrée
- **Fichier**: `controllers/front/AuthController.php`
- **Classe**: `AuthControllerCore`
- **Méthodes**:
  - `initContent()` → affiche formulaire + traite `submitLogin`.
  - `checkAccess()` → redirige si déjà connecté.

### Traitement du login
- **Fichier**: `classes/controller/FrontController.php`
- **Méthode**: `makeLoginForm()` → instancie `CustomerLoginForm`.
- **Fichier**: `classes/form/CustomerLoginForm.php`
- **Méthode**: `submit()` → vérifie les champs et appelle `Customer::getByEmail()`.
- **Fichier**: `classes/Customer.php`
- **Méthodes utiles**:
  - `isLogged()` → vérifie session + mot de passe.
  - `logout()` / `mylogout()` → déconnexion.

### Résumé du flux
`/authentication` → `AuthController::initContent()` → `CustomerLoginForm::submit()` → `Customer::getByEmail()` → `Context::updateCustomer()` → session OK

---

## 3) Back Office (Admin)

### Points d’entrée
- **Fichier**: `classes/controller/AdminController.php`
- **Méthode**: `init()` → vérifie session admin via `Employee::isLoggedBack()` et redirige vers `AdminLogin` si besoin.

### Traitement du login
- **Fichier**: `controllers/admin/AdminLoginController.php`
- **Classe**: `AdminLoginControllerCore`
- **Méthodes**:
  - `postProcess()` → dispatch `processLogin()`.
  - `processLogin()` → valide email/mot de passe, puis `Employee::getByEmail()`.
  - Écrit la session dans le cookie (id_employee, profile, passwd, etc.).

### Résumé du flux
`/admin` → `AdminController::init()` → si non connecté → `AdminLoginController::processLogin()` → `Employee::getByEmail()` → session admin

---

# Schéma global (Mermaid)

```mermaid
flowchart LR
    A[Client] --> B{Type d’auth}

    B -->|Webservice| C[/api/*]
    C --> D[WebserviceRequest::fetch]
    D --> E[webserviceChecks + authenticate]
    E --> F[WebserviceKey::isKeyActive]
    E --> G[WebserviceKey::getPermissionForAccount]
    F --> H[Accès OK]
    G --> H

    B -->|Front Office| I[/authentication]
    I --> J[AuthController::initContent]
    J --> K[CustomerLoginForm::submit]
    K --> L[Customer::getByEmail]
    L --> M[Context::updateCustomer]

    B -->|Back Office| N[/admin]
    N --> O[AdminController::init]
    O --> P{isLoggedBack?}
    P -->|Non| Q[AdminLoginController::processLogin]
    Q --> R[Employee::getByEmail]
    R --> S[Session admin OK]
```
