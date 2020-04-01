

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/styles/cart.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/styles/cart_responsive.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

        <div class="cart_section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cart_container">
                            
                            <!-- Cart Items -->
                            <div class="cart_items">
                                <ul class="cart_items_list">

                                    <!-- Cart Item -->
                                    <li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start" style="width: 50%;">
                                        <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                                            <div><div class="product_image"><img src="<?php echo e(asset('public/images/product_1.jpg')); ?>" alt=""></div></div>
                                            <div class="product_name_container">
                                                <div class="product_name"><a href="#">Костюм "Лора"</a></div>
                                                <div class="product_text">Second line for additional info</div>
                                            </div>
                                        </div>
                                        <div class="product_price product_text">19.99</div>
                                    </li>
                                    <hr>
                                   <!-- Cart Item -->
                                    
                                </ul>
                            </div>
                            <!-- Cart Buttons -->
                            <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                                <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <div class="button button_clear trans_200"><a href="#">clear</a></div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>                 
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/estimator47/www/laravel-product/resources/views/products/cart.blade.php ENDPATH**/ ?>