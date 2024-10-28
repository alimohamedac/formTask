<?php

namespace App\Http\Controllers;

use App\Repositories\InspectionRepository;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $data = $request->validate([
            'work_order_no' => 'required|string',
            'date' => 'required|date',
            'customer_name' => 'required|string',
            'project' => 'required|string',
            'shape' => 'required|string',
            'visual_check' => 'boolean',
            'color_match' => 'boolean',
            'coating_thickness' => 'boolean',
        ]);

        $this->inspectionRepository->create($data);

        return redirect()->route('pages.index')->with('success', 'Inspection created successfully.');
    }

    public function show($id)
    {
        $inspection = $this->inspectionRepository->find($id);

        return view('pages.show', compact('inspection'));
    }

    public function edit($id)
    {
        $inspection = $this->inspectionRepository->find($id);

        return view('pages.edit', compact('inspection'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'work_order_no' => 'required|string',
            'date' => 'required|date',
            'customer_name' => 'required|string',
            'project' => 'required|string',
            'shape' => 'required|string',
            'visual_check' => 'boolean',
            'color_match' => 'boolean',
            'coating_thickness' => 'boolean',
        ]);

        $this->inspectionRepository->update($id, $data);

        return redirect()->route('pages.index')->with('success', 'Inspection updated successfully.');
    }

    public function destroy($id)
    {
        $this->inspectionRepository->delete($id);

        return redirect()->route('pages.index')->with('success', 'Inspection deleted successfully.');
    }
}
