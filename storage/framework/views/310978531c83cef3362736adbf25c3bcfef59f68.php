<?php $__env->startSection('css'); ?>
<style>
.product {opacity: 0.7;}
.product:hover {opacity: 1}
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<div class="super_container_inner">
    <div class="super_overlay"></div>
    <div class="products">
        <div class="container">
            <div class="row products_row">
 
<?php
//print_r($products);
?>

              <?php echo $__env->make('product.brick-standart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
	/*
	$(document).ready(function(){
   $('.product').css('opacity', 0.7)
   .mouseover(function(){
      $(this).css('opacity', 1);  
   })
   .mouseout(function(){
      $(this).css('opacity', 0.7);  
   });   
}); */

</script> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/estimator47/www/laravel-product/resources/views/products/index.blade.php ENDPATH**/ ?>