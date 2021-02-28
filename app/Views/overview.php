<script type="text/javascript">
    jQuery(document).ready(function() {

        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
        var line_chart_demo = $("#line-chart-demo");

        last_30_days();
        $('.adjust-stats').change(function() {
            $("#line-chart-demo").empty();
            if ($(this).val() == "0") {
                today();
            }
            if ($(this).val() == "1") {
                yesterday();
            }
            if ($(this).val() == "7") {
                last_7_days();
            }
            if ($(this).val() == "30") {
                last_30_days();
            }
            if ($(this).val() == "90") {
                last_90_days();
            }
            if ($(this).val() == "365") {
                last_365_days();
            }
            if ($(this).val() == "31") {
                last_month();
            }
            if ($(this).val() == "366") {
                last_year()
            }
            if ($(this).val() == "all") {
                all_time();
            }
            if ($(this).val() == "") {
                last_30_days();
            }
        });


        function yesterday() {

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [{

                        y: '2021-02-26 12:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26 13:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26 14:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26 15:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26 16:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26 17:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26 18:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26 19:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26 20:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26 21:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26 22:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26 23:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 00:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 01:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 02:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 03:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 04:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 05:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 06:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 07:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 08:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 09:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 10:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 11:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 12:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                resize: true,
                smooth: true,
                xLabelFormat: function(x) {
                    let shit = new Date(x);
                    let date = x.getDate();
                    let monthy = months[x.getMonth()];
                    let hours = x.getHours();
                    let minutes = x.getMinutes();
                    var ampm = hours >= 12 ? 'pm' : 'am';
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    var strTime = date + ' ' + monthy + ' ' + hours + ':' + minutes + ' ' + ampm;
                    var douche = strTime;
                    return douche;
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    let date = shit.getDate();
                    let monthy = months[shit.getMonth()];
                    let hours = shit.getHours();
                    let minutes = shit.getMinutes();
                    var ampm = hours >= 12 ? 'pm' : 'am';
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    var strTime = date + ' ' + monthy + ' ' + hours + ':' + minutes + ' ' + ampm;
                    var douche = strTime;
                    return douche;
                },
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function today() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [{

                        y: '2021-02-27 12:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 13:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 14:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 15:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 16:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 17:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 18:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 19:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 20:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 21:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 22:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27 23:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 00:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 01:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 02:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 03:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 04:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 05:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 06:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 07:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 08:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 09:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 10:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 11:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28 12:02:24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                resize: true,
                xLabelFormat: function(x) {
                    let shit = new Date(x);
                    let date = x.getDate();
                    let monthy = months[x.getMonth()];
                    let hours = x.getHours();
                    let minutes = x.getMinutes();
                    var ampm = hours >= 12 ? 'pm' : 'am';
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    var strTime = date + ' ' + monthy + ' ' + hours + ':' + minutes + ' ' + ampm;
                    var douche = strTime;
                    return douche;
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    let date = shit.getDate();
                    let monthy = months[shit.getMonth()];
                    let hours = shit.getHours();
                    let minutes = shit.getMinutes();
                    var ampm = hours >= 12 ? 'pm' : 'am';
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    var strTime = date + ' ' + monthy + ' ' + hours + ':' + minutes + ' ' + ampm;
                    var douche = strTime;
                    return douche;
                },
                smooth: true,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_30_days() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [{

                        y: '2021-01-29',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-30',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-31',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-01',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-02',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-03',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-04',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-05',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-06',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-07',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-08',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-09',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-10',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-11',
                        a: 1,
                        b: 6,
                        c: 1
                    },

                    {

                        y: '2021-02-12',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-13',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-14',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-15',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-16',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-17',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-18',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-19',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-20',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-21',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-22',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-23',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-25',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(d) {
                    return d.getDate() + ' ' + months[d.getMonth()];
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    var douche = shit.getDate() + ' ' + months[shit.getMonth()];
                    return douche;
                },
                resize: true,
                smooth: true,
                pointSize: 0,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_7_days() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [{

                        y: '2021-02-21',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-22',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-23',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-25',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(d) {
                    return d.getDate() + ' ' + months[d.getMonth()];
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    var douche = shit.getDate() + ' ' + months[shit.getMonth()];
                    return douche;
                },
                resize: true,
                smooth: true,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_90_days() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [{

                        y: '2020-11-30',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-01',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-02',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-03',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-04',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-05',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-06',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-07',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-08',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-09',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-10',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-11',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-12',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-13',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-14',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-15',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-16',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-17',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-18',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-19',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-20',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-21',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-22',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-23',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-25',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-26',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-27',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-28',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-29',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-30',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-31',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-01',
                        a: 6,
                        b: 12,
                        c: 4
                    },

                    {

                        y: '2021-01-02',
                        a: 24,
                        b: 34,
                        c: 9
                    },

                    {

                        y: '2021-01-03',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-04',
                        a: 10,
                        b: 9,
                        c: 0
                    },

                    {

                        y: '2021-01-05',
                        a: 6,
                        b: 9,
                        c: 1
                    },

                    {

                        y: '2021-01-06',
                        a: 5,
                        b: 5,
                        c: 3
                    },

                    {

                        y: '2021-01-07',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-08',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-09',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-10',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-11',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-12',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-13',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-14',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-15',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-16',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-17',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-18',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-19',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-20',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-21',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-22',
                        a: 4,
                        b: 26,
                        c: 3
                    },

                    {

                        y: '2021-01-23',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-24',
                        a: 5,
                        b: 12,
                        c: 4
                    },

                    {

                        y: '2021-01-25',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-26',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-27',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-28',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-29',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-30',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-31',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-01',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-02',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-03',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-04',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-05',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-06',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-07',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-08',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-09',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-10',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-11',
                        a: 1,
                        b: 6,
                        c: 1
                    },

                    {

                        y: '2021-02-12',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-13',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-14',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-15',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-16',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-17',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-18',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-19',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-20',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-21',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-22',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-23',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-24',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-25',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-26',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-27',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-02-28',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(d) {
                    return d.getDate() + ' ' + months[d.getMonth()];
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    var douche = shit.getDate() + ' ' + months[shit.getMonth()];
                    return douche;
                },
                resize: true,
                smooth: true,
                pointSize: 0,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_365_days() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [{

                        y: '2020-02',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-03',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-04',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-05',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-06',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-07',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-08',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-09',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-10',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-11',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12',
                        a: 60,
                        b: 107,
                        c: 24
                    },

                    {

                        y: '2021-01',
                        a: 1,
                        b: 6,
                        c: 1
                    },

                    {

                        y: '2021-02',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(x) {
                    var month = months[x.getMonth()] + ' ' + x.getFullYear();
                    return month;
                },
                dateFormat: function(x) {
                    let d = new Date(x)
                    var month = months[d.getMonth()] + ' ' + d.getFullYear();;
                    return month;
                },
                resize: true,
                smooth: true,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_month() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [{

                        y: '2020-12-30',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-12-31',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-01',
                        a: 6,
                        b: 12,
                        c: 4
                    },

                    {

                        y: '2021-01-02',
                        a: 24,
                        b: 34,
                        c: 9
                    },

                    {

                        y: '2021-01-03',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-04',
                        a: 10,
                        b: 9,
                        c: 0
                    },

                    {

                        y: '2021-01-05',
                        a: 6,
                        b: 9,
                        c: 1
                    },

                    {

                        y: '2021-01-06',
                        a: 5,
                        b: 5,
                        c: 3
                    },

                    {

                        y: '2021-01-07',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-08',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-09',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-10',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-11',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-12',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-13',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-14',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-15',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-16',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-17',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-18',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-19',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-20',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-21',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-22',
                        a: 4,
                        b: 26,
                        c: 3
                    },

                    {

                        y: '2021-01-23',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-24',
                        a: 5,
                        b: 12,
                        c: 4
                    },

                    {

                        y: '2021-01-25',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-26',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-27',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-28',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2021-01-29',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(d) {
                    return d.getDate() + ' ' + months[d.getMonth()];
                },
                dateFormat: function(x) {
                    let shit = new Date(x);
                    var douche = shit.getDate() + ' ' + months[shit.getMonth()];
                    return douche;
                },
                resize: true,
                smooth: true,
                pointSize: 0,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function last_year() {
            // Line Charts

            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [{

                        y: '2019-02',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2019-03',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2019-04',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2019-05',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2019-06',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2019-07',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2019-08',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2019-09',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2019-10',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2019-11',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2019-12',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-01',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                    {

                        y: '2020-02',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(x) {
                    var month = months[x.getMonth()] + ' ' + x.getFullYear();
                    return month;
                },
                dateFormat: function(x) {
                    let d = new Date(x)
                    var month = months[d.getMonth()] + ' ' + d.getFullYear();;
                    return month;
                },
                resize: true,
                smooth: true,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

        function all_time() {
            // Line Charts
            var line_chart = Morris.Line({
                element: 'line-chart-demo',
                data: [{

                        y: '2020-12-28',
                        a: 60,
                        b: 107,
                        c: 24
                    },

                    {

                        y: '2021-01-28',
                        a: 1,
                        b: 6,
                        c: 1
                    },

                    {

                        y: '2021-02-28',
                        a: 0,
                        b: 0,
                        c: 0
                    },

                ],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['Shown', 'Impressions', 'Purchased'],
                lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
                xLabelFormat: function(x) {
                    var month = x.getDate() + ' ' + months[x.getMonth()] + ' ' + x.getFullYear();
                    return month;
                },
                dateFormat: function(x) {
                    let d = new Date(x)
                    var month = d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();;
                    return month;
                },
                resize: true,
                smooth: true,
                redraw: true
            });
            line_chart_demo.parent().attr('style', '');
        }

    });

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
</script>

<div class="row">
    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-12">
                <h3>Overview</h3>
                <small>Hi Fraser, some unneccesary greetings text here</small>
            </div>
        </div>

        <div class="row slide-icons-parent">
            <div class="col-sm-12 slide-icons">
                <div class="slide-icon">
                    <span><em class="fa fa-exchange"></em></span><span>Transfer</span>
                </div>
                <div class="slide-icon">
                    <span><em class="fa fa-money"></em></span><span>Pay Bill</span>
                </div>
                <div class="slide-icon">
                    <span><em class="fa fa-plus"></em></span><span>Top Up</span>
                </div>
                <div class="slide-icon">
                    <span><em class="fa fa-file-text-o"></em></span><span>Statement</span>
                </div>
                <div class="slide-icon">
                    <span><em class="fa fa-dot-circle-o"></em></span><span>Subscription</span>
                </div>
            </div>
        </div>

        <div class="row row-tabs">
            <span class="switch-tab active" data-hide="switch-transactions">Transactions</span>
            <span class="switch-tab" data-hide="switch-card">Wallets</span>
        </div>

        <div class="row switch-transactions">
            <div class="col-sm-12 transactions-card wallet-panel left-card">
                <div class="panel panel-primary" id="charts_env">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="input-group">
                                <select class="form-control adjust-stats">
                                    <option value="">Choose stats time</option>
                                    <option value="0">Last 24 hours</option>
                                    <option value="1">Yesterday</option>
                                    <option value="7">Last 7 days</option>
                                    <option value="30">Lat 30 days</option>
                                    <option value="90">Last 90 days</option>
                                    <option value="365">Last 365 days</option>
                                    <option value="31">Last month</option>
                                    <option value="366">Last year</option>
                                    <option value="all">All Time</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-options">
                            <span class="input-group">
                                <ul class="form-control">Income vs Expense</ul>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="line-chart">
                                <div id="line-chart-demo" class="morrischart" style="height: 300px; position: relative;">
                                    <div class="morris-hover morris-default-style" style="left: 71.3479px; top: 157px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="transaction-title">Transactions</p>
                <span>15th February, 2021</span>
                <table class="table transaction-table table-hover">
                    <tr>
                        <td class="t-img">
                            <p class="transaction-image" style="background: url('https://yt3.ggpht.com/ytc/AAUvwni_LdnpDi-SOIhjp4Kxo2l_yVBoYsfdDCpUM5VDzg=s900-c-k-c0x00ffffff-no-rj');"></p>
                        </td>
                        <td class="transaction-details">
                            <span class="transaction-title">Netflix</span>
                            <span class="transaction-status">Processing</span>
                        </td>
                        <td class="transaction-td">
                            <span class="transaction-amount">$ 15</span>
                            <span class="transaction-time">3:49 pm</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-img">
                            <p class="transaction-image" style="background: url('https://pbs.twimg.com/profile_images/689518720998252544/mOobZd_8.png');"></p>
                        </td>
                        <td class="transaction-details">
                            <span class="transaction-title">Heroku</span>
                            <span class="transaction-status">Processing</span>
                        </td>
                        <td class="transaction-td">
                            <span class="transaction-amount">$ 16.99</span>
                            <span class="transaction-time">1:26 pm</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-img">
                            <p class="transaction-image" style="background: url('https://cdn.shopify.com/assets/images/logos/shopify-bag.png');"></p>
                        </td>
                        <td class="transaction-details">
                            <span class="transaction-title">Shopify Payouts</span>
                            <span class="transaction-status">Complete</span>
                        </td>
                        <td class="transaction-td">
                            <span class="transaction-amount complete">+ $ 13,000</span>
                            <span class="transaction-time">10:00 am</span>
                        </td>
                    </tr>
                </table>
                <p>14th February, 2021</p>
                <table class="table transaction-table table-hover">
                    <tr>
                        <td class="t-img">
                            <p class="transaction-image" style="background: url('https://www.capitalfm.co.ke/business/files/2017/07/Java-House.jpg');"></p>
                        </td>
                        <td class="transaction-details">
                            <span class="transaction-title">Java House</span>
                            <span class="transaction-status">Complete</span>
                        </td>
                        <td class="transaction-td">
                            <span class="transaction-amount">$ 23</span>
                            <span class="transaction-time">8:34 pm</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-img">
                            <p class="transaction-image" style="background: url('https://pbs.twimg.com/profile_images/1269971823090978817/748sBk9P_400x400.jpg');"></p>
                        </td>
                        <td class="transaction-details">
                            <span class="transaction-title">OnlyFans Payouts</span>
                            <span class="transaction-status">Processing</span>
                        </td>
                        <td class="transaction-td">
                            <span class="transaction-amount complete">+ $ 24,350</span>
                            <span class="transaction-time">4:17 pm</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-img">
                            <p class="transaction-image" style="background: url('https://storage.googleapis.com/gweb-uniblog-publish-prod/images/logo_google_adsense_color_1x_web_512dp.max-500x500.png');"></p>
                        </td>
                        <td class="transaction-details">
                            <span class="transaction-title">Adsense</span>
                            <span class="transaction-status">Complete</span>
                        </td>
                        <td class="transaction-td">
                            <span class="transaction-amount complete">+ $ 137,500</span>
                            <span class="transaction-time">2:45 pm</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-4 wallet-panel right-card switch-card">
        <div class="row">
            <div class="col-sm-12">
                <div class="balance-card">
                    <span class="balance-title">Account Balance</span>
                    <span class="balance-amount">$25,386</span>
                </div>

                <div class="credit-card">

                </div>

                <div class="cc visa">
                    <svg style="width:100%; opacity: 0.3;">
                        <path d="M 0 0 C 50 50 250 0 300 87"></path>
                    </svg>
                    <div class="container">
                        <div class="type">
                            Debit
                        </div>
                        <div class="circuit">
                            <i class="fa fa-cc-visa fa-2x"></i>
                        </div>
                    </div>
                    <div class="holder">
                        <span class="name">Holder Name</span>
                        <span class="number">************3456</span>
                    </div>
                </div>

                <div class="cc mastercard">
                    <svg style="width:100%; opacity: 0.3;">
                        <path d="M 0 0 C 50 50 250 0 300 87"></path>
                    </svg>
                    <div class="container">
                        <div class="type">
                            Debit
                        </div>
                        <div class="circuit">
                            <i class="fa fa-cc-mastercard fa-2x"></i>
                        </div>
                    </div>
                    <div class="holder">
                        <span class="name">Holder Name</span>
                        <span class="number">************3456</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>