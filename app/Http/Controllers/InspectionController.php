<?php

namespace App\Http\Controllers;

use App\Http\Requests\InspectionRequest;
use App\Repositories\InspectionRepository;
use Illuminate\Support\Facades\Log;

class InspectionController extends Controller
{
    protected $inspectionRepository;

    public function __construct(InspectionRepository $inspectionRepository)
    {
        $this->inspectionRepository = $inspectionRepository;
    }

    public function index()
    {
        $inspections = $this->inspectionRepository->all();

        return view('pages.index', compact('inspections'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(InspectionRequest $request)
    {
        $this->inspectionRepository->create($request->validated());

        return redirect()->route('pages.index')->with('success', __('messages.success_store'));
    }

    /*public function show($id)
    {
        $inspection = $this->inspectionRepository->find($id);

        return view('pages.show', compact('inspection'));
    }*/

    public function edit($id)
    {
        $inspection = $this->inspectionRepository->find($id);

        return view('pages.edit', compact('inspection'));
    }

    public function update(InspectionRequest $request, $id)
    {
        $this->inspectionRepository->update($id, $request->validated());

        return redirect()->route('pages.index')->with('success', __('messages.success_update'));
    }

    public function destroy($id)
    {
        $this->inspectionRepository->delete($id);

        return redirect()->route('pages.index')->with('success', __('messages.success_delete'));
    }
}
