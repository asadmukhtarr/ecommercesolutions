<?php

namespace App\Livewire;
use App\Models\School;
use Livewire\Component;

class SchoolCrud extends Component
{
     public $school_name, $address, $contact, $principal_name, $school_id;

    public function render()
    {
        return view('livewire.school-crud', [
            'schools' => School::latest()->get()
        ]);
    }

    public function store()
    {
        $this->validate([
            'school_name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'principal_name' => 'required',
        ]);

        School::create([
            'school_name' => $this->school_name,
            'address' => $this->address,
            'contact' => $this->contact,
            'principal_name' => $this->principal_name,
        ]);

        $this->resetFields();
    }

    public function edit($id)
    {
        $school = School::findOrFail($id);

        $this->school_id = $school->id;
        $this->school_name = $school->school_name;
        $this->address = $school->address;
        $this->contact = $school->contact;
        $this->principal_name = $school->principal_name;
    }

    public function update()
    {
        $school = School::findOrFail($this->school_id);

        $school->update([
            'school_name' => $this->school_name,
            'address' => $this->address,
            'contact' => $this->contact,
            'principal_name' => $this->principal_name,
        ]);

        $this->resetFields();
    }

    public function delete($id)
    {
        School::findOrFail($id)->delete();
    }

    public function resetFields()
    {
        $this->school_name = '';
        $this->address = '';
        $this->contact = '';
        $this->principal_name = '';
        $this->school_id = null;
    }
}
