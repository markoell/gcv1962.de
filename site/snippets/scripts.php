<?= js('assets/js/photoswipe-gcv.js') ?>
<script>
    function scrollFunction() {

        if($(window).width() <= 992){
            return
        }

        var logo = $("#logo img");

        if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
            logo.css({ width: "100px" });
        }
        else {
            logo.css({ width: "200px" });
        }
    }

    $(document).ready(
        function(){
            $(window).on("scroll", scrollFunction);
            
            //Remove the '#' char on redirect via logo
            if(window.location.href === "<?= url()?>/#"){
                history.pushState({
                    id: 'startpage'
                    }, '<?= $site->title()->html() ?> | <?= $page->title()->html() ?>', '<?= url()?>/');
            }

            var homeLink = $("a#homelink").click(function() {
                
                window.location.href = "<?= url() ?>/#";
                return false;
            
            });
        });
    
</script>
