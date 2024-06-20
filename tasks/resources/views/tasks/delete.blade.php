<h1>Eliminar tarea ID: {{$task->id}} </h1>
<hr>
<h2>{{$task->name}}</h2>
<p>{{$task->description}}</p>

<a href="/task/{{ $task->id }}/delete"> Eliminar</a>

