<div style="text-align: right;">
    <section id="theme" style="margin-top: 13px; margin-right: 20px;">
        <? if(!isset($_GET['theme']) || isset($_GET['theme']) && $_GET['theme'] == 'light' || isset($_GET['theme']) && $_GET['theme'] == 'errorlight') { ?>
            <img draggable="false" src="../imagens/casinha_blue.png" alt="" style="max-height: 35px; max-width:35px; cursor:pointer;" onclick="switch_theme('dark')">
        <? } ?>
        <? if(isset($_GET['theme']) && $_GET['theme'] == 'dark' || isset($_GET['theme']) && $_GET['theme'] == 'errordark') { ?>
            <img draggable="false" src="../imagens/casinha_icon.png" alt="" style="max-height: 35px; max-width:35px; cursor:pointer;" onclick="switch_theme('light')">
        <? } ?>
    </section>
</div>