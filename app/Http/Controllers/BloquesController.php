<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBloquesRequest;
use App\Http\Requests\UpdateBloquesRequest;
use App\Repositories\BloquesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BloquesController extends AppBaseController
{
    /** @var BloquesRepository $bloquesRepository*/
    private $bloquesRepository;

    public function __construct(BloquesRepository $bloquesRepo)
    {
        $this->bloquesRepository = $bloquesRepo;
    }

    /**
     * Display a listing of the Bloques.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bloques = $this->bloquesRepository->all();

        return view('bloques.index')
            ->with('bloques', $bloques);
    }

    /**
     * Show the form for creating a new Bloques.
     *
     * @return Response
     */
    public function create()
    {
        return view('bloques.create');
    }

    /**
     * Store a newly created Bloques in storage.
     *
     * @param CreateBloquesRequest $request
     *
     * @return Response
     */
    public function store(CreateBloquesRequest $request)
    {
        $input = $request->all();

        $bloques = $this->bloquesRepository->create($input);

        Flash::success('Bloques saved successfully.');

        return redirect(route('bloques.index'));
    }

    /**
     * Display the specified Bloques.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bloques = $this->bloquesRepository->find($id);

        if (empty($bloques)) {
            Flash::error('Bloques not found');

            return redirect(route('bloques.index'));
        }

        return view('bloques.show')->with('bloques', $bloques);
    }

    /**
     * Show the form for editing the specified Bloques.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bloques = $this->bloquesRepository->find($id);

        if (empty($bloques)) {
            Flash::error('Bloques not found');

            return redirect(route('bloques.index'));
        }

        return view('bloques.edit')->with('bloques', $bloques);
    }

    /**
     * Update the specified Bloques in storage.
     *
     * @param int $id
     * @param UpdateBloquesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBloquesRequest $request)
    {
        $bloques = $this->bloquesRepository->find($id);

        if (empty($bloques)) {
            Flash::error('Bloques not found');

            return redirect(route('bloques.index'));
        }

        $bloques = $this->bloquesRepository->update($request->all(), $id);

        Flash::success('Bloques updated successfully.');

        return redirect(route('bloques.index'));
    }

    /**
     * Remove the specified Bloques from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bloques = $this->bloquesRepository->find($id);

        if (empty($bloques)) {
            Flash::error('Bloques not found');

            return redirect(route('bloques.index'));
        }

        $this->bloquesRepository->delete($id);

        Flash::success('Bloques deleted successfully.');

        return redirect(route('bloques.index'));
    }
}
