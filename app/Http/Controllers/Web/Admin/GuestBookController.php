<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreGuestBookRequest;
use App\Interfaces\GuestBookRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class GuestBookController extends Controller
{

    private GuestBookRepositoryInterface $guestbookRepository;

    public function __construct(GuestBookRepositoryInterface $guestbookRepository)
    {
        $this->guestbookRepository = $guestbookRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guestbooks = $this->guestbookRepository->getAllGuestBooks();

        return view('pages.admin.guest-books.index', compact('guestbooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.guest-books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuestBookRequest $request)
    {
        try {
            $this->guestbookRepository->createGuestBook($request->all());

            Swal::toast('Data berhasil ditambahkan', 'success');

            if (auth()->user()->hasRole('admin')) {
                return redirect()->route('admin.guestbooks.index');
            } elseif (auth()->user()->hasRole('petugas')) {
                return redirect()->route('petugas.guestbooks.index');
            }
        } catch (\Exception $e) {
            Swal::error('Gagal', 'Buku tamu gagal ditambahkan');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->guestbookRepository->deleteGuestBook($id);

            Swal::toast('Data berhasil dihapus', 'success');

            if (auth()->user()->hasRole('admin')) {
                return redirect()->route('admin.guestbooks.index');
            } elseif (auth()->user()->hasRole('petugas')) {
                return redirect()->route('petugas.guestbooks.index');
            }
        } catch (\Exception $e) {
            Swal::error('Gagal', 'Buku tamu gagal dihapus');

            return redirect()->back()->withInput();
        }
    }
}
