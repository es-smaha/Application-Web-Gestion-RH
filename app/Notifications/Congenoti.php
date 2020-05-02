<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Demandeconge;
use Illuminate\Notifications\Messages\MailMessage;

class Congenoti extends Notification
{
    use Queueable;

    public $conge;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($conge)
    {
        $this->conge = $conge;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('hello','Admin')
                    ->subject('Nouvelle demande de conge est besoin de traitement')
                    ->line('Nouvelle demande de conge de ' .$this->conge->user->name .' est en attente.' )
                    ->line('Pour approuver cliquer sur le boutton "View" ')
                    
                    ->action('View', url('/demande-conge'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
