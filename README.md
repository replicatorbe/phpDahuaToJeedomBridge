# phpDahuaToJeedom

## Introduction

Ce projet PHP vise à créer une interface "pont" permettant de connecter un NVR Dahua à Jeedom, un système de domotique open source. Cette interface permet de recevoir et de gérer les événements émis par le NVR Dahua en utilisant une fonction dédiée.

## Configuration

Pour configurer cette interface, suivez les étapes suivantes :

1. Utilisez le plugin "Virtuel" de Jeedom pour créer un virtuel dans votre système Jeedom.
2. Associez le numéro du virtuel créé à la configuration de cette interface.
3. Personnalisez le code en fonction de vos besoins spécifiques. Vous pouvez choisir les événements spécifiques que vous souhaitez recevoir et gérer.

## Fonctionnalités Principales

Ce script PHP offre les fonctionnalités suivantes :

### Établissement de la Connexion

Le code utilise des sockets pour établir une connexion avec l'appareil Dahua. Les sockets sont utilisés pour la communication réseau avec le NVR Dahua.

### Authentification

Le code gère le processus d'authentification en envoyant des requêtes de connexion à l'appareil Dahua et en vérifiant les informations d'identification.

### Gestion des Événements

Le code écoute et traite les événements provenant de l'appareil Dahua. Il existe une fonction EventHandler qui prend en charge différents types d'événements tels que les appels, les mouvements vidéo, etc.

### Fonctions Additionnelles

Le code contient d'autres fonctions, notamment une fonction de sauvegarde d'image snapshot depuis l'appareil Dahua.

## Utilisation

Ce script peut être utilisé comme point de départ pour créer des applications de surveillance personnalisées ou pour automatiser des tâches liées à un appareil Dahua. Assurez-vous d'adapter le code en fonction de vos besoins spécifiques et de comprendre les spécifications de l'appareil Dahua avec lequel vous travaillez.

## Fonctionnement de la Fonction Socket

La réception des évènements des API se fait via une requête HTTP à réponse "infinie" en utilisant un retour en HTTP Multipart/Boundary sur la requête suivante :

1. Dans la fonction Main, une tentative est faite pour ouvrir une connexion avec l'appareil Dahua en utilisant fsockopen, qui crée un socket pour la communication.
2. Une fois la connexion établie, la fonction Send est utilisée pour envoyer des données au dispositif en utilisant le socket créé. Elle prépare et envoie les données sous forme de paquets.
3. La fonction Receive est utilisée pour recevoir des données du dispositif à travers le socket. Elle attend les données provenant du socket et les traite.

---

N'hésitez pas à personnaliser davantage ce README en fonction de vos besoins, en ajoutant des informations d'installation et d'utilisation si nécessaire.
