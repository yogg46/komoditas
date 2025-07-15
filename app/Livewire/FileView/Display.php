<?php

namespace App\Livewire\FileView;

use Livewire\Component;

class Display extends Component
{
    public function displayFileBe($path, $filename)
    {
        $url = storage_path('app/' . $path . '/' . $filename);
        return response()->file($url);
    }

    public function displayFileFe($path, $filename)
    {
        $url = storage_path('app/' . $path . '/' . $filename);
        return response()->file($url);
    }

    public function downloadFile($path, $filename)
    {
        $url = storage_path('app/' . $path . '/' . $filename);
        return response()->download($url);
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            {{-- If your happiness depends on money, you will never be happy with yourself. --}}
        </div>
        HTML;
    }
}
