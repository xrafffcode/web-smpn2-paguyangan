<?php

namespace App\Interfaces;

interface GuestBookRepositoryInterface
{
    public function getAllGuestBooks();
    public function getGuestBookById(string $id);
    public function createGuestBook(array $data);
    public function updateGuestBook(array $data, string $id);
    public function deleteGuestBook(string $id);
}
