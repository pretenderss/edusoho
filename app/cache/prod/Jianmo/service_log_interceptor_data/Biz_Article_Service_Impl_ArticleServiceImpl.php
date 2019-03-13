<?php 
 return array (
  'getArticle' => 
  array (
  ),
  'getArticlePrevious' => 
  array (
  ),
  'getArticleNext' => 
  array (
  ),
  'getArticleByAlias' => 
  array (
  ),
  'findAllArticles' => 
  array (
  ),
  'findArticlesByIds' => 
  array (
  ),
  'findArticlesByCategoryIds' => 
  array (
  ),
  'findArticlesCount' => 
  array (
  ),
  'searchArticles' => 
  array (
  ),
  'countArticles' => 
  array (
  ),
  'createArticle' => 
  array (
    'module' => 'article',
    'action' => 'create',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'article',
    ),
    'service' => 'Article:ArticleService',
  ),
  'updateArticle' => 
  array (
    'module' => 'article',
    'action' => 'update',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'article',
    ),
    'service' => 'Article:ArticleService',
  ),
  'batchUpdateOrg' => 
  array (
  ),
  'hitArticle' => 
  array (
  ),
  'getArticleLike' => 
  array (
  ),
  'setArticleProperty' => 
  array (
    'module' => 'article',
    'action' => 'update_property',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getArticle',
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'property',
    ),
    'service' => 'Article:ArticleService',
  ),
  'cancelArticleProperty' => 
  array (
    'module' => 'article',
    'action' => 'cancel_property',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getArticle',
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'property',
    ),
    'service' => 'Article:ArticleService',
  ),
  'trashArticle' => 
  array (
    'module' => 'article',
    'action' => 'trash',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getArticle',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'Article:ArticleService',
  ),
  'deleteArticle' => 
  array (
  ),
  'deleteArticlesByIds' => 
  array (
  ),
  'removeArticlethumb' => 
  array (
    'module' => 'article',
    'action' => 'removeThumb',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getArticle',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'Article:ArticleService',
  ),
  'like' => 
  array (
  ),
  'cancelLike' => 
  array (
  ),
  'viewArticle' => 
  array (
  ),
  'count' => 
  array (
  ),
  'publishArticle' => 
  array (
    'module' => 'article',
    'action' => 'publish',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getArticle',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'Article:ArticleService',
  ),
  'unpublishArticle' => 
  array (
    'module' => 'article',
    'action' => 'unpublish',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getArticle',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'Article:ArticleService',
  ),
  'changeIndexPicture' => 
  array (
  ),
  'findPublishedArticlesByTagIdsAndCount' => 
  array (
  ),
  'findRelativeArticles' => 
  array (
  ),
);