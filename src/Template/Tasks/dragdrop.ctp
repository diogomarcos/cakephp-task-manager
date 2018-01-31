<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<head>
    <title>Gerenciador de Tarefas</title>
    <link href="<?php echo $this->request->webroot; ?>css/jquery-ui.css" rel="stylesheet">
    <link href="<?php echo $this->request->webroot; ?>css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="<?php echo $this->request->webroot; ?>js/jquery.js"></script>
    <script src="<?php echo $this->request->webroot; ?>js/jquery-ui.js"></script>


    <script type="text/javascript">
    $(document).ready(function(){
        $('.reorder_link').on('click',function(){
            $("ul.reorder-tasks-list").sortable({ tolerance: 'pointer' });
            $('.reorder_link').html('salvar priorização');
            $('.reorder_link').attr("id","save_reorder");
            $('#reorder-helper').slideDown('slow');
            $('.task_link').attr("href","javascript:void(0);");
            $('.task_link').css("cursor","move");
            $("#save_reorder").click(function( e ){
                if( !$("#save_reorder i").length ){
                    $(this).html('').prepend('<img src="<?php echo $this->request->webroot; ?>img/refresh-animated.gif"/>');
                    $("ul.reorder-tasks-list").sortable('destroy');
                    $("#reorder-helper").html( "Priorizando as Tarefas - Isso pode demorar um pouco. Por favor, não navegue em outra página." ).removeClass('light_box').addClass('notice notice_error');

                    var h = [];
                    $("ul.reorder-tasks-list li").each(function() {  h.push($(this).attr('id').substr(8));  });

                    $.ajax({
                        type: "POST",
                        async: true,
                        cache: false,
                        url: '<?php echo $this->request->webroot; ?>tasks/dragdrop',
                        data: {ids: " " + h + ""},
                        success: function(){
                            window.location.reload();
                        }
                    });
                    return false;
                }
                e.preventDefault();
            });
        });
    });
    </script>
</head>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Gerenciar Tarefas'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="tasks view large-9 medium-8 columns content">
    <div style="margin-top:50px;">
        <a href="javascript:void(0);" class="btn outlined mleft_no reorder_link" id="save_reorder">priorizar tarefas</a>
        <div id="reorder-helper" class="light_box" style="display:none;">1. Arraste as tarefas para priorizá-la.<br>2. Clique em 'Salvar Priorização' quando terminar.</div>
        <div class="task">
            <ul class="reorder_ul reorder-tasks-list">
            <?php
                if(!empty($result)){
                    if(!empty($test)){ echo $test;}
                    foreach($result as $row){
            ?>
                <li id="task_li_<?php echo $row['id']; ?>" class="ui-sortable-handle">
                    <a href="javascript:void(0);" style="float:none;" class="task_link">
                        <h3><?php echo $row['title']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                    </a>
                </li>
            <?php } } ?>
            </ul>
        </div>
    </div>
</div>