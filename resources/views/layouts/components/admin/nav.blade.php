<header class='fixed w-full z-10 top-0 flex flex-row text-lg'>
    <div class='basis-1/6'>
        <img src="{{asset('/images/unand-emas2-small.png')}}" alt="Logo Unand" width=180 height=180 class='flex flex-row justify-center m-5'/>
    </div>
    <div class='bg-white basis-5/6 flex flex-row justify-between items-center'>
        <div class='basis-1/6 mx-5'>
            <a href='#' class='font-semibold mx-5'>Panduan Admin</a>
        </div>
        <div class='basis-5/6 mx-5 flex flex-row justify-end'>
            <span class='font-semibold mx-2'>{{ $admin->nama }}</span>
            <span class='fa fa-user-circle-o text-2xl mx-5'></span>
        </div>
    </div>
</header>