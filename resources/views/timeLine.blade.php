<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['gantt']});
    google.charts.setOnLoadCallback(drawChart);


      function drawChart() {

          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Task ID');
          data.addColumn('string', 'Task Name');
          data.addColumn('string', 'Resource');
          data.addColumn('date', 'Start Date');
          data.addColumn('date', 'End Date');
          data.addColumn('number', 'Duration');
          data.addColumn('number', 'Percent Complete');
          data.addColumn('string', 'Dependencies');

          data.addRows([
        ['Arbeitschritt1.1', 'Walze 1', 'Auftrag 3', new Date('December 17, 2020, 03:24:00'), new Date('December 17, 2020, 04:25:00'), null, 100, null],
        ['Arbeitschritt1.2', 'Walze 2', 'Auftrag 1',
              new Date('December 17, 2020, 03:24:00'), new Date('December 17, 2020, 04:40:00'), null, 100, null],
        ['Arbeitschritt1.3', 'Walze 3', 'Auftrag 2',
              new Date('December 17, 2020, 03:24:00'), new Date('December 17, 2020, 04:25:00'), null, 100, null],

        ['Arbeitschritt2.1', 'Drehen 1', 'Auftrag 3',
              new Date('December 17, 2020, 04:25:00'), new Date('December 17, 2020, 05:30:00'), null, 100, 'Arbeitschritt1.1'],
        ['Arbeitschritt2.2', 'Drehen 2','Auftrag 1',
              new Date('December 17, 2020, 04:25:00'), new Date('December 17, 2020, 05:40:00'), null, 100, 'Arbeitschritt1.2'],

       ['Arbeitschritt3.1', 'Presse Kopf 1', 'Auftrag 3',
              new Date('December 17, 2020, 03:24:00'), new Date('December 17, 2020, 03:58:00'), null, 100, null],
       ['Arbeitschritt3.2', 'Presse Kopf 2', 'Auftrag 1',
              new Date('December 17, 2020, 03:24:00'), new Date('December 17, 2020, 05:30:00'), null, 100, null],

       ['Arbeitschritt4.1', 'Presse Gewinde 1','Auftrag 3',
              new Date('December 17, 2020, 03:58:00'), new Date('December 17, 2020, 05:41:00'), null, 100, 'Arbeitschritt3.1'],
       ['Arbeitschritt4.2', 'Presse Gewinde 2','Auftrag 1',
              new Date('December 17, 2020, 05:30:00'), new Date('December 17, 2020, 06:30:00'), null, null, 'Arbeitschritt3.2'],

       ['Arbeitschritt5.1', 'Schweißen 1','Auftrag 3',
              new Date('December 17, 2020, 05:41:00'), new Date('December 17, 2020, 07:14:00'), null, 100, 'Arbeitschritt4.1,Arbeitschritt2.1'],
       ['Arbeitschritt5.2', 'Schweißen 2','Auftrag 1',
              new Date('December 17, 2020, 06:30:00'), new Date('December 17, 2020, 08:19:00'), null, 100, 'Arbeitschritt4.2,Arbeitschritt2.2'],

       ['Arbeitschritt6.1', 'Beschichten 1','Auftrag 3',
              new Date('December 17, 2020, 07:14:00'), new Date('December 17, 2020, 07:59:00'), null, 100, 'Arbeitschritt5.1'],
       ['Arbeitschritt6.2', 'Beschichten 2','Auftrag 1',
              new Date('December 17, 2020, 08:19:00'), new Date('December 17, 2020, 8:49:00'), null, 100, 'Arbeitschritt5.2'],

       ['Arbeitschritt7.1', 'Lackieren 1','Auftrag 3',
           new Date('December 17, 2020, 07:59:00'), new Date('December 17, 2020, 9:02:00'), null, 100, 'Arbeitschritt5.1'],
       ['Arbeitschritt7.2', 'Lackieren 2','Auftrag 1',
              new Date('December 17, 2020, 8:49:00'), new Date('December 17, 2020, 9:13:00'),null, 100, 'Arbeitschritt5.2']

      ]);

          var options = {
           gantt: { groupByRowLabel: true },
        height: 800,
        gantt: {
          trackHeight: 40
        }
      };

      var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
  </script>
</head>
<body>
    <h1>Gantt-Diagramm</h1>
  <div id="chart_div"></div>
</body>
</html>
