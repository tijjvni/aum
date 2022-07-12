<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImageViewer extends Component
{
	public $url;
    protected $listeners = ['changeImage' => 'newImageUrl'];

	public function mount($url = 'http://aum.test/img/gallery/2.jpeg'){
		$this->url = $url;
	} 

    public function closeImage()
    {
        return redirect()->to('/events');
	}

    public function render()
    {
        return view('livewire.image-viewer');
    }
}
