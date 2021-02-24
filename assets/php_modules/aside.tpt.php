<!-- Aside -->
<aside class="col-md aside-desktop">
    <h1><a href="<?php echo $folder_name; ?>"><?php echo $h1; ?></a></h1>
    
    <p>
        <i class="fas fa-caret-left"></i> <a href="<?php echo $main_page_link_adress; ?>" title="<?php echo $main_page_link_adress; ?>"><?php echo $to_main_linktext; ?></a>
        <br>
        <?php echo $aside_links; ?>
    </p>
    <button aria-controls="nav" aria-expanded="false" class="btn btn-sm collapsed d-md-none" data-target="aside > nav" data-toggle="collapse">
        Меню
    </button>
    <hr>
    <nav class="collapse d-md-block" >
        <ul>
        <?php echo $aside_menu_notLabs; ?>   
        </ul>
        <div class="dinamicMenu"></div>
    </nav>
    
</aside>
<!-- Aside Device -->
<aside class="col-md d-md-none">
    <h1><a href="/"><?php echo $h1; ?></a></h1>
    <p>
        <i class="fas fa-caret-left"></i> <a href="<?php echo $main_page_link_adress; ?>" title="<?php echo $main_page_link_adress; ?>"><?php echo $to_main_linktext; ?></a>
        <br>
        <?php echo $aside_links; ?>
    </p>
</aside>
<aside class="col-md d-md-none" style="position: sticky; top: 0; z-index: 111; padding-top: 16px; padding-bottom: 16px;">
    <button aria-controls="nav" aria-expanded="false" class="btn btn-sm collapsed d-md-none" data-target="aside > nav" data-toggle="collapse" style="margin-top: 0;">
        Меню
    </button>
    <nav class="collapse d-md-block">
    <div class="dinamicMenu"></div>
    </nav>
</aside>