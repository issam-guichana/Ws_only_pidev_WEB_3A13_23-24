<?php 
namespace App\Notification;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class CustomEmailNotification
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmailNotification(string $recipientEmail, string $subject, string $htmlFilePath): void
    {

        $htmlContent = file_get_contents($htmlFilePath);
        $email = (new Email())
            ->from('rahma.sakkat@etudiant-isi.utm.tn')
            ->to($recipientEmail)
            ->subject($subject)
            ->html($htmlContent);

        $this->mailer->send($email);
    }
}