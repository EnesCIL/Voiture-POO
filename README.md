🚗 **Exercice POO en PHP – Classe Voiture**
🎯**Objectif**

Comprendre la programmation orientée objet (POO) en PHP à travers la création d’une classe Voiture.
Cet exercice permet de se familiariser avec :

- Les classes et objets

- Les propriétés privées et l’encapsulation

- Les constructeurs

- Les getters et setters

- Les méthodes publiques et les comportements des objets

🏗️ **Contenu et explications**

✔️ **Classe Voiture**

- Définition d’une classe : un modèle qui sert à créer des objets partageant les mêmes caractéristiques et comportements.

- Propriétés privées (private) :

 - _marque → marque de la voiture

 - _modele → modèle spécifique

 - _nbPortes → nombre de portes

 - _vitesseActuelle → vitesse actuelle du véhicule

 - _statut → état du véhicule (allumé ou éteint)

Les propriétés privées ne peuvent être accédées directement depuis l’extérieur de la classe, ce qui protège les données de l’objet.

- Constructeur (__construct) :
Initialise automatiquement les propriétés lors de la création de l’objet.
_vitesseActuelle est initialisée à 0 et _statut à false (véhicule éteint).

- Getters / Setters :
Permettent d’accéder ou de modifier les propriétés privées en respectant l’encapsulation.

  - Les getters retournent la valeur d’une propriété

  - Les setters permettent de modifier la valeur d’une propriété

  - Méthodes publiques :

- demarrer() → allume la voiture si elle est éteinte

  - accelerer($vitesse) → augmente la vitesse actuelle si la voiture est démarrée

  - stopper() → arrête la voiture et remet la vitesse à 0

- Méthode magique __toString() :
Permet d’afficher l’objet sous forme de chaîne de caractères, avec ses principales informations (marque, modèle, nombre de portes).

- $this :
Représente l’objet courant et permet d’accéder à ses propriétés et méthodes à l’intérieur de la classe.

📚 **Concepts POO abordés**

- Encapsulation avec les propriétés privées

- Initialisation d’objets avec le constructeur

- Accès et modification des données via getters et setters

- Méthodes publiques pour définir les comportements des objets

- Méthode magique __toString() pour faciliter l’affichage

- Utilisation de $this pour référencer l’objet courant
