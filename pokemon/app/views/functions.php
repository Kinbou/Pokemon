<?php

/**
 * Retourne tous les articles, sous la forme d'un tableau
 * associatif.
 */
function getArticles() {
    // Le fichier de données
    require 'inc/data.php';

    return $dataArticlesList;
}

function getCategories() {
    require 'inc/data.php';
    return $dataCategoriesList;
}

function getAuthors() {
    require 'inc/data.php';
    return $dataAuthorsList;
}

/**
 * Retourne un article selon l'id demandé
 */
function getArticle($id) {
    // Le fichier de données
    require 'inc/data.php';

    // L'article n'existe-t-il pas ?
    if (!isset($dataArticlesList[$id])) {
        return null;
    }

    return $dataArticlesList[$id];
}

function getAuthorById($id) {
    // Récupérer et retourner le bon auteur (selon son $id).
    // S'il n'existe pas, retourner null.

    // Le fichier de données
    require 'inc/data.php';

    // L'auteur n'existe-t-il pas ?
    if (!isset($dataAuthorsList[$id])) {
        return null;
    }

    return $dataAuthorsList[$id];
}

function getCategoryById($id) {
    require 'inc/data.php';

    if (!isset($dataCategoriesList[$id])) {
        return null;
    }

    return $dataCategoriesList[$id];
}