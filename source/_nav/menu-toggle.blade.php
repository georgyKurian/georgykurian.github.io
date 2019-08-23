<button class="flex justify-center items-center h-12 px-5 rounded-full lg:hidden focus:outline-none"
    onclick="navMenu.toggle()"
>
    <svg id="js-nav-menu-show" xmlns="http://www.w3.org/2000/svg"
        class="fill-current text-white h-9 w-8" viewBox="0 0 32 32"
    >
        <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
    </svg>

    <svg id="js-nav-menu-hide1" xmlns="http://www.w3.org/2000/svg"
        class="hidden fill-current text-white h-9 w-8" viewBox="0 0 36 30"
    >
        <polygon points="32.8,4.4 28.6,0.2 18,10.8 7.4,0.2 3.2,4.4 13.8,15 3.2,25.6 7.4,29.8 18,19.2 28.6,29.8 32.8,25.6 22.2,15 "/>
    </svg>
    <!-- External Link icon by Icons8 -->
<svg id="js-nav-menu-hide"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" viewBox="0 0 1792 1896.0833" class="hidden fill-current text-white h-9 w-8" >
    <path d="M1408 928v320q0 119-84.5 203.5T1120 1536H288q-119 0-203.5-84.5T0 1248V416q0-119 84.5-203.5T288 128h704q14 0 23 9t9 23v64q0 14-9 23t-23 9H288q-66 0-113 47t-47 113v832q0 66 47 113t113 47h832q66 0 113-47t47-113V928q0-14 9-23t23-9h64q14 0 23 9t9 23zm384-864v512q0 26-19 45t-45 19-45-19l-176-176-652 652q-10 10-23 10t-23-10L695 983q-10-10-10-23t10-23l652-652-176-176q-19-19-19-45t19-45 45-19h512q26 0 45 19t19 45z"></path>
</svg>
</button>

@push('scripts')
<script>
    const navMenu = {
        toggle() {
            const menu = document.getElementById('js-nav-menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('lg:block');
            document.getElementById('js-nav-menu-hide').classList.toggle('hidden');
            document.getElementById('js-nav-menu-show').classList.toggle('hidden');
        },
    }
</script>
@endpush
