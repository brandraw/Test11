<script>
    jQuery(".megamenu").hide();

jQuery( function(){
    
    jQuery('.mainmenu').hover(
        function(){

            jQuery(".megemenu").show();

        }
    );

    jQuery('.megamenu').hover(
        function(){

            jQuery(".megamenu").show();
        },
        function(){

            jQuery(".megamenu").hide();
        }
    );
});
</script>