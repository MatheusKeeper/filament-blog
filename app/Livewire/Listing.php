<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    use WithPagination;

    public int $perPage = 10;

    #[On('load-posts')]
    public function loadMore(): void
    {
        $this->perPage += 5;
    }

    public function render(): View
    {
        return view('livewire.listing', [
            'posts' => Post::query()
                ->latest()
                ->paginate($this->perPage),
        ]);
    }
}
