@extends('base')

@section('title','Contact')

@section('content')
<h2>Contact</h2>

<ul>
    <li>   
       <h3>Telephone : le 06 00 00 00 00</h3>
    </li>

    <li>
      <h3> Adresse :  5 Bd Louis XIV, 59800 Lille</h3> 
    </li>

     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.9155085815955!2d3.067824012181228!3d50.62868637439592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58d87da5f2d%3A0x739db98176c2b59d!2s5%20Bd%20Louis%20XIV%2C%2059800%20Lille!5e0!3m2!1sfr!2sfr!4v1701958548689!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
       <h3>Formulaire à remplir</h3>
  
      <label>Votre adresse mail</label>
        <input type="email"/>

      <label>Votre demande</label>
        <input type="text"/>

      <label>Votre messsage</label>
        <input type="text"/>
        <input type="submit" value="envoyer">
</ul>
    @endsection