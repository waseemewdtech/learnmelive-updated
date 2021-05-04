<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = "chats";
	protected $fillable = ['sender_id','reciever_id','sender_reciever','name', 'content', 'ip', 'type'];
}
