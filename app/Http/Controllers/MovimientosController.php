<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovimientosRequest;
use App\Http\Requests\UpdateMovimientosRequest;
use App\Repositories\MovimientosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MovimientosController extends AppBaseController
{
    /** @var MovimientosRepository $movimientosRepository*/
    private $movimientosRepository;

    public function __construct(MovimientosRepository $movimientosRepo)
    {
        $this->movimientosRepository = $movimientosRepo;
    }

    /**
     * Display a listing of the Movimientos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $movimientos = $this->movimientosRepository->all();

        return view('movimientos.index')
            ->with('movimientos', $movimientos);
    }

    /**
     * Show the form for creating a new Movimientos.
     *
     * @return Response
     */
    public function create()
    {
        return view('movimientos.create');
    }

    /**
     * Store a newly created Movimientos in storage.
     *
     * @param CreateMovimientosRequest $request
     *
     * @return Response
     */
    public function store(CreateMovimientosRequest $request)
    {
        $input = $request->all();

        $movimientos = $this->movimientosRepository->create($input);

        Flash::success('Movimientos saved successfully.');

        return redirect(route('movimientos.index'));
    }

    /**
     * Display the specified Movimientos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $movimientos = $this->movimientosRepository->find($id);

        if (empty($movimientos)) {
            Flash::error('Movimientos not found');

            return redirect(route('movimientos.index'));
        }

        return view('movimientos.show')->with('movimientos', $movimientos);
    }

    /**
     * Show the form for editing the specified Movimientos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $movimientos = $this->movimientosRepository->find($id);

        if (empty($movimientos)) {
            Flash::error('Movimientos not found');

            return redirect(route('movimientos.index'));
        }

        return view('movimientos.edit')->with('movimientos', $movimientos);
    }

    /**
     * Update the specified Movimientos in storage.
     *
     * @param int $id
     * @param UpdateMovimientosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMovimientosRequest $request)
    {
        $movimientos = $this->movimientosRepository->find($id);

        if (empty($movimientos)) {
            Flash::error('Movimientos not found');

            return redirect(route('movimientos.index'));
        }

        $movimientos = $this->movimientosRepository->update($request->all(), $id);

        Flash::success('Movimientos updated successfully.');

        return redirect(route('movimientos.index'));
    }

    /**
     * Remove the specified Movimientos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $movimientos = $this->movimientosRepository->find($id);

        if (empty($movimientos)) {
            Flash::error('Movimientos not found');

            return redirect(route('movimientos.index'));
        }

        $this->movimientosRepository->delete($id);

        Flash::success('Movimientos deleted successfully.');

        return redirect(route('movimientos.index'));
    }
}
