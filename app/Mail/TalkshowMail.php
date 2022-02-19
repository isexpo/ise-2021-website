<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class TalkshowMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = '<p><b>Hai ' . Auth::user()->name . '</b></p>';
        $message .= '<p>Terimakasih telah mendaftar <b>ICON Grand Talkshow pada tanggal 7 November 2021</b>. Informasi selanjutnya akan diinformasikan menjelang acara dimulai. </p>';
        $message .= '<p>Sembari menunggu pelaksanaan ICON Grand Talkshow, kamu dapat mengikuti rangkaian acara lain di ICON 2021 seperti:</p>';
        $message .= '<ol>
<li><p><b>ICON Virtual Intern and Job Fair</b>, kamu berkesempatan untuk magang hingga bekerja full time dengan perushaan yang bermitra dengan kami. Kamu dapat mulai berpartisipasi pada tanggal 31 Oktober - 7 November 2021.</p></li>
<li><p><b>E-Hall Of IS</b>, pameran karya mahasiswa dan alumni Sistem Intormasi ITS dan juga kuis berhadiah menarik di website ISE. Kamu dapat mulai berpartisipasi pada tanggal  9 Oktober - 7 November 2021.</p></li>
</ol>';
        $message .= '<p>Seluruh rangkaian acara tersebut bisa kamu ikuti secara gratis!</p>';
        $message .= '<p>Informasi Lebih Lanjut Melalui Sosial Media ISE! 2021:<br/>
Instagram : @is_expo<br/>
Twitter : @is_expo<br/>
Whatsapp Center ICON : 0877 5550 8283<br/>
</p>
';
        $message .= '<p><b>Best Regards,</b><br/>
<b>ISE 2021</b><br/>
<b>One Aim, One Goal, One ISE!</b> </p>';
        return $this->subject('Pendaftaran ICON Grand Talkshow Berhasil!')->from('admin@ise-its.com', config('app.name'))->markdown('vendor.mail.text.message',
            ['slot' => $message
            ]);
    }
}
