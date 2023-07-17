<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NuevoInteresado extends Notification
{
    use Queueable;

	private $id_carrera;
	private $nombre_carrera;
	private $usuario_id;

	public function __construct($id_carrera, $nombre_carrera, $usuario_id)
	{
        $this->id_carrera = $id_carrera;
		$this->nombre_carrera = $nombre_carrera;
		$this->usuario_id = $usuario_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/notificaciones');


		
		return (new MailMessage)
                    ->line('Has recibido un nuevo interesado en ' . $this->nombre_carrera)
					->action('Ver Interesado', $url)
                    ->line('Cosmopolita Educa');
    }


	//almacenar en bd
	public function toDatabase($notifiable)
	{
		return [
			'id_carrera' => $this->id_carrera,
			'nombre_carrera' => $this->nombre_carrera,
			'usuario_id' => $this->usuario_id
		];
	}
}
