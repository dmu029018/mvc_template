
<div class="container">
    <h2 class="page-title">Lista de argumentos</h2>
    <ul>
        <?php foreach($args as $k=>$v):?>
            <li><strong><?=$k?>: </strong><?=$v?></li>
        <?php endforeach;?>
    </ul>
</div>