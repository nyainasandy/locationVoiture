# Vente voiture d'occasion

## Environnement de travail

### Installation

Pour le développement du projet, tout a été exécuté sur un environnement linux distribution ubuntu 22.04.2 LTS.  
L'installation s'est fait via le terminal.  

*Installation serveur apache2 :*

```
sudo apt install apache2 -y
```

*Installation de la base de données mysql :*

```
sudo apt install mysql-server -y
```

*Installation php, le module php pour apache libapache2-mod-phpp et le module pour MySQL :*

```
sudo apt install php libapache2-mod-php php-mysql -y
```

### Vérification du bon fonctionnement

Pour vérifier que les serveurs fonctionnent :

*Vérification du serveur web apache et la base de données mysql:*

```
sudo service apache2 status
sudo service mysql status
```
![image](https://github.com/nyainasandy/locationVoiture/assets/133758455/ac1b7332-fcd7-4191-a8b2-0cf5e3410044)

Pour paramétrer MySQL :

Pour executer les commandes qui suivent, il faut lancer la commande :
```
sudo mysql
```

### Création de structure de la base de données

*Créer la base de données :*
```
CREATE DATABASE vente;
```

*Créer un utilisateur à utiliser dans l'application :*
```
CREATE USER 'user'@'%' IDENTIFIED WITH mysql_native_password 'motdepasse';
```

*Ajouter les privilèges pour pouvoir visualiser et modifier les données dans la base de données :*
```
GRANT ALL ON vente.* TO 'user'@'%';
```

*Pour séléctionner la base de données :*
```
USE vente;
```

*Créer la structure de données :*
```
SOURCE Structure.sql
```

Sachant que le fichier structure.sql contient les requêtes de création :
```
CREATE TABLE boite_de_vitesse (
  id_boite_vitesse int NOT NULL AUTO_INCREMENT,
  `type` varchar(20),
  PRIMARY KEY(id_boite_vitesse)
);

CREATE TABLE financement (
  id_financement int NOT NULL AUTO_INCREMENT,
  type varchar(20) NOT NULL,
  PRIMARY KEY (id_financement)
);

CREATE TABLE avis (
  id_avis int NOT NULL AUTO_INCREMENT,
  commentaire text NOT NULL,
  date date NOT NULL,
  intitule varchar(50) NOT NULL,
  note float NOT NULL,
  id_vendeur int NOT NULL,
  nom_client varchar(50) NOT NULL,
  PRIMARY KEY (id_avis)
);
```

### Importation des données

```
SOURCE donnees.sql
```

Sachant que le fichier donnees.sql contient les requêtes d'insertion :

```
INSERT INTO boite_de_vitesse (id_boite_vitesse, type) VALUES
(1, 'Automatique'),
(2, 'Manuelle');


INSERT INTO energie (id_energie, type) VALUES
(1, 'Essence'),
(2, 'Diesel'),
(3, 'Hybride'),
(4, 'Electrique'),
(5, 'Hybride rechargeable');
```
