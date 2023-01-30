# Résumé des commandes git et github
## Création d'un dépôt local
- Dans VS Code, sélectionner le dossier du "thème" et l'ouvrir dans "Integrated Terminal" (bash ou powershell)
- git init (dans le dossier mais pas de git au parent et git dans l'enfant, juste un au bon endroit - à exécuter une seule fois)
- git status
- git add . OU git add --all 
  (ce dernier est conseillé pour la première indexation)
- git commit -m "Mon message -  On décrit les modifications"
- git log 
- git log --oneline


- git remote add origin https://github.com/NoemieDS/4W4-noemie_ds.git   
  (crée un alias - pas obligé d'être nommé origin)
- git branch -m main 
  (nommer la branche si jamais elle s'appelle master)
- git branch lab1
  (crée la branche lab1)
- git checkout lab1 
  (changer de branche, lab1 active)
- git log --oneline (les branches lab1 et main pointe vers le même commit)
- git checkout main
- git push origin main 
  (pousse la branche active "main" vers github dans le dépôt origin vers la branche main)
- git checkout lab1
- git push origin lab1 
  (sync sur le serveur lab1 - ou crée la branche sur le dépôt distant et la sync)
- git branch lab2 
- git checkout lab2
- git push origin lab2