<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationList extends Component
{
    public $total;
    public $notifications;

    public function mount()
    {
        $notifications = auth()->user()->notifications;
        $this->total = $notifications->count();
    }

    public function render()
    {
        return view('livewire.notification-list', [
            'total' => $this->total,
            'notifications' => $this->notifications
        ]);
    }
}
