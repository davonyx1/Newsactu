davidonyx
#1040

Liora — Hier à 19:58
Image
clemmyx — Hier à 19:59
VIens salle 31
Liora — Hier à 19:59
merci, jarive
Orn — Hier à 20:33
vous avez corrigé ? 
stefc95 — Hier à 20:34
Corrifé ?
C’est un nouveau mot
Orn — Hier à 20:35
😄
stefc95 — Hier à 20:35
A c’est pour aller avec le from de clem ?
Orn — Hier à 20:35
Clem est contagieux
juju6x7 — Hier à 20:35
s31
noraba — Hier à 20:51
je crois que le bouton ajouter ne fonctionne pas pour moi quelqu un peu me diriger
j ai aucune erreur
vous etes en salle 31
juju6x7 — Hier à 21:01
yes y'avait du monde tt à l'heure
Atef — Aujourd’hui à 03:26
J'ai pas trouvé le sommeil
J'arrête de le chercher
noraba — Aujourd’hui à 07:55
Bonjour j espere que vous allez bien
j ai un probleme je peux toujours pas ajouter article j ai pas trouvé la solution
noraba — Aujourd’hui à 08:30
j ai reussi a me debeuger un truc de fou je suis trop contente
stefc95 — Aujourd’hui à 08:52
Bravo nora
noraba — Aujourd’hui à 08:53
merci
davidonyx — Aujourd’hui à 11:13
Quelqu'un pourrait m'envoyer le render controller dans la nav j'ai effacer un truc je crois
Orn — Aujourd’hui à 11:15
<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
Afficher plus
RenderController.php
1 Ko
davidonyx — Aujourd’hui à 11:15
Merci
Ah non juste le twig dans la navbar qu'on vient d'écrire
Orn — Aujourd’hui à 11:19
{{ render(url('render_categories_in_nav')) }}
ça ?
davidonyx — Aujourd’hui à 11:19
La première version
🙂
Orn — Aujourd’hui à 11:20
{{ render(controller('App\Controller\RenderController::renderCategoriesInNav')) }}
davidonyx — Aujourd’hui à 11:20
Yes merci
davidonyx — Aujourd’hui à 11:30
[Syntax Error] Expected Doctrine\Common\Annotations\DocLexer::T_CLOSE_PARENTHESIS, got 'show_article_from_category' at position 38 in method App\Controller\ArticleController::showArticleFromCategory() in C:\Users\33662\OneDrive\Documents\Dev\symfony\semaine_3\Newsactu\config/routes../../src/Controller/ (which is being imported from "C:\Users\33662\OneDrive\Documents\Dev\symfony\semaine_3\Newsactu\config/routes/annotations.yaml"). Make sure to use PHP 8+ or that annotations are installed and enabled.
j'ai cette erreur depuis que j'ai suppr mes doublons savez vous ou je peux regarder?
Orn — Aujourd’hui à 11:35
en faisant quoi tu as cette erreur ?
Atef — Aujourd’hui à 11:46
Donne pas envie
Orn il faut que tu nous formes
Lol
Atef — Aujourd’hui à 12:11
Image
davidonyx — Aujourd’hui à 12:44
An exception has been thrown during the rendering of a template ("Unable to generate a URL for the named route "show_articles_from_category" as such route does not exist."). j'ai cette erreur juste un indice où je dois regarder? j'ai vérif l'orthographe mais je ne trouve pas...
Madou — Aujourd’hui à 12:44
Tu l’as mis dans le mauvais dossier peut etre
stefc95 — Aujourd’hui à 12:45
Regarde si ton chemin et ton dossier on le même nom
Si le fichier est au bon endroit
davidonyx — Aujourd’hui à 12:46
ok je vais recheck mais on est d'acc que c'est un soucis de
d'ortho?
Orn — Aujourd’hui à 12:47
regarde le name de ta route et ce que tu as mis dans le path
en plus de ce qui est dis plus haut
stefc95 — Aujourd’hui à 12:47
Vérifie dans la function et ton path aussi possible qu’il ait un oubli de s quelque part
Genre show article et show articles
davidonyx — Aujourd’hui à 13:05
merci c'est exactement ça! mais  je n'avais pas checké la route!!
stefc95 — Aujourd’hui à 13:37
@Mounia  on a reprit le prof t’appelle 
Mounia — Aujourd’hui à 13:45
Mercii
davidonyx — Aujourd’hui à 14:25
Désolé je suis plus c'est quoi déjà la commande dans le serveur?
J'ai lâché j'aurais besoin de récupérer plus tard j'ai compris le système mais je suis super lent  a taper et je n'arrive pas à rattraper le retard!
Orn — Aujourd’hui à 14:32
j'ai rien suivit du tout non plus, si une âme charitable veut bien mettre les 3 fichiers please 🙏
juju6x7 — Aujourd’hui à 14:33
j'ai pas fini moi, j'attends Guy T.
juju6x7 — Aujourd’hui à 14:35
pour créer le formulaire : symfony console make:form CategoryFormType

