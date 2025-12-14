# explication du projet  

#   Generalisation 

    Le projet ayant effectuer par Brou amoikon maurel , Koffi nango , Danhi minmon et anoh amien consistait a affrodir ce que nous avons fait ou appris lors des TP (travaux dirigees) par mr GODE .Pour fair simple nous avons jute creer une page principale index.php qui permet d'acdeder principalement  a la liste des etudiants et d'autres  . 

#  Explication du fichier `index.php`

Le fichier **`index.php`** joue le rôle de **page d’accueil** de l’application de gestion des étudiants (UPB).  
Il permet à l’utilisateur de choisir son mode de connexion et redirige vers les pages correspondantes.

##  Structure générale

- **HTML5** : le fichier commence par la déclaration `<!DOCTYPE html>` et définit la langue en français.
- **Head** :
  - Encodage UTF-8 pour supporter les caractères spéciaux.
  - Titre de la page : *Liste des Étudiants - Gestion UPB*.
  - Importation de **Bootstrap 5** pour bénéficier de styles modernes.
  - Ajout d’un style CSS personnalisé pour le fond, le conteneur et les boutons.

- **Body** :
  - Une section centrale (`.container`) qui affiche un titre et deux boutons :
    - **Administrateur** → redirige vers `login.php`.
    - **Visiteur** → redirige vers `cchargement2.php`.

---

##  Design et thèmes

- **Fond** : image en arrière-plan (Unsplash).
- **Container** : bloc blanc arrondi avec ombre douce pour mettre en valeur les options.
- **Boutons** :
  - Couleur bleue institutionnelle (`#1e40af`).
  - Effet hover plus foncé (`#084298`).
  - Taille large et arrondie pour une meilleure ergonomie.

---

## 🔗 Fonctionnement

1. L’utilisateur arrive sur `index.php`.
2. Il choisit son rôle :
   - **Administrateur** → accès à la page de connexion sécurisée (`login.php`).
   - **Visiteur** → accès direct à une page de consultation (`cchargement2.php`).
3. Le choix détermine les droits et fonctionnalités disponibles dans l’application.

## Exemple visuel  

![alt text](image.png)    
 






 # Explication du fichier `liste_etudiant.php`

Ce fichier affiche la **liste des étudiants** enregistrés dans la base de données et propose des actions (voir, modifier, supprimer).  
Il inclut également une **sidebar** (menu latéral) et un bouton pour changer le mode d’affichage (clair/sombre) , ajouter etudiant , acueil , visiteur , deconnecter.

---

## Partie PHP

```php
require 'db.php';
require "functions.php"; 
if (!isset($_SESSION["user_id"])) { 
    header("Location: login.php"); 
    exit; 
} 

$stmt = $pdo->query("SELECT id, nom, prenoms, genre, email, quartier, contact FROM etudiants ORDER BY nom ASC");
$etudiants = $stmt->fetchAll();   

## autre 
 -nous avons utiliser des API pour l image en 'background-image' dont le lien est '"https://picsum.photos/500/250?random=1'    
*
# fin 

ce projrt nous permit de savoir plus sur les api , sur bootstap et autres .nous avons travaillez dur sur ce projet , nous esperons qvoir un retour favorable 

mr |#GODE


De Brou Amoikon maurel le 13/12/2025    11h25