<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\WebConfigurationRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class WebConfigurationController extends Controller
{
    private WebConfigurationRepositoryInterface $webconfigurationRepository;

    public function __construct(WebConfigurationRepositoryInterface $webconfigurationRepository)
    {
        $this->webconfigurationRepository = $webconfigurationRepository;
    }

    public function index()
    {
        $webConfiguration = $this->webconfigurationRepository->getWebConfiguration();

        return view('pages.admin.website-management.web-configuration.index', compact('webConfiguration'));
    }


    public function update(Request $request)
    {
        try {
            $this->webconfigurationRepository->updateWebConfiguration($request->all());

            Swal::toast('Data berhasil diupdate', 'success');

            return redirect()->route('admin.web-configuration');
        } catch (\Exception $e) {
            Swal::toast($e->getMessage(), 'error');

            return redirect()->route('admin.web-configuration');
        }
    }
}
