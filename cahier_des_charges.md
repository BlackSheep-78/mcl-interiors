Cahier des Charges
La police utilisée pour les titres est disponible sur dafont.
Il s'agit d' Antipasto.

Les textes sont en Segoe UI

Couleurs du Design:

Anthracite : #3e3e3e
Gris : #a9a9a9

Couleur des Textes

Textes sur fond blanc  #918f88
Titres soit en #dd412b ou en #2f3448

Les liens +D’INFOS de la partie inférieure seront non soulignés et passeront en noir au survol

Le slider ou Carousel
Les slides passent sous le titre sur fond gris qui reste fixe

Boite Modale:
Si on clique sur le bouton de réservation du catalogue,

une boite modale s'ouvre et l'on doit saisir son nom, prénom, téléphone et adresse mail.

Soyez créatif !!!


Les Textes Pour projet : Interiors
21 OCTOBRE 2020
Découvrez notre collection Lodge et ses différents éléments modulables et créez ainsi votre combinaison!.

21 OCTOBRE 2020
Découvrez notre collection Lodge et ses différents éléments modulables et créez ainsi votre combinaison!.

Quelques mots sur notre société
Découvrez notre sélection de meubles contemporains et de mobilier moderne et design pour aménager votre intérieur. Plus de 10,000 objets deco et design en vente.

> Préparer vos cadeaux et vous faire plaisir avec des milliers de produits disponibles et livrés chez vous en 24/48h !

> Noël 2021 est déjà là! Célébrez un Noël design avec notre sélection d'idées de cadeaux originales et insolites. Découvrez notre sélection d'objets ludiques et insolites et faites le plein d'idées !


Soutenance Ajax / DOM
Le but est de récupérer via une API le contenu des articles affichés dans la zone "Dernières news".

La demande se fait article par article. Il y a 3 articles disponibles. Une demande est adressée, par passage de paramètre, au serveur "https://www.tbads.eu/greta/kercode/ajax/?article=x" où x vaut 1, 2 ou 3. Toute autre demande retournera une erreur.

L'information retournée est au format JSON, structurée de la manière suivante :

{
  "title": "Ceci est le titre",
  "date": {
    "day": "01",
    "month": "01",
    "year": "2022"
  },
  "author": {
    "name": "Le nom",
    "surname": "Le prénom",
    "position": "Ceci est la fonction dans l'entreprise"
  },
  "keyword": ["Mot clé 1", " ... ", " ... "],
  "content": [
    "Ceci est le premier paragraphe",
    "Ceci est le deuxième paragraphe",
    " ... "
  ]
  "picture":"https://access.link.to/one/image.jpg"
}
Vous exploiterez librement les données proposées pour :
construire le résumé (et l'excerpt) tel que demandé dans la maquette ci-dessus,
construire l'article complet (si possible avec photo élégamment placée) qui s'affichera dans un popup lors du clic sur le résumé. Il est évident que ce "popup" devra s'inscrire dans le même esprit UI/UX que les pages du site.
La technique de récupération Ajax des données est libre (callbacks, promesses, fetch, jQuery, ...) et l'exploitation de ces données via la manipulation du DOM est tout aussi libre (API DOM, jQuery, ...).

N'oubliez pas les bonnes pratiques d'écriture du code ! (nommage des variables, indentation du code, commentaires, javascript dans un(des) fichier(s) extérieur(s) au code HTML...

A l'issue de vos travaux, déposez votre code dans un dépôt de votre GitHub.