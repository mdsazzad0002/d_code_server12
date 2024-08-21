<script>
$('.pagination a').on('click', function(e){
    e.preventDefault();
    var url = $(this).attr('href');
    $.get(url, $('#search').serialize(), function(data){
        $('#paginated_content').html(data);
        Prism.highlightAll();
    });
});
</script>
<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/common/paginated_ajax.blade.php ENDPATH**/ ?>