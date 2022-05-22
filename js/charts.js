var randomizeArray = function (arg) {
var array = arg.slice();
return array;
}

// data for the sparklines that appear below header area
var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 15];

var spark1 = {
    chart: {
        id: 'sparkline1',
        group: 'sparklines',
        type: 'bar',//area
        height: 300,
        sparkline: {
        enabled: true,
        },
    },
    plotOptions: {
        bar: {
          borderRadius: 6,
        }
    },
    fill: {
        opacity: 1,
    },
    series: [{
        name: 'Omzet',
        data: randomizeArray(sparklineData)
    }],
    labels: [...Array(10).keys()].map(n => `2018-09-0${n+1}`),
    yaxis: {
        min: 0
    },
    xaxis: {
        type: 'datetime',
    },
    colors: ['var(--color-headings)'],
    title: {
        text: '$424,652',
        offsetX: 0,
        style: {
        fontSize: '24px',
        color:"var(--color-text)",
        cssClass: 'apexcharts-yaxis-title'
        }
    },
    subtitle: {
        text: 'Sales',
        offsetX: 0,
        style: {
        fontSize: '14px',
        color:"var(--color-text)",
        cssClass: 'apexcharts-yaxis-title'
        }
    }
}
new ApexCharts(document.querySelector("#spark1"), spark1).render();

