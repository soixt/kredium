<?php

namespace App\Traits;

use App\Models\Adviser;

trait CanUserEdit {
    public function editable (Adviser $adviser) : bool {
        return $this->adviser_id === $adviser->id;
    }
}