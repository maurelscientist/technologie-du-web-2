  Généralisation :
         Le projet ayant effectué par Brou amoikon Maurel, Koffi nango, Danhi minmon et anoh amien consistait à approfondir ce que nous avons fait ou appris lors des TP (travaux dirigées) par Mr GODE. Pour faire simple nous avons jute créer une page principale index.php qui permet d'accéder principalement à la liste des étudiants et d’autres. Pour réaliser cette tâche nous avons eu besoin de 29 fichiers dont, 19 fichiers PHP, 8 fichiers Css, 1 fichier SQL qui est la base de données et enfin, 1 fichier md (mark down) qui a le même contenue que ce fichier PDF. Comme arborescence nous avons : 
	PHP 
-	Db.php 
-	Index.php 
-	liste_etudiant.php
-	ajout_etudiant.php
-	cchargement2.php 
-	chargement1.php 
-	details_etudiant.php 
-	detaits_etudiant_visiteurs.php 
-	functions.php 
-	login_process.php 
-	login.php 
-	login2.php 
-	logout.php  
-	modifier_etudiant.php
-	supprimer_etudiant.php 
-	traitement_image.php 
-	visiteur.php 

	Css
-	Index.css 
-	Ajout_etudiant.css 
-	Details_etudiant.css
-	Details_etudiants_visiteurs.css 
-	liste_etudiant.css 
ogin.css
-	modifier_etudiants.css
-	Visiteur. 
	Sql 
-	Sql.sql 
	md(markdown) 
-	Explication_projet.md

      1. Explication du fichier `index.php`       
           Le fichier `index.php` joue le rôle de page d’accueil de l’application de gestion des étudiants (UPB). 
Il permet à l’utilisateur de choisir son mode de connexion et redirige vers les pages correspondantes.
	Structure générale
 - HTML5 : le fichier commence par la déclaration `< ! DOCTYPE html>` et définit la langue en français.
 - Head :
                 - Encodage UTF-8 pour supporter les caractères spéciaux.
               - Titre de la page : *Liste des Étudiants - Gestion UPB*.
               - Importation de Bootstrap 5 pour bénéficier de styles modernes.
               - Ajout d’un style CSS personnalisé pour le fond, le conteneur et les boutons.
- Body :
•	Une section centrale (`.container`) qui affiche un titre et deux boutons :
•	-**Administrateur** → redirige vers `login.php`.
•	**Visiteur** → redirige vers `cchargement2.php`.

	Design et thèmes
- **Fond** : image en arrière-plan (Unsplash).
- **Container** : bloc blanc arrondi avec ombre douce pour mettre en valeur les options.
- **Boutons** :
•	Couleur bleue institutionnelle (`#1e40af`).
•	Effet hover plus foncé (`#084298`).
•	Taille large et arrondie pour une meilleure ergonomie.
	Fonctionnement
1. L’utilisateur arrive sur `index.php`.  
2. Il choisit son rôle :
   - **Administrateur** → accès à la page de connexion sécurisée (`login.php`).
   - **Visiteur** → accès direct à une page de consultation (`cchargement2.php`).
3. Le choix détermine les droits et fonctionnalités disponibles dans l’application.

 2. Explication du fichier ‘db.php’ 
  Ce fichier gère la **connexion à la base de données MySQL** pour l’application de gestion UPB.  
Il utilise **PDO (PHP Data Objects)**, une méthode sécurisée et moderne pour interagir avec la base.
$host = 'localhost'   : Adresse du serveur MySQL
$db   = 'upb’;           : Nom de la base de données
$user = 'root’;         : Nom d’utilisateur MySQL
$pass = '';                   : Mot de passe MySQL (vide par défaut en local)  

3.expliction du fichier ‘liste_etudiants.php’ et ‘visiteur.php’    
Ce code est une page web en PHP qui permet d’afficher la liste des étudiants enregistrés dans une base de données. Il combine du PHP pour la logique, du HTML pour la structure, du CSS pour le style et du JavaScript pour l’interactivité.   
Au début du fichier, deux fichiers externes sont inclus :
•	db.php pour établir la connexion avec la base de données.
•	functions.php pour utiliser des fonctions supplémentaires.
Ensuite, le code vérifie si l’utilisateur est connecté grâce à la variable de session $_SESSION["user_id"]. Si ce n’est pas le cas, il est redirigé vers la page de connexion login.php. Cela permet de sécuriser l’accès à la liste des étudiants.
Puis, une requête SQL est exécutée pour récupérer les informations des étudiants (id, nom, prénoms, genre, email, quartier, contact). Les résultats sont stockés dans la variable $etudiants sous forme de tableau.    
Enfin nous avons une side-bar qui nous permet de créer un étudiant, changer de mode, et accueil.    
Pour le fichier visiteur.php on ne peut pas apporter de modification a liste étudiante, on ne peut que voir la liste et les détails. 

4.Explication du fichier ‘details_etudiant.php’ et ‘details_etudiants_visiteurs.php’    
     Ces deux fichiers sont presque identiques : ils affichent la fiche d’un étudiant avec sa photo et ses informations personnelles. La différence réside dans la navigation (où on retourne après la fiche) et dans la possibilité de modifier les données. Le premier est pensé pour un utilisateur connecté qui gère les étudiants, tandis que le second est plus simple, destiné à un visiteur qui consulte seulement les informations.    

5.Explication des fichiers ‘login.php’ , ‘login2’, ‘logout’,’ login_process.php’ , ‘functions.php’ 
             Page login est une page de vérification ; LE fichier login2.php présente deux manières de se connecter à la Liste des étudiants parle fichier ‘function.php’, soit en étant comme administrateur ou visiteur. Si administrateur vous serai dirigez vers le fichier login. PHP qui va vous authentifiez où vérifier que vous êtes un administrateur. Après avoir été authentifier vous serai rediriger vers ‘liste_etudiant.php’. Contrairement à l’administrateur si vous choisisser visiteur vous serai rediriger vers le fichier ‘liste_etudiants_visiteur.php’ . 
•	La page de choix sert de menu d’accueil pour sélectionner le type de connexion.
•	La page de login gère l’authentification sécurisée des administrateurs.
•	Ensemble, elles permettent de distinguer deux profils d’accès : administrateur (avec mot de passe) et visiteur (accès libre).    

5.explication des fichiers ‘modifier_etudiant.php’, ‘supprimer_etudiant.php’,   
          Pour faire simple le fichier ‘ajout_etudiant.php’ permet d’ajouter un étudiant a la fois dans la base de données ce qui s’affichera dans la liste des étudiants le fichier ‘modifier_etudiant.php’ permet de modifier les éléments ou les informations d’un étudiant qu’on a créé. Quant à la page ‘supprimer_etudiants.php’, elle nous sert à supprimer définitivement un étudiant de la liste des étudiants. 

#FIN
Ce projet nous permit de savoir plus sur les apis, sur Bootstrap et autres. Nous avons travaillé dur sur ce projet, nous espérons avoir un retour favorable.
De Brou Amoikon Maurel le 13/12/2025 à 11h25
