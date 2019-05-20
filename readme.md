# Projet Plante connecté: Bloom
Le projet  **plante connecté**  consistent en la création d'un objet connecté permettant de connaître la température, l'humidité ou encore la luminosité que reçoit la plante surveiller par l'objet , ce projet est effectué à l'occasion d'un projet de première année en école d'informatique se déroulant du 4 avril au 7 juin 2019.
Notre objet connecté se nomme Bloom.

## Structure du projet
- Une interface web 
- Une base de données
- Un objet connecté 

L'interface web est constitué en HTML et CSS pour la mise en forme et en PHP pour le traitement et l'échange des informations avec la base de données.

La base de données est en MySQL et contrôler grâce à phpMyAdmin.

L'objet connecté en constitué de deux capteurs permettant de mesurer la luminosité, l'humidité et la température, il est aussi constitué d'une carte Arduino permettant de traiter les informations provenant des capteurs, et un module wifi permettant de passer les informations de l'Arduino vers La carte Rasberry PI qui gère la base de données.

## Contenu du dossier
**index.php** est la page d'accueil de l'interface ou l'on peut visualiser les dernières **informations** envoyés par les capteurs.
**historique.php** est la page montrant l'historique des données captés sur chaque plante.
**planter.php** est la page permettant d'ajouter une plante dans sa liste pour qu'elle soit pris en compte par l'interface et apparaissent dans la base de données.
**add.php** permet d'ajouter un type de plante ainsi que ces caractéristiques dans la base de données pour permettre de la rendre accessible pour les autres utilisateurs.
**style.css** est le fichier css permettant de mettre en forme quelque éléments ainsi que de placer l'image de fond.
**image** est le dossier contenant les images qui sont utilisés par l'interface.

Utilisation du framework Bootstrap et de Fontawesome.
Bootstrap : [https://getbootstrap.com/](https://getbootstrap.com/)
Fontawesome : [https://fontawesome.com/](https://fontawesome.com/)

## Interface client
Dans ce paragraphe je vais présenter les pages et fonctionnalités de l'interface.


Tout d'abord, la page d'accueil qui permet de visualiser les dernières données acquises par les capteurs et d'accéder au autre page à l'aide du menu situé en haut.
![Ajouter type de plante](https://vibrant-knuth-d6e0a8.netlify.com/accueil.png)


Ensuite la page suivante est la plage historique qui permet de visualiser les données des capteurs selon les plantes choisi par l'utilisateur.
Les données sont classés par nom, date, humidité, température et luminosité.
![Ajouter type de plante](https://vibrant-knuth-d6e0a8.netlify.com/historique.png)


La page de plantation permet de sélectionner la plante que l'on souhaite ajouté à son tableau de bord pour suivre ces conditions en temps réel.
![Ajouter type de plante](https://vibrant-knuth-d6e0a8.netlify.com/planter.png)


Les paramètres sont accessible en cliquant sur l'écrou, ces paramètres permettent de modifier l'adresse mail qui servira de boîte de réception pour les messages d'alerte.
![Ajouter type de plante](https://vibrant-knuth-d6e0a8.netlify.com/mail.png)



La dernière page est une page qui sert à ajouter une catégorie de plante dans la base de données pour la rendre accessible à tout les autres utilisateur.
![Ajouter type de plante](https://vibrant-knuth-d6e0a8.netlify.com/add.png)
