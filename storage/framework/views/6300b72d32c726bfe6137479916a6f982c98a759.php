
<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="mt30">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <div class="ff_one">
                <div class="icon"><span class="flaticon-home"></span></div>
                <div class="detais">
                <div class="timer"><?php echo e($count_property); ?></div>
                    <p><?php echo e(__('All Properties')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <div class="ff_one style2">
                <div class="icon"><span class="flaticon-view"></span></div>
                <div class="detais">
                    <div class="timer"><?php echo e($count_view); ?></div>
                    <p><?php echo e(__('Total Views')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <div class="ff_one style3">
                <div class="icon"><span class="flaticon-chat"></span></div>
                <div class="detais">
                <div class="timer"><?php echo e($count_review); ?></div>
                    <p><?php echo e(__('Total Visitor Reviews')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <div class="ff_one style4">
                <div class="icon"><span class="flaticon-heart"></span></div>
                <div class="detais">
                <div class="timer"><?php echo e($count_wish); ?></div>
                    <p><?php echo e(__('Total Favorites')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-xl-7">
            <div class="application_statics">
                <div class="d-flex justify-content-between">
                    <h4><?php echo e(__("Property views")); ?></h4>
                    <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div>
                </div>
                <div class="c_container">
                    <canvas id="earning_chart"></canvas>
                    <script>
                        var views_data = <?php echo json_encode($views_data); ?>;
                    </script>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class="recent_job_activity">
                <h4 class="title"><?php echo e(__("Recent Activities")); ?></h4>
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
                        <div class="grid notify-item">
                            <ul class="d-flex">
                                <li class="list-inline-item ">
                                    <?php if($avatar): ?>
                                        <img class="image-responsive rounded-circle" src="<?php echo e($avatar); ?>" alt="<?php echo e($name); ?>">
                                    <?php else: ?>
                                        <span class="avatar-text rounded-circle"><?php echo e(ucfirst($name[0])); ?></span>
                                    <?php endif; ?>
                                </li>
                                <li class="list-inline-item">
                                    <p><a class="<?php echo e($class); ?> p-0" data-id="<?php echo e($idNotification); ?>" href="<?php echo e($link); ?>"><?php echo $title; ?></a></p>
                                    <div class="notification-meta">
                                        <small class="timestamp"><?php echo e(format_interval($oneNotification->created_at)); ?></small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <li class="notification"><?php echo e(__("You don't have any notifications")); ?></li>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset("libs/chart_js/Chart.min.js")); ?>"></script>
    <script src="<?php echo e(asset('libs/daterange/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('libs/daterange/daterangepicker.min.js')); ?>"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            console.log(11);
            var ctx = document.getElementById('earning_chart').getContext('2d');
            window.myMixedChartForVendor = new Chart(ctx, {
                type: 'bar',//line - bar
                data: views_data,
                options: {
                    min:0,
                    responsive: true,
                    legend: {
                        display: true
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
                                labelString: '<?php echo e(__("Views")); ?>'
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
            $(".bravo-user-chart form select").change(function () {
                $(this).closest("form").submit();
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
                $.ajax({
                    url: '<?php echo e(url('user/reloadChart')); ?>',
                    data: {
                        chart: 'view',
                        from: picker.startDate.format('YYYY-MM-DD'),
                        to: picker.endDate.format('YYYY-MM-DD'),
                    },
                    dataType: 'json',
                    type: 'post',
                    success: function (res) {
                        if (res.status) {
                            window.myMixedChartForVendor.data = res.data;
                            window.myMixedChartForVendor.update();
                        }
                    }
                })
            });
            cb(start, end);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/User/Views/frontend/dashboard.blade.php ENDPATH**/ ?>