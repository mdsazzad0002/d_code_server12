
<x-ajax_data_modal></x-ajax_data_modal>


<script>
    async function share_window(title =null, text = null, url = null) {
        // Check if the Web Share API is supported
        if (navigator.share) {
            try {
                let shareData = {
                    title: title ?? document.querySelector('title').innerHTML,
                    text: text ?? document.querySelector('meta[name=description]').getAttribute('content'),
                    url: url ?? window.location.href, // Use window.location.href to get the current URL
                };

                // Call the Web Share API
                await navigator.share(shareData);
                console.log('Share was successful!');
            } catch (error) {
                console.error('Error sharing:', error);
            }
        } else {
            console.log('Web Share API is not supported in this browser.');
            // Optionally, provide a fallback action here (like showing a custom share dialog)
        }
    }


    async function copy_to_clipboard(title =null, text =null, url = null) {
        try {
            // Gather the content to be copied
            let contentToCopy = `
                Title: ${title ?? document.querySelector('title').innerHTML}
                Description: ${text ?? document.querySelector('meta[name=description]').getAttribute('content')}
                URL: ${url ?? window.location.href}
            `;

            // Copy the content to the clipboard
            await navigator.clipboard.writeText(contentToCopy);

            // Success message or confirmation
            console.log('Content copied to clipboard!');
            alert('Content copied to clipboard!');
        } catch (error) {
            console.error('Error copying text:', error);
        }
    }


</script>

<script>
    function subscribe(thi){
     $.ajax({
         type:'get',
         url:'{{ url('subscribe') }}',
         data:{
             'subscribe' : $(thi).data('id')
         },
         success:function(data){
             {{--  console.log(data)  --}}
             data = JSON.parse(data)
             if(data.type == 'success'){
                 flasher.success(data.title);
                 $(thi).removeClass('btn-primary');
                 $(thi).addClass('btn-danger');
                 $(thi).find('span').html('Subscribed');
             }else if(data.type == 'warning'){
                 flasher.warning(data.title);
                 $(thi).removeClass('btn-danger');
                 $(thi).addClass('btn-primary');
                 $(thi).find('span').html('Subscribe');

             }
         }
     })
    }


 </script>

 <script>
    function report_modal_data(thi, id){
        $('#reportModal').modal('show');
        $('#reportModal').find('#post_id_id').val(id);
        $('#reportModal').find('#reportModalLabel').html($(thi).data('title'));


    }
 </script>

<script>
    function not_load_image_form_source(img){
        img.classList.remove('lazy');
        img.src = img.dataset.src;

        img.onerror = function() {
            // Remove the lazy class when an error occurs

            // Replace with fallback image
            img.setAttribute('data-src', '{{ dynamic_asset(0) }}');
            img.classList.add('lazy');
        };
    }

function load_image_form_pexels(keyword, img){
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
            if(response.photos.length > 0){
                img.src = response.photos[0].src.landscape
                img.classList.remove('lazy');
            }else{
                not_load_image_form_source(img)
            }

        }) .fail(function (jqXHR, textStatus, errorThrown) {
            // Handle AJAX request failure
            not_load_image_form_source(img); // Fallback or retry logic
        });;
    }

}
function load_image_form_pixabay(keyword, img){
        if(keyword == null){
            keyword = 'programming';
        }
      if(keyword.length > 2){
            var form = new FormData();
            var return_data ='';
            var settings = {
            "url": `https://pixabay.com/api/?key=45360085-2d224eab6a0d750f5199543f0&q=${keyword}&orientation=horizontal&safesearch=true&page=1&per_page=3`,
            "method": "GET",
            "timeout": 0,
            "dataType": "json",

            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": form
            };


            $.ajax(settings).done(function (response) {
                if (parseInt(response.totalHits) > 0){
                    img.src = response.hits[0].previewURL
                    img.classList.remove('lazy');
                }else{
                     load_image_form_pexels(keyword, img)
                }

            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                // Handle AJAX request failure
                load_image_form_pexels(keyword, img); // Fallback or retry logic
            });
        }
}


    function form__by__image_load(keyword, img){
        load_image_form_pixabay(keyword, img)
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
            url:'{{ route('comment.update') }}',
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


    var drag_startpageX = 0;
    var drag_startpageY = 0;

    document.querySelectorAll('.modal').forEach(element=>{
         element.addEventListener("dragstart", (e) => {
            const rect = e.target.getBoundingClientRect()
            drag_startpageX = e.pageX - rect.left
            drag_startpageY = e.pageY - rect.top
        })

        element.addEventListener("dragend", (e) => {
            const rect = e.target.getBoundingClientRect()
            const x = e.pageX - rect.left
            const y = e.pageY - rect.top
            if((drag_startpageX - x) >= 200 || (x - drag_startpageX ) >= 200 || (drag_startpageY - y) >= 200 || (y -drag_startpageY) >= 200){
                element.querySelector('.close').click();
            }else{
                //console.log('close false');

            }
            //console.log(y)
            //console.log(x)
        })
    })


</script>

<x-modal></x-modal>
<x-tostar></x-tostar>
