<x-mail::message>
# New Contact Form Submission

You have received a new message from your website contact form.

**Name:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Message:**  
{{ $data['message'] }}

<x-mail::button :url="'mailto:' . $data['email']">
Reply to {{ $data['name'] }}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

<x-mail::message>
# New Contact Form Submission

You have received a new message from your website contact form.

**Name:** {{ $name }}

**Email:** {{ $email }}

**Message:**  
{{ $messageContent }}

<x-mail::button :url="'mailto:' . $email">
Reply to {{ $name }}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>