<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewPostAdded extends Notification
{
    use Queueable;

    public $new_posts;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($new_posts)
    {
        //
        $this->new_posts = $new_posts;
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
                    ->subject('Incoming blogs')
                    ->greeting('Dear '.$notifiable->name.',')
                    ->line('New blog published ')
                    ->action('Read latest posts ', url(route('posts.index')))
                    ->line('Thank you for using our platform!')
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
