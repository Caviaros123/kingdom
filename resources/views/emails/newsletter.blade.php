@component('mail::message')
# Félicitations 


Vous êtes désormais abonnés à #Emerkhammaat.com,<br>
vous recevrez une notification, une fois que notre site internet sera disponible<br>
<br><br>

Vous pouvez aussi nous suivre sur notre chaine YouTube
@component('mail::button', ['url' => 'https://www.youtube.com/channel/UCxDijQsyT7Xp_Z3fGpgNOjQ', 'color' => 'success'])
Abonnez vous
@endcomponent

Merci<br>
{{ config('app.name') }}
@endcomponent
