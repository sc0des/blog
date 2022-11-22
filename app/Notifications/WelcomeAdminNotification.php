<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeAdminNotification extends Notification
{
    use Queueable;

    public $new_user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($new_user)
    {
        //
        $this->new_user = $new_user;
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
                    ->subject('Alert: New User ')
                    ->greeting('Dear '.$notifiable->name.',')
                    ->line('This a notifcation that a new user is joined on our blog platform')
                    ->action(' Check out new profile ', url(route('users.show', $this->new_user->id)))
                    ->line('Thank you for using our application!')
                    ->salutation('Kind Regards , Writups Team ');
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
