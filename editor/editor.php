<?php

class editor extends plxPlugin {
	public function __construct($default_lang) {
		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		# D?clarations des hooks
		$this->addHook('AdminTopEndHead', 'AdminTopEndHead');
		$this->addHook('AdminFootEndBody', 'AdminFootEndBody');
		$this->addHook('AdminArticleTop', 'AdminArticleTop');
	}
	public function AdminTopEndHead() {?>

		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo PLX_PLUGINS ?>/editor/app/css/medium-editor.css">
		<link rel="stylesheet" href="<?php echo PLX_PLUGINS ?>/editor/app/css/themes/bootstrap.min.css">
		<style>
			*:focus {
			    outline: none;
			}
		</style>


	<?php
	}
	public function AdminFootEndBody() {?>
	<script src="<?php echo PLX_PLUGINS ?>/editor/app/js/medium-editor.js"></script>

	    <script>
	        var editor = new MediumEditor('#id_chapo',{
	                toolbar: {
	                    buttons: ['bold', 'italic', 'underline', 'strikethrough', 'quote', 'anchor', 'image', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull','pre','unorderedlist', 'orderedlist', 'removeFormat', 'h2', 'h3'],
	                },
	                buttonLabels: 'fontawesome',
	                anchor: {
	                    targetCheckbox: true
	                },
	                placeholder: 'Tapez votre texte pour la partie Chapo de votre article'
	            });
	        var editor = new MediumEditor('#id_content',{
	                toolbar: {
	                    buttons: ['bold', 'italic', 'underline', 'strikethrough', 'quote', 'anchor', 'image', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull','pre','unorderedlist', 'orderedlist', 'removeFormat', 'h2', 'h3'],
	                },
	                buttonLabels: 'fontawesome',
	                anchor: {
	                    targetCheckbox: true
	                },
	                placeholder: 'Tapez votre texte pour votre article'
	            });
	        
	    </script>

	<?php	
	}
}
?>