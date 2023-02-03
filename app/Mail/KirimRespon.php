<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
class KirimRespon extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $respon = $this->data_user['nama'];
        $user = $this->user;
        return $this->markdown('emails.sites.respon', compact('user'));
        // ->attach($this->user["respon_data"]->getRealPath(),[
        //     'as' => $this->user["respon_data"]->getClientOriginalName(),
        // ]);
    }
}
