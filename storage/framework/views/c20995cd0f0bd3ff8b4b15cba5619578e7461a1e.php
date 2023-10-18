<?php
$review = app(\Themes\Findhouse\Review\Models\Review::class);
$reviewData = $review::getTotalViewAndRateAvg($row['id'], $review_service_type);
?>

<div class="product_single_content" id="bravo-reviews">
    <div class="mbp_pagination_comments">
        <ul class="total_reivew_view">
            <li class="list-inline-item sub_titles">
                <?php if($reviewData['total_review'] > 1): ?>
                    <?php echo e(__(":number Reviews",["number"=>$reviewData['total_review'] ])); ?>

                <?php else: ?>
                    <?php echo e(__(":number Review",["number"=>$reviewData['total_review'] ])); ?>

                <?php endif; ?>
            </li>
            <li class="list-inline-item">
                <ul class="star_list">
                    <ul>
                        <?php for( $i = 0 ; $i < 5 ; $i++ ): ?>
                            <?php if($i < (int)$reviewData['score_total']): ?>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <?php else: ?>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </ul>
                </ul>
            </li>
            <li class="list-inline-item avrg_review"><?php echo e(__("(:rate_agv out of 5)",["rate_agv"=>$reviewData['score_total'] ])); ?></li>
            <li class="list-inline-item write_review"><a href="#write-a-review"><?php echo e(__("Write a Review")); ?></a></li>
        </ul>
        <?php if($review_list): ?>
            <?php $__currentLoopData = $review_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $userInfo = $item->author;
                    $picture = $item->getReviewMetaPicture();
                ?>
                <div class="mbp_first media">
                    <?php if($avatar_url = $userInfo->getAvatarUrl()): ?>
                        <img class="mr-3" src="<?php echo e($avatar_url); ?>" alt="<?php echo e($userInfo->getDisplayName()); ?>">
                    <?php else: ?>
                        <span class="avatar-text"><?php echo e(ucfirst($userInfo->getDisplayName()[0])); ?></span>
                    <?php endif; ?>
                    <div class="media-body">
                        <h4 class="sub_title mt-0 d-flex align-items-center justify-content-between"><?php echo e($userInfo->getDisplayName()); ?>

                            <div class="sspd_review dif">
                                <?php if($item->rate_number): ?>
                                    <ul class="">
                                        <?php for( $i = 0 ; $i < 5 ; $i++ ): ?>
                                            <?php if($i < $item->rate_number): ?>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <?php else: ?>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <div class="text-right">
                                <a class="sspd_postdate fz14" href="#"><?php echo e(display_datetime($item->created_at)); ?></a>
                            </div>
                        </h4>

                        <h3 class="review-title"><?php echo e($item->title); ?></h3>
                        <p class="mt10"><?php echo e($item->content); ?></p>
                        <?php if(!empty($picture)): ?>
                            <?php $listImages = json_decode($picture->val, true); ?>
                            <div class="row mt-2 review-picture-lists">
                                <?php $__currentLoopData = $listImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oneImages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $imagesData = json_decode($oneImages, true); ?>
                                    <div class="col-lg-2 col-md-4 col-4">
                                        <a href="<?php echo e($imagesData['download']); ?>">
                                            <img src="<?php echo e($imagesData['download']); ?>" alt="image" class="rounded-4 img-item">
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="custom_hr"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <div class="mbp_comment_form style2" id="write-a-review">
            <h4><?php echo e(__("Write a review")); ?></h4>
            <?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form class="comments_form review-form" id="review-form" action="<?php echo e(route('review.store')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <div class="form-group review-items sspd_review">
                    <div class="item">
                        <input class="review_rate" type="hidden" name="review_rate">
                        <div class="rates">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <label class="review_rating_para"><?php echo e(__('Your Rating & Review')); ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <input  type="text" class="form-control" id="review_title" name="review_title"
                           aria-describedby="textHelp" required placeholder="Review Title">
                </div>
                <div class="form-group">
                    <textarea minlength="10" class="form-control" required name="review_content" rows="12" placeholder="Your Review"></textarea>
                </div>
                <?php if(setting_item('review_upload_picture')): ?>
                    <div class="col-12 mb-2">
                        <div class="review_upload_wrap">
                            <div class="mb-3"><i class="fa fa-camera"></i> <?php echo e(__('Add photo')); ?></div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="review_upload_btn">
                                        <span class="helpText" id="helpText"></span>
                                        <input type="file" id="file" multiple data-name="review_upload" data-multiple="1" accept="image/*" class="review_upload_file">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="review_upload_photo_list row"></div>
                                </div>
                            </div>


                        </div>
                    </div>
                <?php endif; ?>
                <input type="hidden" name="review_service_id" value="<?php echo e($row['id']); ?>">
                <input type="hidden" name="review_service_type" value="<?php echo e($review_service_type); ?>">
                <button type="submit" class="btn btn-thm"><?php echo e(__('Submit Review')); ?> <span class="flaticon-right-arrow-1"></span>
                </button>
            </form>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Agencies/Views/frontend/detail/review.blade.php ENDPATH**/ ?>