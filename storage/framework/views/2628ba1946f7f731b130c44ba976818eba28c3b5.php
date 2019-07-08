<?php $__env->startSection('title'); ?>
    Naslovna Strana
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main role="main" class="container" style="margin-top:spx">

    <div class="row">
    <div class="col-sm-8 blog-main">
    <?php if($posts): ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="blog-post">
    <h2 class="blog-post-title"><?php echo e($post->title); ?></h2>
    <p class="blog-post-meta"><small><i><?php echo e(Carbon\Carbon::parse($post->created_at)->format('d.m.Y. h:i:s ')); ?><a href=""><?php echo e($post->name); ?></a><i></small></p>

    <p><?php echo e(\Illuminate\Support\Str::words($post->description, 10, '...')); ?></p>
    <blockquote>
        <a href="<?php echo e(route('post.read', ['id' =>$post->id])); ?>" class="btn btn-primary btn-sm">See more</a></p>
    </blockquote>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <nav class="blog-pagination">
        <?php echo e($posts -> links()); ?>

    </nav>
    
    <aside class="col-sm-3 ml-sm-auto blog-sidebar">
        <div class="sidebar-module">
        <h4>Latest Posts</h4>
        <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ol class="list-unstyled">
            <li><a href="<?php echo e(route('post.read', ['id' =>$post->id])); ?>"><?php echo e(\Illuminate\Support\Str::words($archive->title, 6, '...')); ?></a></li>
        </ol>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
        <li><a href="">GitHub</a></li>
        <li><a href="">Twiter</a></li>
        <li><a href="">Facebook</a></li>
        </ol>
        </div>
    </aside>
    </div>
    </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moj_projekt\resources\views/post/index.blade.php ENDPATH**/ ?>