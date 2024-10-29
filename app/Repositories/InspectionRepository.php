<?php


namespace App\Repositories;

use App\Inspection;

class InspectionRepository
{
    public function all()
    {
        return Inspection::all();
    }

    public function find($id)
    {
        return Inspection::findOrFail($id);
    }

    public function create(array $data)
    {
        return Inspection::create($data);
    }

    public function update($id, array $data)
    {
        $inspection = $this->find($id);
        $inspection->update($data);

        return $inspection;
    }

    public function delete($id)
    {
        $inspection = $this->find($id);

        return $inspection->delete();
    }
}
