<?php $__env->startSection('title'); ?>
    Naslovna Strana
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main role="main" class="container" style="margin-top:spx">

    <div class="row">
    <div class="col-sm-8 blog-main">
    <div class="blog-post">
    <h2 class="blog-post-title">Posts Jedan</h2>
    <p class="blog-post-meta"><small><i>December 23, 2013 by <a href="#">Mario</a><i></small></p>

    <p>Tekst članka... <a href="#">Kliknite za više</a></p>
    <blockquote>
        <p>Još teksta...<a href="" class="btn btn-primary btn-sm">Learn more</a></p>
    </blockquote>
    </div>

    <div class="blog-post">
    <h2 class="blog-post-title">Posts Dva</h2>
    <p class="blog-post-meta"><small><i>December 24, 2013 by <a href="#">Mario</a><i></small></p>

    <p>Tekst članka... <a href="#">Kliknite za više</a></p>
    <blockquote>
        <p>Još teksta...<a href="" class="btn btn-primary btn-sm">Learn more</a></p>
    </blockquote>
    </div>

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

    <aside class="col-sm-3 ml-sm-auto blog-sidebar">
        <div class="sidebar-module">
        <h4>Latest Posts</h4>
        <ol class="list-unstyled">
        <li><a href="#">March 2019</a></li>
        <li><a href="#">Februray 2019</a></li>
        <li><a href="#">January 2019</a></li>
        </ol>
        </div>

        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
        <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twiter</a></li>
        <li><a href="#">Facebook</a></li>
        </ol>
        </div>
    </aside>
    </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moj_projekt\resources\views/post/index.blade.php ENDPATH**/ ?>