pour le controller: symfony console make:controller CategoryController
davidonyx — Aujourd’hui à 14:35
c'est ce que j'ai mis mais j'ai une erreur dans le serveur
ça stress quand ça accélère comme ça mais bon
juju6x7 — Aujourd’hui à 14:35
oui là c allé vite ^^
c quoi l'erreur que ça te met ?
davidonyx — Aujourd’hui à 14:39
je en peux pas l'afficher
c'est trop long
je sais pas si on voit
ParseError {#460
  #message: "syntax error, unexpected end of file, expecting function (T_FUNCTION) or const (T_CONST)"
  #code: 0
  #file: "C:\Users\33662\OneDrive\Documents\Dev\symfony\semaine_3\Newsactu\src\Controller\CategoryController.php"
  #line: 36
  trace: {
Afficher plus
message.txt
5 Ko
ParseError {#460
  #message: "syntax error, unexpected end of file, expecting function (T_FUNCTION) or const (T_CONST)"
  #code: 0
  #file: "C:\Users\33662\OneDrive\Documents\Dev\symfony\semaine_3\Newsactu\src\Controller\CategoryController.php"
  #line: 36
  trace: {
Afficher plus
message.txt
5 Ko
je suis largué
juju6x7 — Aujourd’hui à 14:42
"syntax error, unexpected end of file" ptete un problème d'accolade fermante
davidonyx — Aujourd’hui à 14:43
donc il faut que je termine d'abord la fonction create de category avant de faire la ligne de commande?
juju6x7 — Aujourd’hui à 14:43
oui sûrement
davidonyx — Aujourd’hui à 14:43
ah mince alors c'est mort lol
juju6x7 — Aujourd’hui à 14:43
au moins qu'elle soit bien fermée
davidonyx — Aujourd’hui à 14:44
j'aurais du rattrapage ce soir avec git
juju6x7 — Aujourd’hui à 14:44
c'est juste que ça doit être mal fermé quelque part jcrois
davidonyx — Aujourd’hui à 14:47
The name of Entity or fully qualified model class name that the new form will be bound to (empty for none): j'ai fermé la fonction create sans l'avoir terminée et ça donne çe message
dans le serveur
juju6x7 — Aujourd’hui à 14:49
Category
davidonyx — Aujourd’hui à 14:50
Ah mais oui j'avais oublié cette étape... Merci
Mais j'ai un retard de fou du coup
juju6x7 — Aujourd’hui à 14:51
ouais faut lui indiquer le truc
tkt jpense qu'on est pas mal à être + ou moins largués ^^
davidonyx — Aujourd’hui à 14:51
plus on de de fous... lol
Orn — Aujourd’hui à 14:53
l'écouter sert a rien la, j'ai speedrun le truc seul
davidonyx — Aujourd’hui à 14:57
Effectivement j'ai trop de retard là...
Orn — Aujourd’hui à 14:58
tu as fais la ligne de commande pour le form ?
juju6x7 — Aujourd’hui à 14:58
{% extends 'base.html.twig' %}

{% block title %}Ajouter une catégorie{% endblock %}

{% block body %}

    {% if category is not defined %}
        <h1 class="text-center my-4">Ajouter une catégorie</h1>
    {% else %}
        <h1 class="text-center my-4">Modifier la catégorie{{ category.name }}</h1>
    {% endif %}

    <div class="row">
        <div class="col-4 mx-auto">{{ form(form) }}</div>
    </div>

{% endblock %}
davidonyx — Aujourd’hui à 14:58
oui juste ça
je me suis arrété à la ligne de commande
Atef — Aujourd’hui à 14:59
J'ai l'impression que je suis faire voir dans symfony
Orn — Aujourd’hui à 15:00
<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
Afficher plus
CategoryFormType.php
2 Ko
<?php

namespace App\Controller;

use DateTime;
use App\Entity\Category;
Afficher plus
CategoryController.php
3 Ko
{% extends "base.html.twig" %}

{% block title %}Ajouter une catégorie{% endblock %}

{% block body %}

Afficher plus
category.html.twig
1 Ko
les 3 fichiers si tu veux juste copier coller
davidonyx — Aujourd’hui à 15:00
ah super merci!
Atef — Aujourd’hui à 15:00
Orn tanks
Orn — Aujourd’hui à 15:01
par contre prend les 3 en meme temps vu que j'ai fais a ma sauce
juju6x7 — Aujourd’hui à 15:01
Merci, il manque un C à success
Orn — Aujourd’hui à 15:01
oui j'ai vu lol
﻿
<?php

namespace App\Controller;

use DateTime;
use App\Entity\Category;
use App\Form\CategoryFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    /**
     * @Route("/ajouter-categorie", name="create_category", methods={"GET|POST"})
     */
   public function createCategory(Request $request, SluggerInterface $slugger, EntityManagerInterface $entityManager): Response
   {
        $categorie = new Category();

        $form = $this->createForm(CategoryFormType::class, $categorie)
                ->handleRequest($request);

                $form = $this->createForm(CategoryFormType::class, $categorie)
                ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $categorie->setCreatedAt(new DateTime());
            $categorie->setUpdatedAt(new DateTime());

            $categorie->setAlias($slugger->slug($categorie->getName()));

            $entityManager->persist($categorie);
            $entityManager->flush();

            $this->addFlash('success', 'L\'article a été ajouté avec succès ! ');
            return $this->redirectToRoute('show_dashboard');

            
        }

        return $this->render("admin/form/category.html.twig",[
            'form' => $form->createView()   

        ]);
   }

   /**
     * @Route("/modifier-une-categorie/{id}", name="update_category", methods={"GET|POST"})
     */
   public function updateCategory(Category $categorie,Request $request, SluggerInterface $slugger, EntityManagerInterface $entityManager): Response
   {

        $form = $this->createForm(CategoryFormType::class, $categorie)
                ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $categorie->setCreatedAt(new DateTime());
            $categorie->setUpdatedAt(new DateTime());

            $categorie->setAlias($slugger->slug($categorie->getName()));

            $entityManager->persist($categorie);
            $entityManager->flush();

            $this->addFlash('success', 'La catégorie a été modifié avec succès ! ');
            return $this->redirectToRoute('show_dashboard');

            
        }

        return $this->render("admin/form/category.html.twig",[
            'form' => $form->createView(),
            'category' => $categorie   

        ]);
        /**
         * @Route("archiver-une-categorie/{id}", name="soft_delete_category", methods={"GET"})
         */
        public function softDeleteCategory(Category $category, EntityManagerInterface $entityManager): RedirectResponse
        {
                $category->setDeletedAt(new DateTme());

                $entityManager->persist($category);
                $entityManager->flush();

                $this->addFlash('success', 'la catégorie a bien été archivée');
                return $this->redirectToRoute('show_dashboard');
        }

        public function restoreCategory(Category $category, EntityManagerInterface $entityManager): RedirectResponse
        {
            $category->setDeletedAt(new DateTme());

            $entityManager->persist($category);
            $entityManager->flush();

            $this->addFlash('success', 'la catégorie a bien été restaurée');
            return $this->redirectToRoute('show_dashboard');
        }
        /**
         * 
         */
        public function hardDeleteCategory(Category $category, EntityManagerInterface $entityManager): RedirectResponse
        {
            $entityManager->remove($category);
            $entityManager->flush();

            $this->addFlash('success', 'la catégorie a bien été supprimée définitivement de la base');
            return $this-redirectToR
        }
   }