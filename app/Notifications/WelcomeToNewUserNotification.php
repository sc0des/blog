<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeToNewUserNotification extends Notification
{
    use Queueable;

    private $posts;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($posts)
    {
        //
        $this->posts = $posts;
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
        //new registered user notifaction email message

        return (new MailMessage)
                    ->subject('Thank you for using our blog')
                    ->line('Welcome to Writeups')
                    ->greeting('Dear '.$notifiable->name.',')
                    ->line('iTS AMAZING that you have joined to our platform blog sevices, you will get amazing posts from amazing writers!')
                    ->action('Read latest posts ', url(route('posts.index')))
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
