jQuery(function ($) {
    $(document).ready(function () {
        $(document).on('change', '#select-currency', function(e) {
            if (this.options[e.target.selectedIndex].value === 'eur') {
                $(".price.gbp").css("display", "none");
                $(".price.usd").css("display", "none");
                $(".price.eur").css("display", "block");
            } else if (this.options[e.target.selectedIndex].value === 'usd') {
                $(".price.gbp").css("display", "none");
                $(".price.usd").css("display", "block");
                $(".price.eur").css("display", "none");
            } else if (this.options[e.target.selectedIndex].value === 'gbp') {
                $(".price.gbp").css("display", "block");
                $(".price.usd").css("display", "none");
                $(".price.eur").css("display", "none");
            }
        });
    });
});