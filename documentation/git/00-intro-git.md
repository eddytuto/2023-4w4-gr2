# Git, Github et Github-page

### 1W1 - Mise en page Web

![Octocat](https://user-images.githubusercontent.com/81953271/124010886-b571ca80-d9df-11eb-86ac-b358c48ac6aa.png "Github logo")

## Introduction

**_Git_** est un logiciel de gestion de versions décentralisé. C'est un logiciel libre et gratuit, créé en 2005 par Linus Torvalds, auteur du noyau Linux, et distribué selon les termes de la licence publique générale GNU version 2. Le principal contributeur actuel de Git, et ce depuis plus de 16 ans, est Junio C Hamano. Depuis les années 2010, il s’agit du logiciel de gestion de versions le plus populaire dans le développement logiciel et web, qui est utilisé par des dizaines de millions de personnes, sur tous les environnements (Windows, Mac, Linux)3. Git est aussi le système à la base du célèbre site web GitHub, le plus important hébergeur de code informatique.

**_GitHub_** est un site de partage de code, sur lequel on peut publier des projets dont le code est géré avec le système de gestion de version Git. Par défaut, le système est open source, ce qui signifie que tout le monde peut consulter le code, l'utiliser pour apprendre ou l'améliorer et collaborer aux projets.

**_GitHub-pages_** Github permet de publier un site Web constitué d'une seule page. Il suffit que le **_dépôt_** contenant le site soit **_publique_**. Une fois que le dépôt est créé on peut créer la Github-page en accédant au « `setting` » du dépôt et à « `Page`».

**_l'adresse de la github-page final_** [Github page TP2](https://eddytuto.github.io/1w1/#accueil "Github page TP2")

## Création d'une Github-page :

Synthèse des étapes qu'il faut entreprendre

1. Créer un dépôt local dans le dossier principal de notre projet (ici le tp2)
   > « `git init` » ne doit être utilisée qu'une seule fois pour un même dépôt
2. Indexer l'ensemble des fichiers de notre projet :
   > « `git add --all` »
3. Faire un commit :
   > « `git commit -m "s13 Début du TP2"`
4. Créer un compte Github et un nouveau dépôt
5. Pousser le dépôt vers « Github » le serveur distant
   > « `git push 1w1 main` »
6. Créer la github-page
   > `Sélection du dépôt / Setting / Page`

## Création d'un dépôt local pour votre projet

Il faut avant tout créer un dépôt local pour notre projet. Toutes les modifications se feront localement et non directement sur le serveur `Github`

1. Lancer Visual Code pour editer le projet TP2
2. Ouvrir le dossier principal du projet
3. Les commandes Git seront entrées directement dans la console de Visual-code
4. La console peut être accédée avec « `affichage/terminal` » ou bien avec touche droit de la souris et « `ouvrir dans le terminal intégré` »
5. Sur la console, l'indicatif devrait indiquer le dossier principal de votre projet « TP2 »
6. Il faut cliquer dans la console pour s'assurer que la console est active
7. Pour créer un dépôt, entrez la commande :
   > « `git init` »
8. Si vous utilisez un ordinateur portable, il se peut que Git ne soit pas installé.
   Si la commande git n'est pas reconnu, il faut installer git.
   Cherchez « git download » dans google pour trouver :
   https://git-scm.com/download/win. Téléchargez la version **\*windows 64 bit**.
   Lancez l'installateur qui se trouve dans le dossier de téléchargement.
   Fermez Visual Code pour ensuite le relancer ce qui
   permettra à Visual Code de reconnaitre Git.
9. Pour s'assurer que le dépôt est bien créé, sortez de « VC » et ouvrez l'explorateur de fichier de Windows.
10. Ouvrez le dossier contenant votre projet.
11. Dans l'explorateur assurez-vous que vous pouvez voir les fichiers cachés en cliquant sur la case à côcher « `Affichage/éléments masqués` »
12. Si le dossier **_.git_** apparait dans le dossier principal de votre TP2 c'est que le `dépôt git` a bien été créé.

## Indexer les fichiers du projet

Permet de préparer la version du projet avant le `commit`

1. Pour voir l'état de votre dépôt
   > « `git status` »
2. Si les fichiers apparaissent en rouge: il faut les indexer
   > « `git add --all` »
3. Entrez de nouveau
   > « `git status` »
4. Vous constaterez que les fichiers apparaissent en vert
5. Votre dépôt est prêt à recevoir un nouveau « `commit` »

## Réaliser un commit

Permet d'identifier une nouvelle version du projet

1.  Créez un nouveau commit
    > « `git commit -m "s13 Début du TP2"` »
2.  -m permet de spécifier que la description du commit sera définie par la chaîne de caractères qui suit
3.  Pour voir l'ensemble des commits contenu dans le dépôt:
    > « `git log`
4.  Plusieurs formats de log sont disponibles le plus condensé est:
    > « `git log --oneline` »

## Créer un compte « Github » et créer un dépôt

1. Il faut premièrement créer un compte « Github » https://docs.github.com/en/get-started/signing-up-for-github
2. Créez un dépôt dans votre compte github, sélectionner
   > « `repository` »
   > Cliquez sur « `New` »
3. Entrez le nom du « `repository` » en français nom du « dépôt »
4. On veut créer un nom le plus simple possible ex: «1w1»
5. On sélectionne pour l'instant un dépôt
   > « `Public` » à partir du radio bouton
   > Ne pas créer de `README.MD`sur Github nous créerons ce fichier localement dans Visual Code
6. On sauvegarde le dépôt

## On revient dans « VC »

1. Revenez au terminal de « Visual Code » et entrez les commandes suivantes:
2. Changez le nom de la branche principale:
   > « `git branch -m main` »
3. Créez un alias « `1w1` » pour l'adresse du serveur distant « `github` »
   > « `git remote add 1w1 https://github.com/votre_compte/votre_dépôt.git` »
4. Vérifiez que l'alias a été bien créé « `git remote -v`»
5. Créer un `readme.md` toujours dans « VC » https://markdown-editor.github.io/

## Pour pousser votre dépôt local vers votre dépôt Github

1. Pousser le dépôt local vers votre dépôt de Github dans la branche « main »:
   > « `git push 1w1 main` » 1w1: l'alias de votre dépôt github, main: la branche

## Pour créer une Github page

1. Une fois que le dépôt local a été poussée vers le serveur Github, on peut créer une `Github-page`
2. Accédez à votre compte Github
3. Sélectionnez le dépôt sur lequel vous voulez créé une github-page
   > « `repository` » sélectionnez votre dépôt
4. Sélectionnez
   > « `Setting` »
5. Au millieu de la page dans la colonne de gauche sélectionnez
   > « `Pages` »
6. Sélectionnez
   > « `branch/main/save` »

## Références sur Git

1. https://fr.wikipedia.org/wiki/Git
2. https://referenced.ca/wp-content/uploads/2017/01/progit_v2.1.48.pdf
3. https://git-scm.com/book/fr/v2/D%C3%A9marrage-rapide-%C3%80-propos-de-la-gestion-de-version
4. https://git-scm.com/book/fr/v2/Les-bases-de-Git-Enregistrer-des-modifications-dans-le-d%C3%A9p%C3%B4t
5. https://perso.liris.cnrs.fr/pierre-antoine.champin/enseignement/intro-git/#

## Référence sur Github

1. https://docs.github.com/en/get-started/onboarding/getting-started-with-your-github-account

## Références sur Github - Création d'une Github-page

1. https://cours-web.ch/git/github-pages.html
2. https://docs.github.com/en/pages/getting-started-with-github-pages/creating-a-github-pages-site

## Références sur l'écriture en MD

Markdown écrire en .md (markdown)

1. https://github.com/darsaveli/Readme-Markdown-Syntax
2. https://www.markdownguide.org/
3. https://github.com/godcrampy/cheat-sheets/blob/master/markdown/markdown-cheatsheet.pdf
4. https://markdown-editor.github.io/
