<?php

// CustomCollection.php

namespace App;

use Illuminate\Support\Collection;

class CustomCollection extends Collection 
{
    public function gotAllUsers()
    {
    dd($this->items);
    }
}