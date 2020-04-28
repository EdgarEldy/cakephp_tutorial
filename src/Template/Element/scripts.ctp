<?= $this->Html->script('jquery-1.11.1.min') ?>
<?= $this->Html->script('jquery-3.4.1.min') ?>
<?= $this->Html->script('bootstrap.min') ?>
<?= $this->Html->script('chart.min') ?>
<?= $this->Html->script('chart-data') ?>
<?= $this->Html->script('easypiechart') ?>
<?= $this->Html->script('easypiechart-data') ?>
<?= $this->Html->script('bootstrap-datepicker') ?>
<?= $this->Html->script('bootstrap-table') ?>
<?= $this->Html->script('global') ?>
<?= $this->Html->script('fontawesome.min') ?>
<?= $this->Html->script('events') ?>
<script>
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    });
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    });
</script>
<script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    });
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    });
</script>
