
<x-ajax_data_modal></x-ajax_data_modal>

<script>

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
            img.src = response.photos[0].src.landscape
            setTimeout(function(){
                img.classList.remove('lazy');
            },1000)
        });
    }

}
function load_image_form_pixabay(keyword, img){
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
                        setTimeout(function(){
                            img.classList.remove('lazy');
                        },1000)
                }

            });
        }
}

    var i_image= 0;

    function form__by__image_load(keyword, img){

        if(i_image%2==0){
             load_image_form_pexels(keyword, img)
        }else{
            load_image_form_pixabay(keyword, img)
        }
        i_image++

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
