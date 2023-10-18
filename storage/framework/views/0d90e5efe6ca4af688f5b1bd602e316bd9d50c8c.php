

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="dashboard-page">
            <h4 class="welcome-title text-uppercase"><?php echo e(__('Welcome :name!',['name'=>Auth::user()->nameOrEmail])); ?></h4>
        </div>
        <br>
        <div class="row">
            <?php if(!empty($top_cards)): ?>
                <?php $__currentLoopData = $top_cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-<?php echo e($card['size']); ?> col-md-<?php echo e($card['size_md']); ?>">
                        <div class="dashboard-report-card card <?php echo e($card['class']); ?>">
                            <div class="card-content">
                                <span class="card-title"><?php echo e($card['title']); ?></span>
                                <span class="card-amount"><?php echo e($card['amount']); ?></span>
                                <span class="card-desc"><?php echo e($card['desc']); ?></span>
                            </div>
                            <div class="card-media">
                                <i class="<?php echo e($card['icon']); ?>"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

        <div class="row">

            <div class="col-md-12 col-lg-6 mb-3">
                <div class="panel">
                    <div class="panel-title d-flex justify-content-between align-items-center">
                        <strong><?php echo e(__('Earning statistics')); ?></strong>
                        <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
                            <i class="fa fa-calendar"></i>&nbsp;
                            <span></span> <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="panel-body">
                        <canvas id="earning_chart"></canvas>
                        <script>
                            var earning_chart_data = <?php echo json_encode($earning_chart_data); ?>;
                        </script>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 ">
                <div class="panel">
                    <div class="panel-title d-flex justify-content-between">
                        <strong><?php echo e(__('Recent Activities')); ?></strong>
                    </div>
                    <div class="panel-body">

                        <ul class="notification-list pl-0">
                            <?php $rows = $notifications[0]; ?>
                            <?php if(count($rows)> 0): ?>
                                <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oneNotification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $active = $class = '';
                                        $data = json_decode($oneNotification['data']);

                                        $idNotification = @$data->id;
                                        $forAdmin = @$data->for_admin;
                                        $usingData = @$data->notification;

                                        $services = @$usingData->type;
                                        $idServices = @$usingData->id;
                                        $title = @$usingData->message;
                                        $name = @$usingData->name;
                                        $avatar = @$usingData->avatar;
                                        $link = @$usingData->link;

                                        if(empty($oneNotification->read_at)){
                                            $class = 'markAsRead';
                                            $active = 'active';
                                        }
                                    ?>
                                    <li class="notification <?php echo e($active); ?>">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="media-object">
                                                    <?php if($avatar): ?>
                                                        <img class="image-responsive" src="<?php echo e($avatar); ?>" alt="<?php echo e($name); ?>">
                                                    <?php else: ?>
                                                        <span class="avatar-text"><?php echo e(ucfirst($name[0])); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <a class="<?php echo e($class); ?> p-0" data-id="<?php echo e($idNotification); ?>" href="<?php echo e($link); ?>"><?php echo $title; ?></a>
                                                <div class="notification-meta">
                                                    <small class="timestamp"><?php echo e(format_interval($oneNotification->created_at)); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <li class="notification"><?php echo e(__("You don't have any notifications")); ?></li>
                            <?php endif; ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(url('libs/chart_js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(url('libs/daterange/moment.min.js')); ?>"></script>
    <script>
        var ctx = document.getElementById('earning_chart').getContext('2d');
        window.myMixedChart = new Chart(ctx, {
            type: 'bar',
            data: earning_chart_data,
            options: {
                responsive: true,
                tooltips: {
                    mode: 'index',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        stacked: true,
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: '<?php echo e(__("Timeline")); ?>'
                        }
                    }],
                    yAxes: [{
                        stacked: true,
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: '<?php echo e(__("Currency: :currency_main",['currency_main'=>setting_item('currency_main')])); ?>'
                        },
                        ticks: {
                            beginAtZero: true,
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            var label = data.datasets[tooltipItem.datasetIndex].label || '';
                            if (label) {
                                label += ': ';
                            }
                            label += tooltipItem.yLabel + " (<?php echo e(setting_item('currency_main')); ?>)";
                            return label;
                        }
                    }
                }
            }
        });

        var start = moment().startOf('week');
        var end = moment();
        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            "alwaysShowCalendars": true,
            "opens": "left",
            "showDropdowns": true,
            ranges: {
                '<?php echo e(__("Today")); ?>': [moment(), moment()],
                '<?php echo e(__("Yesterday")); ?>': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '<?php echo e(__("Last 7 Days")); ?>': [moment().subtract(6, 'days'), moment()],
                '<?php echo e(__("Last 30 Days")); ?>': [moment().subtract(29, 'days'), moment()],
                '<?php echo e(__("This Month")); ?>': [moment().startOf('month'), moment().endOf('month')],
                '<?php echo e(__("Last Month")); ?>': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                '<?php echo e(__("This Year")); ?>': [moment().startOf('year'), moment().endOf('year')],
                '<?php echo e(__('This Week')); ?>': [moment().startOf('week'), end]
            }
        }, cb).on('apply.daterangepicker', function (ev, picker) {
            // Reload Earning JS
            $.ajax({
                url: '<?php echo e(route('admin.statistic.reloadChart')); ?>',
                data: {
                    chart: 'earning',
                    from: picker.startDate.format('YYYY-MM-DD'),
                    to: picker.endDate.format('YYYY-MM-DD'),
                },
                dataType: 'json',
                type: 'post',
                success: function (res) {
                    if (res.status) {
                        window.myMixedChart.data = res.data;
                        window.myMixedChart.update();
                    }
                }
            })
        });
        cb(start, end);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Dashboard/Views/index.blade.php ENDPATH**/ ?>