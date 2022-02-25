Hello {{$mail_data['name']}}!
<br><br>
Welcome To Hireme.com
<br>
Please Click on below link to verify your account.
<br><br>
@if($mail_data['type'] == 'clint')
<a href="http://127.0.0.1:8000/verUser?code={{$mail_data['verification_code']}}">Click Here</a>
@else
<a href="http://127.0.0.1:8000/verifyseller?code={{$mail_data['verification_code']}}">Click Here</a>
@endif
<br><br>
Thnak you.
<br>
www.hireMe.com