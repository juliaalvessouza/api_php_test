<?php
namespace App\Jobs;

use App\Models\Post;
use App\Mail\PostCreated; // Caso esteja usando Mailable para enviar e-mails
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendPostNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $post;

    /**
     * Crie uma nova instância de Job.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Execute o trabalho.
     *
     * @return void
     */
    public function handle()
    {
        // Aqui você pode fazer o que for necessário
        // Por exemplo, enviar um e-mail após a criação de um post
        Mail::to('example@example.com')->send(new PostCreated($this->post));
    }
}
