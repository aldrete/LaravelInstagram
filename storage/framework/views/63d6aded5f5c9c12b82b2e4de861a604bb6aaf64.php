<?php $__env->startSection('content'); ?>
<div class="container">
      <div class="row">
          <div class="col-3 p-5">
            <img src="https://scontent-dfw5-1.cdninstagram.com/vp/602891774d88644188cee337a556514e/5DB47138/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-dfw5-1.cdninstagram.com" class="rounded-circle">
      </div>
      <div class="col-9 pt-5">
          <div class ="d-flex justify-content-between align-items-baseline">
              <h1> <?php echo e($user->username); ?></h1>
              <a href="#">Add new post</a>

          </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> post</div>
                <div class="pr-5"><strong>22k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold"><?php echo e($user->profile->title); ?></div>
        <div><?php echo e($user->profile->description); ?></div>
        <div><a href="#"><?php echo e($user->profile->url); ?></a></div>

      </div>
    </div>

     <div class="row pt-5">
         <div class="col-4">
             <img src="https://scontent-dfw5-1.cdninstagram.com/vp/bf9a69f07528cc6dd00a98fc94e8c081/5DC6DA4B/t51.2885-15/e35/c1.0.747.747/s240x240/64772549_209695326687917_9055357715441137701_n.jpg?_nc_ht=scontent-dfw5-1.cdninstagram.com" class="w-100">
         </div>
         <div class="col-4">
             <img src="https://scontent-dfw5-1.cdninstagram.com/vp/f46ff038a376ffdfe8a5920cc3960a80/5DA7E1B7/t51.2885-15/sh0.08/e35/c7.0.736.736a/s640x640/64784397_2062957977165387_5650540829266693249_n.jpg?_nc_ht=scontent-dfw5-1.cdninstagram.com" class="w-100">
        </div>
        <div class="col-4">
             <img src="https://scontent-dfw5-1.cdninstagram.com/vp/e0e413a7f7a1990cbabc861e313eac94/5DBD4AB8/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/65285896_859971694372408_6053802884198789538_n.jpg?_nc_ht=scontent-dfw5-1.cdninstagram.com" class="w-100">
        </div>
     </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aldrete\FreeCodeGram\resources\views/home.blade.php ENDPATH**/ ?>