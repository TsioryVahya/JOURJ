# 📚 Documentation de la base de données PrestaShop

> Générée automatiquement depuis le dump SQL – 299 tables documentées.

---

## 📋 Table des matières

- [🛍️ Catalogue produits](#🛍️-catalogue-produits)
- [🛒 Commandes & Paiements](#🛒-commandes--paiements)
- [👤 Clients & Comptes](#👤-clients--comptes)
- [🚚 Livraison & Transporteurs](#🚚-livraison--transporteurs)
- [📦 Stock & Fournisseurs](#📦-stock--fournisseurs)
- [💰 Taxes, Devises & Prix](#💰-taxes-devises--prix)
- [⚙️ Configuration & Boutique](#⚙️-configuration--boutique)
- [🔌 Modules & Hooks](#🔌-modules--hooks)
- [👔 Employés & Accès](#👔-employes--acces)
- [📊 Statistiques & SEO](#📊-statistiques--seo)
- [🔍 Navigation à facettes](#🔍-navigation-a-facettes)
- [💳 PayPal Checkout (ps_pscheckout)](#💳-paypal-checkout-pspscheckout)
- [🔒 RGPD & Sécurité](#🔒-rgpd--securite)
- [🖼️ Front-office & UX](#🖼️-front-office--ux)
- [📡 Connecteurs & Sync](#📡-connecteurs--sync)
- [🔧 Divers](#🔧-divers)

---

## 🛍️ Catalogue produits

### `ps_product`

> Catalogue principal des produits.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_supplier` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_supplier`. |
| `id_manufacturer` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_manufacturer`. |
| `id_category_default` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_category_default`. |
| `id_shop_default` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop_default`. |
| `id_tax_rules_group` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_tax_rules_group`. |
| `on_sale` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur de promotion (1 = en promotion). |
| `online_only` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Produit disponible uniquement en ligne (1 = oui). |
| `ean13` | `varchar(13) DEFAULT NULL` | Code-barres EAN-13. |
| `isbn` | `varchar(32) DEFAULT NULL` | Numéro ISBN (pour les livres). |
| `upc` | `varchar(12) DEFAULT NULL` | Code-barres UPC. |
| `mpn` | `varchar(40) DEFAULT NULL` | Numéro de pièce fabricant (MPN). |
| `ecotax` | `decimal(17,6) NOT NULL DEFAULT 0.000000` | Montant de l'écotaxe. |
| `quantity` | `int(10) NOT NULL DEFAULT 0` | Quantité. |
| `minimal_quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Quantité minimale d'achat. |
| `low_stock_threshold` | `int(10) DEFAULT NULL` | Seuil d'alerte de stock bas. |
| `low_stock_alert` | `tinyint(1) NOT NULL DEFAULT 0` | Activation des alertes de stock bas (1 = oui). |
| `price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Prix (en devise par défaut). |
| `wholesale_price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Prix d'achat (coût fournisseur). |
| `unity` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : unity. |
| `unit_price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Prix unitaire. |
| `unit_price_ratio` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Ratio de prix unitaire pour le calcul d'affichage. |
| `additional_shipping_cost` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Frais de port supplémentaires pour ce produit. |
| `reference` | `varchar(64) DEFAULT NULL` | Référence produit interne. |
| `supplier_reference` | `varchar(64) DEFAULT NULL` | Référence produit chez le fournisseur. |
| `location` | `varchar(255) NOT NULL DEFAULT ''` | Chaîne de caractères : location. |
| `width` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Largeur (dimension). |
| `height` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Hauteur (dimension). |
| `depth` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Profondeur (dimension). |
| `weight` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Poids (en kg ou unité configurée). |
| `out_of_stock` | `int(10) UNSIGNED NOT NULL DEFAULT 2` | Valeur entière : out of stock. |
| `additional_delivery_times` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Afficher les délais de livraison supplémentaires. |
| `quantity_discount` | `tinyint(1) DEFAULT 0` | Indicateur booléen : quantity discount (1 = oui, 0 = non). |
| `customizable` | `tinyint(2) NOT NULL DEFAULT 0` | Niveau de personnalisation (0 = non, 1 = optionnel, 2 = obligatoire). |
| `uploadable_files` | `tinyint(4) NOT NULL DEFAULT 0` | Nombre de champs de fichier uploadable. |
| `text_fields` | `tinyint(4) NOT NULL DEFAULT 0` | Nombre de champs texte de personnalisation. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `redirect_type` | `enum('','404','410','301-product','302-product','301-category','302-category','200-displayed','404-displayed','410-displayed','default') NOT NULL DEFAULT 'default'` | Type de redirection SEO (404, 301, 302). |
| `id_type_redirected` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_type_redirected`. |
| `available_for_order` | `tinyint(1) NOT NULL DEFAULT 1` | Indicateur booléen : available for order (1 = oui, 0 = non). |
| `available_date` | `date DEFAULT NULL` | Date à partir de laquelle le produit est disponible. |
| `show_condition` | `tinyint(1) NOT NULL DEFAULT 0` | Afficher ou non la condition du produit en front-office. |
| `condition` | `enum('new','used','refurbished') NOT NULL DEFAULT 'new'` | Condition du produit (new, used, refurbished). |
| `show_price` | `tinyint(1) NOT NULL DEFAULT 1` | Afficher le prix en front-office (1 = oui). |
| `indexed` | `tinyint(1) NOT NULL DEFAULT 0` | Indique si le produit est indexé dans la recherche interne. |
| `visibility` | `enum('both','catalog','search','none') NOT NULL DEFAULT 'both'` | Visibilité du produit (both, catalog, search, none). |
| `cache_is_pack` | `tinyint(1) NOT NULL DEFAULT 0` | Cache indiquant si le produit est un pack. |
| `cache_has_attachments` | `tinyint(1) NOT NULL DEFAULT 0` | Cache indiquant si le produit a des pièces jointes. |
| `is_virtual` | `tinyint(1) NOT NULL DEFAULT 0` | Produit dématérialisé / numérique (1 = oui). |
| `cache_default_attribute` | `int(10) UNSIGNED DEFAULT NULL` | Cache de la déclinaison par défaut. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `advanced_stock_management` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : advanced stock management (1 = oui, 0 = non). |
| `pack_stock_type` | `int(11) UNSIGNED NOT NULL DEFAULT 3` | Valeur entière : pack stock type. |
| `state` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Valeur entière : state. |
| `product_type` | `enum('standard','pack','virtual','combinations','') NOT NULL DEFAULT ''` | Product type. |

### `ps_product_lang`

> Traductions des produits (nom, description, meta SEO).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `description` | `mediumtext DEFAULT NULL` | Description complète. |
| `description_short` | `mediumtext DEFAULT NULL` | Description courte / résumé. |
| `link_rewrite` | `varchar(128) NOT NULL` | Slug URL (réécriture d'URL conviviale). |
| `meta_description` | `varchar(512) DEFAULT NULL` | Description SEO (balise meta description). |
| `meta_keywords` | `varchar(255) DEFAULT NULL` | Mots-clés SEO (balise meta keywords). |
| `meta_title` | `varchar(128) DEFAULT NULL` | Titre SEO (balise <title>). |
| `name` | `varchar(128) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `available_now` | `varchar(255) DEFAULT NULL` | Texte affiché quand le produit est en stock. |
| `available_later` | `varchar(255) DEFAULT NULL` | Texte affiché quand le produit est en rupture. |
| `delivery_in_stock` | `varchar(255) DEFAULT NULL` | Message de délai de livraison quand en stock. |
| `delivery_out_stock` | `varchar(255) DEFAULT NULL` | Message de délai de livraison quand hors stock. |

### `ps_product_shop`

> Données produit spécifiques par boutique (prix, état, visibilité).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `id_category_default` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_category_default`. |
| `id_tax_rules_group` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_tax_rules_group`. |
| `on_sale` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur de promotion (1 = en promotion). |
| `online_only` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Produit disponible uniquement en ligne (1 = oui). |
| `ecotax` | `decimal(17,6) NOT NULL DEFAULT 0.000000` | Montant de l'écotaxe. |
| `minimal_quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Quantité minimale d'achat. |
| `low_stock_threshold` | `int(10) DEFAULT NULL` | Seuil d'alerte de stock bas. |
| `low_stock_alert` | `tinyint(1) NOT NULL DEFAULT 0` | Activation des alertes de stock bas (1 = oui). |
| `price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Prix (en devise par défaut). |
| `wholesale_price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Prix d'achat (coût fournisseur). |
| `unity` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : unity. |
| `unit_price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Prix unitaire. |
| `unit_price_ratio` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Ratio de prix unitaire pour le calcul d'affichage. |
| `additional_shipping_cost` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Frais de port supplémentaires pour ce produit. |
| `customizable` | `tinyint(2) NOT NULL DEFAULT 0` | Niveau de personnalisation (0 = non, 1 = optionnel, 2 = obligatoire). |
| `uploadable_files` | `tinyint(4) NOT NULL DEFAULT 0` | Nombre de champs de fichier uploadable. |
| `text_fields` | `tinyint(4) NOT NULL DEFAULT 0` | Nombre de champs texte de personnalisation. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `redirect_type` | `enum('','404','410','301-product','302-product','301-category','302-category','200-displayed','404-displayed','410-displayed','default') NOT NULL DEFAULT 'default'` | Type de redirection SEO (404, 301, 302). |
| `id_type_redirected` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_type_redirected`. |
| `available_for_order` | `tinyint(1) NOT NULL DEFAULT 1` | Indicateur booléen : available for order (1 = oui, 0 = non). |
| `available_date` | `date DEFAULT NULL` | Date à partir de laquelle le produit est disponible. |
| `show_condition` | `tinyint(1) NOT NULL DEFAULT 1` | Afficher ou non la condition du produit en front-office. |
| `condition` | `enum('new','used','refurbished') NOT NULL DEFAULT 'new'` | Condition du produit (new, used, refurbished). |
| `show_price` | `tinyint(1) NOT NULL DEFAULT 1` | Afficher le prix en front-office (1 = oui). |
| `indexed` | `tinyint(1) NOT NULL DEFAULT 0` | Indique si le produit est indexé dans la recherche interne. |
| `visibility` | `enum('both','catalog','search','none') NOT NULL DEFAULT 'both'` | Visibilité du produit (both, catalog, search, none). |
| `cache_default_attribute` | `int(10) UNSIGNED DEFAULT NULL` | Cache de la déclinaison par défaut. |
| `advanced_stock_management` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : advanced stock management (1 = oui, 0 = non). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `pack_stock_type` | `int(11) UNSIGNED NOT NULL DEFAULT 3` | Valeur entière : pack stock type. |

### `ps_product_sale`

> Compteur de ventes par produit (statistiques).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Quantité. |
| `sale_nbr` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : sale nbr. |
| `date_upd` | `date DEFAULT NULL` | Date de mise à jour. |

### `ps_product_attachment`

> Association produits ↔ fichiers joints.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_attachment` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_attachment`. |

### `ps_product_carrier`

> Association produits ↔ transporteurs autorisés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_carrier_reference` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier_reference`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_product_country_tax`

> Taxes produit appliquées par pays.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_country` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_country`. |
| `id_tax` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_tax`. |

### `ps_product_download`

> Fichiers numériques téléchargeables associés aux produits virtuels.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_download` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `display_filename` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : display filename. |
| `filename` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : filename. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_expiration` | `datetime DEFAULT NULL` | Date/heure : date expiration. |
| `nb_days_accessible` | `int(10) UNSIGNED DEFAULT NULL` | Nombre de days accessible. |
| `nb_downloadable` | `int(10) UNSIGNED DEFAULT 1` | Nombre de downloadable. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `is_shareable` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : shareable (1 = oui, 0 = non). |

### `ps_product_group_reduction_cache`

> Cache des réductions de groupe appliquées aux produits.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_group` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_group`. |
| `reduction` | `decimal(5,4) NOT NULL` | Valeur de la réduction. |

### `ps_product_supplier`

> Association produits ↔ fournisseurs (avec références et prix fournisseur).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_supplier` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_product` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_product_attribute` | `int(11) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_product_attribute`. |
| `id_supplier` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_supplier`. |
| `product_supplier_reference` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : product supplier reference. |
| `product_supplier_price_te` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : product supplier price te. |
| `id_currency` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |

### `ps_product_tag`

> Association produits ↔ tags de recherche.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_tag` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_tag`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |

### `ps_pack`

> Composition des packs produits (produits regroupés).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_pack` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_pack`. |
| `id_product_item` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_item`. |
| `id_product_attribute_item` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute_item`. |
| `quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Quantité. |

### `ps_product_attribute`

> Déclinaisons de produits (combinaisons d'attributs).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_attribute` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `reference` | `varchar(64) DEFAULT NULL` | Référence produit interne. |
| `supplier_reference` | `varchar(64) DEFAULT NULL` | Référence produit chez le fournisseur. |
| `ean13` | `varchar(13) DEFAULT NULL` | Code-barres EAN-13. |
| `isbn` | `varchar(32) DEFAULT NULL` | Numéro ISBN (pour les livres). |
| `upc` | `varchar(12) DEFAULT NULL` | Code-barres UPC. |
| `mpn` | `varchar(40) DEFAULT NULL` | Numéro de pièce fabricant (MPN). |
| `wholesale_price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Prix d'achat (coût fournisseur). |
| `price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Prix (en devise par défaut). |
| `ecotax` | `decimal(17,6) NOT NULL DEFAULT 0.000000` | Montant de l'écotaxe. |
| `weight` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Poids (en kg ou unité configurée). |
| `unit_price_impact` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : unit price impact. |
| `default_on` | `tinyint(1) UNSIGNED DEFAULT NULL` | Indicateur booléen : default on (1 = oui, 0 = non). |
| `minimal_quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Quantité minimale d'achat. |
| `low_stock_threshold` | `int(10) DEFAULT NULL` | Seuil d'alerte de stock bas. |
| `low_stock_alert` | `tinyint(1) NOT NULL DEFAULT 0` | Activation des alertes de stock bas (1 = oui). |
| `available_date` | `date DEFAULT NULL` | Date à partir de laquelle le produit est disponible. |

### `ps_product_attribute_combination`

> Association déclinaisons ↔ valeurs d'attributs.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attribute` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_attribute`. |
| `id_product_attribute` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |

### `ps_product_attribute_image`

> Images associées aux déclinaisons produit.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_attribute` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |
| `id_image` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_image`. |

### `ps_product_attribute_lang`

> Traductions des informations de déclinaisons.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_attribute` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `available_now` | `varchar(255) DEFAULT NULL` | Texte affiché quand le produit est en stock. |
| `available_later` | `varchar(255) DEFAULT NULL` | Texte affiché quand le produit est en rupture. |

### `ps_product_attribute_shop`

> Données de déclinaisons spécifiques par boutique (prix, stock).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_product_attribute` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `wholesale_price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Prix d'achat (coût fournisseur). |
| `price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Prix (en devise par défaut). |
| `ecotax` | `decimal(17,6) NOT NULL DEFAULT 0.000000` | Montant de l'écotaxe. |
| `weight` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Poids (en kg ou unité configurée). |
| `unit_price_impact` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : unit price impact. |
| `default_on` | `tinyint(1) UNSIGNED DEFAULT NULL` | Indicateur booléen : default on (1 = oui, 0 = non). |
| `minimal_quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Quantité minimale d'achat. |
| `low_stock_threshold` | `int(10) DEFAULT NULL` | Seuil d'alerte de stock bas. |
| `low_stock_alert` | `tinyint(1) NOT NULL DEFAULT 0` | Activation des alertes de stock bas (1 = oui). |
| `available_date` | `date DEFAULT NULL` | Date à partir de laquelle le produit est disponible. |

### `ps_attribute`

> Valeurs des attributs de produit (ex: Rouge, XL, 128Go).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attribute` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_attribute_group` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_attribute_group`. |
| `color` | `varchar(32) NOT NULL` | Couleur associée (code hexadécimal ou nom). |
| `position` | `int(11) NOT NULL` | Position/ordre d'affichage. |

### `ps_attribute_lang`

> Traductions des valeurs d'attributs.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attribute` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_attribute`. |
| `id_lang` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(128) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_attribute_group`

> Groupes d'attributs produit (ex: Couleur, Taille, Capacité).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attribute_group` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `is_color_group` | `tinyint(1) NOT NULL` | Indique si le groupe d'attributs est un groupe de couleurs. |
| `group_type` | `varchar(255) NOT NULL` | Type de groupe d'attributs (select, color, radio). |
| `position` | `int(11) NOT NULL` | Position/ordre d'affichage. |

### `ps_attribute_group_lang`

> Traductions des noms de groupes d'attributs.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attribute_group` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_attribute_group`. |
| `id_lang` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(128) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `public_name` | `varchar(64) NOT NULL` | Nom public affiché en front-office. |

### `ps_attribute_group_shop`

> Association des groupes d'attributs aux boutiques (multi-boutique).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attribute_group` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_attribute_group`. |
| `id_shop` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_attribute_shop`

> Association des attributs aux boutiques (multi-boutique).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attribute` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_attribute`. |
| `id_shop` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_feature`

> Caractéristiques produit (ex: Matière, Marque, Dimensions).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_feature` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `position` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |

### `ps_feature_lang`

> Traductions des noms de caractéristiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_feature` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_feature`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(128) DEFAULT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_feature_shop`

> Association des caractéristiques aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_feature` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_feature`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_feature_value`

> Valeurs possibles des caractéristiques produit.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_feature_value` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_feature` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_feature`. |
| `custom` | `tinyint(3) UNSIGNED DEFAULT NULL` | Valeur entière : custom. |

### `ps_feature_value_lang`

> Traductions des valeurs de caractéristiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_feature_value` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_feature_value`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `value` | `varchar(255) DEFAULT NULL` | Valeur. |

### `ps_feature_product`

> Association produits ↔ valeurs de caractéristiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_feature` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_feature`. |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_feature_value` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_feature_value`. |

### `ps_feature_flag`

> Flags de fonctionnalités (feature flags) expérimentales.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_feature_flag` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(191) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `state` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : state (1 = oui, 0 = non). |
| `label_wording` | `varchar(512) NOT NULL DEFAULT ''` | Chaîne de caractères : label wording. |
| `label_domain` | `varchar(255) NOT NULL DEFAULT ''` | Chaîne de caractères : label domain. |
| `description_wording` | `varchar(512) NOT NULL DEFAULT ''` | Chaîne de caractères : description wording. |
| `description_domain` | `varchar(255) NOT NULL DEFAULT ''` | Chaîne de caractères : description domain. |
| `stability` | `varchar(64) NOT NULL DEFAULT 'beta'` | Chaîne de caractères : stability. |

### `ps_category`

> Catégories produits (arborescence du catalogue).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_category` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_parent` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_parent`. |
| `id_shop_default` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop_default`. |
| `level_depth` | `tinyint(3) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : level depth. |
| `nleft` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : nleft. |
| `nright` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : nright. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `position` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |
| `is_root_category` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : root category (1 = oui, 0 = non). |

### `ps_category_lang`

> Traductions des noms, descriptions et meta des catégories.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_category` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_category`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(128) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `description` | `mediumtext DEFAULT NULL` | Description complète. |
| `additional_description` | `mediumtext DEFAULT NULL` | Contenu textuel étendu : additional description. |
| `link_rewrite` | `varchar(128) NOT NULL` | Slug URL (réécriture d'URL conviviale). |
| `meta_title` | `varchar(255) DEFAULT NULL` | Titre SEO (balise <title>). |
| `meta_keywords` | `varchar(255) DEFAULT NULL` | Mots-clés SEO (balise meta keywords). |
| `meta_description` | `varchar(512) DEFAULT NULL` | Description SEO (balise meta description). |

### `ps_category_shop`

> Association des catégories aux boutiques (multi-boutique).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_category` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_category`. |
| `id_shop` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `position` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |

### `ps_category_product`

> Association produits ↔ catégories (position dans la catégorie).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_category` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_category`. |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `position` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |

### `ps_category_group`

> Association des catégories aux groupes de clients visibles.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_category` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_category`. |
| `id_group` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_group`. |

### `ps_image`

> Images des produits (métadonnées).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_image` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `position` | `smallint(2) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |
| `cover` | `tinyint(1) UNSIGNED DEFAULT NULL` | Indicateur booléen : cover (1 = oui, 0 = non). |

### `ps_image_lang`

> Légendes / textes alt des images par langue.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_image` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_image`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `legend` | `varchar(128) DEFAULT NULL` | Chaîne de caractères : legend. |

### `ps_image_shop`

> Image de couverture des produits par boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_image` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_image`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `cover` | `tinyint(1) UNSIGNED DEFAULT NULL` | Indicateur booléen : cover (1 = oui, 0 = non). |

### `ps_image_type`

> Types d'images (dimensions des miniatures : small, medium, large, etc.).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_image_type` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `width` | `int(10) UNSIGNED NOT NULL` | Largeur (dimension). |
| `height` | `int(10) UNSIGNED NOT NULL` | Hauteur (dimension). |
| `products` | `tinyint(1) NOT NULL DEFAULT 1` | Indicateur booléen : products (1 = oui, 0 = non). |
| `categories` | `tinyint(1) NOT NULL DEFAULT 1` | Indicateur booléen : categories (1 = oui, 0 = non). |
| `manufacturers` | `tinyint(1) NOT NULL DEFAULT 1` | Indicateur booléen : manufacturers (1 = oui, 0 = non). |
| `suppliers` | `tinyint(1) NOT NULL DEFAULT 1` | Indicateur booléen : suppliers (1 = oui, 0 = non). |
| `stores` | `tinyint(1) NOT NULL DEFAULT 1` | Indicateur booléen : stores (1 = oui, 0 = non). |

### `ps_manufacturer`

> Fabricants / marques des produits.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_manufacturer` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `active` | `tinyint(1) NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |

### `ps_manufacturer_lang`

> Traductions des descriptions de fabricants.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_manufacturer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_manufacturer`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `description` | `mediumtext DEFAULT NULL` | Description complète. |
| `short_description` | `mediumtext DEFAULT NULL` | Contenu textuel étendu : short description. |
| `meta_title` | `varchar(255) DEFAULT NULL` | Titre SEO (balise <title>). |
| `meta_keywords` | `varchar(255) DEFAULT NULL` | Mots-clés SEO (balise meta keywords). |
| `meta_description` | `varchar(512) DEFAULT NULL` | Description SEO (balise meta description). |

### `ps_manufacturer_shop`

> Association des fabricants aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_manufacturer` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_manufacturer`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_attachment`

> Fichiers joints téléchargeables associés aux produits.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attachment` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `file` | `varchar(40) NOT NULL` | Chaîne de caractères : file. |
| `file_name` | `varchar(128) NOT NULL` | Nom du fichier. |
| `file_size` | `bigint(10) UNSIGNED NOT NULL DEFAULT 0` | Taille du fichier (en octets). |
| `mime` | `varchar(128) NOT NULL` | Type MIME du fichier. |

### `ps_attachment_lang`

> Traductions des noms et descriptions des pièces jointes.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attachment` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_attachment`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(32) DEFAULT NULL` | Nom ou libellé de l'enregistrement. |
| `description` | `mediumtext DEFAULT NULL` | Description complète. |

### `ps_tag`

> Tags / mots-clés de recherche interne.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_tag` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(32) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_tag_count`

> Compteur d'utilisation des tags par langue et boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_group` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_group`. |
| `id_tag` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_tag`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_lang`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_shop`. |
| `counter` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : counter. |

### `ps_product_tag`

> Association produits ↔ tags de recherche.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_tag` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_tag`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |

### `ps_accessory`

> Relation entre produits accessoires (produits associés/complémentaires).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_1` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_1`. |
| `id_product_2` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_2`. |

## 🛒 Commandes & Paiements

### `ps_orders`

> Commandes passées par les clients.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order`. |
| `reference` | `varchar(9) DEFAULT NULL` | Référence produit interne. |
| `id_shop_group` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop_group`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_carrier` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_cart` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart`. |
| `id_currency` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |
| `id_address_delivery` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_address_delivery`. |
| `id_address_invoice` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_address_invoice`. |
| `current_state` | `int(10) UNSIGNED NOT NULL` | Valeur entière : current state. |
| `secure_key` | `varchar(32) NOT NULL DEFAULT '-1'` | Clé de sécurité unique (token de session). |
| `payment` | `varchar(255) NOT NULL` | Chaîne de caractères : payment. |
| `conversion_rate` | `decimal(13,6) NOT NULL DEFAULT 1.000000` | Taux de conversion par rapport à la devise par défaut. |
| `module` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : module. |
| `recyclable` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : recyclable (1 = oui, 0 = non). |
| `gift` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : gift (1 = oui, 0 = non). |
| `gift_message` | `mediumtext DEFAULT NULL` | Contenu textuel étendu : gift message. |
| `mobile_theme` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : mobile theme (1 = oui, 0 = non). |
| `total_discounts` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des réductions TTC. |
| `total_discounts_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des réductions TTC. |
| `total_discounts_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des réductions HT. |
| `total_paid` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Montant total payé. |
| `total_paid_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total payé TTC. |
| `total_paid_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total payé HT. |
| `total_paid_real` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Montant réellement encaissé. |
| `total_products` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des produits HT. |
| `total_products_wt` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des produits TTC. |
| `total_shipping` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des frais de port TTC. |
| `total_shipping_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des frais de port TTC. |
| `total_shipping_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des frais de port HT. |
| `carrier_tax_rate` | `decimal(10,3) NOT NULL DEFAULT 0.000` | Valeur numérique décimale : carrier tax rate. |
| `total_wrapping` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total de l'emballage cadeau TTC. |
| `total_wrapping_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total de l'emballage cadeau TTC. |
| `total_wrapping_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total de l'emballage cadeau HT. |
| `round_mode` | `tinyint(1) NOT NULL DEFAULT 2` | Indicateur booléen : round mode (1 = oui, 0 = non). |
| `round_type` | `tinyint(1) NOT NULL DEFAULT 1` | Indicateur booléen : round type (1 = oui, 0 = non). |
| `invoice_number` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : invoice number. |
| `delivery_number` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : delivery number. |
| `invoice_date` | `datetime NOT NULL` | Date/heure : invoice date. |
| `delivery_date` | `datetime NOT NULL` | Date/heure : delivery date. |
| `valid` | `int(1) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : valid. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `note` | `mediumtext DEFAULT NULL` | Contenu textuel étendu : note. |

### `ps_order_detail`

> Lignes de détail des commandes (produits, prix, taxes, quantités).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_detail` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_order` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order`. |
| `id_order_invoice` | `int(11) DEFAULT NULL` | Clé étrangère vers la table `ps_order_invoice`. |
| `id_warehouse` | `int(10) UNSIGNED DEFAULT 0` | Clé étrangère vers la table `ps_warehouse`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `product_id` | `int(10) UNSIGNED NOT NULL` | Valeur entière : product id. |
| `product_attribute_id` | `int(10) UNSIGNED DEFAULT NULL` | Valeur entière : product attribute id. |
| `id_customization` | `int(10) UNSIGNED DEFAULT 0` | Clé étrangère vers la table `ps_customization`. |
| `product_name` | `mediumtext NOT NULL` | Contenu textuel étendu : product name. |
| `product_quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : product quantity. |
| `product_quantity_in_stock` | `int(10) NOT NULL DEFAULT 0` | Valeur entière : product quantity in stock. |
| `product_quantity_refunded` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : product quantity refunded. |
| `product_quantity_return` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : product quantity return. |
| `product_quantity_reinjected` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : product quantity reinjected. |
| `product_price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : product price. |
| `reduction_percent` | `decimal(5,2) NOT NULL DEFAULT 0.00` | Valeur numérique décimale : reduction percent. |
| `reduction_amount` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : reduction amount. |
| `reduction_amount_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : reduction amount tax incl. |
| `reduction_amount_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : reduction amount tax excl. |
| `group_reduction` | `decimal(5,2) NOT NULL DEFAULT 0.00` | Valeur numérique décimale : group reduction. |
| `product_quantity_discount` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : product quantity discount. |
| `product_ean13` | `varchar(13) DEFAULT NULL` | Chaîne de caractères : product ean13. |
| `product_isbn` | `varchar(32) DEFAULT NULL` | Chaîne de caractères : product isbn. |
| `product_upc` | `varchar(12) DEFAULT NULL` | Chaîne de caractères : product upc. |
| `product_mpn` | `varchar(40) DEFAULT NULL` | Chaîne de caractères : product mpn. |
| `product_reference` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : product reference. |
| `product_supplier_reference` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : product supplier reference. |
| `product_weight` | `decimal(20,6) NOT NULL` | Valeur numérique décimale : product weight. |
| `id_tax_rules_group` | `int(11) UNSIGNED DEFAULT 0` | Clé étrangère vers la table `ps_tax_rules_group`. |
| `tax_computation_method` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : tax computation method (1 = oui, 0 = non). |
| `tax_name` | `varchar(16) NOT NULL` | Chaîne de caractères : tax name. |
| `tax_rate` | `decimal(10,3) NOT NULL DEFAULT 0.000` | Valeur numérique décimale : tax rate. |
| `ecotax` | `decimal(17,6) NOT NULL DEFAULT 0.000000` | Montant de l'écotaxe. |
| `ecotax_tax_rate` | `decimal(5,3) NOT NULL DEFAULT 0.000` | Valeur numérique décimale : ecotax tax rate. |
| `discount_quantity_applied` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : discount quantity applied (1 = oui, 0 = non). |
| `download_hash` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : download hash. |
| `download_nb` | `int(10) UNSIGNED DEFAULT 0` | Valeur entière : download nb. |
| `download_deadline` | `datetime DEFAULT NULL` | Date/heure : download deadline. |
| `total_price_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : total price tax incl. |
| `total_price_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : total price tax excl. |
| `unit_price_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : unit price tax incl. |
| `unit_price_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : unit price tax excl. |
| `total_shipping_price_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : total shipping price tax incl. |
| `total_shipping_price_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : total shipping price tax excl. |
| `purchase_supplier_price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : purchase supplier price. |
| `original_product_price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : original product price. |
| `original_wholesale_price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : original wholesale price. |
| `total_refunded_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : total refunded tax excl. |
| `total_refunded_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : total refunded tax incl. |

### `ps_order_detail_tax`

> Taxes appliquées sur chaque ligne de commande.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_detail` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_order_detail`. |
| `id_tax` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_tax`. |
| `unit_amount` | `decimal(16,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : unit amount. |
| `total_amount` | `decimal(16,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : total amount. |

### `ps_order_history`

> Historique des changements d'état des commandes.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_history` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_employee` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_employee`. |
| `id_order` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order`. |
| `id_order_state` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_state`. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_order_state`

> États des commandes (En attente, Expédié, Livré, Annulé, etc.).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_state` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `invoice` | `tinyint(1) UNSIGNED DEFAULT 0` | Indicateur booléen : invoice (1 = oui, 0 = non). |
| `send_email` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : send email (1 = oui, 0 = non). |
| `module_name` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : module name. |
| `color` | `varchar(32) DEFAULT NULL` | Couleur associée (code hexadécimal ou nom). |
| `unremovable` | `tinyint(1) UNSIGNED NOT NULL` | Indicateur booléen : unremovable (1 = oui, 0 = non). |
| `hidden` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : hidden (1 = oui, 0 = non). |
| `logable` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : logable (1 = oui, 0 = non). |
| `delivery` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : delivery (1 = oui, 0 = non). |
| `shipped` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : shipped (1 = oui, 0 = non). |
| `paid` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : paid (1 = oui, 0 = non). |
| `pdf_invoice` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : pdf invoice (1 = oui, 0 = non). |
| `pdf_delivery` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : pdf delivery (1 = oui, 0 = non). |
| `deleted` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Suppression logique (1 = supprimé). |

### `ps_order_state_lang`

> Traductions des noms d'états de commande.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_state` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_state`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `template` | `varchar(64) NOT NULL` | Chaîne de caractères : template. |

### `ps_order_carrier`

> Transporteur sélectionné et informations de suivi pour chaque commande.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_carrier` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_order` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order`. |
| `id_carrier` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `id_order_invoice` | `int(11) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_order_invoice`. |
| `weight` | `decimal(20,6) DEFAULT NULL` | Poids (en kg ou unité configurée). |
| `shipping_cost_tax_excl` | `decimal(20,6) DEFAULT NULL` | Valeur numérique décimale : shipping cost tax excl. |
| `shipping_cost_tax_incl` | `decimal(20,6) DEFAULT NULL` | Valeur numérique décimale : shipping cost tax incl. |
| `tracking_number` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : tracking number. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_order_invoice`

> Factures générées pour les commandes.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_invoice` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_order` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_order`. |
| `number` | `int(11) NOT NULL` | Valeur entière : number. |
| `delivery_number` | `int(11) NOT NULL` | Valeur entière : delivery number. |
| `delivery_date` | `datetime DEFAULT NULL` | Date/heure : delivery date. |
| `total_discount_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : total discount tax excl. |
| `total_discount_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : total discount tax incl. |
| `total_paid_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total payé HT. |
| `total_paid_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total payé TTC. |
| `total_products` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des produits HT. |
| `total_products_wt` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des produits TTC. |
| `total_shipping_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des frais de port HT. |
| `total_shipping_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total des frais de port TTC. |
| `shipping_tax_computation_method` | `int(10) UNSIGNED NOT NULL` | Valeur entière : shipping tax computation method. |
| `total_wrapping_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total de l'emballage cadeau HT. |
| `total_wrapping_tax_incl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Total de l'emballage cadeau TTC. |
| `shop_address` | `mediumtext DEFAULT NULL` | Contenu textuel étendu : shop address. |
| `note` | `mediumtext DEFAULT NULL` | Contenu textuel étendu : note. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_order_invoice_payment`

> Association factures ↔ paiements.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_invoice` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_invoice`. |
| `id_order_payment` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_payment`. |
| `id_order` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order`. |

### `ps_order_invoice_tax`

> Taxes appliquées sur les factures.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_invoice` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_order_invoice`. |
| `type` | `varchar(15) NOT NULL` | Type de l'enregistrement. |
| `id_tax` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_tax`. |
| `amount` | `decimal(10,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : amount. |

### `ps_order_payment`

> Paiements enregistrés pour les commandes.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_payment` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `order_reference` | `varchar(9) DEFAULT NULL` | Chaîne de caractères : order reference. |
| `id_currency` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |
| `amount` | `decimal(20,6) NOT NULL` | Valeur numérique décimale : amount. |
| `payment_method` | `varchar(255) NOT NULL` | Chaîne de caractères : payment method. |
| `conversion_rate` | `decimal(13,6) NOT NULL DEFAULT 1.000000` | Taux de conversion par rapport à la devise par défaut. |
| `transaction_id` | `varchar(254) DEFAULT NULL` | Chaîne de caractères : transaction id. |
| `card_number` | `varchar(254) DEFAULT NULL` | Chaîne de caractères : card number. |
| `card_brand` | `varchar(254) DEFAULT NULL` | Chaîne de caractères : card brand. |
| `card_expiration` | `char(7) DEFAULT NULL` | Chaîne de caractères : card expiration. |
| `card_holder` | `varchar(254) DEFAULT NULL` | Chaîne de caractères : card holder. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `id_employee` | `int(11) DEFAULT NULL` | Clé étrangère vers la table `ps_employee`. |

### `ps_order_message`

> Messages prédéfinis utilisables dans le suivi de commande.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_message` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_order_message_lang`

> Traductions des messages prédéfinis de commande.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_message` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_message`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(128) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `message` | `mediumtext NOT NULL` | Contenu textuel étendu : message. |

### `ps_order_cart_rule`

> Règles de panier (réductions) appliquées à une commande.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_cart_rule` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_order` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order`. |
| `id_cart_rule` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart_rule`. |
| `id_order_invoice` | `int(10) UNSIGNED DEFAULT 0` | Clé étrangère vers la table `ps_order_invoice`. |
| `name` | `varchar(254) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `value` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur. |
| `value_tax_excl` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : value tax excl. |
| `free_shipping` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : free shipping (1 = oui, 0 = non). |
| `deleted` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Suppression logique (1 = supprimé). |

### `ps_order_return`

> Demandes de retour / remboursement produit (RMA).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_return` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_order` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order`. |
| `state` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indicateur booléen : state (1 = oui, 0 = non). |
| `question` | `mediumtext NOT NULL` | Contenu textuel étendu : question. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_order_return_detail`

> Détail des produits inclus dans une demande de retour.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_return` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_return`. |
| `id_order_detail` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_detail`. |
| `id_customization` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_customization`. |
| `product_quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : product quantity. |

### `ps_order_return_state`

> États possibles d'une demande de retour.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_return_state` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `color` | `varchar(32) DEFAULT NULL` | Couleur associée (code hexadécimal ou nom). |

### `ps_order_return_state_lang`

> Traductions des états de retour.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_return_state` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_return_state`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_order_slip`

> Avoirs (notes de crédit) émis pour des commandes.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_slip` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `conversion_rate` | `decimal(13,6) NOT NULL DEFAULT 1.000000` | Taux de conversion par rapport à la devise par défaut. |
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_order` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order`. |
| `total_products_tax_excl` | `decimal(20,6) DEFAULT NULL` | Valeur numérique décimale : total products tax excl. |
| `total_products_tax_incl` | `decimal(20,6) DEFAULT NULL` | Valeur numérique décimale : total products tax incl. |
| `total_shipping_tax_excl` | `decimal(20,6) DEFAULT NULL` | Total des frais de port HT. |
| `total_shipping_tax_incl` | `decimal(20,6) DEFAULT NULL` | Total des frais de port TTC. |
| `shipping_cost` | `tinyint(3) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : shipping cost. |
| `amount` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : amount. |
| `shipping_cost_amount` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : shipping cost amount. |
| `partial` | `tinyint(1) NOT NULL` | Indicateur booléen : partial (1 = oui, 0 = non). |
| `order_slip_type` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : order slip type (1 = oui, 0 = non). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_order_slip_detail`

> Détail des produits inclus dans un avoir.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_slip` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_slip`. |
| `id_order_detail` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_detail`. |
| `product_quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : product quantity. |
| `unit_price_tax_excl` | `decimal(20,6) DEFAULT NULL` | Valeur numérique décimale : unit price tax excl. |
| `unit_price_tax_incl` | `decimal(20,6) DEFAULT NULL` | Valeur numérique décimale : unit price tax incl. |
| `total_price_tax_excl` | `decimal(20,6) DEFAULT NULL` | Valeur numérique décimale : total price tax excl. |
| `total_price_tax_incl` | `decimal(20,6) DEFAULT NULL` | Valeur numérique décimale : total price tax incl. |
| `amount_tax_excl` | `decimal(20,6) DEFAULT NULL` | Valeur numérique décimale : amount tax excl. |
| `amount_tax_incl` | `decimal(20,6) DEFAULT NULL` | Valeur numérique décimale : amount tax incl. |

### `ps_cart`

> Paniers d'achat en cours (actifs et abandonnés).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cart` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop_group` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop_group`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_carrier` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `delivery_option` | `mediumtext NOT NULL` | Contenu textuel étendu : delivery option. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_address_delivery` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_address_delivery`. |
| `id_address_invoice` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_address_invoice`. |
| `id_currency` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_guest` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_guest`. |
| `secure_key` | `varchar(32) NOT NULL DEFAULT '-1'` | Clé de sécurité unique (token de session). |
| `recyclable` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indicateur booléen : recyclable (1 = oui, 0 = non). |
| `gift` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : gift (1 = oui, 0 = non). |
| `gift_message` | `mediumtext DEFAULT NULL` | Contenu textuel étendu : gift message. |
| `mobile_theme` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : mobile theme (1 = oui, 0 = non). |
| `allow_seperated_package` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : allow seperated package (1 = oui, 0 = non). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `checkout_session_data` | `mediumtext DEFAULT NULL` | Contenu textuel étendu : checkout session data. |

### `ps_cart_product`

> Produits (et déclinaisons) présents dans un panier.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cart` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart`. |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_address_delivery` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_address_delivery`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_product_attribute` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_product_attribute`. |
| `id_customization` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_customization`. |
| `quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Quantité. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_cart_cart_rule`

> Règles de panier (codes promo) appliquées à un panier.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cart` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart`. |
| `id_cart_rule` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart_rule`. |

### `ps_cart_rule`

> Règles de panier : bons de réduction, codes promo, promotions.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cart_rule` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_customer` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_customer`. |
| `date_from` | `datetime NOT NULL` | Date/heure : date from. |
| `date_to` | `datetime NOT NULL` | Date/heure : date to. |
| `description` | `mediumtext DEFAULT NULL` | Description complète. |
| `quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Quantité. |
| `quantity_per_user` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : quantity per user. |
| `priority` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Valeur entière : priority. |
| `partial_use` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : partial use (1 = oui, 0 = non). |
| `code` | `varchar(254) NOT NULL` | Chaîne de caractères : code. |
| `minimum_amount` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : minimum amount. |
| `minimum_amount_tax` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : minimum amount tax (1 = oui, 0 = non). |
| `minimum_amount_currency` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : minimum amount currency. |
| `minimum_amount_shipping` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : minimum amount shipping (1 = oui, 0 = non). |
| `country_restriction` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : country restriction (1 = oui, 0 = non). |
| `carrier_restriction` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : carrier restriction (1 = oui, 0 = non). |
| `group_restriction` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : group restriction (1 = oui, 0 = non). |
| `cart_rule_restriction` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : cart rule restriction (1 = oui, 0 = non). |
| `product_restriction` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : product restriction (1 = oui, 0 = non). |
| `shop_restriction` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : shop restriction (1 = oui, 0 = non). |
| `free_shipping` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : free shipping (1 = oui, 0 = non). |
| `reduction_percent` | `decimal(5,2) NOT NULL DEFAULT 0.00` | Valeur numérique décimale : reduction percent. |
| `reduction_amount` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : reduction amount. |
| `reduction_tax` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Réduction appliquée TTC ou HT. |
| `reduction_currency` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : reduction currency. |
| `reduction_product` | `int(10) NOT NULL DEFAULT 0` | Valeur entière : reduction product. |
| `reduction_exclude_special` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : reduction exclude special (1 = oui, 0 = non). |
| `gift_product` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : gift product. |
| `gift_product_attribute` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : gift product attribute. |
| `highlight` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : highlight (1 = oui, 0 = non). |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_cart_rule_lang`

> Traductions des noms et descriptions des règles de panier.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cart_rule` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart_rule`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(254) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_cart_rule_carrier`

> Association des règles de panier aux transporteurs éligibles.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cart_rule` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart_rule`. |
| `id_carrier` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |

### `ps_cart_rule_combination`

> Règles de combinaison entre bons de réduction.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cart_rule_1` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart_rule_1`. |
| `id_cart_rule_2` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart_rule_2`. |

### `ps_cart_rule_country`

> Restriction géographique des règles de panier par pays.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cart_rule` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart_rule`. |
| `id_country` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_country`. |

### `ps_cart_rule_group`

> Restriction des règles de panier par groupe de clients.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cart_rule` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart_rule`. |
| `id_group` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_group`. |

### `ps_cart_rule_shop`

> Association des règles de panier aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cart_rule` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart_rule`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_cart_rule_product_rule`

> Règles produit applicables dans une règle de panier.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_rule` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_rule`. |
| `id_product_rule_group` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_rule_group`. |
| `type` | `enum('products','categories','attributes','manufacturers','suppliers') NOT NULL` | Type de l'enregistrement. |

### `ps_cart_rule_product_rule_group`

> Groupes de règles produit dans une règle de panier.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_rule_group` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_rule_group`. |
| `id_cart_rule` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart_rule`. |
| `quantity` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Quantité. |

### `ps_cart_rule_product_rule_value`

> Valeurs des règles produit (catégories, produits, attributs ciblés).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_rule` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_rule`. |
| `id_item` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_item`. |

### `ps_specific_price`

> Prix spéciaux : promotions, prix de groupe, prix par client ou quantité.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_specific_price` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_specific_price_rule` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_specific_price_rule`. |
| `id_cart` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart`. |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_shop_group` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop_group`. |
| `id_currency` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |
| `id_country` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_country`. |
| `id_group` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_group`. |
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_product_attribute` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |
| `price` | `decimal(20,6) NOT NULL` | Prix (en devise par défaut). |
| `from_quantity` | `mediumint(8) UNSIGNED NOT NULL` | Quantité minimale pour déclencher la règle. |
| `reduction` | `decimal(20,6) NOT NULL` | Valeur de la réduction. |
| `reduction_tax` | `tinyint(1) NOT NULL DEFAULT 1` | Réduction appliquée TTC ou HT. |
| `reduction_type` | `enum('amount','percentage') NOT NULL` | Type de réduction (amount = montant fixe, percent = pourcentage). |
| `from` | `datetime NOT NULL` | Date de début de validité. |
| `to` | `datetime NOT NULL` | Date de fin de validité. |

### `ps_specific_price_priority`

> Priorité d'application des règles de prix spéciaux par produit.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_specific_price_priority` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_product` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `priority` | `varchar(80) NOT NULL` | Chaîne de caractères : priority. |

### `ps_specific_price_rule`

> Règles de prix catalogue (remises automatiques sur des ensembles de produits).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_specific_price_rule` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(255) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_currency` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |
| `id_country` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_country`. |
| `id_group` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_group`. |
| `from_quantity` | `mediumint(8) UNSIGNED NOT NULL` | Quantité minimale pour déclencher la règle. |
| `price` | `decimal(20,6) DEFAULT NULL` | Prix (en devise par défaut). |
| `reduction` | `decimal(20,6) NOT NULL` | Valeur de la réduction. |
| `reduction_tax` | `tinyint(1) NOT NULL DEFAULT 1` | Réduction appliquée TTC ou HT. |
| `reduction_type` | `enum('amount','percentage') NOT NULL` | Type de réduction (amount = montant fixe, percent = pourcentage). |
| `from` | `datetime NOT NULL` | Date de début de validité. |
| `to` | `datetime NOT NULL` | Date de fin de validité. |

### `ps_specific_price_rule_condition`

> Conditions d'application des règles de prix catalogue.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_specific_price_rule_condition` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_specific_price_rule_condition_group` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_specific_price_rule_condition_group`. |
| `type` | `varchar(255) NOT NULL` | Type de l'enregistrement. |
| `value` | `varchar(255) NOT NULL` | Valeur. |

### `ps_specific_price_rule_condition_group`

> Groupes de conditions pour les règles de prix catalogue.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_specific_price_rule_condition_group` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_specific_price_rule` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_specific_price_rule`. |

## 👤 Clients & Comptes

### `ps_customer`

> Comptes clients enregistrés (profil, identifiants, préférences).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop_group` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop_group`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_gender` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_gender`. |
| `id_default_group` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_default_group`. |
| `id_lang` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_risk` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_risk`. |
| `company` | `varchar(255) DEFAULT NULL` | Nom de la société. |
| `siret` | `varchar(14) DEFAULT NULL` | Chaîne de caractères : siret. |
| `ape` | `varchar(6) DEFAULT NULL` | Chaîne de caractères : ape. |
| `firstname` | `varchar(255) NOT NULL` | Prénom. |
| `lastname` | `varchar(255) NOT NULL` | Nom de famille. |
| `email` | `varchar(255) NOT NULL` | Adresse e-mail. |
| `passwd` | `varchar(255) NOT NULL` | Mot de passe (hashé). |
| `last_passwd_gen` | `timestamp NOT NULL DEFAULT current_timestamp()` | Date de dernière génération/modification du mot de passe. |
| `birthday` | `date DEFAULT NULL` | Date de naissance. |
| `newsletter` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Inscrit à la newsletter (1 = oui). |
| `ip_registration_newsletter` | `varchar(15) DEFAULT NULL` | Adresse IP lors de l'inscription à la newsletter. |
| `newsletter_date_add` | `datetime DEFAULT NULL` | Date d'inscription à la newsletter. |
| `optin` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Accepte les offres partenaires (1 = oui). |
| `website` | `varchar(128) DEFAULT NULL` | Chaîne de caractères : website. |
| `outstanding_allow_amount` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : outstanding allow amount. |
| `show_public_prices` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : show public prices (1 = oui, 0 = non). |
| `max_payment_days` | `int(10) UNSIGNED NOT NULL DEFAULT 60` | Valeur entière : max payment days. |
| `secure_key` | `varchar(32) NOT NULL DEFAULT '-1'` | Clé de sécurité unique (token de session). |
| `note` | `mediumtext DEFAULT NULL` | Contenu textuel étendu : note. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `is_guest` | `tinyint(1) NOT NULL DEFAULT 0` | Compte invité / sans inscription (1 = oui). |
| `deleted` | `tinyint(1) NOT NULL DEFAULT 0` | Suppression logique (1 = supprimé). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `reset_password_token` | `varchar(40) DEFAULT NULL` | Chaîne de caractères : reset password token. |
| `reset_password_validity` | `datetime DEFAULT NULL` | Date/heure : reset password validity. |

### `ps_customer_group`

> Association des clients aux groupes de clients.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_group` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_group`. |

### `ps_customer_message`

> Messages échangés dans les fils de discussion du service client.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customer_message` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_customer_thread` | `int(11) DEFAULT NULL` | Clé étrangère vers la table `ps_customer_thread`. |
| `id_employee` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_employee`. |
| `message` | `mediumtext NOT NULL` | Contenu textuel étendu : message. |
| `file_name` | `varchar(18) DEFAULT NULL` | Nom du fichier. |
| `ip_address` | `varchar(16) DEFAULT NULL` | Chaîne de caractères : ip address. |
| `user_agent` | `varchar(128) DEFAULT NULL` | Chaîne de caractères : user agent. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `private` | `tinyint(4) NOT NULL DEFAULT 0` | Valeur entière : private. |
| `read` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : read (1 = oui, 0 = non). |

### `ps_customer_message_sync_imap`

> Synchronisation des messages clients via IMAP.

| Colonne | Type | Description |
|---------|------|-------------|
| `md5_header` | `varbinary(32) NOT NULL` | Md5 header. |

### `ps_customer_session`

> Sessions actives des clients connectés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customer_session` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_customer` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_customer`. |
| `token` | `varchar(40) DEFAULT NULL` | Token d'authentification ou de sécurité. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_customer_thread`

> Fils de discussion du service client (SAV).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customer_thread` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_contact` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_contact`. |
| `id_customer` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_order` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_order`. |
| `id_product` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_product`. |
| `status` | `enum('open','closed','pending1','pending2') NOT NULL DEFAULT 'open'` | Status. |
| `email` | `varchar(255) NOT NULL` | Adresse e-mail. |
| `token` | `varchar(12) DEFAULT NULL` | Token d'authentification ou de sécurité. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_address`

> Adresses de livraison et de facturation des clients, fournisseurs et fabricants.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_address` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_country` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_country`. |
| `id_state` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_state`. |
| `id_customer` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_customer`. |
| `id_manufacturer` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_manufacturer`. |
| `id_supplier` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_supplier`. |
| `id_warehouse` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_warehouse`. |
| `alias` | `varchar(32) NOT NULL` | Alias ou libellé court de l'adresse (ex : Domicile, Bureau). |
| `company` | `varchar(255) DEFAULT NULL` | Nom de la société. |
| `lastname` | `varchar(255) NOT NULL` | Nom de famille. |
| `firstname` | `varchar(255) NOT NULL` | Prénom. |
| `address1` | `varchar(128) NOT NULL` | Première ligne de l'adresse (numéro et nom de rue). |
| `address2` | `varchar(128) DEFAULT NULL` | Deuxième ligne de l'adresse (complément). |
| `postcode` | `varchar(12) DEFAULT NULL` | Code postal. |
| `city` | `varchar(64) NOT NULL` | Ville. |
| `other` | `mediumtext DEFAULT NULL` | Informations complémentaires libres. |
| `phone` | `varchar(32) DEFAULT NULL` | Numéro de téléphone fixe. |
| `phone_mobile` | `varchar(32) DEFAULT NULL` | Numéro de téléphone mobile. |
| `vat_number` | `varchar(32) DEFAULT NULL` | Numéro de TVA intracommunautaire. |
| `dni` | `varchar(16) DEFAULT NULL` | Numéro d'identité national (DNI, utilisé en Espagne). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `deleted` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Suppression logique (1 = supprimé). |

### `ps_address_format`

> Format d'affichage des adresses selon le pays.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_country` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_country`. |
| `format` | `varchar(255) NOT NULL DEFAULT ''` | Chaîne de caractères : format. |

### `ps_gender`

> Civilités / genres (M., Mme, etc.).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_gender` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `type` | `tinyint(1) NOT NULL` | Type de l'enregistrement. |

### `ps_gender_lang`

> Traductions des civilités.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_gender` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_gender`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(20) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_group`

> Groupes de clients (ex: Visiteur, Client, Grossiste).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_group` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `reduction` | `decimal(5,2) NOT NULL DEFAULT 0.00` | Valeur de la réduction. |
| `price_display_method` | `tinyint(4) NOT NULL DEFAULT 0` | Valeur entière : price display method. |
| `show_prices` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indicateur booléen : show prices (1 = oui, 0 = non). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_group_lang`

> Traductions des noms de groupes de clients.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_group` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_group`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(32) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_group_reduction`

> Réductions accordées à des groupes de clients sur des catégories.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_group_reduction` | `mediumint(8) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_group` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_group`. |
| `id_category` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_category`. |
| `reduction` | `decimal(5,4) NOT NULL` | Valeur de la réduction. |

### `ps_group_shop`

> Association des groupes de clients aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_group` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_group`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_guest`

> Données de navigation des visiteurs non connectés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_guest` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_operating_system` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_operating_system`. |
| `id_web_browser` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_web_browser`. |
| `id_customer` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_customer`. |
| `javascript` | `tinyint(1) DEFAULT 0` | Indicateur booléen : javascript (1 = oui, 0 = non). |
| `screen_resolution_x` | `smallint(5) UNSIGNED DEFAULT NULL` | Valeur entière : screen resolution x. |
| `screen_resolution_y` | `smallint(5) UNSIGNED DEFAULT NULL` | Valeur entière : screen resolution y. |
| `screen_color` | `tinyint(3) UNSIGNED DEFAULT NULL` | Valeur entière : screen color. |
| `sun_java` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : sun java (1 = oui, 0 = non). |
| `adobe_flash` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : adobe flash (1 = oui, 0 = non). |
| `adobe_director` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : adobe director (1 = oui, 0 = non). |
| `apple_quicktime` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : apple quicktime (1 = oui, 0 = non). |
| `real_player` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : real player (1 = oui, 0 = non). |
| `windows_media` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : windows media (1 = oui, 0 = non). |
| `accept_language` | `varchar(8) DEFAULT NULL` | Chaîne de caractères : accept language. |
| `mobile_theme` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : mobile theme (1 = oui, 0 = non). |

### `ps_message`

> Messages internes attachés aux commandes (entre client et marchand).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_message` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_cart` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_cart`. |
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_employee` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_employee`. |
| `id_order` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order`. |
| `message` | `mediumtext NOT NULL` | Contenu textuel étendu : message. |
| `private` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indicateur booléen : private (1 = oui, 0 = non). |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_message_readed`

> Suivi des messages lus par les employés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_message` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_message`. |
| `id_employee` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_employee`. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_customization`

> Personnalisations produit ajoutées par un client dans un panier.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customization` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_product_attribute` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_product_attribute`. |
| `id_address_delivery` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_address_delivery`. |
| `id_cart` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart`. |
| `id_product` | `int(10) NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `quantity` | `int(10) NOT NULL` | Quantité. |
| `quantity_refunded` | `int(11) NOT NULL DEFAULT 0` | Valeur entière : quantity refunded. |
| `quantity_returned` | `int(11) NOT NULL DEFAULT 0` | Valeur entière : quantity returned. |
| `in_cart` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : in cart (1 = oui, 0 = non). |

### `ps_customization_field`

> Champs de personnalisation disponibles pour un produit.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customization_field` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `type` | `tinyint(1) NOT NULL` | Type de l'enregistrement. |
| `required` | `tinyint(1) NOT NULL` | Indicateur booléen : required (1 = oui, 0 = non). |
| `is_module` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : module (1 = oui, 0 = non). |
| `is_deleted` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : deleted (1 = oui, 0 = non). |

### `ps_customization_field_lang`

> Traductions des noms de champs de personnalisation.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customization_field` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customization_field`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `name` | `varchar(255) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_customized_data`

> Données de personnalisation saisies (textes, images uploadées).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customization` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customization`. |
| `type` | `tinyint(1) NOT NULL` | Type de l'enregistrement. |
| `index` | `int(3) NOT NULL` | Valeur entière : index. |
| `value` | `varchar(255) NOT NULL` | Valeur. |
| `id_module` | `int(10) NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_module`. |
| `price` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Prix (en devise par défaut). |
| `weight` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Poids (en kg ou unité configurée). |

### `ps_emailsubscription`

> Inscriptions à la newsletter.

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | `int(6) NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_shop_group` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop_group`. |
| `email` | `varchar(255) NOT NULL` | Adresse e-mail. |
| `newsletter_date_add` | `datetime DEFAULT NULL` | Date d'inscription à la newsletter. |
| `ip_registration_newsletter` | `varchar(15) NOT NULL` | Adresse IP lors de l'inscription à la newsletter. |
| `http_referer` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : http referer. |
| `active` | `tinyint(1) NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `id_lang` | `int(10) NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_lang`. |

### `ps_mailalert_customer_oos`

> Alertes e-mail clients pour produits en rupture de stock.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `customer_email` | `varchar(128) NOT NULL` | Chaîne de caractères : customer email. |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_product_attribute` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |

## 🚚 Livraison & Transporteurs

### `ps_carrier`

> Transporteurs / méthodes de livraison disponibles dans la boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_carrier` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_reference` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_reference`. |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `url` | `varchar(255) DEFAULT NULL` | URL complète. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `deleted` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Suppression logique (1 = supprimé). |
| `shipping_handling` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Inclure les frais de gestion dans les frais de port. |
| `range_behavior` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Comportement si le poids/prix est hors des plages définies. |
| `is_module` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : module (1 = oui, 0 = non). |
| `is_free` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Livraison gratuite (1 = oui). |
| `shipping_external` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : shipping external (1 = oui, 0 = non). |
| `need_range` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : need range (1 = oui, 0 = non). |
| `external_module_name` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : external module name. |
| `shipping_method` | `int(2) NOT NULL DEFAULT 0` | Valeur entière : shipping method. |
| `position` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |
| `max_width` | `int(10) DEFAULT 0` | Largeur maximum des colis. |
| `max_height` | `int(10) DEFAULT 0` | Hauteur maximum des colis. |
| `max_depth` | `int(10) DEFAULT 0` | Profondeur maximum des colis. |
| `max_weight` | `decimal(20,6) DEFAULT 0.000000` | Poids maximum pris en charge. |
| `grade` | `int(10) DEFAULT 0` | Note attribuée. |

### `ps_carrier_lang`

> Traductions des informations des transporteurs (délai, nom).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_carrier` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `delay` | `varchar(512) DEFAULT NULL` | Chaîne de caractères : delay. |

### `ps_carrier_shop`

> Association des transporteurs aux boutiques (multi-boutique).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_carrier` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_carrier_group`

> Association entre transporteurs et groupes de clients.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_carrier` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `id_group` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_group`. |

### `ps_carrier_tax_rules_group_shop`

> Règles de taxes appliquées aux transporteurs par boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_carrier` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `id_tax_rules_group` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_tax_rules_group`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_carrier_zone`

> Zones géographiques desservies par chaque transporteur.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_carrier` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `id_zone` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_zone`. |

### `ps_delivery`

> Grilles tarifaires de livraison (par transporteur, zone, plage de prix/poids).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_delivery` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_shop`. |
| `id_shop_group` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_shop_group`. |
| `id_carrier` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `id_range_price` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_range_price`. |
| `id_range_weight` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_range_weight`. |
| `id_zone` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_zone`. |
| `price` | `decimal(20,6) NOT NULL` | Prix (en devise par défaut). |

### `ps_range_price`

> Plages de prix pour les grilles tarifaires de livraison.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_range_price` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_carrier` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `delimiter1` | `decimal(20,6) NOT NULL` | Valeur numérique décimale : delimiter1. |
| `delimiter2` | `decimal(20,6) NOT NULL` | Valeur numérique décimale : delimiter2. |

### `ps_range_weight`

> Plages de poids pour les grilles tarifaires de livraison.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_range_weight` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_carrier` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `delimiter1` | `decimal(20,6) NOT NULL` | Valeur numérique décimale : delimiter1. |
| `delimiter2` | `decimal(20,6) NOT NULL` | Valeur numérique décimale : delimiter2. |

### `ps_zone`

> Zones géographiques regroupant des pays (pour la livraison et les taxes).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_zone` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |

### `ps_zone_shop`

> Association des zones géographiques aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_zone` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_zone`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_store`

> Points de vente physiques (magasins) de l'enseigne.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_store` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_country` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_country`. |
| `id_state` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_state`. |
| `city` | `varchar(64) NOT NULL` | Ville. |
| `postcode` | `varchar(12) NOT NULL` | Code postal. |
| `latitude` | `decimal(13,8) DEFAULT NULL` | Valeur numérique décimale : latitude. |
| `longitude` | `decimal(13,8) DEFAULT NULL` | Valeur numérique décimale : longitude. |
| `phone` | `varchar(16) DEFAULT NULL` | Numéro de téléphone fixe. |
| `fax` | `varchar(16) DEFAULT NULL` | Chaîne de caractères : fax. |
| `email` | `varchar(255) DEFAULT NULL` | Adresse e-mail. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_store_lang`

> Traductions des informations des points de vente.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_store` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_store`. |
| `id_lang` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(255) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `address1` | `varchar(255) NOT NULL` | Première ligne de l'adresse (numéro et nom de rue). |
| `address2` | `varchar(255) DEFAULT NULL` | Deuxième ligne de l'adresse (complément). |
| `hours` | `mediumtext DEFAULT NULL` | Contenu textuel étendu : hours. |
| `note` | `mediumtext DEFAULT NULL` | Contenu textuel étendu : note. |

### `ps_store_shop`

> Association des points de vente aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_store` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_store`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_warehouse`

> Entrepôts de stockage (gestion avancée des stocks).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_warehouse` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_currency` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |
| `id_address` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_address`. |
| `id_employee` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_employee`. |
| `reference` | `varchar(64) DEFAULT NULL` | Référence produit interne. |
| `name` | `varchar(45) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `management_type` | `enum('WA','FIFO','LIFO') NOT NULL DEFAULT 'WA'` | Management type. |
| `deleted` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Suppression logique (1 = supprimé). |

### `ps_warehouse_carrier`

> Association entrepôts ↔ transporteurs autorisés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_carrier` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_carrier`. |
| `id_warehouse` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_warehouse`. |

### `ps_warehouse_product_location`

> Emplacement physique des produits dans un entrepôt.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_warehouse_product_location` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_product` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_product_attribute` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |
| `id_warehouse` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_warehouse`. |
| `location` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : location. |

### `ps_warehouse_shop`

> Association des entrepôts aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `id_warehouse` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_warehouse`. |

## 📦 Stock & Fournisseurs

### `ps_stock`

> Stock physique par produit/déclinaison et entrepôt.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_stock` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_warehouse` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_warehouse`. |
| `id_product` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_product_attribute` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |
| `reference` | `varchar(64) NOT NULL` | Référence produit interne. |
| `ean13` | `varchar(13) DEFAULT NULL` | Code-barres EAN-13. |
| `isbn` | `varchar(32) DEFAULT NULL` | Numéro ISBN (pour les livres). |
| `upc` | `varchar(12) DEFAULT NULL` | Code-barres UPC. |
| `mpn` | `varchar(40) DEFAULT NULL` | Numéro de pièce fabricant (MPN). |
| `physical_quantity` | `int(11) UNSIGNED NOT NULL` | Valeur entière : physical quantity. |
| `usable_quantity` | `int(11) UNSIGNED NOT NULL` | Valeur entière : usable quantity. |
| `price_te` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : price te. |

### `ps_stock_available`

> Stock disponible à la vente par produit/déclinaison et boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_stock_available` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_product` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_product_attribute` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `id_shop_group` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop_group`. |
| `quantity` | `int(10) NOT NULL DEFAULT 0` | Quantité. |
| `physical_quantity` | `int(11) NOT NULL DEFAULT 0` | Valeur entière : physical quantity. |
| `reserved_quantity` | `int(11) NOT NULL DEFAULT 0` | Valeur entière : reserved quantity. |
| `depends_on_stock` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : depends on stock (1 = oui, 0 = non). |
| `out_of_stock` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : out of stock (1 = oui, 0 = non). |
| `location` | `varchar(255) NOT NULL DEFAULT ''` | Chaîne de caractères : location. |

### `ps_stock_mvt`

> Mouvements de stock (entrées, sorties, ajustements).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_stock_mvt` | `bigint(20) NOT NULL` | Identifiant unique (clé primaire). |
| `id_stock` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_stock`. |
| `id_order` | `int(11) DEFAULT NULL` | Clé étrangère vers la table `ps_order`. |
| `id_supply_order` | `int(11) DEFAULT NULL` | Clé étrangère vers la table `ps_supply_order`. |
| `id_stock_mvt_reason` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_stock_mvt_reason`. |
| `id_employee` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_employee`. |
| `employee_lastname` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : employee lastname. |
| `employee_firstname` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : employee firstname. |
| `physical_quantity` | `int(10) UNSIGNED NOT NULL` | Valeur entière : physical quantity. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `sign` | `smallint(6) NOT NULL DEFAULT 1` | Valeur entière : sign. |
| `price_te` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : price te. |
| `last_wa` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : last wa. |
| `current_wa` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : current wa. |
| `referer` | `bigint(20) DEFAULT NULL` | Valeur entière : referer. |

### `ps_stock_mvt_reason`

> Motifs des mouvements de stock.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_stock_mvt_reason` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `sign` | `tinyint(1) NOT NULL DEFAULT 1` | Indicateur booléen : sign (1 = oui, 0 = non). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `deleted` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Suppression logique (1 = supprimé). |

### `ps_stock_mvt_reason_lang`

> Traductions des motifs de mouvement de stock.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_stock_mvt_reason` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_stock_mvt_reason`. |
| `id_lang` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_supplier`

> Fournisseurs des produits.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_supplier` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `active` | `tinyint(1) NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |

### `ps_supplier_lang`

> Traductions des descriptions de fournisseurs.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_supplier` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_supplier`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `description` | `mediumtext DEFAULT NULL` | Description complète. |
| `meta_title` | `varchar(255) DEFAULT NULL` | Titre SEO (balise <title>). |
| `meta_keywords` | `varchar(255) DEFAULT NULL` | Mots-clés SEO (balise meta keywords). |
| `meta_description` | `varchar(512) DEFAULT NULL` | Description SEO (balise meta description). |

### `ps_supplier_shop`

> Association des fournisseurs aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_supplier` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_supplier`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_product_supplier`

> Association produits ↔ fournisseurs (avec références et prix fournisseur).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_supplier` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_product` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_product_attribute` | `int(11) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_product_attribute`. |
| `id_supplier` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_supplier`. |
| `product_supplier_reference` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : product supplier reference. |
| `product_supplier_price_te` | `decimal(20,6) NOT NULL DEFAULT 0.000000` | Valeur numérique décimale : product supplier price te. |
| `id_currency` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |

### `ps_supply_order`

> Bons de commande fournisseur.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_supply_order` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_supplier` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_supplier`. |
| `supplier_name` | `varchar(64) NOT NULL` | Chaîne de caractères : supplier name. |
| `id_lang` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_warehouse` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_warehouse`. |
| `id_supply_order_state` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_supply_order_state`. |
| `id_currency` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |
| `id_ref_currency` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_ref_currency`. |
| `reference` | `varchar(64) NOT NULL` | Référence produit interne. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `date_delivery_expected` | `datetime DEFAULT NULL` | Date/heure : date delivery expected. |
| `total_te` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : total te. |
| `total_with_discount_te` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : total with discount te. |
| `total_tax` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : total tax. |
| `total_ti` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : total ti. |
| `discount_rate` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : discount rate. |
| `discount_value_te` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : discount value te. |
| `is_template` | `tinyint(1) DEFAULT 0` | Indicateur booléen : template (1 = oui, 0 = non). |

### `ps_supply_order_detail`

> Lignes de détail des bons de commande fournisseur.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_supply_order_detail` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_supply_order` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_supply_order`. |
| `id_currency` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |
| `id_product` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_product_attribute` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |
| `reference` | `varchar(64) NOT NULL` | Référence produit interne. |
| `supplier_reference` | `varchar(64) NOT NULL` | Référence produit chez le fournisseur. |
| `name` | `varchar(128) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `ean13` | `varchar(13) DEFAULT NULL` | Code-barres EAN-13. |
| `isbn` | `varchar(32) DEFAULT NULL` | Numéro ISBN (pour les livres). |
| `upc` | `varchar(12) DEFAULT NULL` | Code-barres UPC. |
| `mpn` | `varchar(40) DEFAULT NULL` | Numéro de pièce fabricant (MPN). |
| `exchange_rate` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : exchange rate. |
| `unit_price_te` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : unit price te. |
| `quantity_expected` | `int(11) UNSIGNED NOT NULL` | Valeur entière : quantity expected. |
| `quantity_received` | `int(11) UNSIGNED NOT NULL` | Valeur entière : quantity received. |
| `price_te` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : price te. |
| `discount_rate` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : discount rate. |
| `discount_value_te` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : discount value te. |
| `price_with_discount_te` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : price with discount te. |
| `tax_rate` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : tax rate. |
| `tax_value` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : tax value. |
| `price_ti` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : price ti. |
| `tax_value_with_order_discount` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : tax value with order discount. |
| `price_with_order_discount_te` | `decimal(20,6) DEFAULT 0.000000` | Valeur numérique décimale : price with order discount te. |

### `ps_supply_order_history`

> Historique des changements d'état des commandes fournisseur.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_supply_order_history` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_supply_order` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_supply_order`. |
| `id_employee` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_employee`. |
| `employee_lastname` | `varchar(255) DEFAULT ''` | Chaîne de caractères : employee lastname. |
| `employee_firstname` | `varchar(255) DEFAULT ''` | Chaîne de caractères : employee firstname. |
| `id_state` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_state`. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_supply_order_receipt_history`

> Historique des réceptions de marchandises sur commande fournisseur.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_supply_order_receipt_history` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_supply_order_detail` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_supply_order_detail`. |
| `id_employee` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_employee`. |
| `employee_lastname` | `varchar(255) DEFAULT ''` | Chaîne de caractères : employee lastname. |
| `employee_firstname` | `varchar(255) DEFAULT ''` | Chaîne de caractères : employee firstname. |
| `id_supply_order_state` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_supply_order_state`. |
| `quantity` | `int(11) UNSIGNED NOT NULL` | Quantité. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_supply_order_state`

> États des bons de commande fournisseur.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_supply_order_state` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `delivery_note` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : delivery note (1 = oui, 0 = non). |
| `editable` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : editable (1 = oui, 0 = non). |
| `receipt_state` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : receipt state (1 = oui, 0 = non). |
| `pending_receipt` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : pending receipt (1 = oui, 0 = non). |
| `enclosed` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : enclosed (1 = oui, 0 = non). |
| `color` | `varchar(32) DEFAULT NULL` | Couleur associée (code hexadécimal ou nom). |

### `ps_supply_order_state_lang`

> Traductions des états de commande fournisseur.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_supply_order_state` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_supply_order_state`. |
| `id_lang` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(128) DEFAULT NULL` | Nom ou libellé de l'enregistrement. |

## 💰 Taxes, Devises & Prix

### `ps_tax`

> Taux de taxes (TVA et autres).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_tax` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `rate` | `decimal(10,3) NOT NULL` | Valeur numérique décimale : rate. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `deleted` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Suppression logique (1 = supprimé). |

### `ps_tax_lang`

> Traductions des noms de taxes.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_tax` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_tax`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(32) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_tax_rule`

> Règles de taxes par pays et zone géographique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_tax_rule` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_tax_rules_group` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_tax_rules_group`. |
| `id_country` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_country`. |
| `id_state` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_state`. |
| `zipcode_from` | `varchar(12) NOT NULL` | Chaîne de caractères : zipcode from. |
| `zipcode_to` | `varchar(12) NOT NULL` | Chaîne de caractères : zipcode to. |
| `id_tax` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_tax`. |
| `behavior` | `int(11) NOT NULL` | Valeur entière : behavior. |
| `description` | `varchar(100) NOT NULL` | Description complète. |

### `ps_tax_rules_group`

> Groupes de règles de taxes (ensemble de règles applicables à un produit).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_tax_rules_group` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(50) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `active` | `int(11) NOT NULL` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `deleted` | `tinyint(1) UNSIGNED NOT NULL` | Suppression logique (1 = supprimé). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_tax_rules_group_shop`

> Association des groupes de taxes aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_tax_rules_group` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_tax_rules_group`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_currency`

> Devises disponibles (taux de change, symboles).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_currency` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `iso_code` | `varchar(3) NOT NULL DEFAULT '0'` | Code ISO (pays ISO 3166-1, langue ISO 639-1, devise ISO 4217). |
| `numeric_iso_code` | `varchar(3) DEFAULT NULL` | Chaîne de caractères : numeric iso code. |
| `precision` | `int(2) NOT NULL DEFAULT 6` | Valeur entière : precision. |
| `conversion_rate` | `decimal(13,6) NOT NULL` | Taux de conversion par rapport à la devise par défaut. |
| `deleted` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Suppression logique (1 = supprimé). |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `unofficial` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : unofficial (1 = oui, 0 = non). |
| `modified` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : modified (1 = oui, 0 = non). |

### `ps_currency_lang`

> Traductions et formats d'affichage des devises par langue.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_currency` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(255) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `symbol` | `varchar(255) NOT NULL` | Chaîne de caractères : symbol. |
| `pattern` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : pattern. |

### `ps_currency_shop`

> Association des devises aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_currency` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_currency`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `conversion_rate` | `decimal(13,6) NOT NULL` | Taux de conversion par rapport à la devise par défaut. |

### `ps_country`

> Pays disponibles dans la boutique (livraison, adresses).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_country` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_zone` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_zone`. |
| `id_currency` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_currency`. |
| `iso_code` | `varchar(3) NOT NULL` | Code ISO (pays ISO 3166-1, langue ISO 639-1, devise ISO 4217). |
| `call_prefix` | `int(10) NOT NULL DEFAULT 0` | Valeur entière : call prefix. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `contains_states` | `tinyint(1) NOT NULL DEFAULT 0` | Indique si le pays contient des régions/états (1 = oui). |
| `need_identification_number` | `tinyint(1) NOT NULL DEFAULT 0` | Numéro d'identification requis pour ce pays. |
| `need_zip_code` | `tinyint(1) NOT NULL DEFAULT 1` | Code postal requis pour ce pays. |
| `zip_code_format` | `varchar(12) NOT NULL DEFAULT ''` | Format de validation du code postal. |
| `display_tax_label` | `tinyint(1) NOT NULL` | Afficher le label de taxe en front-office. |

### `ps_country_lang`

> Traductions des noms de pays.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_country` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_country`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_country_shop`

> Association des pays aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_country` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_country`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_state`

> Régions / états / provinces associés aux pays.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_state` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_country` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_country`. |
| `id_zone` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_zone`. |
| `name` | `varchar(80) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `iso_code` | `varchar(7) NOT NULL` | Code ISO (pays ISO 3166-1, langue ISO 639-1, devise ISO 4217). |
| `tax_behavior` | `smallint(1) NOT NULL DEFAULT 0` | Valeur entière : tax behavior. |
| `active` | `tinyint(1) NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |

### `ps_risk`

> Niveaux de risque de crédit pour les fournisseurs.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_risk` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `percent` | `tinyint(3) NOT NULL` | Valeur entière : percent. |
| `color` | `varchar(32) DEFAULT NULL` | Couleur associée (code hexadécimal ou nom). |

### `ps_risk_lang`

> Traductions des niveaux de risque.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_risk` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_risk`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(20) NOT NULL` | Nom ou libellé de l'enregistrement. |

## ⚙️ Configuration & Boutique

### `ps_shop`

> Boutiques dans un contexte multi-boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_shop` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop_group` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_shop_group`. |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `color` | `varchar(50) NOT NULL` | Couleur associée (code hexadécimal ou nom). |
| `id_category` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_category`. |
| `theme_name` | `varchar(255) NOT NULL` | Chaîne de caractères : theme name. |
| `active` | `tinyint(1) NOT NULL` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `deleted` | `tinyint(1) NOT NULL` | Suppression logique (1 = supprimé). |

### `ps_shop_group`

> Groupes de boutiques (multi-boutique).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_shop_group` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `color` | `varchar(50) NOT NULL` | Couleur associée (code hexadécimal ou nom). |
| `share_customer` | `tinyint(1) NOT NULL` | Indicateur booléen : share customer (1 = oui, 0 = non). |
| `share_order` | `tinyint(1) NOT NULL` | Indicateur booléen : share order (1 = oui, 0 = non). |
| `share_stock` | `tinyint(1) NOT NULL` | Indicateur booléen : share stock (1 = oui, 0 = non). |
| `active` | `tinyint(1) NOT NULL` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `deleted` | `tinyint(1) NOT NULL` | Suppression logique (1 = supprimé). |

### `ps_shop_url`

> URLs des boutiques (domaines et chemins).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_shop_url` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `domain` | `varchar(150) NOT NULL` | Chaîne de caractères : domain. |
| `domain_ssl` | `varchar(150) NOT NULL` | Chaîne de caractères : domain ssl. |
| `physical_uri` | `varchar(64) NOT NULL` | Chaîne de caractères : physical uri. |
| `virtual_uri` | `varchar(64) NOT NULL` | Chaîne de caractères : virtual uri. |
| `main` | `tinyint(1) NOT NULL` | Indicateur booléen : main (1 = oui, 0 = non). |
| `active` | `tinyint(1) NOT NULL` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |

### `ps_configuration`

> Paramètres de configuration globaux de la boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_configuration` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop_group` | `int(11) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_shop_group`. |
| `id_shop` | `int(11) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_shop`. |
| `name` | `varchar(254) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `value` | `mediumtext DEFAULT NULL` | Valeur. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_configuration_lang`

> Traductions des valeurs de configuration multilingues.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_configuration` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_configuration`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `value` | `mediumtext DEFAULT NULL` | Valeur. |
| `date_upd` | `datetime DEFAULT NULL` | Date de mise à jour. |

### `ps_configuration_kpi`

> Indicateurs de performance clés (KPI) configurés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_configuration_kpi` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop_group` | `int(11) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_shop_group`. |
| `id_shop` | `int(11) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_shop`. |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `value` | `mediumtext DEFAULT NULL` | Valeur. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_configuration_kpi_lang`

> Traductions des KPI.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_configuration_kpi` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_configuration_kpi`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `value` | `mediumtext DEFAULT NULL` | Valeur. |
| `date_upd` | `datetime DEFAULT NULL` | Date de mise à jour. |

### `ps_lang`

> Langues installées et activées dans la boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_lang` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(32) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `active` | `tinyint(1) NOT NULL` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `iso_code` | `varchar(2) NOT NULL` | Code ISO (pays ISO 3166-1, langue ISO 639-1, devise ISO 4217). |
| `language_code` | `varchar(5) NOT NULL` | Chaîne de caractères : language code. |
| `locale` | `varchar(5) NOT NULL` | Chaîne de caractères : locale. |
| `date_format_lite` | `varchar(32) NOT NULL` | Chaîne de caractères : date format lite. |
| `date_format_full` | `varchar(32) NOT NULL` | Chaîne de caractères : date format full. |
| `is_rtl` | `tinyint(1) NOT NULL` | Indicateur booléen : rtl (1 = oui, 0 = non). |

### `ps_lang_shop`

> Association des langues aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_lang` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_shop` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_timezone`

> Fuseaux horaires disponibles.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_timezone` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(32) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_currency`

> Devises disponibles (taux de change, symboles).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_currency` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `iso_code` | `varchar(3) NOT NULL DEFAULT '0'` | Code ISO (pays ISO 3166-1, langue ISO 639-1, devise ISO 4217). |
| `numeric_iso_code` | `varchar(3) DEFAULT NULL` | Chaîne de caractères : numeric iso code. |
| `precision` | `int(2) NOT NULL DEFAULT 6` | Valeur entière : precision. |
| `conversion_rate` | `decimal(13,6) NOT NULL` | Taux de conversion par rapport à la devise par défaut. |
| `deleted` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Suppression logique (1 = supprimé). |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `unofficial` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : unofficial (1 = oui, 0 = non). |
| `modified` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : modified (1 = oui, 0 = non). |

### `ps_meta`

> Pages meta (URL, titre) pour le SEO des pages système.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_meta` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `page` | `varchar(64) NOT NULL` | Chaîne de caractères : page. |
| `configurable` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indicateur booléen : configurable (1 = oui, 0 = non). |

### `ps_meta_lang`

> Traductions des meta titres, descriptions et mots-clés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_meta` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_meta`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `title` | `varchar(128) DEFAULT NULL` | Titre. |
| `description` | `varchar(255) DEFAULT NULL` | Description complète. |
| `keywords` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : keywords. |
| `url_rewrite` | `varchar(254) NOT NULL` | Chaîne de caractères : url rewrite. |

### `ps_cms`

> Pages CMS (contenu statique : CGV, mentions légales, etc.).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cms` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_cms_category` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cms_category`. |
| `position` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `indexation` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indique si la page est indexable par les moteurs de recherche. |

### `ps_cms_lang`

> Traductions des pages CMS (titre, contenu, meta).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cms` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cms`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `meta_title` | `varchar(255) NOT NULL` | Titre SEO (balise <title>). |
| `head_seo_title` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : head seo title. |
| `meta_description` | `varchar(512) DEFAULT NULL` | Description SEO (balise meta description). |
| `meta_keywords` | `varchar(255) DEFAULT NULL` | Mots-clés SEO (balise meta keywords). |
| `content` | `longtext DEFAULT NULL` | Contenu principal. |
| `link_rewrite` | `varchar(128) NOT NULL` | Slug URL (réécriture d'URL conviviale). |

### `ps_cms_shop`

> Association des pages CMS aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cms` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cms`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_cms_category`

> Catégories de pages CMS.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cms_category` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_parent` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_parent`. |
| `level_depth` | `tinyint(3) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : level depth. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `position` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |

### `ps_cms_category_lang`

> Traductions des noms de catégories CMS.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cms_category` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cms_category`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `name` | `varchar(128) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `description` | `mediumtext DEFAULT NULL` | Description complète. |
| `link_rewrite` | `varchar(128) NOT NULL` | Slug URL (réécriture d'URL conviviale). |
| `meta_title` | `varchar(255) DEFAULT NULL` | Titre SEO (balise <title>). |
| `meta_keywords` | `varchar(255) DEFAULT NULL` | Mots-clés SEO (balise meta keywords). |
| `meta_description` | `varchar(512) DEFAULT NULL` | Description SEO (balise meta description). |

### `ps_cms_category_shop`

> Association des catégories CMS aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cms_category` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cms_category`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_cms_role`

> Rôles CMS (emplacement prévu pour une page CMS).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cms_role` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(50) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `id_cms` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cms`. |

### `ps_cms_role_lang`

> Traductions des noms de rôles CMS.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cms_role` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cms_role`. |
| `id_lang` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `name` | `varchar(128) DEFAULT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_contact`

> Contacts / départements du service client.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_contact` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `email` | `varchar(255) NOT NULL` | Adresse e-mail. |
| `customer_service` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : customer service (1 = oui, 0 = non). |
| `position` | `tinyint(2) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |

### `ps_contact_lang`

> Traductions des noms et descriptions des contacts.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_contact` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_contact`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(255) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `description` | `mediumtext DEFAULT NULL` | Description complète. |

### `ps_contact_shop`

> Association des contacts aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_contact` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_contact`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_info`

> Bannières d'information affichées dans la boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_info` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |

### `ps_info_lang`

> Traductions des bannières d'information.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_info` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_info`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `text` | `text NOT NULL` | Contenu textuel étendu : text. |

### `ps_info_shop`

> Association des bannières d'information aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_info` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_info`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_required_field`

> Champs obligatoires configurés pour les formulaires.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_required_field` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `object_name` | `varchar(32) NOT NULL` | Chaîne de caractères : object name. |
| `field_name` | `varchar(32) NOT NULL` | Chaîne de caractères : field name. |

### `ps_request_sql`

> Requêtes SQL sauvegardées dans le gestionnaire SQL du back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_request_sql` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(200) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `sql` | `mediumtext NOT NULL` | Contenu textuel étendu : sql. |

## 🔌 Modules & Hooks

### `ps_module`

> Modules installés dans la boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_module` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `version` | `varchar(8) NOT NULL` | Chaîne de caractères : version. |

### `ps_module_access`

> Permissions d'accès des profils aux modules du back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_profile` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_profile`. |
| `id_authorization_role` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_authorization_role`. |

### `ps_module_carrier`

> Association des modules aux transporteurs.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_module` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_module`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_reference` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_reference`. |

### `ps_module_country`

> Restriction géographique des modules par pays.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_module` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_module`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_country` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_country`. |

### `ps_module_currency`

> Devises supportées par chaque module.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_module` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_module`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_currency` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_currency`. |

### `ps_module_group`

> Groupes de clients supportés par chaque module.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_module` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_module`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_group` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_group`. |

### `ps_module_history`

> Historique d'installation/mise à jour des modules.

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_employee` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_employee`. |
| `id_module` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_module`. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_module_preference`

> Préférences d'affichage des modules dans le back-office par employé.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_module_preference` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_employee` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_employee`. |
| `module` | `varchar(191) NOT NULL` | Chaîne de caractères : module. |
| `interest` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : interest (1 = oui, 0 = non). |
| `favorite` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : favorite (1 = oui, 0 = non). |

### `ps_module_shop`

> Association des modules aux boutiques (multi-boutique).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_module` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_module`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `enable_device` | `tinyint(1) NOT NULL DEFAULT 7` | Indicateur booléen : enable device (1 = oui, 0 = non). |

### `ps_hook`

> Hooks (points d'accroche) disponibles pour les modules.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_hook` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(191) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `title` | `varchar(255) NOT NULL` | Titre. |
| `description` | `mediumtext DEFAULT NULL` | Description complète. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 1` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `position` | `tinyint(1) NOT NULL DEFAULT 1` | Position/ordre d'affichage. |

### `ps_hook_alias`

> Alias de hooks pour la compatibilité entre versions.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_hook_alias` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `alias` | `varchar(191) NOT NULL` | Alias ou libellé court de l'adresse (ex : Domicile, Bureau). |
| `name` | `varchar(191) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_hook_module`

> Association modules ↔ hooks (modules accrochés à des hooks).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_module` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_module`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_hook` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_hook`. |
| `position` | `tinyint(2) UNSIGNED NOT NULL` | Position/ordre d'affichage. |

### `ps_hook_module_exceptions`

> Exceptions d'affichage des modules sur certaines pages.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_hook_module_exceptions` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_module` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_module`. |
| `id_hook` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_hook`. |
| `file_name` | `varchar(255) DEFAULT NULL` | Nom du fichier. |

### `ps_tab`

> Onglets / entrées de menu du back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_tab` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_parent` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_parent`. |
| `position` | `int(11) NOT NULL` | Position/ordre d'affichage. |
| `module` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : module. |
| `class_name` | `varchar(64) NOT NULL` | Chaîne de caractères : class name. |
| `route_name` | `varchar(256) DEFAULT NULL` | Chaîne de caractères : route name. |
| `active` | `tinyint(1) NOT NULL` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `enabled` | `tinyint(1) NOT NULL` | Indicateur booléen : enabled (1 = oui, 0 = non). |
| `icon` | `varchar(32) DEFAULT NULL` | Chaîne de caractères : icon. |
| `wording` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : wording. |
| `wording_domain` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : wording domain. |

### `ps_tab_advice`

> Association entre onglets du back-office et conseils affichés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_tab` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_tab`. |
| `id_advice` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_advice`. |

### `ps_tab_lang`

> Traductions des noms d'onglets du back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_tab` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_tab`. |
| `id_lang` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(128) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_tab_module_preference`

> Préférences d'affichage des onglets de modules par employé.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_tab_module_preference` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_employee` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_employee`. |
| `id_tab` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_tab`. |
| `module` | `varchar(191) NOT NULL` | Chaîne de caractères : module. |

### `ps_authorized_application`

> Applications tierces autorisées à accéder à l'API.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_authorized_application` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(50) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `description` | `longtext NOT NULL` | Description complète. |

### `ps_mbo_api_config`

> Configuration API du module PrestaShop Marketplace (MBO).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_mbo_api_config` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `config_key` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : config key. |
| `config_value` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : config value. |
| `ps_version` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : ps version. |
| `mbo_version` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : mbo version. |
| `applied` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : applied (1 = oui, 0 = non). |
| `date_add` | `datetime NOT NULL` | Date de création. |

## 👔 Employés & Accès

### `ps_employee`

> Comptes des employés / administrateurs du back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_employee` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_profile` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_profile`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_lang`. |
| `lastname` | `varchar(255) NOT NULL` | Nom de famille. |
| `firstname` | `varchar(255) NOT NULL` | Prénom. |
| `email` | `varchar(255) NOT NULL` | Adresse e-mail. |
| `passwd` | `varchar(255) NOT NULL` | Mot de passe (hashé). |
| `last_passwd_gen` | `timestamp NOT NULL DEFAULT current_timestamp()` | Date de dernière génération/modification du mot de passe. |
| `stats_date_from` | `date DEFAULT NULL` | Début de la plage de dates des statistiques. |
| `stats_date_to` | `date DEFAULT NULL` | Fin de la plage de dates des statistiques. |
| `stats_compare_from` | `date DEFAULT NULL` | Début de la plage de comparaison des statistiques. |
| `stats_compare_to` | `date DEFAULT NULL` | Fin de la plage de comparaison des statistiques. |
| `stats_compare_option` | `int(1) UNSIGNED NOT NULL DEFAULT 1` | Option de comparaison des statistiques. |
| `preselect_date_range` | `varchar(32) DEFAULT NULL` | Plage de dates présélectionnée pour les statistiques. |
| `bo_color` | `varchar(32) DEFAULT NULL` | Chaîne de caractères : bo color. |
| `bo_theme` | `varchar(32) DEFAULT NULL` | Chaîne de caractères : bo theme. |
| `bo_css` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : bo css. |
| `default_tab` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : default tab. |
| `bo_width` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : bo width. |
| `bo_menu` | `tinyint(1) NOT NULL DEFAULT 1` | Indicateur booléen : bo menu (1 = oui, 0 = non). |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `optin` | `tinyint(1) UNSIGNED DEFAULT NULL` | Accepte les offres partenaires (1 = oui). |
| `id_last_order` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_last_order`. |
| `id_last_customer_message` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_last_customer_message`. |
| `id_last_customer` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_last_customer`. |
| `last_connection_date` | `date DEFAULT NULL` | Date/heure : last connection date. |
| `reset_password_token` | `varchar(40) DEFAULT NULL` | Chaîne de caractères : reset password token. |
| `reset_password_validity` | `datetime DEFAULT NULL` | Date/heure : reset password validity. |
| `has_enabled_gravatar` | `tinyint(3) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : possède enabled gravatar (1 = oui). |

### `ps_employee_account`

> Tokens d'authentification des comptes employés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_employee_account` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_employee` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_employee`. |
| `email` | `varchar(64) NOT NULL` | Adresse e-mail. |
| `uid` | `varchar(64) NOT NULL` | Chaîne de caractères : uid. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_employee_session`

> Sessions actives des employés connectés au back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_employee_session` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_employee` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_employee`. |
| `token` | `varchar(40) DEFAULT NULL` | Token d'authentification ou de sécurité. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_employee_shop`

> Association des employés aux boutiques accessibles.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_employee` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_employee`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_profile`

> Profils d'accès back-office (SuperAdmin, Logisticien, etc.).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_profile` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |

### `ps_profile_lang`

> Traductions des noms de profils.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_profile` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_profile`. |
| `name` | `varchar(128) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_access`

> Droits d'accès des profils aux rôles d'autorisation dans le back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_profile` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_profile`. |
| `id_authorization_role` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_authorization_role`. |

### `ps_authorization_role`

> Rôles d'autorisation définissant les permissions dans le back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_authorization_role` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `slug` | `varchar(191) NOT NULL` | Identifiant unique en chaîne de caractères (slug). |

### `ps_module_access`

> Permissions d'accès des profils aux modules du back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_profile` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_profile`. |
| `id_authorization_role` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_authorization_role`. |

### `ps_api_access`

> Accès et permissions des comptes API (webservice).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_api_access` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_authorized_application` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_authorized_application`. |
| `client_id` | `varchar(255) NOT NULL` | Chaîne de caractères : client id. |
| `client_secret` | `varchar(255) NOT NULL` | Chaîne de caractères : client secret. |
| `active` | `tinyint(1) NOT NULL` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `scopes` | `longtext NOT NULL COMMENT '(DC2Type:array)'` | Contenu textuel étendu : scopes. |

### `ps_webservice_account`

> Comptes d'accès à l'API webservice (clés API).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_webservice_account` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `key` | `varchar(32) NOT NULL` | Clé de configuration. |
| `description` | `mediumtext DEFAULT NULL` | Description complète. |
| `class_name` | `varchar(50) NOT NULL DEFAULT 'WebserviceRequest'` | Chaîne de caractères : class name. |
| `is_module` | `tinyint(2) NOT NULL DEFAULT 0` | Indicateur booléen : module (1 = oui, 0 = non). |
| `module_name` | `varchar(50) DEFAULT NULL` | Chaîne de caractères : module name. |
| `active` | `tinyint(2) NOT NULL` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |

### `ps_webservice_account_shop`

> Association des comptes webservice aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_webservice_account` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_webservice_account`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_webservice_permission`

> Permissions des comptes webservice par ressource et méthode HTTP.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_webservice_permission` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `resource` | `varchar(50) NOT NULL` | Chaîne de caractères : resource. |
| `method` | `enum('GET','POST','PUT','PATCH','DELETE','HEAD') NOT NULL` | Method. |
| `id_webservice_account` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_webservice_account`. |

### `ps_quick_access`

> Liens de raccourcis du menu d'accès rapide du back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_quick_access` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `new_window` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : new window (1 = oui, 0 = non). |
| `link` | `varchar(255) NOT NULL` | Chaîne de caractères : link. |

### `ps_quick_access_lang`

> Traductions des libellés des raccourcis.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_quick_access` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_quick_access`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(32) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_log`

> Journal des événements et erreurs système.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_log` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `severity` | `tinyint(1) NOT NULL` | Indicateur booléen : severity (1 = oui, 0 = non). |
| `error_code` | `int(11) DEFAULT NULL` | Valeur entière : error code. |
| `message` | `mediumtext NOT NULL` | Contenu textuel étendu : message. |
| `object_type` | `varchar(32) DEFAULT NULL` | Chaîne de caractères : object type. |
| `object_id` | `int(10) UNSIGNED DEFAULT NULL` | Valeur entière : object id. |
| `id_shop` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_shop`. |
| `id_shop_group` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_shop_group`. |
| `id_lang` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_lang`. |
| `in_all_shops` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : in all shops (1 = oui, 0 = non). |
| `id_employee` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_employee`. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

## 📊 Statistiques & SEO

### `ps_connections`

> Connexions des visiteurs (sessions de navigation).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_connections` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop_group` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop_group`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_guest` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_guest`. |
| `id_page` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_page`. |
| `ip_address` | `bigint(20) DEFAULT NULL` | Valeur entière : ip address. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `http_referer` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : http referer. |

### `ps_connections_page`

> Pages visitées lors d'une session de navigation.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_connections` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_connections`. |
| `id_page` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_page`. |
| `time_start` | `datetime NOT NULL` | Date/heure : time start. |
| `time_end` | `datetime DEFAULT NULL` | Date/heure : time end. |

### `ps_connections_source`

> Sources de trafic (referrer, mots-clés) des sessions.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_connections_source` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_connections` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_connections`. |
| `http_referer` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : http referer. |
| `request_uri` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : request uri. |
| `keywords` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : keywords. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_guest`

> Données de navigation des visiteurs non connectés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_guest` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_operating_system` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_operating_system`. |
| `id_web_browser` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_web_browser`. |
| `id_customer` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_customer`. |
| `javascript` | `tinyint(1) DEFAULT 0` | Indicateur booléen : javascript (1 = oui, 0 = non). |
| `screen_resolution_x` | `smallint(5) UNSIGNED DEFAULT NULL` | Valeur entière : screen resolution x. |
| `screen_resolution_y` | `smallint(5) UNSIGNED DEFAULT NULL` | Valeur entière : screen resolution y. |
| `screen_color` | `tinyint(3) UNSIGNED DEFAULT NULL` | Valeur entière : screen color. |
| `sun_java` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : sun java (1 = oui, 0 = non). |
| `adobe_flash` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : adobe flash (1 = oui, 0 = non). |
| `adobe_director` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : adobe director (1 = oui, 0 = non). |
| `apple_quicktime` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : apple quicktime (1 = oui, 0 = non). |
| `real_player` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : real player (1 = oui, 0 = non). |
| `windows_media` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : windows media (1 = oui, 0 = non). |
| `accept_language` | `varchar(8) DEFAULT NULL` | Chaîne de caractères : accept language. |
| `mobile_theme` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : mobile theme (1 = oui, 0 = non). |

### `ps_operating_system`

> Systèmes d'exploitation détectés lors des connexions visiteurs.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_operating_system` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(64) DEFAULT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_web_browser`

> Navigateurs web détectés lors des connexions visiteurs.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_web_browser` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(64) DEFAULT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_page`

> Pages visitées dans la boutique (pour les statistiques).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_page` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_page_type` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_page_type`. |
| `id_object` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_object`. |

### `ps_page_type`

> Types de pages (catégorie, produit, panier, etc.) pour les statistiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_page_type` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(255) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_page_viewed`

> Compteur de vues de pages par plage de dates et boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_page` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_page`. |
| `id_shop_group` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop_group`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_date_range` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_date_range`. |
| `counter` | `int(10) UNSIGNED NOT NULL` | Valeur entière : counter. |

### `ps_pagenotfound`

> Historique des erreurs 404 (pages introuvables).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_pagenotfound` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_shop_group` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop_group`. |
| `request_uri` | `varchar(256) NOT NULL` | Chaîne de caractères : request uri. |
| `http_referer` | `varchar(256) NOT NULL` | Chaîne de caractères : http referer. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_statssearch`

> Historique des recherches internes effectuées par les visiteurs.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_statssearch` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_shop_group` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop_group`. |
| `keywords` | `varchar(255) NOT NULL` | Chaîne de caractères : keywords. |
| `results` | `int(6) NOT NULL DEFAULT 0` | Valeur entière : results. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_date_range`

> Plages de dates utilisées pour les statistiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_date_range` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `time_start` | `datetime NOT NULL` | Date/heure : time start. |
| `time_end` | `datetime NOT NULL` | Date/heure : time end. |

### `ps_search_engine`

> Moteurs de recherche reconnus pour le suivi du trafic.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_search_engine` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `server` | `varchar(64) NOT NULL` | Chaîne de caractères : server. |
| `getvar` | `varchar(16) NOT NULL` | Chaîne de caractères : getvar. |

### `ps_search_index`

> Index de recherche interne (mots ↔ produits avec pertinence).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_word` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_word`. |
| `weight` | `smallint(4) UNSIGNED NOT NULL DEFAULT 1` | Poids (en kg ou unité configurée). |

### `ps_search_word`

> Mots indexés pour la recherche interne.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_word` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_word`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `word` | `varchar(30) NOT NULL` | Chaîne de caractères : word. |

### `ps_alias`

> Alias de recherche permettant de rediriger des termes vers d'autres mots-clés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_alias` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `alias` | `varchar(191) NOT NULL` | Alias ou libellé court de l'adresse (ex : Domicile, Bureau). |
| `search` | `varchar(255) NOT NULL` | Chaîne de caractères : search. |
| `active` | `tinyint(1) NOT NULL DEFAULT 1` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |

### `ps_translation`

> Traductions des chaînes de caractères de l'interface.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_translation` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_lang` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `key` | `text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL` | Clé de configuration. |
| `translation` | `text NOT NULL` | Contenu textuel étendu : translation. |
| `domain` | `varchar(80) NOT NULL` | Chaîne de caractères : domain. |
| `theme` | `varchar(32) DEFAULT NULL` | Chaîne de caractères : theme. |

### `ps_gsitemap_sitemap`

> Sitemaps XML générés pour le référencement (module Google Sitemap).

| Colonne | Type | Description |
|---------|------|-------------|
| `link` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : link. |
| `id_shop` | `int(11) DEFAULT 0` | Clé étrangère vers la table `ps_shop`. |

### `ps_ganalytics`

> Configuration du module Google Analytics.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_google_analytics` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_google_analytics`. |
| `id_order` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_order`. |
| `id_customer` | `int(10) NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_shop` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `sent` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : sent (1 = oui, 0 = non). |
| `refund_sent` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : refund sent (1 = oui, 0 = non). |
| `date_add` | `datetime DEFAULT NULL` | Date de création. |

### `ps_ganalytics_data`

> Données collectées par le module Google Analytics.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_cart` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_cart`. |
| `id_shop` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `data` | `text DEFAULT NULL` | Contenu textuel étendu : data. |

## 🔍 Navigation à facettes

### `ps_layered_category`

> Index des catégories pour la navigation à facettes (filtres).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_layered_category` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `controller` | `varchar(64) NOT NULL` | Chaîne de caractères : controller. |
| `id_category` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_category`. |
| `id_value` | `int(10) UNSIGNED DEFAULT 0` | Clé étrangère vers la table `ps_value`. |
| `type` | `enum('category','id_feature','id_attribute_group','availability','condition','manufacturer','weight','price','extras') NOT NULL` | Type de l'enregistrement. |
| `position` | `int(10) UNSIGNED NOT NULL` | Position/ordre d'affichage. |
| `filter_type` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : filter type. |
| `filter_show_limit` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : filter show limit. |

### `ps_layered_filter`

> Configurations des blocs de filtres de navigation à facettes.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_layered_filter` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `filters` | `longtext DEFAULT NULL` | Contenu textuel étendu : filters. |
| `n_categories` | `int(10) UNSIGNED NOT NULL` | Valeur entière : n categories. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_layered_filter_block`

> Données des blocs de filtres (sérialisées).

| Colonne | Type | Description |
|---------|------|-------------|
| `hash` | `char(32) NOT NULL DEFAULT ''` | Chaîne de caractères : hash. |
| `data` | `text DEFAULT NULL` | Contenu textuel étendu : data. |

### `ps_layered_filter_shop`

> Association des configurations de filtres aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_layered_filter` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_layered_filter`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_layered_indexable_attribute_group`

> Groupes d'attributs indexables pour les filtres à facettes.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attribute_group` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_attribute_group`. |
| `indexable` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : indexable (1 = oui, 0 = non). |

### `ps_layered_indexable_attribute_group_lang_value`

> Valeurs d'attributs indexées par langue pour les filtres.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attribute_group` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_attribute_group`. |
| `id_lang` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `url_name` | `varchar(128) DEFAULT NULL` | Nom utilisé dans l'URL. |
| `meta_title` | `varchar(128) DEFAULT NULL` | Titre SEO (balise <title>). |

### `ps_layered_indexable_attribute_lang_value`

> Valeurs des attributs individuels indexées pour les filtres.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attribute` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_attribute`. |
| `id_lang` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `url_name` | `varchar(128) DEFAULT NULL` | Nom utilisé dans l'URL. |
| `meta_title` | `varchar(128) DEFAULT NULL` | Titre SEO (balise <title>). |

### `ps_layered_indexable_feature`

> Caractéristiques indexables pour les filtres à facettes.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_feature` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_feature`. |
| `indexable` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : indexable (1 = oui, 0 = non). |

### `ps_layered_indexable_feature_lang_value`

> Noms de caractéristiques indexés par langue pour les filtres.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_feature` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_feature`. |
| `id_lang` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `url_name` | `varchar(128) NOT NULL` | Nom utilisé dans l'URL. |
| `meta_title` | `varchar(128) DEFAULT NULL` | Titre SEO (balise <title>). |

### `ps_layered_indexable_feature_value_lang_value`

> Valeurs de caractéristiques indexées par langue pour les filtres.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_feature_value` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_feature_value`. |
| `id_lang` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `url_name` | `varchar(128) DEFAULT NULL` | Nom utilisé dans l'URL. |
| `meta_title` | `varchar(128) DEFAULT NULL` | Titre SEO (balise <title>). |

### `ps_layered_price_index`

> Index de prix pour le filtre de prix à facettes.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_currency` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_currency`. |
| `id_shop` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `price_min` | `decimal(20,6) NOT NULL` | Valeur numérique décimale : price min. |
| `price_max` | `decimal(20,6) NOT NULL` | Valeur numérique décimale : price max. |
| `id_country` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_country`. |

### `ps_layered_product_attribute`

> Index produits/attributs pour la navigation à facettes.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_attribute` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_attribute`. |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_attribute_group` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Clé étrangère vers la table `ps_attribute_group`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |

## 💳 PayPal Checkout (ps_pscheckout)

### `ps_pscheckout_authorization`

> Autorisations de paiement PayPal Checkout.

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | `varchar(50) NOT NULL` | Identifiant unique (clé primaire). |
| `id_order` | `varchar(50) NOT NULL` | Chaîne de caractères : id order. |
| `status` | `varchar(30) NOT NULL` | Chaîne de caractères : status. |
| `expiration_time` | `varchar(50) NOT NULL` | Chaîne de caractères : expiration time. |
| `seller_protection` | `text DEFAULT NULL` | Contenu textuel étendu : seller protection. |

### `ps_pscheckout_capture`

> Captures de paiement PayPal Checkout.

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | `varchar(50) NOT NULL` | Identifiant unique (clé primaire). |
| `id_order` | `varchar(50) NOT NULL` | Chaîne de caractères : id order. |
| `status` | `varchar(30) NOT NULL` | Chaîne de caractères : status. |
| `final_capture` | `tinyint(1) NOT NULL` | Indicateur booléen : final capture (1 = oui, 0 = non). |
| `created_at` | `varchar(50) NOT NULL` | Chaîne de caractères : created at. |
| `updated_at` | `varchar(50) NOT NULL` | Chaîne de caractères : updated at. |
| `seller_protection` | `text DEFAULT NULL` | Contenu textuel étendu : seller protection. |
| `seller_receivable_breakdown` | `text DEFAULT NULL` | Contenu textuel étendu : seller receivable breakdown. |

### `ps_pscheckout_cart`

> Données de panier pour le module PayPal Checkout.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_pscheckout_cart` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_cart` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart`. |
| `paypal_intent` | `varchar(20) DEFAULT 'CAPTURE'` | Chaîne de caractères : paypal intent. |
| `paypal_order` | `varchar(20) DEFAULT NULL` | Chaîne de caractères : paypal order. |
| `paypal_status` | `varchar(30) DEFAULT NULL` | Chaîne de caractères : paypal status. |
| `paypal_funding` | `varchar(20) DEFAULT NULL` | Chaîne de caractères : paypal funding. |
| `paypal_token` | `text DEFAULT NULL` | Contenu textuel étendu : paypal token. |
| `paypal_token_expire` | `datetime DEFAULT NULL` | Date/heure : paypal token expire. |
| `paypal_authorization_expire` | `datetime DEFAULT NULL` | Date/heure : paypal authorization expire. |
| `environment` | `varchar(20) DEFAULT NULL` | Chaîne de caractères : environment. |
| `isExpressCheckout` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : isExpressCheckout (1 = oui, 0 = non). |
| `isHostedFields` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : isHostedFields (1 = oui, 0 = non). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_pscheckout_customer`

> Données clients pour le module PayPal Checkout.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `paypal_customer_id` | `varchar(50) NOT NULL` | Chaîne de caractères : paypal customer id. |

### `ps_pscheckout_funding_source`

> Sources de financement disponibles dans PayPal Checkout.

| Colonne | Type | Description |
|---------|------|-------------|
| `name` | `varchar(20) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `position` | `tinyint(2) UNSIGNED NOT NULL` | Position/ordre d'affichage. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_pscheckout_order`

> Commandes traitées via PayPal Checkout.

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | `varchar(50) NOT NULL` | Identifiant unique (clé primaire). |
| `id_cart` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart`. |
| `status` | `varchar(30) NOT NULL` | Chaîne de caractères : status. |
| `intent` | `varchar(50) DEFAULT 'CAPTURE'` | Chaîne de caractères : intent. |
| `funding_source` | `varchar(50) NOT NULL` | Chaîne de caractères : funding source. |
| `payment_source` | `text DEFAULT NULL` | Contenu textuel étendu : payment source. |
| `environment` | `varchar(50) NOT NULL` | Chaîne de caractères : environment. |
| `is_card_fields` | `tinyint(1) NOT NULL` | Indicateur booléen : card fields (1 = oui, 0 = non). |
| `is_express_checkout` | `tinyint(1) NOT NULL` | Indicateur booléen : express checkout (1 = oui, 0 = non). |
| `customer_intent` | `varchar(50) DEFAULT NULL` | Chaîne de caractères : customer intent. |
| `payment_token_id` | `varchar(50) DEFAULT NULL` | Chaîne de caractères : payment token id. |
| `tags` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : tags. |

### `ps_pscheckout_order_matrice`

> Matrice de correspondance états commande ↔ états PayPal.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order_matrice` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_matrice`. |
| `id_order_prestashop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order_prestashop`. |
| `id_order_paypal` | `varchar(20) NOT NULL` | Chaîne de caractères : id order paypal. |

### `ps_pscheckout_payment_token`

> Tokens de paiement enregistrés (cartes sauvegardées).

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `token_id` | `varchar(50) NOT NULL` | Chaîne de caractères : token id. |
| `paypal_customer_id` | `varchar(50) NOT NULL` | Chaîne de caractères : paypal customer id. |
| `payment_source` | `varchar(50) NOT NULL` | Chaîne de caractères : payment source. |
| `data` | `text NOT NULL` | Contenu textuel étendu : data. |
| `merchant_id` | `varchar(50) NOT NULL` | Chaîne de caractères : merchant id. |
| `status` | `varchar(50) NOT NULL` | Chaîne de caractères : status. |
| `is_favorite` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : favorite (1 = oui, 0 = non). |

### `ps_pscheckout_purchase_unit`

> Unités d'achat transmises à PayPal.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_order` | `varchar(50) NOT NULL` | Chaîne de caractères : id order. |
| `checksum` | `varchar(50) NOT NULL` | Chaîne de caractères : checksum. |
| `reference_id` | `varchar(50) NOT NULL` | Chaîne de caractères : reference id. |
| `items` | `text DEFAULT NULL` | Contenu textuel étendu : items. |

### `ps_pscheckout_refund`

> Remboursements effectués via PayPal Checkout.

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | `varchar(50) NOT NULL` | Identifiant unique (clé primaire). |
| `id_order` | `varchar(50) NOT NULL` | Chaîne de caractères : id order. |
| `status` | `varchar(30) NOT NULL` | Chaîne de caractères : status. |
| `invoice_id` | `varchar(50) NOT NULL` | Chaîne de caractères : invoice id. |
| `custom_id` | `varchar(50) NOT NULL` | Chaîne de caractères : custom id. |
| `acquirer_reference_number` | `varchar(50) NOT NULL` | Chaîne de caractères : acquirer reference number. |
| `seller_payable_breakdown` | `text DEFAULT NULL` | Contenu textuel étendu : seller payable breakdown. |
| `id_order_slip` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_order_slip`. |

### `ps_pscheckout_tracking`

> Informations de suivi de livraison transmises à PayPal.

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_order` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_order`. |
| `tracking_number` | `varchar(64) NOT NULL` | Chaîne de caractères : tracking number. |
| `carrier_id` | `int(10) UNSIGNED NOT NULL` | Valeur entière : carrier id. |
| `carrier_name` | `varchar(64) NOT NULL` | Chaîne de caractères : carrier name. |
| `paypal_order_id` | `varchar(50) NOT NULL` | Chaîne de caractères : paypal order id. |
| `paypal_capture_id` | `varchar(50) NOT NULL` | Chaîne de caractères : paypal capture id. |
| `tracker_id` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : tracker id. |
| `items` | `text DEFAULT NULL` | Contenu textuel étendu : items. |
| `status` | `varchar(20) NOT NULL DEFAULT 'PENDING'` | Chaîne de caractères : status. |
| `paypal_tracking_status` | `varchar(20) DEFAULT NULL` | Chaîne de caractères : paypal tracking status. |
| `payload_checksum` | `varchar(64) NOT NULL` | Chaîne de caractères : payload checksum. |
| `sent_to_paypal` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : sent to paypal (1 = oui, 0 = non). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

## 🔒 RGPD & Sécurité

### `ps_psgdpr_consent`

> Consentements RGPD (formulaires et modules).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_gdpr_consent` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_gdpr_consent`. |
| `id_module` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_module`. |
| `active` | `int(10) NOT NULL` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |
| `error` | `int(10) DEFAULT NULL` | Valeur entière : error. |
| `error_message` | `text DEFAULT NULL` | Contenu textuel étendu : error message. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_psgdpr_consent_lang`

> Traductions des textes de consentement RGPD.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_gdpr_consent` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_gdpr_consent`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `message` | `text DEFAULT NULL` | Contenu textuel étendu : message. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_psgdpr_log`

> Journal des actions RGPD (accès, suppression, anonymisation de données).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_gdpr_log` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_gdpr_log`. |
| `id_customer` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_guest` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_guest`. |
| `client_name` | `varchar(250) DEFAULT NULL` | Chaîne de caractères : client name. |
| `id_module` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_module`. |
| `request_type` | `int(10) NOT NULL` | Valeur entière : request type. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_customer_session`

> Sessions actives des clients connectés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_customer_session` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_customer` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_customer`. |
| `token` | `varchar(40) DEFAULT NULL` | Token d'authentification ou de sécurité. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_employee_session`

> Sessions actives des employés connectés au back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_employee_session` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_employee` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_employee`. |
| `token` | `varchar(40) DEFAULT NULL` | Token d'authentification ou de sécurité. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

## 🖼️ Front-office & UX

### `ps_homeslider`

> Configuration du slider de la page d'accueil par boutique.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_homeslider_slides` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_homeslider_slides`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_homeslider_slides`

> Slides (diapositives) du carrousel de la page d'accueil.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_homeslider_slides` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `position` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |
| `active` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |

### `ps_homeslider_slides_lang`

> Traductions des slides du carrousel (titre, texte, lien).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_homeslider_slides` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_homeslider_slides`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `title` | `varchar(255) NOT NULL` | Titre. |
| `description` | `text NOT NULL` | Description complète. |
| `legend` | `varchar(255) NOT NULL` | Chaîne de caractères : legend. |
| `url` | `varchar(255) NOT NULL` | URL complète. |
| `image` | `varchar(255) NOT NULL` | Chaîne de caractères : image. |

### `ps_link_block`

> Blocs de liens du footer (colonnes de liens).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_link_block` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_hook` | `int(1) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_hook`. |
| `position` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |
| `content` | `text DEFAULT NULL` | Contenu principal. |

### `ps_link_block_lang`

> Traductions des blocs de liens.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_link_block` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_link_block`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(40) NOT NULL DEFAULT ''` | Nom ou libellé de l'enregistrement. |
| `custom_content` | `text DEFAULT NULL` | Contenu textuel étendu : custom content. |

### `ps_link_block_shop`

> Association des blocs de liens aux boutiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_link_block` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_link_block`. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `position` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Position/ordre d'affichage. |

### `ps_linksmenutop`

> Liens du menu de navigation principal.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_linksmenutop` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `new_window` | `tinyint(1) NOT NULL` | Indicateur booléen : new window (1 = oui, 0 = non). |

### `ps_linksmenutop_lang`

> Traductions des libellés du menu de navigation.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_linksmenutop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_linksmenutop`. |
| `id_lang` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `id_shop` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `label` | `varchar(128) NOT NULL` | Chaîne de caractères : label. |
| `link` | `varchar(128) NOT NULL` | Chaîne de caractères : link. |

### `ps_psreassurance`

> Éléments de réassurance affichés dans la boutique (icônes + texte).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_psreassurance` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `icon` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : icon. |
| `custom_icon` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : custom icon. |
| `status` | `int(10) UNSIGNED NOT NULL` | Valeur entière : status. |
| `position` | `int(10) UNSIGNED NOT NULL` | Position/ordre d'affichage. |
| `type_link` | `int(10) UNSIGNED DEFAULT NULL` | Valeur entière : type link. |
| `id_cms` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_cms`. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime DEFAULT NULL` | Date de mise à jour. |

### `ps_psreassurance_lang`

> Traductions des éléments de réassurance.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_psreassurance` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_psreassurance`. |
| `id_lang` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `title` | `varchar(255) NOT NULL` | Titre. |
| `description` | `varchar(255) NOT NULL` | Description complète. |
| `link` | `varchar(255) NOT NULL` | Chaîne de caractères : link. |

### `ps_blockwishlist_statistics`

> Statistiques d'utilisation des listes de souhaits.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_statistics` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_statistics`. |
| `id_cart` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_cart`. |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_product_attribute` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `id_shop` | `int(10) UNSIGNED DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |

### `ps_wishlist`

> Listes de souhaits créées par les clients.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_wishlist` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_shop` | `int(10) UNSIGNED DEFAULT 1` | Clé étrangère vers la table `ps_shop`. |
| `id_shop_group` | `int(10) UNSIGNED DEFAULT 1` | Clé étrangère vers la table `ps_shop_group`. |
| `token` | `varchar(64) NOT NULL` | Token d'authentification ou de sécurité. |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `counter` | `int(10) UNSIGNED DEFAULT NULL` | Valeur entière : counter. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
| `default` | `int(10) UNSIGNED DEFAULT 0` | Valeur entière : default. |

### `ps_wishlist_product`

> Produits ajoutés dans les listes de souhaits.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_wishlist_product` | `int(10) NOT NULL` | Identifiant unique (clé primaire). |
| `id_wishlist` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_wishlist`. |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_product_attribute` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_attribute`. |
| `quantity` | `int(10) UNSIGNED NOT NULL` | Quantité. |
| `priority` | `int(10) UNSIGNED NOT NULL` | Valeur entière : priority. |

### `ps_wishlist_product_cart`

> Produits des listes de souhaits ajoutés au panier.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_wishlist_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_wishlist_product`. |
| `id_cart` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_cart`. |
| `quantity` | `int(10) UNSIGNED NOT NULL` | Quantité. |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_product_comment`

> Avis et commentaires clients sur les produits.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_comment` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `id_guest` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_guest`. |
| `title` | `varchar(64) DEFAULT NULL` | Titre. |
| `content` | `text NOT NULL` | Contenu principal. |
| `customer_name` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : customer name. |
| `grade` | `float UNSIGNED NOT NULL` | Note attribuée. |
| `validate` | `tinyint(1) NOT NULL` | Indicateur booléen : validate (1 = oui, 0 = non). |
| `deleted` | `tinyint(1) NOT NULL` | Suppression logique (1 = supprimé). |
| `date_add` | `datetime NOT NULL` | Date de création. |

### `ps_product_comment_criterion`

> Critères de notation des avis produits.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_comment_criterion` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `id_product_comment_criterion_type` | `tinyint(1) NOT NULL` | Clé étrangère vers la table `ps_product_comment_criterion_type`. |
| `active` | `tinyint(1) NOT NULL` | Indique si l'enregistrement est actif (1 = actif, 0 = inactif). |

### `ps_product_comment_criterion_category`

> Association critères ↔ catégories de produits.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_comment_criterion` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_comment_criterion`. |
| `id_category` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_category`. |

### `ps_product_comment_criterion_lang`

> Traductions des critères de notation.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_comment_criterion` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_comment_criterion`. |
| `id_lang` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `name` | `varchar(64) NOT NULL` | Nom ou libellé de l'enregistrement. |

### `ps_product_comment_criterion_product`

> Association critères ↔ produits spécifiques.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product`. |
| `id_product_comment_criterion` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_comment_criterion`. |

### `ps_product_comment_grade`

> Notes attribuées par critère dans un avis produit.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_comment` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_comment`. |
| `id_product_comment_criterion` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_comment_criterion`. |
| `grade` | `int(10) UNSIGNED NOT NULL` | Note attribuée. |

### `ps_product_comment_report`

> Signalements d'avis produits inappropriés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_comment` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_comment`. |
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |

### `ps_product_comment_usefulness`

> Votes d'utilité des avis produits (utile / pas utile).

| Colonne | Type | Description |
|---------|------|-------------|
| `id_product_comment` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_product_comment`. |
| `id_customer` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_customer`. |
| `usefulness` | `tinyint(1) UNSIGNED NOT NULL` | Indicateur booléen : usefulness (1 = oui, 0 = non). |

## 📡 Connecteurs & Sync

### `ps_eventbus_incremental_sync`

> Synchronisation incrémentale des événements (module EventBus).

| Colonne | Type | Description |
|---------|------|-------------|
| `type` | `varchar(50) NOT NULL` | Type de l'enregistrement. |
| `action` | `varchar(50) NOT NULL DEFAULT 'upsert'` | Chaîne de caractères : action. |
| `id_object` | `varchar(50) NOT NULL` | Chaîne de caractères : id object. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `lang_iso` | `varchar(3) NOT NULL` | Chaîne de caractères : lang iso. |
| `created_at` | `datetime NOT NULL` | Date/heure : created at. |

### `ps_eventbus_job`

> Jobs de synchronisation du module EventBus.

| Colonne | Type | Description |
|---------|------|-------------|
| `job_id` | `varchar(200) NOT NULL` | Chaîne de caractères : job id. |
| `created_at` | `datetime NOT NULL` | Date/heure : created at. |

### `ps_eventbus_live_sync`

> Synchronisation en temps réel des événements (module EventBus).

| Colonne | Type | Description |
|---------|------|-------------|
| `shop_content` | `varchar(50) NOT NULL` | Chaîne de caractères : shop content. |
| `last_change_at` | `datetime NOT NULL` | Date/heure : last change at. |

### `ps_eventbus_type_sync`

> Types de synchronisation gérés par le module EventBus.

| Colonne | Type | Description |
|---------|------|-------------|
| `type` | `varchar(50) NOT NULL` | Type de l'enregistrement. |
| `offset` | `int(10) UNSIGNED NOT NULL DEFAULT 0` | Valeur entière : offset. |
| `id_shop` | `int(10) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_shop`. |
| `lang_iso` | `varchar(3) NOT NULL` | Chaîne de caractères : lang iso. |
| `full_sync_finished` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : full sync finished (1 = oui, 0 = non). |
| `last_sync_date` | `datetime NOT NULL` | Date/heure : last sync date. |

### `ps_fb_category_match`

> Correspondance entre catégories PrestaShop et catégories Facebook.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_category` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_category`. |
| `google_category_id` | `int(64) NOT NULL` | Valeur entière : google category id. |
| `google_category_name` | `varchar(255) NOT NULL` | Chaîne de caractères : google category name. |
| `google_category_parent_id` | `int(64) NOT NULL` | Valeur entière : google category parent id. |
| `google_category_parent_name` | `varchar(255) NOT NULL` | Chaîne de caractères : google category parent name. |
| `is_parent_category` | `tinyint(1) DEFAULT NULL` | Indicateur booléen : parent category (1 = oui, 0 = non). |
| `id_shop` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_shop`. |

### `ps_mail`

> Historique des e-mails transactionnels envoyés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_mail` | `int(11) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `recipient` | `varchar(126) NOT NULL` | Chaîne de caractères : recipient. |
| `template` | `varchar(62) NOT NULL` | Chaîne de caractères : template. |
| `subject` | `varchar(254) NOT NULL` | Chaîne de caractères : subject. |
| `id_lang` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `date_add` | `timestamp NOT NULL DEFAULT current_timestamp()` | Date de création. |

### `ps_smarty_cache`

> Cache du moteur de templates Smarty.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_smarty_cache` | `char(40) NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `char(40) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `cache_id` | `varchar(254) DEFAULT NULL` | Chaîne de caractères : cache id. |
| `modified` | `timestamp NOT NULL DEFAULT current_timestamp()` | Date/heure : modified. |
| `content` | `longtext NOT NULL` | Contenu principal. |

### `ps_smarty_last_flush`

> Horodatage du dernier vidage du cache Smarty.

| Colonne | Type | Description |
|---------|------|-------------|
| `type` | `enum('compile','template') NOT NULL` | Type de l'enregistrement. |
| `last_flush` | `datetime NOT NULL DEFAULT '0000-00-00 00:00:00'` | Date/heure : last flush. |

### `ps_smarty_lazy_cache`

> Cache paresseux Smarty pour les templates.

| Colonne | Type | Description |
|---------|------|-------------|
| `template_hash` | `varchar(32) NOT NULL DEFAULT ''` | Chaîne de caractères : template hash. |
| `cache_id` | `varchar(191) NOT NULL DEFAULT ''` | Chaîne de caractères : cache id. |
| `compile_id` | `varchar(32) NOT NULL DEFAULT ''` | Chaîne de caractères : compile id. |
| `filepath` | `varchar(255) NOT NULL DEFAULT ''` | Chaîne de caractères : filepath. |
| `last_update` | `datetime NOT NULL DEFAULT '0000-00-00 00:00:00'` | Date/heure : last update. |

### `ps_memcached_servers`

> Serveurs Memcached configurés pour le cache.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_memcached_server` | `int(11) UNSIGNED NOT NULL` | Clé étrangère vers la table `ps_memcached_server`. |
| `ip` | `varchar(254) NOT NULL` | Chaîne de caractères : ip. |
| `port` | `int(11) UNSIGNED NOT NULL` | Valeur entière : port. |
| `weight` | `int(11) UNSIGNED NOT NULL` | Poids (en kg ou unité configurée). |

### `ps_import_match`

> Correspondances de colonnes sauvegardées pour les imports CSV.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_import_match` | `int(10) NOT NULL` | Identifiant unique (clé primaire). |
| `name` | `varchar(32) NOT NULL` | Nom ou libellé de l'enregistrement. |
| `match` | `mediumtext NOT NULL` | Contenu textuel étendu : match. |
| `skip` | `int(2) NOT NULL` | Valeur entière : skip. |

## 🔧 Divers

### `ps_advice`

> Conseils et recommandations affichés dans le back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_advice` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_ps_advice` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_ps_advice`. |
| `id_tab` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_tab`. |
| `ids_tab` | `text DEFAULT NULL` | Contenu textuel étendu : ids tab. |
| `validated` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : validated (1 = oui, 0 = non). |
| `hide` | `tinyint(1) NOT NULL DEFAULT 0` | Indicateur booléen : hide (1 = oui, 0 = non). |
| `location` | `enum('after','before') NOT NULL` | Location. |
| `selector` | `varchar(255) DEFAULT NULL` | Chaîne de caractères : selector. |
| `start_day` | `int(11) NOT NULL DEFAULT 0` | Valeur entière : start day. |
| `stop_day` | `int(11) NOT NULL DEFAULT 0` | Valeur entière : stop day. |
| `weight` | `int(11) DEFAULT 1` | Poids (en kg ou unité configurée). |

### `ps_advice_lang`

> Traductions des conseils du back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_advice` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_advice`. |
| `id_lang` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_lang`. |
| `html` | `text DEFAULT NULL` | Contenu textuel étendu : html. |

### `ps_condition`

> Conditions logiques utilisées pour les conseils du back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_condition` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `id_ps_condition` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_ps_condition`. |
| `type` | `enum('configuration','install','sql') NOT NULL` | Type de l'enregistrement. |
| `request` | `text DEFAULT NULL` | Contenu textuel étendu : request. |
| `operator` | `varchar(32) DEFAULT NULL` | Chaîne de caractères : operator. |
| `value` | `varchar(64) DEFAULT NULL` | Valeur. |
| `result` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : result. |
| `calculation_type` | `enum('hook','time') DEFAULT NULL` | Calculation type. |
| `calculation_detail` | `varchar(64) DEFAULT NULL` | Chaîne de caractères : calculation detail. |
| `validated` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : validated (1 = oui, 0 = non). |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |

### `ps_condition_advice`

> Association entre conditions et conseils affichés.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_condition` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_condition`. |
| `id_advice` | `int(11) NOT NULL` | Clé étrangère vers la table `ps_advice`. |
| `display` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : display (1 = oui, 0 = non). |

### `ps_admin_filter`

> Filtres sauvegardés par les administrateurs dans les listes du back-office.

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | `int(11) NOT NULL` | Identifiant unique (clé primaire). |
| `employee` | `int(11) NOT NULL` | Valeur entière : employee. |
| `shop` | `int(11) NOT NULL` | Valeur entière : shop. |
| `controller` | `varchar(60) NOT NULL` | Chaîne de caractères : controller. |
| `action` | `varchar(100) NOT NULL` | Chaîne de caractères : action. |
| `filter` | `longtext NOT NULL` | Contenu textuel étendu : filter. |
| `filter_id` | `varchar(191) NOT NULL` | Chaîne de caractères : filter id. |

### `ps_log`

> Journal des événements et erreurs système.

| Colonne | Type | Description |
|---------|------|-------------|
| `id_log` | `int(10) UNSIGNED NOT NULL` | Identifiant unique (clé primaire). |
| `severity` | `tinyint(1) NOT NULL` | Indicateur booléen : severity (1 = oui, 0 = non). |
| `error_code` | `int(11) DEFAULT NULL` | Valeur entière : error code. |
| `message` | `mediumtext NOT NULL` | Contenu textuel étendu : message. |
| `object_type` | `varchar(32) DEFAULT NULL` | Chaîne de caractères : object type. |
| `object_id` | `int(10) UNSIGNED DEFAULT NULL` | Valeur entière : object id. |
| `id_shop` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_shop`. |
| `id_shop_group` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_shop_group`. |
| `id_lang` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_lang`. |
| `in_all_shops` | `tinyint(1) UNSIGNED NOT NULL DEFAULT 0` | Indicateur booléen : in all shops (1 = oui, 0 = non). |
| `id_employee` | `int(10) UNSIGNED DEFAULT NULL` | Clé étrangère vers la table `ps_employee`. |
| `date_add` | `datetime NOT NULL` | Date de création. |
| `date_upd` | `datetime NOT NULL` | Date de mise à jour. |
