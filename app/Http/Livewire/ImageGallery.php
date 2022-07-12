<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImageGallery extends Component
{

	public $imageUrl;
	public $showImage;

	public function mount(){
		$this->imageUrl = '';
		$this->showImage = false;
	}

    public function render()
    {
        return view('livewire.image-gallery');
    }
}
