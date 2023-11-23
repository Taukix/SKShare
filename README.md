# SKShare - Plateforme de Partage de Sneakers avec Laravel & Docker

Voici SKShare ! Un site Web construit avec Laravel et Docker, dédiée au partage de collections de sneakers. SKShare permet aux utilisateurs de présenter leurs sneakers et de découvrir les collections d'autres passionnés. Voici un aperçu des fonctionnalités de la plateforme :

## Fonctionnalités Principales

### Partie Publique
- Présentation de Sneakers : Les utilisateurs peuvent partager leurs collections de sneakers avec le monde entier, en affichant des informations détaillées sur chaque paire.

### Partie Privée - Dashboard
- Espace Personnel : Chaque utilisateur dispose d'un tableau de bord personnel, offrant un aperçu de sa collection, des statistiques, et des activités récentes.

### Formulaires
- Ajout de Sneakers : Les utilisateurs peuvent facilement ajouter de nouvelles sneakers à leur collection via des formulaires intuitifs.

### Pagination
- Navigation Facilitée : La pagination est implémentée pour permettre une navigation fluide à travers les collections, les classements, et les événements.

### CRUD (Create, Read, Update, Delete)
- Gestion de la Collection : Les utilisateurs peuvent effectuer des opérations CRUD sur leurs sneakers, offrant une flexibilité totale dans la gestion de leur collection.

### Events/List
- Les utilisateurs reçoivent un mail de félicitation lors de l'ajout de leur première paire.

### Policies
- Des policies sont mises en place afin d'éviter d'avoir accès à certaines pages lorsque l'on est pas connecté et afin d'éviter qu'un utilisateur puisse modifier, supprimer la sneaker d'un autre.

### Système de Like/Dislike
- Classements : Les utilisateurs peuvent attribuer des likes ou dislikes à d'autres sneakers, générant ainsi des classements pour les utilisateurs et les sneakers les plus populaires.

### Technologies Utilisées
- Laravel : Utilisé comme le framework principal pour le développement du site.
- Docker : Pour l'orchestration des conteneurs, garantissant un déploiement cohérent et efficace.
- MySQL : La base de données relationnelle utilisée pour stocker les informations sur les sneakers, les utilisateurs, les classements, etc.

---

<div style="display: flex; justify-content: space-between;">
    <img src="https://github.com/Taukix/SKShare/blob/main/ReadMe_Images/Dashboard.png" width="49%">
    <img src="https://github.com/Taukix/SKShare/blob/main/ReadMe_Images/All.png" width="49%">
</div>

<div style="display: flex; justify-content: space-between;">
    <img src="https://github.com/Taukix/SKShare/blob/main/ReadMe_Images/Add.png" width="49%">
    <img src="https://github.com/Taukix/SKShare/blob/main/ReadMe_Images/Read.png" width="49%">
</div>

<div style="display: flex; justify-content: space-between;">
    <img src="https://github.com/Taukix/SKShare/blob/main/ReadMe_Images/SnkRank.png" width="49%">
    <img src="https://github.com/Taukix/SKShare/blob/main/ReadMe_Images/UserRank.png" width="49%">
</div>

---

## Installation et Exécution

Clônez le repository sur votre machine locale.

```
git clone https://github.com/votre-utilisateur/skshare.git
```

Assurez-vous que Docker est installé sur votre système.

Exécutez les conteneurs Docker.

```
docker-compose up -d
```

Accédez au site à l'adresse `http://localhost` dans votre navigateur.

---

## Compétences

À travers le développement de SKShare avec Laravel & Docker, j'ai consolidé un ensemble de compétences clés, couvrant divers aspects du développement d'applications et de la gestion de projet. Voici comment je peux exprimer ces compétences spécifiques :

### Réaliser un développement d’application

La conception et la mise en œuvre complètes de SKShare témoignent de ma capacité à réaliser des développements d'applications de bout en bout. L'utilisation de Laravel comme framework principal a renforcé ma compréhension des principes de conception et de développement MVC.

### Gérer des données de l’information :

La gestion des données dans SKShare, notamment avec l'utilisation d'une base de données MySQL, a développé ma compétence dans la structuration, la manipulation, et la gestion efficace des informations liées aux sneakers et aux utilisateurs.

### Usages des outils numériques :

L'utilisation de Docker pour orchestrer les conteneurs démontre ma maîtrise des outils numériques modernes pour simplifier le déploiement et garantir une cohérence environnementale. Cela souligne ma capacité à intégrer des technologies variées pour construire des solutions robustes.

### Exploitation de données à des fins d’analyse :

Les fonctionnalités de like/dislike et les classements dans SKShare montrent ma compétence à exploiter les données pour obtenir des informations significatives. L'analyse des classements des sneakers et des utilisateurs offre des perspectives précieuses pour améliorer l'expérience utilisateur.

### Expression et communication écrites et orales :

La communication orale lors de la présentation finale ont mis en lumière mes compétences en expression orale. Expliquer les choix de conception, les défis rencontrés, et les fonctionnalités implémentées ont exigé une communication claire et concise.

En conclusion, le développement de SKShare a été une expérience riche qui a renforcé mes compétences en développement d'applications, gestion de données, utilisation d'outils numériques, exploitation de données à des fins d'analyse, ainsi qu'en expression et communication écrites et orales. Ces compétences constituent un socle solide pour aborder de futurs projets dans le domaine du développement Web.
