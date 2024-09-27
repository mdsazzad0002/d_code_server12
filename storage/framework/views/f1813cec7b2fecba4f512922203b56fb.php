<?php if (isset($component)) { $__componentOriginal42d934a7d1fb95b9706d4d8ab536daec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="row">

        <div class="col-md-6  position-relative">
            <div class="hintcode">
                HTML
            </div>
            <textarea name="html_htmllive_text" placeholder="HTML" class="form-control" id="html_htmllive_text"></textarea>
        </div>
        <div class="col-md-6  position-relative">
            <div class="hintcode">
                CSS
            </div>
            <textarea name="css_csslive_text" placeholder="css" class="form-control" id="css_csslive_text"></textarea>
        </div>
        <div class="col-md-6  position-relative">
            <div class="hintcode">
                JS
            </div>
            <textarea name="js_jslive_text" placeholder="js" class="form-control" id="js_jslive_text"></textarea>
        </div>

        <div class="col-md-6 position-relative">
            <div class="hintcode">
                Output
            </div>
            






            <iframe src="" frameborder="0" name="output" id="output_live_editor" style="background: white !important; width:100%"></iframe>

        </div>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec)): ?>
<?php $attributes = $__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec; ?>
<?php unset($__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42d934a7d1fb95b9706d4d8ab536daec)): ?>
<?php $component = $__componentOriginal42d934a7d1fb95b9706d4d8ab536daec; ?>
<?php unset($__componentOriginal42d934a7d1fb95b9706d4d8ab536daec); ?>
<?php endif; ?>


<style>
    * {
        margin: 0;
        padding: 0;

    }

    body {
        overflow: hidden;
    }

    #output_live_editor,
    .form-control {
        width: 100%;
        outline: none;
        border-color: #aeaeae;
        max-width: -webkit-fill-available;
        max-width: 100%;
        min-width: 100%;
        min-height: 50vh;
        max-height: 50vh;
        border-width: 1px;
        padding: 7px;

    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .row .col-md-6 {
        width: 50%;
        flex: 50%;
    }



    iframe {
        padding: 0px !important;
        margin: 0px;

    }

    .position-relative {
        position: relative;
    }

    .hintcode {
        position: absolute;
        background: #444444;
        color: white;
        padding: 7px;
        font-size: 11px;
        right: 0;
        min-width: 40px;
        text-align: center;
        border-bottom-left-radius: 5px;
        letter-spacing: 2px;
    }

    .form-control {
        background: #e0e0e0;

    }

</style>

<div class="source_predefined">
    <?php echo Str::markdown($post_find); ?>

</div>



<script>
    var output_live_editor = document.querySelector('#output_live_editor');

    var html_htmllive_text = document.querySelector('#html_htmllive_text');
    var css_csslive_text = document.querySelector('#css_csslive_text');
    var js_jslive_text = document.querySelector('#js_jslive_text');

    var parlsechange = 0;

    function clockreset() {
        parlsechange = 0
        setTimeout(function() {
            parlsechange = 1
        }, 500)
    }

    html_htmllive_text.addEventListener('input', function() {
        clockreset();
    });
    css_csslive_text.addEventListener('input', function() {
        clockreset();
    });

    js_jslive_text.addEventListener('input', function() {
        clockreset();
    });


    function outputrander() {
        

        document.querySelector('#output_live_editor').querySelector('html').innerHTML = '420'


    }

    var i = 0;
    setInterval(function() {
        if (parlsechange == 1) {
            outputrander();
            parlsechange = 0;
        }
    }, 1500)


    function setSourceData() {

        var output_data_primary_socuce = document.querySelector('.source_predefined');




        //HTML rander
        var out_html = '';
        var language_html = output_data_primary_socuce.querySelectorAll('code.language-html');
        language_html.forEach(function(element) {
            out_html += element.textContent;
        });
        html_htmllive_text.value = out_html;
        //End HTML rander


        //CSS render
        var out_css = '';
        var language_css = output_data_primary_socuce.querySelectorAll('code.language-css');
        language_css.forEach(function(element) {
            out_css += element.textContent;
        });
        css_csslive_text.value = out_css;
        //End Css render


        //JS render
        var out_js = '';
        var language_js = output_data_primary_socuce.querySelectorAll('code.language-js');
        language_js.forEach(function(element) {
            out_js += element.textContent;
        });
        js_jslive_text.value = out_js;
        //End JS render


        outputrander();
    }
    setSourceData()

</script>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/editor/partials/source.blade.php ENDPATH**/ ?>