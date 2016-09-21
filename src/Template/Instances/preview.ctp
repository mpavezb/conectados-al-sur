<!-- Available Actions -->
<?php $this->start('available-actions'); ?>
<?php $this->end(); ?>

<!-- Page Content -->
<div class="fullwidth page-content">

<div class="row">
    <div class="small-12 column preview-title">
        <h3><?= h($instance->name) ?></h3>
    </div>
</div>

<div class="row preview-desc">
    <div class="small-12 columns">
        <?= $this->Text->autoParagraph(h($instance->description)); ?>
    </div>
</div>

<div class="row preview-imgs">
    <div class="small-10 small-offset-1 medium-5 medium-offset-1 columns">
        <?= $this->Html->image('graph_preview.png', [
            'alt' => 'View Map',
            'url' => ['controller' => 'Instances', 'action' => 'dots', $instance->namespace]
        ]) ?>
    </div>
    <div class="small-1 medium-0 columns"></div>
    <div class="small-10 small-offset-1 medium-5 medium-offset-1 columns">
        <?= $this->Html->image('map_preview.png', [
            'alt' => 'View DOTPLOT',
            'url' => ['controller' => 'Instances', 'action' => 'map', $instance->namespace]
        ]) ?>        
    </div>
    <div class="small-1 medium-6 columns"></div>
</div>

</div>