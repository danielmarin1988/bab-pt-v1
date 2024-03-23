
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

    function toggleMenu() {
        $('header nav').toggleClass('open');
        $('.backdrop').toggle();
    }

    $('.js-open-menu').click(toggleMenu);
    $('.js-close-menu, .js-close-backdrop').click(toggleMenu);

</script>