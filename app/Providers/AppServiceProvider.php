<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\HtmlString;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // You can add any necessary registrations here if needed
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Customizing the email verification message
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new \Illuminate\Notifications\Messages\MailMessage)
                ->subject('Verify Your Email Address')
                ->line('Click the button below to verify your email address.')
                ->action('Verify Email', $url)
                ->salutation(new HtmlString('Best regards,<br>Musyrif'));
        });
    }
}
