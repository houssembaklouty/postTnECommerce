<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategorysRequest;
use App\Http\Requests\UpdateCategorysRequest;
use App\Repositories\CategorysRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategorysController extends AppBaseController
{
    /** @var  CategorysRepository */
    private $categorysRepository;

    public function __construct(CategorysRepository $categorysRepo)
    {
        $this->categorysRepository = $categorysRepo;
    }

    /**
     * Display a listing of the Categorys.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categorys = $this->categorysRepository->paginate(10);

        return view('categorys.index')
            ->with('categorys', $categorys);
    }

    /**
     * Show the form for creating a new Categorys.
     *
     * @return Response
     */
    public function create()
    {
        return view('categorys.create');
    }

    /**
     * Store a newly created Categorys in storage.
     *
     * @param CreateCategorysRequest $request
     *
     * @return Response
     */
    public function store(CreateCategorysRequest $request)
    {
        $input = $request->all();

        $categorys = $this->categorysRepository->create($input);

        Flash::success('Categorys saved successfully.');

        return redirect(route('categorys.index'));
    }

    /**
     * Display the specified Categorys.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categorys = $this->categorysRepository->find($id);

        if (empty($categorys)) {
            Flash::error('Categorys not found');

            return redirect(route('categorys.index'));
        }

        return view('categorys.show')->with('categorys', $categorys);
    }

    /**
     * Show the form for editing the specified Categorys.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categorys = $this->categorysRepository->find($id);

        if (empty($categorys)) {
            Flash::error('Categorys not found');

            return redirect(route('categorys.index'));
        }

        return view('categorys.edit')->with('categorys', $categorys);
    }

    /**
     * Update the specified Categorys in storage.
     *
     * @param int $id
     * @param UpdateCategorysRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategorysRequest $request)
    {
        $categorys = $this->categorysRepository->find($id);

        if (empty($categorys)) {
            Flash::error('Categorys not found');

            return redirect(route('categorys.index'));
        }

        $categorys = $this->categorysRepository->update($request->all(), $id);

        Flash::success('Categorys updated successfully.');

        return redirect(route('categorys.index'));
    }

    /**
     * Remove the specified Categorys from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categorys = $this->categorysRepository->find($id);

        if (empty($categorys)) {
            Flash::error('Categorys not found');

            return redirect(route('categorys.index'));
        }

        $this->categorysRepository->delete($id);

        Flash::success('Categorys deleted successfully.');

        return redirect(route('categorys.index'));
    }
}
