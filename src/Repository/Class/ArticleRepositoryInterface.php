<?php
namespace Mazed\DesignPatterns\Repository\Class;

interface ArticleRepositoryInterface
{
    public function findById($id);
    public function findAll(): array;
    public function save(): bool;
    public function delete(): bool;
}
