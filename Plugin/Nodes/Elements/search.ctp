<form id="searchform" method="post" action="javascript: document.location.href=''+Croogo.basePath+'search/q:'+encodeURI($('#searchform #q').val());">
<?php
	$qValue = null;
	if (isset($this->request->params['named']['q'])) {
		$qValue = $this->request->params['named']['q'];
	}
	echo $this->Form->input('q', array(
		'label' => false,
		'name' => 'q',
		'value' => $qValue,
        'class'=>'search-field'
	));
	echo $this->Form->button('<i class="fa fa-search search"></i>',array('class'=>'search-button'));
?>
</form>