## revert est la commande que nous utilisons lorsque nous voulons prendre un précédent commitet l'ajouter en tant que nouveau commit, en gardant le logintact.

# Premièrement, nous devons trouver le point sur lequel nous voulons revenir. Pour cela, nous devons passer par le log.

## Git Revert Find Commit in Log
==> Pour éviter la très longue liste de logs, nous allons utiliser l' --onelineoption, qui ne donne qu'une seule ligne par commit montrant :
 * Les sept premiers caractères ducommit hash
 * les commit message
==>Trouvons donc le point que nous voulons revert: 

commande :#git log --oneline

## Git Revert HEAD

Nous rétablissons la dernière commiten utilisant git revert HEAD( revertla dernière modification, puis commit), en ajoutant l'option --no-editpermettant d'ignorer l'éditeur de message de validation (obtenant le revertmessage par défaut) :

commande :#git revert HEAD --no-edit

Maintenant, vérifions logà nouveau :

commande :#git log --oneline 