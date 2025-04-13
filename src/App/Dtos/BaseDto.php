<?php

namespace Billyranario\ProstarterKit\App\Dtos;

class BaseDto
{
    /**
     * @var int|null $id
     * @var int $perPage
     * @var int $page
     * @var string $orderBy
     * @var string $orderDirection
     * @var string $searchKeyword
     * @var array $relations
     */
    private ?int $id = null;
    private int $perPage = 10;
    private string $orderBy = 'created_at';
    private string $orderDirection = 'desc';
    private ?string $searchKeyword = null;
    private array $relations = [];

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param int $perPage
     */
    public function setPerPage(int $perPage): void
    {
        $this->perPage = $perPage;
    }

    /**
     * @param string $orderBy
     */
    public function setOrderBy(string $orderBy): void
    {
        $this->orderBy = $orderBy;
    }

    /**
     * @param string $orderDirection
     */
    public function setOrderDirection(string $orderDirection): void
    {
        $this->orderDirection = $orderDirection;
    }

    /**
     * @param string $searchKeyword
     */
    public function setSearchKeyword(string $searchKeyword): void
    {
        $this->searchKeyword = $searchKeyword;
    }

    /**
     * @param array $relations
     */
    public function setRelations(array $relations): void
    {
        $this->relations = $relations;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @return string
     */
    public function getOrderBy(): string
    {
        return $this->orderBy;
    }

    /**
     * @return string
     */
    public function getOrderDirection(): string
    {
        return $this->orderDirection;
    }

    /**
     * @return string
     */
    public function getSearchKeyword(): ?string
    {
        return $this->searchKeyword;
    }

    /**
     * @return array
     */
    public function getRelations(): array
    {
        return $this->relations;
    }
}
