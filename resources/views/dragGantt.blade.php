<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dragable Gantt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styleSheet.css">
  </head>

  <body>

 <div class="container mt-3">
  <table class="fixed">
    <thead>
      <tr>
        <th style="width:30%">Maschine</th>
        <th style="width:100%">8:00 - 8:35</th>
        <th style="width:80%">8:35 - 9:00</th>
        <th style="width:60%">9:30</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td>Walze 1</td>

        <td ondrop="drop(event)" ondragover="allowDrop(event)">
           <div class="row" style="margin-left:0em">
            <div id="drag1" draggable="true" ondragstart="drag(event)" class="box" style="width:36%">Auftrag 1</div>
            <div id="drag4" draggable="true" ondragstart="drag(event)" class="box" style="width:36%">Auftrag 4</div>
           </div>
          </td>

        <td></td>
        <td></td>
      </tr>

      <tr>
        <td>Walze 2</td>

        <td ondrop="drop(event)" ondragover="allowDrop(event)">
           <div class="row" style="margin-left:0em">
            <div id="drag2" draggable="true" ondragstart="drag(event)" class="box" style="width:60%">Auftrag 2</div>
           </div>
        </td>

        <td></td>
        <td></td>
      </tr>

      <tr>
        <td>Walze 3</td>
        <td ondrop="drop(event)" ondragover="allowDrop(event)"><div id="drag3" draggable="true" ondragstart="drag(event)" class="box" style="width:100%">Auftrag 3</div></td>

        <td></td>
        <td></td>
      </tr>

      <tr>
        <td>Drehen 1</td>
        <td><div id="drag1.1" draggable="true" ondragstart="drag(event)" class="box" style="width:34%">Auftrag 1</div></td>

        <td></td>
        <td></td>
      </tr>

      <tr>
        <td>Drehen 2</td>
        <td><div id="drag2.1" draggable="true" ondragstart="drag(event)" class="box" style="width:44%; background-color:yellow;">Auftrag 2</div></td>
        <td></td>
        <td></td>
       </tr>

    </tbody>
  </table>
 </div>

 <br/>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Maschine</th>
    
      @foreach($a1 as $a1) {{-- erstelle Überschrift --}}
         @if ($loop->first)
      <th scope="col">{{$a1}}</th>
    </tr>
  </thead>
      @endif
   <tbody>
    <tr>
      <th scope="row">{{$a1}}</th>
    </tr>
      @endforeach
</table>
  </body>
</html>
<script src="{{url('js/script.js')}}"></script>
