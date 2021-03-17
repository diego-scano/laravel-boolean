@foreach ($cars as $car)
  <b>{{$car->id}}</b> : {{$car->brand}} {{$car->name}} - <b>Tipologia</b>: {{$car->type}} - <b>kW</b>: {{$car->kW}} - <b>Carburante</b>: {{$car->fuel}} - <b>Colore</b>: {{$car->color}} <br>
@endforeach
