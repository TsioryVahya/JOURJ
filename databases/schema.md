# 📋 Récapitulatif complet des tables PrestaShop

## Base de données PrestaShop - Structure complète (297 tables)

---

## Tables natives (1 - 164)

| #   | Nom de table                                        | Description                                            |
| --- | --------------------------------------------------- | ------------------------------------------------------ |
| 1   | `ps_access`                                       | Permissions d'accès par profil                        |
| 2   | `ps_accessory`                                    | Accessoires associés aux produits                     |
| 3   | `ps_address`                                      | Adresses des clients, fabricants et fournisseurs       |
| 4   | `ps_address_format`                               | Format d'affichage des adresses par pays               |
| 5   | `ps_admin_filter`                                 | Filtres sauvegardés pour l'interface d'administration |
| 6   | `ps_advice`                                       | Conseils d'aide pour l'administration                  |
| 7   | `ps_advice_lang`                                  | Traductions des conseils d'aide                        |
| 8   | `ps_alias`                                        | Aliases de recherche (corrections orthographiques)     |
| 9   | `ps_api_access`                                   | Accès à l'API PrestaShop                             |
| 10  | `ps_attachment`                                   | Fichiers joints téléchargeables                      |
| 11  | `ps_attachment_lang`                              | Traductions des fichiers joints                        |
| 12  | `ps_attribute`                                    | Valeurs d'attributs (ex: S, M, L)                      |
| 13  | `ps_attribute_group`                              | Groupes d'attributs (ex: Taille, Couleur)              |
| 14  | `ps_attribute_group_lang`                         | Traductions des groupes d'attributs                    |
| 15  | `ps_attribute_group_shop`                         | Groupes d'attributs par boutique                       |
| 16  | `ps_attribute_lang`                               | Traductions des valeurs d'attributs                    |
| 17  | `ps_attribute_shop`                               | Valeurs d'attributs par boutique                       |
| 18  | `ps_authorization_role`                           | Rôles d'autorisation pour l'API                       |
| 19  | `ps_authorized_application`                       | Applications autorisées pour l'API                    |
| 20  | `ps_blockwishlist_statistics`                     | Statistiques des listes d'envies                       |
| 21  | `ps_carrier`                                      | Transporteurs                                          |
| 22  | `ps_carrier_group`                                | Transporteurs par groupe de clients                    |
| 23  | `ps_carrier_lang`                                 | Traductions des transporteurs                          |
| 24  | `ps_carrier_shop`                                 | Transporteurs par boutique                             |
| 25  | `ps_carrier_tax_rules_group_shop`                 | Règles de taxes par transporteur                      |
| 26  | `ps_carrier_zone`                                 | Zones de livraison par transporteur                    |
| 27  | `ps_cart`                                         | Paniers d'achat                                        |
| 28  | `ps_cart_cart_rule`                               | Règles panier appliquées aux paniers                 |
| 29  | `ps_cart_product`                                 | Produits dans les paniers                              |
| 30  | `ps_cart_rule`                                    | Règles panier (promotions)                            |
| 31  | `ps_cart_rule_carrier`                            | Transporteurs éligibles aux règles panier            |
| 32  | `ps_cart_rule_combination`                        | Combinaisons de règles panier                         |
| 33  | `ps_cart_rule_country`                            | Pays éligibles aux règles panier                     |
| 34  | `ps_cart_rule_group`                              | Groupes clients éligibles aux règles panier          |
| 35  | `ps_cart_rule_lang`                               | Traductions des règles panier                         |
| 36  | `ps_cart_rule_product_rule`                       | Règles produits dans les règles panier               |
| 37  | `ps_cart_rule_product_rule_group`                 | Groupes de règles produits                            |
| 38  | `ps_cart_rule_product_rule_value`                 | Valeurs des règles produits                           |
| 39  | `ps_cart_rule_shop`                               | Règles panier par boutique                            |
| 40  | `ps_category`                                     | Catégories de produits                                |
| 41  | `ps_category_group`                               | Catégories par groupe de clients                      |
| 42  | `ps_category_lang`                                | Traductions des catégories                            |
| 43  | `ps_category_product`                             | Association produits-catégories                       |
| 44  | `ps_category_shop`                                | Catégories par boutique                               |
| 45  | `ps_cms`                                          | Pages CMS                                              |
| 46  | `ps_cms_category`                                 | Catégories de pages CMS                               |
| 47  | `ps_cms_category_lang`                            | Traductions des catégories CMS                        |
| 48  | `ps_cms_category_shop`                            | Catégories CMS par boutique                           |
| 49  | `ps_cms_lang`                                     | Traductions des pages CMS                              |
| 50  | `ps_cms_role`                                     | Rôles des pages CMS                                   |
| 51  | `ps_cms_role_lang`                                | Traductions des rôles CMS                             |
| 52  | `ps_cms_shop`                                     | Pages CMS par boutique                                 |
| 53  | `ps_condition`                                    | Conditions pour les conseils d'aide                    |
| 54  | `ps_condition_advice`                             | Liens conditions-conseils                              |
| 55  | `ps_configuration`                                | Configuration globale de PrestaShop                    |
| 56  | `ps_configuration_kpi`                            | Configuration des KPI                                  |
| 57  | `ps_configuration_kpi_lang`                       | Traductions des KPI                                    |
| 58  | `ps_configuration_lang`                           | Traductions multilingues de la configuration           |
| 59  | `ps_connections`                                  | Connexions visitors                                    |
| 60  | `ps_connections_page`                             | Pages visitées par connexion                          |
| 61  | `ps_connections_source`                           | Sources des connexions (référents)                   |
| 62  | `ps_contact`                                      | Contacts du service client                             |
| 63  | `ps_contact_lang`                                 | Traductions des contacts                               |
| 64  | `ps_contact_shop`                                 | Contacts par boutique                                  |
| 65  | `ps_country`                                      | Pays                                                   |
| 66  | `ps_country_lang`                                 | Traductions des pays                                   |
| 67  | `ps_country_shop`                                 | Pays par boutique                                      |
| 68  | `ps_currency`                                     | Devises                                                |
| 69  | `ps_currency_lang`                                | Traductions des devises                                |
| 70  | `ps_currency_shop`                                | Devises par boutique                                   |
| 71  | `ps_customer`                                     | Clients                                                |
| 72  | `ps_customer_group`                               | Groupes des clients                                    |
| 73  | `ps_customer_message`                             | Messages clients                                       |
| 74  | `ps_customer_message_sync_imap`                   | Synchronisation IMAP des messages                      |
| 75  | `ps_customer_session`                             | Sessions clients                                       |
| 76  | `ps_customer_thread`                              | Conversations avec le service client                   |
| 77  | `ps_customization`                                | Personnalisations de produits                          |
| 78  | `ps_customization_field`                          | Champs de personnalisation                             |
| 79  | `ps_customization_field_lang`                     | Traductions des champs de personnalisation             |
| 80  | `ps_customized_data`                              | Données personnalisées                               |
| 81  | `ps_date_range`                                   | Périodes pour les statistiques                        |
| 82  | `ps_delivery`                                     | Frais de livraison                                     |
| 83  | `ps_emailsubscription`                            | Abonnés à la newsletter                              |
| 84  | `ps_employee`                                     | Employés (Back Office)                                |
| 85  | `ps_employee_account`                             | Comptes liés aux employés                            |
| 86  | `ps_employee_session`                             | Sessions des employés                                 |
| 87  | `ps_employee_shop`                                | Employés par boutique                                 |
| 88  | `ps_eventbus_incremental_sync`                    | Synchronisation incrémentale EventBus                 |
| 89  | `ps_eventbus_job`                                 | Jobs EventBus                                          |
| 90  | `ps_eventbus_live_sync`                           | Synchronisation live EventBus                          |
| 91  | `ps_eventbus_type_sync`                           | Types de synchronisation EventBus                      |
| 92  | `ps_fb_category_match`                            | Correspondance catégories Facebook                    |
| 93  | `ps_feature`                                      | Caractéristiques produits                             |
| 94  | `ps_feature_flag`                                 | Flags de fonctionnalités                              |
| 95  | `ps_feature_lang`                                 | Traductions des caractéristiques                      |
| 96  | `ps_feature_product`                              | Caractéristiques par produit                          |
| 97  | `ps_feature_shop`                                 | Caractéristiques par boutique                         |
| 98  | `ps_feature_value`                                | Valeurs des caractéristiques                          |
| 99  | `ps_feature_value_lang`                           | Traductions des valeurs                                |
| 100 | `ps_ganalytics`                                   | Données Google Analytics                              |
| 101 | `ps_ganalytics_data`                              | Données brutes Google Analytics                       |
| 102 | `ps_gender`                                       | Titres de civilité                                    |
| 103 | `ps_gender_lang`                                  | Traductions des titres                                 |
| 104 | `ps_group`                                        | Groupes de clients                                     |
| 105 | `ps_group_lang`                                   | Traductions des groupes                                |
| 106 | `ps_group_reduction`                              | Réductions par groupe                                 |
| 107 | `ps_group_shop`                                   | Groupes par boutique                                   |
| 108 | `ps_gsitemap_sitemap`                             | Sitemap généré par GSitemap                         |
| 109 | `ps_guest`                                        | Invités (visiteurs non connectés)                    |
| 110 | `ps_homeslider`                                   | Slides du carrousel                                    |
| 111 | `ps_homeslider_slides`                            | Contenu des slides                                     |
| 112 | `ps_homeslider_slides_lang`                       | Traductions des slides                                 |
| 113 | `ps_hook`                                         | Hooks (points d'extension)                             |
| 114 | `ps_hook_alias`                                   | Aliases des hooks                                      |
| 115 | `ps_hook_module`                                  | Modules attachés aux hooks                            |
| 116 | `ps_hook_module_exceptions`                       | Exceptions des hooks modules                           |
| 117 | `ps_image`                                        | Images des produits                                    |
| 118 | `ps_image_lang`                                   | Traductions des images                                 |
| 119 | `ps_image_shop`                                   | Images par boutique                                    |
| 120 | `ps_image_type`                                   | Types d'images (formats)                               |
| 121 | `ps_import_match`                                 | Correspondances pour l'import                          |
| 122 | `ps_info`                                         | Bloc d'information personnalisé                       |
| 123 | `ps_info_lang`                                    | Traductions du bloc info                               |
| 124 | `ps_info_shop`                                    | Bloc info par boutique                                 |
| 125 | `ps_lang`                                         | Langues                                                |
| 126 | `ps_lang_shop`                                    | Langues par boutique                                   |
| 127 | `ps_layered_category`                             | Configuration filtre par catégorie                    |
| 128 | `ps_layered_filter`                               | Filtres de navigation à facettes                      |
| 129 | `ps_layered_filter_block`                         | Cache des blocs de filtres                             |
| 130 | `ps_layered_filter_shop`                          | Filtres par boutique                                   |
| 131 | `ps_layered_indexable_attribute_group`            | Groupes d'attributs indexables                         |
| 132 | `ps_layered_indexable_attribute_group_lang_value` | Valeurs SEO des groupes                                |
| 133 | `ps_layered_indexable_attribute_lang_value`       | Valeurs SEO des attributs                              |
| 134 | `ps_layered_indexable_feature`                    | Caractéristiques indexables                           |
| 135 | `ps_layered_indexable_feature_lang_value`         | Valeurs SEO des caractéristiques                      |
| 136 | `ps_layered_indexable_feature_value_lang_value`   | Valeurs SEO des valeurs                                |
| 137 | `ps_layered_price_index`                          | Index des prix pour les filtres                        |
| 138 | `ps_layered_product_attribute`                    | Attributs produits pour les filtres                    |
| 139 | `ps_linksmenutop`                                 | Liens menu top                                         |
| 140 | `ps_linksmenutop_lang`                            | Traductions menu top                                   |
| 141 | `ps_link_block`                                   | Blocs de liens (footer)                                |
| 142 | `ps_link_block_lang`                              | Traductions blocs liens                                |
| 143 | `ps_link_block_shop`                              | Blocs liens par boutique                               |
| 144 | `ps_log`                                          | Logs système                                          |
| 145 | `ps_mail`                                         | Emails envoyés                                        |
| 146 | `ps_mailalert_customer_oos`                       | Alertes rupture stock par email                        |
| 147 | `ps_manufacturer`                                 | Marques / Fabricants                                   |
| 148 | `ps_manufacturer_lang`                            | Traductions des marques                                |
| 149 | `ps_manufacturer_shop`                            | Marques par boutique                                   |
| 150 | `ps_mbo_api_config`                               | Configuration API MBO                                  |
| 151 | `ps_memcached_servers`                            | Serveurs Memcached                                     |
| 152 | `ps_message`                                      | Messages                                               |
| 153 | `ps_message_readed`                               | Messages lus par employés                             |
| 154 | `ps_meta`                                         | Meta SEO pages                                         |
| 155 | `ps_meta_lang`                                    | Traductions meta SEO                                   |
| 156 | `ps_module`                                       | Modules installés                                     |
| 157 | `ps_module_access`                                | Permissions des modules                                |
| 158 | `ps_module_carrier`                               | Transporteurs par module                               |
| 159 | `ps_module_country`                               | Pays par module                                        |
| 160 | `ps_module_currency`                              | Devises par module                                     |
| 161 | `ps_module_group`                                 | Groupes par module                                     |
| 162 | `ps_module_history`                               | Historique des modules                                 |
| 163 | `ps_module_preference`                            | Préférences modules                                  |
| 164 | `ps_module_shop`                                  | Modules par boutique                                   |

---

## Tables de commandes et facturation (165 - 184)

| #   | Nom de table                   | Description                              |
| --- | ------------------------------ | ---------------------------------------- |
| 165 | `ps_operating_system`        | Systèmes d'exploitation pour les stats  |
| 166 | `ps_order_carrier`           | Transporteur associé à une commande    |
| 167 | `ps_order_cart_rule`         | Règles panier appliquées aux commandes |
| 168 | `ps_order_detail`            | Détail des produits commandés          |
| 169 | `ps_order_detail_tax`        | Taxes par ligne de commande              |
| 170 | `ps_order_history`           | Historique des statuts de commande       |
| 171 | `ps_order_invoice`           | Factures                                 |
| 172 | `ps_order_invoice_payment`   | Paiements par facture                    |
| 173 | `ps_order_invoice_tax`       | Taxes par facture                        |
| 174 | `ps_order_message`           | Messages prédéfinis                    |
| 175 | `ps_order_message_lang`      | Traductions des messages                 |
| 176 | `ps_order_payment`           | Paiements                                |
| 177 | `ps_order_return`            | Retours produits                         |
| 178 | `ps_order_return_detail`     | Détail des retours                      |
| 179 | `ps_order_return_state`      | Statuts de retour                        |
| 180 | `ps_order_return_state_lang` | Traductions des statuts de retour        |
| 181 | `ps_order_slip`              | Avoirs                                   |
| 182 | `ps_order_slip_detail`       | Détail des avoirs                       |
| 183 | `ps_order_state`             | Statuts de commande                      |
| 184 | `ps_order_state_lang`        | Traductions des statuts                  |

---

## Tables produits et catalogue (185 - 203)

| #   | Nom de table                         | Description                         |
| --- | ------------------------------------ | ----------------------------------- |
| 185 | `ps_pack`                          | Produits pack                       |
| 186 | `ps_page`                          | Pages pour les stats                |
| 187 | `ps_page_type`                     | Types de pages                      |
| 188 | `ps_page_viewed`                   | Pages vues                          |
| 189 | `ps_pagenotfound`                  | Pages non trouvées                 |
| 190 | `ps_product_attribute`             | Déclinaisons de produits           |
| 191 | `ps_product_attribute_combination` | Combinaisons d'attributs            |
| 192 | `ps_product_attribute_image`       | Images par déclinaison             |
| 193 | `ps_product_attribute_lang`        | Traductions des déclinaisons       |
| 194 | `ps_product_attribute_shop`        | Déclinaisons par boutique          |
| 195 | `ps_product_carrier`               | Transporteurs par produit           |
| 196 | `ps_product_country_tax`           | Taxes par pays                      |
| 197 | `ps_product_download`              | Produits virtuels téléchargeables |
| 198 | `ps_product_group_reduction_cache` | Cache réductions groupe            |
| 199 | `ps_product_lang`                  | Traductions produits                |
| 200 | `ps_product_sale`                  | Ventes produits                     |
| 201 | `ps_product_shop`                  | Produits par boutique               |
| 202 | `ps_product_supplier`              | Fournisseurs par produit            |
| 203 | `ps_product_tag`                   | Tags produits                       |

---

## Tables profils et permissions (204 - 207)

| #   | Nom de table             | Description                |
| --- | ------------------------ | -------------------------- |
| 204 | `ps_profile`           | Profils d'employés        |
| 205 | `ps_profile_lang`      | Traductions des profils    |
| 206 | `ps_quick_access`      | Accès rapides             |
| 207 | `ps_quick_access_lang` | Traductions accès rapides |

---

## Tables fourchettes de prix/poids (208 - 209)

| #   | Nom de table        | Description          |
| --- | ------------------- | -------------------- |
| 208 | `ps_range_price`  | Fourchettes de prix  |
| 209 | `ps_range_weight` | Fourchettes de poids |

---

## Tables outils et paramètres (210 - 227)

| #   | Nom de table                               | Description                   |
| --- | ------------------------------------------ | ----------------------------- |
| 210 | `ps_request_sql`                         | Requêtes SQL personnalisées |
| 211 | `ps_required_field`                      | Champs requis                 |
| 212 | `ps_risk`                                | Risques clients               |
| 213 | `ps_risk_lang`                           | Traductions des risques       |
| 214 | `ps_search_engine`                       | Moteurs de recherche          |
| 215 | `ps_search_index`                        | Index de recherche            |
| 216 | `ps_search_word`                         | Mots de recherche             |
| 217 | `ps_shop`                                | Boutiques                     |
| 218 | `ps_shop_group`                          | Groupes de boutiques          |
| 219 | `ps_shop_url`                            | URLs des boutiques            |
| 220 | `ps_smarty_cache`                        | Cache Smarty                  |
| 221 | `ps_smarty_last_flush`                   | Dernier vidage cache          |
| 222 | `ps_smarty_lazy_cache`                   | Cache lazy Smarty             |
| 223 | `ps_specific_price`                      | Prix spécifiques             |
| 224 | `ps_specific_price_priority`             | Priorités prix               |
| 225 | `ps_specific_price_rule`                 | Règles de prix               |
| 226 | `ps_specific_price_rule_condition`       | Conditions règles prix       |
| 227 | `ps_specific_price_rule_condition_group` | Groupes conditions            |

---

## Tables géographiques (228)

| #   | Nom de table | Description     |
| --- | ------------ | --------------- |
| 228 | `ps_state` | États/régions |

---

## Tables statistiques (229)

| #   | Nom de table       | Description            |
| --- | ------------------ | ---------------------- |
| 229 | `ps_statssearch` | Statistiques recherche |

---

## Tables stock (230 - 234)

| #   | Nom de table                 | Description         |
| --- | ---------------------------- | ------------------- |
| 230 | `ps_stock`                 | Stock               |
| 231 | `ps_stock_available`       | Stock disponible    |
| 232 | `ps_stock_mvt`             | Mouvements de stock |
| 233 | `ps_stock_mvt_reason`      | Raisons mouvements  |
| 234 | `ps_stock_mvt_reason_lang` | Traductions raisons |

---

## Tables magasins (235 - 237)

| #   | Nom de table      | Description           |
| --- | ----------------- | --------------------- |
| 235 | `ps_store`      | Magasins              |
| 236 | `ps_store_lang` | Traductions magasins  |
| 237 | `ps_store_shop` | Magasins par boutique |

---

## Tables fournisseurs (238 - 240)

| #   | Nom de table         | Description               |
| --- | -------------------- | ------------------------- |
| 238 | `ps_supplier`      | Fournisseurs              |
| 239 | `ps_supplier_lang` | Traductions fournisseurs  |
| 240 | `ps_supplier_shop` | Fournisseurs par boutique |

---

## Tables commandes fournisseurs (241 - 246)

| #   | Nom de table                        | Description                       |
| --- | ----------------------------------- | --------------------------------- |
| 241 | `ps_supply_order`                 | Commandes fournisseurs            |
| 242 | `ps_supply_order_detail`          | Détail commandes fournisseurs    |
| 243 | `ps_supply_order_history`         | Historique commandes fournisseurs |
| 244 | `ps_supply_order_receipt_history` | Historique réceptions            |
| 245 | `ps_supply_order_state`           | Statuts commandes fournisseurs    |
| 246 | `ps_supply_order_state_lang`      | Traductions statuts               |

---

## Tables administration (247 - 250)

| #   | Nom de table                 | Description                      |
| --- | ---------------------------- | -------------------------------- |
| 247 | `ps_tab`                   | Onglets admin                    |
| 248 | `ps_tab_advice`            | Conseils par onglet              |
| 249 | `ps_tab_lang`              | Traductions onglets              |
| 250 | `ps_tab_module_preference` | Préférences modules par onglet |

---

## Tables tags (251 - 252)

| #   | Nom de table     | Description    |
| --- | ---------------- | -------------- |
| 251 | `ps_tag`       | Tags           |
| 252 | `ps_tag_count` | Compteurs tags |

---

## Tables taxes (253 - 257)

| #   | Nom de table                | Description                  |
| --- | --------------------------- | ---------------------------- |
| 253 | `ps_tax`                  | Taxes                        |
| 254 | `ps_tax_lang`             | Traductions taxes            |
| 255 | `ps_tax_rule`             | Règles de taxes             |
| 256 | `ps_tax_rules_group`      | Groupes règles taxes        |
| 257 | `ps_tax_rules_group_shop` | Groupes règles par boutique |

---

## Tables diverses (258 - 272)

| #   | Nom de table                      | Description                          |
| --- | --------------------------------- | ------------------------------------ |
| 258 | `ps_timezone`                   | Fuseaux horaires                     |
| 259 | `ps_translation`                | Traductions                          |
| 260 | `ps_warehouse`                  | Entrepôts                           |
| 261 | `ps_warehouse_carrier`          | Transporteurs par entrepôt          |
| 262 | `ps_warehouse_product_location` | Localisation produits                |
| 263 | `ps_warehouse_shop`             | Entrepôts par boutique              |
| 264 | `ps_web_browser`                | Navigateurs web                      |
| 265 | `ps_webservice_account`         | Comptes webservice                   |
| 266 | `ps_webservice_account_shop`    | Comptes webservice par boutique      |
| 267 | `ps_webservice_permission`      | Permissions webservice               |
| 268 | `ps_wishlist`                   | Listes d'envies                      |
| 269 | `ps_wishlist_product`           | Produits dans listes d'envies        |
| 270 | `ps_wishlist_product_cart`      | Produits listes d'envies dans panier |
| 271 | `ps_zone`                       | Zones géographiques                 |
| 272 | `ps_zone_shop`                  | Zones par boutique                   |

---

## Tables modules supplémentaires (273 - 297)

| #   | Nom de table                          | Description                                 |
| --- | ------------------------------------- | ------------------------------------------- |
| 273 | `ps_customer_account`               | Comptes clients (liens externes)            |
| 274 | `ps_log_email`                      | Historique des emails envoyés              |
| 275 | `ps_customer_account_shop`          | Comptes clients par boutique                |
| 276 | `ps_facebook_product_sync`          | Synchronisation produits Facebook           |
| 277 | `ps_facebook_product_feed`          | Flux produits Facebook                      |
| 278 | `ps_facebook_catalog`               | Catalogues Facebook                         |
| 279 | `ps_klaviyo_coupon`                 | Coupons Klaviyo                             |
| 280 | `ps_klaviyo_sync`                   | Synchronisation Klaviyo                     |
| 281 | `ps_psshipping_orders`              | Commandes Psshipping                        |
| 282 | `ps_psshipping_carrier_account`     | Comptes transporteurs Psshipping            |
| 283 | `ps_followup`                       | Relances clients                            |
| 284 | `ps_followup_mail`                  | Modèles de relances                        |
| 285 | `ps_referralprogram`                | Programme parrainage                        |
| 286 | `ps_reminder`                       | Rappels (panier abandonné)                 |
| 287 | `ps_statssearch_engine`             | Statistiques moteurs recherche              |
| 288 | `ps_statskeyword`                   | Statistiques mots-clés                     |
| 289 | `ps_webservice_log`                 | Logs des appels webservice                  |
| 290 | `ps_cart_rule_lang_shop`            | Règles panier multilingues par boutique    |
| 291 | `ps_feature_shop_lang`              | Caractéristiques multilingues par boutique |
| 292 | `ps_product_comment_criterion_shop` | Critères commentaires par boutique         |
| 293 | `ps_image_shop_lang`                | Images multilingues par boutique            |
| 294 | `ps_module_country_shop`            | Modules pays par boutique                   |
| 295 | `ps_module_currency_shop`           | Modules devises par boutique                |
| 296 | `ps_module_group_shop`              | Modules groupes par boutique                |
| 297 | `ps_product_attachment_shop`        | Fichiers joints par boutique                |

---

## 📊 Récapitulatif

| Catégorie                         | Nombre de tables |
| ---------------------------------- | ---------------- |
| Tables natives (1-164)             | 164              |
| Commandes et facturation (165-184) | 20               |
| Produits et catalogue (185-203)    | 19               |
| Profils et permissions (204-207)   | 4                |
| Fourchettes (208-209)              | 2                |
| Outils et paramètres (210-227)    | 18               |
| Géographiques (228)               | 1                |
| Statistiques (229)                 | 1                |
| Stock (230-234)                    | 5                |
| Magasins (235-237)                 | 3                |
| Fournisseurs (238-240)             | 3                |
| Commandes fournisseurs (241-246)   | 6                |
| Administration (247-250)           | 4                |
| Tags (251-252)                     | 2                |
| Taxes (253-257)                    | 5                |
| Diverses (258-272)                 | 15               |
| Modules supplémentaires (273-297) | 25               |
| **TOTAL**                    | **297**    |

---

*Document généré le 05/05/2026 - Base de données PrestaShop complète*
