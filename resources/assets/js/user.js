(function(){
    $('#chartdiv').highcharts({

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: 'Conocimiento y experiencia',
            x: -10
        },

        pane: {
            size: '75%'
        },

        xAxis: {
            categories: ['PHP', 'Javascript', 'Java', 'Python', 'Ruby'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
            max:100
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>'
        },

        legend: {
            align: 'right',
            verticalAlign: 'top',
            y: 90,
            layout: 'vertical'
        },

        series: [{
            name: 'Conocimientos',
            data: [90, 78, 55, 45, 65],
            pointPlacement: 'on'
        },
        {
            name: 'Experiencia',
            data: [90, 85, 15, 5, 45],
            pointPlacement: 'on'
        }]
    });
})();

(function(){
    $('#chartdiv2').highcharts({

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: 'Plataformas conocidas',
            x: -10
        },

        pane: {
            size: '75%'
        },

        xAxis: {
            categories: ['Laravel', 'KumbiaPHP', 'Angular', 'Rails', 'Drupal', 'Joomla'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
            max:100
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>'
        },

        legend: {
            align: 'right',
            verticalAlign: 'top',
            y: 90,
            layout: 'vertical'
        },

        series: [{
            name: 'Conocimientos',
            data: [92, 95, 55, 75, 89, 55],
            pointPlacement: 'on'
        },
        {
            name: 'Experiencia',
            data: [85, 92, 45, 20, 95, 80],
            pointPlacement: 'on'
        }]
    });
})();