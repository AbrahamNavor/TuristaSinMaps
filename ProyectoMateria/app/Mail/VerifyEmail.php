<?php

namespace App\Mail;

use App\Models\registro;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $registro;

    public function __construct(registro $registro)
    {
        $this->registro = $registro;
    }

    public function build()
    {
        return $this->subject('Confirma tu registro')
            ->view('emails.verify-email')
            ->with(['registro' => $this->registro]);
    }
}
