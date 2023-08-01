<?php
namespace Mazed\DesignPatterns\Repository\Class;

use Mazed\DesignPatterns\Repository\Class\Article;

class BlogApplication
{
    private $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function getArticle($id): ?Article
    {
        return $this->articleRepository->findById($id);
    }

    public function getAllArticles(): array
    {
        return $this->articleRepository->findAll();
    }

    public function createArticle($title, $content)
    {
        $article = new Article();
        $article->title = $title;
        $article->content = $content;
        $this->articleRepository->save($article);

        return $article;
    }
}
