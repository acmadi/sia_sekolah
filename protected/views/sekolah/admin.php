<?php
/* @var $this SekolahController */
/* @var $model Sekolah */

$this->breadcrumbs=array(
	'Sekolah'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Sekolah', 'url'=>array('index')),
	array('label'=>'Create Sekolah', 'url'=>array('create')),
);

?>

<h3>Manage Sekolah</h3>
<hr>
<div class="row-fluid">
<div class="span5" style="text-align: left">
    <div class="cms-admin-buttons">
        
        <?php $this->widget('bootstrap.widgets.TbButton',array(
                'icon'=>'plus white',
                'label'=>'Tambah Sekolah',
                'url'=>Yii::app()->createUrl('sekolah/create'),
                'type'=>'primary',
                'htmlOptions'=>array('target' => 'ajax-modal')
        )); ?>    
            </div>
</div>
<div class="span7" style="text-align: right">
   
    <?php $this->renderPartial('_search_sort',array(
            'model'=>$model,
    )); ?>
        
</div>
</div>

<?php $this->widget('MyCGridView', array(
	'id'=>'sekolah-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
            array(
                    'header' => 'No',
                    'value' => '$row+1',
                    'htmlOptions'=>array('align'=>'center','style'=>'width: 5%')
                ),
		'id',
		'alamat',
		'kabupaten',
		'kecamatan',
		'nama',
		'nss',
		/*
		'provinsi',
		'id_guru_kepsek',
		*/
		array(
                    'class'=>'MyCButtonColumn',
                    'buttons'=>array(
                        'view'=>array(
                            'options'=>array('target'=>'ajax-modal','title'=>'View')
                        ),
                        'update'=>array(
                            'options'=>array('target'=>'ajax-modal','title'=>'Edit')
                        ),
                        'delete'=>array(
                            'options'=>array('header'=>'Delete Data','target'=>'confirm','message'=>'Apakah anda yakin akan menghapus tahun data ini?',)
                        ),
                    ),
                    'header'=>'Action'
		),
	),
)); ?>


 <?php 
    $this->renderPartial('_search',array(
            'model'=>$model,
    )); 
    ?>    
