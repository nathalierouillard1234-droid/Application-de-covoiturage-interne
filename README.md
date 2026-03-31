# 🚗 Application de Covoiturage Interne

## 📌 Description

Cette application web permet aux employés d’une entreprise de partager leurs trajets entre différents sites afin de favoriser le covoiturage.

Elle a été développée dans le cadre d’un projet en **PHP avec architecture MVC**, en respectant un cahier des charges précis.

---

## 🎯 Objectifs

* Réduire les trajets individuels
* Optimiser le taux d’occupation des véhicules
* Faciliter la mise en relation des employés

---

## ⚙️ Technologies utilisées

* PHP (architecture MVC)
* MySQL / MariaDB
* Bootstrap 5
* HTML / CSS
* PDO (sécurité base de données)

---

## 📁 Structure du projet

```
covoiturage/
│
├── app/
│   ├── controllers/
│   ├── models/
│   └── views/
│
├── config/
├── routes/
├── public/
└── database.sql
```

---

## 🗄️ Base de données

Importer le fichier `database.sql` dans votre serveur MySQL.

### Tables principales :

* `utilisateurs` (employés)
* `agences` (villes)
* `trajets`

---

## 🚀 Installation

1. Cloner ou copier le projet dans votre serveur local (ex: XAMPP)
2. Importer la base de données
3. Configurer la connexion dans :

```
config/config.php
```

4. Lancer le serveur Apache
5. Accéder à :

```
http://localhost/covoiturage/public
```

---

## 🔐 Authentification

Les utilisateurs peuvent se connecter avec :

* Email
* Mot de passe

⚠️ Les données utilisateurs sont fournies (pas de création possible).

---

## 👤 Fonctionnalités utilisateur

* Voir les trajets disponibles
* Voir les détails d’un trajet
* Créer un trajet
* Modifier ses trajets
* Supprimer ses trajets

---

## 🛠️ Fonctionnalités administrateur

* Accès à toutes les données
* Gestion complète des trajets (CRUD)
* Gestion des agences (villes)

---

## 📄 Règles de gestion

* Les trajets passés ne sont pas affichés
* Seuls les trajets avec places disponibles sont visibles
* L’agence de départ doit être différente de l’arrivée
* La date d’arrivée doit être postérieure à la date de départ

---

## 🔒 Sécurité

* Utilisation de PDO (requêtes préparées)
* Gestion des sessions
* Vérification des données utilisateur

---

## 🧪 Tests

Des tests unitaires peuvent être ajoutés avec PHPUnit pour :

* Création de trajets
* Vérification des règles métier

---

## 🎨 Interface

* Utilisation de Bootstrap
* Interface simple et responsive
* Palette de couleurs imposée respectée

---

## 📚 Améliorations possibles

* Ajout d’un système de réservation de place
* Notifications utilisateurs
* Recherche de trajets
* Interface plus avancée
* API REST

---

## 👨‍💻 Auteur

Projet réalisé dans le cadre d’une formation développement web.

---

## 📅 Version

Version 1.0
