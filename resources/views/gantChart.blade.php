<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<script type="text/javascript">
  google.charts.load("current", {packages:["timeline"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {

    var container = document.getElementById('example3.1');
    var chart = new google.visualization.Timeline(container);
    var dataTable = new google.visualization.DataTable();
    dataTable.addColumn({ type: 'string', id: 'Position' });
    dataTable.addColumn({ type: 'string', id: 'Name' });
    dataTable.addColumn({ type: 'date',  id: 'Start' });
    dataTable.addColumn({ type: 'date', id: 'End' });

      dataTable.addRows([

      [ 'Walze 1', '#2002' , new Date('December 17, 2020, 03:24:00'), new Date('December 17, 2020, 04:25:00') ],
      ['Walze 2', '#2001', new Date('December 17, 2020, 03:24:00'), new Date('December 17, 2020, 04:28:00')],
      ['Walze 3', '#2000', new Date('December 17, 2020, 03:24:00'), new Date('December 17, 2020, 04:46:00')],

      ['Drehen 1', '#2002', new Date('December 17, 2020, 04:25:00'), new Date('December 17, 2020, 05:40:00')],
      ['Drehen 1', '#2000', new Date('December 17, 2020, 05:40:00'), new Date('December 17, 2020, 06:40:00')],
      ['Drehen 2', '#2001', new Date('December 17, 2020, 04:28:00'), new Date('December 17, 2020, 05:58:00')],

      ['Pesse Kopf 1', '#2002', new Date('December 17, 2020, 03:24:00'), new Date('December 17, 2020, 04:46:00')],
      ['Presse Kopf 2', '#2001', new Date('December 17, 2020, 03:24:00'), new Date('December 17, 2020, 04:18:00')],
      ['Presse Kopf 2', '#2000', new Date('December 17, 2020, 04:18:00'), new Date('December 17, 2020, 05:08:00')],

      ['Presse Gewinde 1', '#2001', new Date('December 17, 2020, 04:18:00'), new Date('December 17, 2020, 05:38:00')],
      ['Presse Gewinde 2', '#2000', new Date('December 17, 2020, 05:08:00'), new Date('December 17, 2020, 05:28:00')],
      ['Presse Gewinde 2', '#2002', new Date('December 17, 2020, 05:28:00'), new Date('December 17, 2020, 6:16:00')],

      ['Schweißen 1', '#2001', new Date('December 17, 2020, 05:58:00'), new Date('December 17, 2020, 6:36:00')],
      ['Schweißen 1', '#2002', new Date('December 17, 2020, 06:36:00'), new Date('December 17, 2020, 7:09:00')],
      ['Schweißen 1', '#2000', new Date('December 17, 2020, 07:09:00'), new Date('December 17, 2020, 7:24:00')],

      ['Beschichten 1', '#2001', new Date('December 17, 2020, 06:36:00'), new Date('December 17, 2020, 7:24:00')],
      ['Beschichten 1', '#2000', new Date('December 17, 2020, 07:24:00'), new Date('December 17, 2020, 8:06:00')],
      ['Beschichten 2', '#2002', new Date('December 17, 2020, 07:09:00'), new Date('December 17, 2020, 8:06:00')],

      ['Lackieren 1', '#2001', new Date('December 17, 2020, 07:24:00'), new Date('December 17, 2020, 8:30:00')],
      ['Lackieren 1', '#2002', new Date('December 17, 2020, 08:30:00'), new Date('December 17, 2020, 9:00:00')],
      ['Lackieren 2', '#2000', new Date('December 17, 2020, 08:06:00'), new Date('December 17, 2020, 9:00:00')],
   
    ]);

      chart.draw(dataTable);

      var options = {
           height: 800
        }
  }
</script>

<h1>Gantt Diagramm</h1>

<div id="example3.1" style="height: 800px;"></div>
