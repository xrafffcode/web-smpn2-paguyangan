<?php

namespace App\Repositories;

use App\Interfaces\GuestBookRepositoryInterface;
use App\Models\GuestBook;

class GuestBookRepository implements GuestBookRepositoryInterface
{
    public function getAllGuestBooks()
    {
        return GuestBook::all();
    }

    public function getGuestBookById(string $id)
    {
        return GuestBook::find($id);
    }

    public function createGuestBook(array $data)
    {
        return GuestBook::create($data);
    }

    public function updateGuestBook(array $data, string $id)
    {
        return GuestBook::find($id)->update($data);
    }

    public function deleteGuestBook(string $id)
    {
        return GuestBook::find($id)->delete();
    }
}
