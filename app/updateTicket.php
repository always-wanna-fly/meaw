<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class updateTicket extends Model
{
    public function updateTicket($data)
    {
        $ticket = $this->find($data['id']);
        $ticket->user_id = auth()->user()->id;
        $ticket->title = $data['title'];
        $ticket->description = $data['description'];
        $ticket->save();
        return 1;
    }

}
