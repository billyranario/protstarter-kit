<?php

namespace Billyranario\ProstarterKit\App\Repositories\Contracts;

use App\Models\User;

interface UserRepositoryInterface
{
    /**
     * Find a user by id
     *
     * @param int $id
     * @return User|null
     */
    public function findById(int $id): ?User;

    /**
     * Find a user by email address
     *
     * @param string $email
     * @return User|null
     */
    public function findByEmail(string $email): ?User;

    /**
     * Create a new user
     *
     * @param array $data
     * @return User|bool
     */
    public function create(array $data): User|bool;

    /**
     * Update a user
     *
     * @param array $data
     * @param int $id
     * @return User|bool
     */
    public function update(array $data, int $id): User|bool;

    /**
     * Delete a user by id
     *
     * @param int $id
     * @return bool|null
     */
    public function delete(int $id): bool|null;
}
