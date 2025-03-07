<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudentNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $student;

    public function __construct($student)
    {
        $this->student = $student;
    }

    public function build()
    {
        return $this->to($this->student->email)
            ->subject('Your Subject Here')
            ->view('emails.student-notification')
            ->with(['student' => $this->student]);
    }
}
