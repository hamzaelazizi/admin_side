<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;

class EnsatLab extends Mailable

{

    use Queueable, SerializesModels;

    /**

     * The user instance.

     *

     * @var Order

     */

    public $password;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct(String $password)

    {

        $this->password = $password;

    }

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {

        return $this->view('emails.email');

    }

}