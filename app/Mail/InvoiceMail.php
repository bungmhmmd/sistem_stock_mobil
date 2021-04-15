<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\DataPenjualan;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data_penjualan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(DataPenjualan $data_penjualan)
    {
        $this->data_penjualan = $data_penjualan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Invoice')
            ->view('emails.invoice_mail')
            ->with([
                'data_penjualan' => $this->data_penjualan
            ]);
    }
}
