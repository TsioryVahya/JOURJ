# Documentation des fonctions Webservice (API)

Ce document résume le flux d’exécution et les fonctions principales utilisées par l’API Webservice (ex: `GET /api/addresses`).

## 1) Point d’entrée Webservice
- **Fichier**: `classes/webservice/WebserviceRequest.php`
- **Classe**: `WebserviceRequestCore`
- **Méthode principale**: `fetch($key, $method, $url, $params, $bad_class_name, $inputXml = null)`

### Rôle de `fetch()`
- Vérifie l’activation du webservice et l’authentification.
- Parse l’URL et les paramètres (`output_format`, `display`, `depth`, etc.).
- Charge la ressource (ex: `addresses`) via `getResources()`.
- Instancie la classe métier (ex: `Address`) et récupère la configuration webservice.
- Exécute la méthode HTTP (GET/POST/PUT/PATCH/DELETE).
- Retourne la réponse via `WebserviceOutputBuilder`.

## 2) Déclaration des ressources
- **Fichier**: `classes/webservice/WebserviceRequest.php`
- **Méthode**: `public static function getResources()`
- Exemple:
  - `addresses` → classe métier `Address` (dans `classes/Address.php`)

## 3) GET (liste ou détail)
- **Fichier**: `classes/webservice/WebserviceRequest.php`
- **Méthode**: `executeEntityGetAndHead()`

### Comportement
- Si **pas d’ID**: appelle `getFilteredObjectList()` → **liste d’IDs + xlink**.
- Si **ID présent**: appelle `getFilteredObjectDetails()` → **détails complets**.

## 4) Format de sortie
- **Fichier**: `classes/webservice/WebserviceRequest.php`
- **Méthode**: `getOutputObject($type)`

### Formats supportés
- XML (par défaut)
- JSON (via `?output_format=JSON` ou header `Output-Format: JSON`)

## 5) Construction de la réponse
- **Fichier**: `classes/webservice/WebserviceOutputBuilder.php`
- **Méthode**: `getContent($objects, $schema_to_display = null, $fields_to_display = 'minimum', $depth = 0, $type_of_view = self::VIEW_LIST, $override = true)`

### Rôle
- Applique `display=minimum|full|[...]`.
- Construit la structure XML/JSON.
- Gère les liens `xlink` vers d’autres ressources.

## 6) Configuration Webservice d’une ressource (ex: Address)
- **Fichier**: `classes/Address.php`
- **Propriété**: `protected $webserviceParameters`

### Exemple (extrait)
- `objectsNodeName = 'addresses'`
- `id_customer`, `id_country`, etc. → `xlink_resource` vers `customers`, `countries`

## 7) Définition des champs (SQL)
- **Fichier**: `classes/Address.php`
- **Propriété**: `public static $definition`

### Rôle
- Lie la ressource à la table SQL (`address`).
- Déclare les champs, types, validations.

---

# Exemples d’URL utiles

- Liste (résumé):
  - `GET /api/addresses`
- Détail:
  - `GET /api/addresses/2`
- Liste complète:
  - `GET /api/addresses?display=full`
- Champs limités:
  - `GET /api/addresses/2?display=[id,firstname,lastname,city]`
- JSON:
  - `GET /api/addresses/2?output_format=JSON`

---

# Résumé du flux

`/api/addresses` → `WebserviceRequest::fetch()` → `executeEntityGetAndHead()` → `getFilteredObjectList()` → `WebserviceOutputBuilder::getContent()` → réponse XML/JSON

`/api/addresses/2` → `WebserviceRequest::fetch()` → `executeEntityGetAndHead()` → `getFilteredObjectDetails()` → `WebserviceOutputBuilder::getContent()` → réponse XML/JSON

---

# Schéma du flux (Mermaid)

```mermaid
flowchart LR
  A[Client HTTP] --> B[/api/addresses ou /api/addresses/{id}/]
  B --> C[WebserviceRequest::fetch]
  C --> D[checkResource + getResources]
  D --> E[executeEntityGetAndHead]
  E -->|liste| F[getFilteredObjectList]
  E -->|détail| G[getFilteredObjectDetails]
  F --> H[WebserviceOutputBuilder::getContent]
  G --> H
  H --> I[XML/JSON Response]
```
