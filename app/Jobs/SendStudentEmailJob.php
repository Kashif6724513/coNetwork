<?php

namespace App\Jobs;

use Log;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentNotificationMail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendStudentEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $student;

    public function __construct($student)
    {
        $this->student = $student;
    }

    public function handle()
    {
        if (!$this->student) {
            Log::error('Email sending failed: Student object is null.');
            return;
        }

        // Trim and validate email
        $email = trim($this->student->student->email);
        if (empty($email)) {
            Log::error("Email missing for Student ID: {$this->student->id}. Email value: '{$this->student->email}'");
            return;
        }

        try {
            Mail::to($email)
                ->send(new StudentNotificationMail($this->student));
        } catch (\Throwable $e) {
            Log::error("Email failed for {$email}: {$e->getMessage()}");
            $this->fail($e);
        }
    }
}

