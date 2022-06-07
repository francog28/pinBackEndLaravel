@component('mail::message')
<style>
    .p{
        font-weight: bold;
        font-size: 20px;
        color: #ffffff;
        background-color: #001f3f;
        border-radius: 10px;
        padding-left: 10px;
        padding-right: 10px;
    }
    table{
        background-color: #001f3f;
        border-radius: 10px;
    }
    h1{
        color: #ffffff;
    }
    p{
        color: #ffffff;
    }
    td {
        padding: 5px;
    }
    span{
        color: #ffffff;
    }
</style>
<table>
    <tr>
      <td>
        <p class="p">{{ $form->name}} le ha enviado un mensaje.</h1>
        <p>Name: {{$form->name}}</p>
        <p>Email: {{$form->email}}</p>
        <p>Phone: {{$form->phone}}</p>
        <p>Message: {{$form->message}}</p>
      </td>
    </tr>
  </table>
{{ config('app.name') }}
@endcomponent
