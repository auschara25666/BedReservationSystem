<?php

namespace App\Http\Controllers;

use App\Mail\Mail as sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $title = 'ยืนยันการสมัครใช้งานระบบจองเตียง วอร์ด3จ โรงพยาบาลศรีนครินทร์';
        $user_detail = [
            'name' => 'user1',
            'address' => 'kku',
            'phone' => '12312313',
            'email' => 'papoo25666@gmail.com'
        ];

        $sendmail = Mail::to($user_detail['email'])->send(new sendMail($title, $user_detail));

        if (empty($sendmail)) {
            return response()->json(['message' => 'Mail Sent Sucssfully'], 200);
        } else {
            return response()->json(['message' => 'Mail Sent fail'], 400);
        }
    }
}
