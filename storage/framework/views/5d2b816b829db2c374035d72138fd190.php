
<?php if (isset($component)) { $__componentOriginaldcb4a6ef2e26d6e2b94d02d824838c5e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldcb4a6ef2e26d6e2b94d02d824838c5e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ajax_data_modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ajax_data_modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldcb4a6ef2e26d6e2b94d02d824838c5e)): ?>
<?php $attributes = $__attributesOriginaldcb4a6ef2e26d6e2b94d02d824838c5e; ?>
<?php unset($__attributesOriginaldcb4a6ef2e26d6e2b94d02d824838c5e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldcb4a6ef2e26d6e2b94d02d824838c5e)): ?>
<?php $component = $__componentOriginaldcb4a6ef2e26d6e2b94d02d824838c5e; ?>
<?php unset($__componentOriginaldcb4a6ef2e26d6e2b94d02d824838c5e); ?>
<?php endif; ?>

<script>
    function form__by__image_load(keyword, img){
        if(keyword.length > 2){
              var form = new FormData();
            var return_data ='';
            var settings = {
            "url": `https://api.pexels.com/v1/search?query=${keyword}&per_page=1`,
            "method": "GET",
            "timeout": 0,
            "dataType": "json",
            "headers": {
                "Authorization": "GUJ4dl3GG1tg68e9QMawgUtmbp6tu0skUg5AKNRt9FHvXWcEBESCOagO",

            },
            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": form
            };


            $.ajax(settings).done(function (response) {
                img.src = response.photos[0].src.landscape
                setTimeout(function(){
                    img.classList.remove('lazy');
                },1000)
            });
        }


    }






    //Lazy load
    var lazyloadThrottleTimeout;
    var hasScrolled = false;

    function lazyload() {
        var lazyloadImages = document.querySelectorAll("img.lazy");
        if (lazyloadThrottleTimeout) {
            clearTimeout(lazyloadThrottleTimeout);
        }

        lazyloadThrottleTimeout = setTimeout(function() {
            var scrollTop = window.pageYOffset;
            lazyloadImages.forEach(function(img) {
                if (img.offsetTop < (window.innerHeight + scrollTop)) {
                    if(img.dataset.src.includes('fixing')){
                        var title = img.getAttribute('alt');
                         form__by__image_load(title, img);
                    }else{
                     img.src = img.dataset.src;
                     setTimeout(function(){
                        img.classList.remove('lazy');
                    },1000)
                    }

                }
            });

            // Remove loaded images from the NodeList
            lazyloadImages = document.querySelectorAll("img.lazy");

            // Scroll horizontally by 100% of the window width only once
            if (!hasScrolled && lazyloadImages.length > 0) {
                window.scrollBy(window.innerWidth, 0);
                hasScrolled = true;
            }


        }, 20);
    }
    lazyload()
    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);

    // Initial call to load images that are in view on page load




    function vote(type, comments_id, post_id){
        $.ajax({
            type:'get',
            url:'<?php echo e(route('comment.update')); ?>',
            data:{
                comment_id :comments_id,
                type :type,
                post_id: post_id,
            },

            success:function(data){
              $('.upvote'+comments_id).html(data.upvote);
              $('.downvote'+comments_id).html(data.downvote);

                if($('.'+type+comments_id).parents('button.active').length){
                    $('.'+type+comments_id).parents('button').removeClass("active");
                }else{
                    $('.'+type+comments_id).parents('div.btn-group').find('button').removeClass('active');
                    $('.'+type+comments_id).parents('button').addClass("active");
                }
            }
        })
    }






</script>
<?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tostar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tostar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48)): ?>
<?php $attributes = $__attributesOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48; ?>
<?php unset($__attributesOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48)): ?>
<?php $component = $__componentOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48; ?>
<?php unset($__componentOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48); ?>
<?php endif; ?>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/common/js.blade.php ENDPATH**/ ?>