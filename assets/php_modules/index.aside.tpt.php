<!-- Aside -->
<aside class="col-md aside-desktop">
    <h1><a href="/"><?php echo $h1; ?></a></h1>
    <?php 
    //Только на главной
    echo "<h3>на кафедре ИТАС</h3>";
    echo $lab_po_classam;
    ?>
    <button aria-controls="nav" aria-expanded="false" class="btn btn-sm collapsed d-md-none" data-target="aside > nav" data-toggle="collapse">
        Меню
    </button>
    <hr>
    <nav class="collapse d-md-block">
        <ol start="16">
        <?php echo $aside_menu; ?>
        </ol>
        <hr>
        <ul>
        <?php echo $aside_menu_notLabs; ?>   
        </ul>
        <hr>
        <ul>
        <?php echo $aside_menu_other; ?>   
        </ul>
    </nav>
    
    <hr>
    <?php
    if ($calendar_off == false) { ?>
        <div class="calendar">
        <table>
            <script src="assets/js/calendar.js" ></script>
        </table> 
    </div>
    <hr>
    <?php } ?>
    
    <p><a href="https://vk.com/rullflex" class="text-muted">Горшков Дмитрий</a><br>
        <a href="mailto:libafer99@gmail.com" class="text-muted">libafer99@gmail.com</a></p>
        
        <p><a href="https://vk.com/1kulya1" class="text-muted">Куликов Максим</a><br>
        <a href="mailto:max59.tyt@gmail.com" class="text-muted">max59.tyt@gmail.com</a><br>
    <hr>
    <!--<a href="<?php echo $main_page_link_adress; ?>"><img src="assets/img/logo_itas_blue.svg" alt="itas_logo"></a>-->
</aside>
<!-- Aside Device -->
<aside class="col-md d-md-none">
    <h1><a href="/"><?php echo $h1; ?></a></h1>
    <?php 
    //Только на главной
    echo "<h3>на кафедре ИТАС</h3>";
    echo $lab_po_classam;
    ?>
</aside>
<aside class="col-md d-md-none" style="position: sticky; top: 0; z-index: 111; padding-top: 16px; padding-bottom: 16px;">
    <button aria-controls="nav" aria-expanded="false" class="btn btn-sm collapsed d-md-none" data-target="aside > nav" data-toggle="collapse" style="margin-top: 0;">
        Меню
    </button>
    <nav class="collapse d-md-block">
        <ol start="16">
        <?php echo $aside_menu; ?>
        </ol>
        <hr>
        <ul>
        <?php echo $aside_menu_notLabs; ?>   
        </ul>
        <hr>
        <ul>
        <?php echo $aside_menu_other; ?>   
        </ul>
    </nav>
</aside>