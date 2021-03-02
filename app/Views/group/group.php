<script>
    jQuery(document).ready(function($) {

        // Line Charts
        var line_chart_demo = $("#line-chart");
        var line_chart = Morris.Line({
            element: 'line-chart',
            data: [{
                    y: '2006',
                    a: 100,
                    b: 90
                },
                {
                    y: '2007',
                    a: 75,
                    b: 65
                },
                {
                    y: '2008',
                    a: 50,
                    b: 40
                },
                {
                    y: '2009',
                    a: 75,
                    b: 65
                },
                {
                    y: '2010',
                    a: 50,
                    b: 40
                },
                {
                    y: '2011',
                    a: 75,
                    b: 65
                },
                {
                    y: '2012',
                    a: 100,
                    b: 90
                }
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['October 2013', 'November 2013'],
            redraw: true
        });
        line_chart_demo.parent().attr('style', '');

        // Donut Chart
        var donut_chart_demo = $("#donut-chart");
        donut_chart_demo.parent().show();
        var donut_chart = Morris.Donut({
            element: 'donut-chart',
            data: [{
                    label: "Download Sales",
                    value: getRandomInt(10, 50)
                },
                {
                    label: "In-Store Sales",
                    value: getRandomInt(10, 50)
                },
                {
                    label: "Mail-Order Sales",
                    value: getRandomInt(10, 50)
                }
            ],
            colors: ['#707f9b', '#455064', '#242d3c']
        });
        donut_chart_demo.parent().attr('style', '');
    });

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
</script>
<div class="group-page row">
    <div class="col-sm-8 left-card">
        <div class="row row-tabs hidden-lg hidden-sm hidden-md visible-xs-*">
            <span class="switch-tab active" data-hide="switch-transactions">Group</span>
            <span class="switch-tab" data-hide="switch-card">Chats</span>
        </div>
        <div class="row switch-transactions">
            <div class="row">
                <div class="group-cover col-xs-12">
                    <h3>Group Name</h3>
                    <p class="group-goal">Group Goal here</p>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="group-navi">
                        <div class="group-entypo col-sm-3 col-xs-6">
                            <div class="entypo-inner text-center">
                                <span class="entypo-logout"></span>
                                <span class="hidden-xs">Send Money</span>
                            </div>
                        </div>
                        <div class="group-entypo col-sm-3 col-xs-6">
                            <div class="entypo-inner text-center">
                                <span class="entypo-doc-text"></span>
                                <span class="hidden-xs">Statements</span>
                            </div>
                        </div>
                        <div class="group-entypo col-sm-3 col-xs-6">
                            <div class="entypo-inner text-center">
                                <span class="entypo-publish"></span>
                                <span class="hidden-xs">Top Up</span>
                            </div>
                        </div>
                        <div class="group-entypo col-sm-3 col-xs-6">
                            <div class="entypo-inner text-center">
                                <span class="entypo-dot-3"></span>
                                <span class="hidden-xs">More</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-xs-12 text-center">
                    <div class="group-balance-preview">
                        <span class="gp-txt">Total balance</span>
                        <span class="gp-bals"><sup>$</sup>12,319</span>
                        <span class="gp-grow"><span class="entypo-up-thin"></span> 4.76%</span>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="group-balance-preview">
                        <div id="donut-chart" style="height: 250px"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div id="line-chart" class="morrischart" style="height: 300px; position: relative;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4 hidden-xs right-card switch-card chat-card">
        <div class="chat-block">
            <div class="input-group">
                <span class="input-group-addon entypo-cancel btn-danger" onclick="$('.switch-tab[data-hide=\'switch-transactions\']').trigger('click');"></span>
                <input type="search" placeholder="Search groups by name" class="form-control input-lg" />
                <span class="input-group-addon entypo-search"></span>
            </div>
            <div class="chat-body"></div>
            <div class="input-group">
                <span class="input-group-addon text-center;"><img src="<?php echo base_url('assets/images/the_emo.png'); ?>" class="the_emoji" /></span>
                <textarea type="search" placeholder="Search groups by name" class="form-control input-lg"></textarea>
                <span class="input-group-addon entypo-paper-plane"></span>
            </div>
        </div>
    </div>

</div>