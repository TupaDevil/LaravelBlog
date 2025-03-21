<?php

namespace App\Services\Friend;
use App\Models\Friend;

class Service {
    public function store ($data) {
        $perks = $data['perks'] ?? [];
        unset($data['perks']);

        $friend = Friend::create($data);
        $friend->perks()->attach($perks, ['created_at' => now()]);
    }

    public function update ($friend, $data) {
        $perks = $data['perks'];
        unset($data['perks']);
        
        $friend -> update($data);
        $friend->perks()->sync($perks);
    }
}