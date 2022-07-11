<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Galleries extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $name, $image, $new, $perPage = 24;
    public $showForm = false;

    function toggle()
    {
        $this->showForm = true;
    }

    protected $rules = [
        'name' => 'required|min:15',
        'image' => 'nullable',
    ];

    function refreshInputs()
    {
        $this->image = null;
        $this->new = null;
        $this->name = '';
        $this->form = false;
    }

    public function save()
    {
        $data = $this->validate();
        $saved = Gallery::create($data);
        $saved = $saved->addMedia($this->image->getRealPath())
            ->usingName($this->image->getClientOriginalName())
            ->toMediaCollection('galleries');
        $this->refreshInputs();
        session()->flash('success', 'Events recorded succesfully');
    }
    // add new image to gallery
    public function addImage(Gallery $gallery)
    {
        $done = $gallery->addMedia($this->new->getRealPath())
            ->usingName($this->new->getClientOriginalName())
            ->toMediaCollection('galleries');
        if ($done) {
            session()->flash('success', 'Image Added to event');
            $this->refreshInputs();
        }
    }

    public function delete(Gallery $gallery)
    {
        $done = $gallery->delete();
        if ($done) {
            session()->flash('success', 'Gallery deleted Successfully');
        }
    }

    public function render()
    {
        $galleries = Gallery::paginate($this->perPage);
        return view('livewire.galleries', compact(['galleries']));
    }
}