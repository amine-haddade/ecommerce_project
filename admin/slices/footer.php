<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // $('.show_menu_icon').on('click', function() {  
            //     $('.header').removeClass('active');// add class header contien left 0px pour hidden
            //     $('.show_menu_icon').hide();// supprmer élément appliquer event  <<('.show_menu_icon')>> =>display:none=remive
            // });

            $('.head i.fa-bars').on('click', function() {// meme procesuse de <<('.show_menu_icon')>>
            $('.header').toggleClass('active');
            $('main').toggleClass('expanded');
            // $('.sidbar ul li a').toggleClass('toggle_position');
                

            //     }
                $('.show_menu_icon').show();// afficher icon de show
                $('.sidbar ul li a i.fa-angle-right').toggleClass('show-block');// afficher icon de show
            });

            $('.sub-btn').on('click', function() {// click dans li pour drop dow menu
                $(this).children('i').toggleClass('rotate');
                var parentLi = $(this).closest('li');

                // Check if the background is already blue
                if (parentLi.data('bg-blue')) {
                    parentLi.css('background-color', '');
                    parentLi.data('bg-blue', false);
                } 
                else {
                    parentLi.css('background-color', '#4070f4');
                    parentLi.data('bg-blue', true);
                 
                }

               // l'élément appliquer la foction sibling next element i
                $(this).next('.menu_drop').slideToggle();
                let kk=$(this).next('.menu_drop');
                $('.head i.fa-bars').on('click',function(){
                    kk.slideUp();
                    parentLi.css('background-color', '');
                    parentLi.data('bg-blue', false);
                })
            });
        });
    </script>
</body>
</html>