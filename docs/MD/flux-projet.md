# Flux du projet (PrestaShop)

## 1) Point d’entrée (Front Office)
- `index.php` charge `config/config.inc.php` puis lance `Dispatcher::getInstance()->dispatch()`.
- Le dispatcher choisit le contrôleur (dans `controllers/front/`) selon l’URL, les routes et la config.
- Le contrôleur front hérite de `FrontController` (dans `classes/controller/`).

## 2) Cycle d’un contrôleur front
1. `init()` : prépare le contexte (langue, client, boutique, etc.).
2. `postProcess()` : traite le formulaire ou l’action (POST).
3. `initContent()` : prépare les données pour la vue (assign Smarty).
4. `setTemplate()` : choisit le template.
5. Rendu Smarty dans `themes/<theme>/templates/`.

## 3) Modèles (données)
- Les entités principales sont dans `classes/` et héritent de `ObjectModel`.
- `ObjectModel` fournit CRUD et validation via sa définition (`static $definition`).
- La base de données est utilisée via `Db::getInstance()` (et helpers).

## 4) Back Office (administration)
- Les écrans admin legacy sont dans `controllers/admin/` et `administrateur/`.
- La partie Symfony (PrestaShop 1.7/8) vit dans `src/` et `app/`.
- Les templates BO sont dans `admin/themes/` ou `src/PrestaShopBundle/Resources/views/`.

## 5) Modules & Hooks
- Les modules sont dans `modules/`.
- Le flux standard: un contrôleur appelle des hooks (`Hook::exec()`), les modules y injectent du contenu.
- Un module peut aussi définir ses propres contrôleurs front/admin.

---

# Exemple de flux “Créer une nouvelle fonctionnalité”

## Étapes recommandées
1. **Base de données**
   - Créer la table (souvent via SQL d’installation de module ou script).
2. **Classe métier (Model)**
   - Créer une classe dans `classes/` qui étend `ObjectModel`.
   - Définir `static $definition` (table, clé primaire, champs, types, validations).
3. **Contrôleur**
   - Créer un contrôleur front dans `controllers/front/` (ou admin dans `controllers/admin/`).
   - Charger/traiter les données, gérer `postProcess()` et préparer `initContent()`.
4. **Vue (Template)**
   - Créer le template Smarty dans `themes/<theme>/templates/...`.
   - Afficher les données assignées par le contrôleur.
5. **Hooks (si besoin)**
   - Déclarer un hook et l’exécuter dans un contrôleur ou un template.
   - Implémenter `hook<NomDuHook>()` dans un module.

## Résumé du flux logique
**URL → Dispatcher → Controller → Model (ObjectModel/Db) → Template (Smarty)**

Si tu veux, je peux détailler un exemple concret (ex: "page liste de produits") ou créer un schéma plus visuel.