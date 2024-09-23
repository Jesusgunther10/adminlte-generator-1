<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstacionamientoRequest;
use App\Http\Requests\UpdateEstacionamientoRequest;
use App\Repositories\EstacionamientoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EstacionamientoController extends AppBaseController
{
    /** @var EstacionamientoRepository $estacionamientoRepository*/
    private $estacionamientoRepository;

    public function __construct(EstacionamientoRepository $estacionamientoRepo)
    {
        $this->estacionamientoRepository = $estacionamientoRepo;
    }

    /**
     * Display a listing of the Estacionamiento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $estacionamientos = $this->estacionamientoRepository->all();

        return view('estacionamientos.index')
            ->with('estacionamientos', $estacionamientos);
    }

    /**
     * Show the form for creating a new Estacionamiento.
     *
     * @return Response
     */
    public function create()
    {
        return view('estacionamientos.create');
    }

    /**
     * Store a newly created Estacionamiento in storage.
     *
     * @param CreateEstacionamientoRequest $request
     *
     * @return Response
     */
    public function store(CreateEstacionamientoRequest $request)
    {
        $input = $request->all();

        $estacionamiento = $this->estacionamientoRepository->create($input);

        Flash::success('Estacionamiento saved successfully.');

        return redirect(route('estacionamientos.index'));
    }

    /**
     * Display the specified Estacionamiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estacionamiento = $this->estacionamientoRepository->find($id);

        if (empty($estacionamiento)) {
            Flash::error('Estacionamiento not found');

            return redirect(route('estacionamientos.index'));
        }

        return view('estacionamientos.show')->with('estacionamiento', $estacionamiento);
    }

    /**
     * Show the form for editing the specified Estacionamiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estacionamiento = $this->estacionamientoRepository->find($id);

        if (empty($estacionamiento)) {
            Flash::error('Estacionamiento not found');

            return redirect(route('estacionamientos.index'));
        }

        return view('estacionamientos.edit')->with('estacionamiento', $estacionamiento);
    }

    /**
     * Update the specified Estacionamiento in storage.
     *
     * @param int $id
     * @param UpdateEstacionamientoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstacionamientoRequest $request)
    {
        $estacionamiento = $this->estacionamientoRepository->find($id);

        if (empty($estacionamiento)) {
            Flash::error('Estacionamiento not found');

            return redirect(route('estacionamientos.index'));
        }

        $estacionamiento = $this->estacionamientoRepository->update($request->all(), $id);

        Flash::success('Estacionamiento updated successfully.');

        return redirect(route('estacionamientos.index'));
    }

    /**
     * Remove the specified Estacionamiento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estacionamiento = $this->estacionamientoRepository->find($id);

        if (empty($estacionamiento)) {
            Flash::error('Estacionamiento not found');

            return redirect(route('estacionamientos.index'));
        }

        $this->estacionamientoRepository->delete($id);

        Flash::success('Estacionamiento deleted successfully.');

        return redirect(route('estacionamientos.index'));
    }
}
