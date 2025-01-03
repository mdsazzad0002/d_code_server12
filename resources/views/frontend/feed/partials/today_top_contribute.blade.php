
    {{--  <div class="mb-1 mt-0">Top Contributor</div>  --}}
    <div class=" overflow-auto p-2 ">
        @foreach ($contribute_data as $contribute)
        <a href="{{ route('users.index', $contribute->username) }}" class="" style=" display:inline-block">
            <img class="w-100 h-100 lazy" style="object-fit: cover" data-src="{{ $contribute->upload_file }}" alt="{{ $contribute->name }}">
            <div class="holder_name" style="border-radius: 4px;">
                {{ Str::limit($contribute->name, 15, '...') }}
            </div>
        </a>
        @endforeach
    </div>


<style>
    .overflow-auto{
        overflow: auto;
        white-space: nowrap;
    }
    .overflow-auto a{
        margin-right: 8px;
        height: 160px;
        width: 125px;
        position: relative;
        overflow:hidden;

    }
    .overflow-auto a img{
        border-radius: 5px;
        background-position: center center;
    }
    .overflow-auto a .holder_name{
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        overflow: hidden;
        background: #6c757d;
        color: white;
        padding: 2px 5px;
        padding: 2px 5px;
    font-size: 15px;
    }
</style>
