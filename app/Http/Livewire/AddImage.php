<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddImage extends Component
{
    public $image, $name, $cid;
    public Gallery $gallery;
    use WithFileUploads;

    public  function setName()
    {
        $this->name = $this->gallery->name;
    }

    public function addImage()
    {
        $done = $this->gallery->addMedia($this->image->getRealPath())
            ->usingName($this->image->getClientOriginalName())
            ->toMediaCollection('galleries');
        $this->image = '';
        if ($done) {
            session()->flash('success', 'Image Added to event');
            $this->image = null;
        }
    }

    function removeImage($index)
    {

        $done = $this->gallery->getMedia('galleries')[$index]->delete();
        if ($done) {
            return redirect()->back()->with('success', 'Image removed successfully from collection of event, kindly refresh the page to see the changes');
            $this->image = null;
        }
    }

    public function update($id)
    {
        $gallery = Gallery::findOrFail($id);
        $data =  $this->validate(['name' => 'required']);
        $done = $gallery->update($data);

        if ($done) {
            redirect()->back()->with('success', 'Title Updated Successfully');
        }
    }




    public function render()
    {
        return view('livewire.add-image');
    }
}