var chart1 = new Chartist.Pie('#chart1', {
  series: [128, 103, 25],
}, {
  donut: true,
  donutWidth: 30
});
var chart2 = new Chartist.Pie('#chart2', {
  series: [45,28,30],
}, {
  donut: true,
  donutWidth: 30
});
var chart3 = new Chartist.Pie('#chart3', {
  series: [5,7,13],
}, {
  donut: true,
  donutWidth: 30
});

var bar1 = new Chartist.Bar('#bar1', {
  labels: ['Прийнято замовлень', 'Виконано замовлень', 'Хибних замовлень'],
  series: [
    [125, 107, 18],
    [128, 96, 32],
    [216, 180, 36]
  ]
}, {
  seriesBarDistance: 10,
  axisX: {
    offset: 60
  },
  axisY: {
    offset: 80,
    scaleMinSpace: 10
  },
  height: '400px'
});