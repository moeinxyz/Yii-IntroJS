<?php
/*
 * author  : Mohammad Moein Hosseini Manesh
 * mail    : moein7tl@gmail.com
 * website : moeinhm.ir
 * weblog  : hivemined.ir
 */
class IntroJs extends CWidget{
    
        private $introjsPath;
        
        public $data = array();
        
        public function run()
	{
            $path = Yii::getPathOfAlias('application.extensions.introjs.assets');
            $this->introjsPath =  Yii::app()->assetManager->publish($path);
            
            Yii::app()->clientScript->registerCssFile($this->introjsPath.'/css/introjs.min.css');
            Yii::app()->clientScript->registerCoreScript('jquery');
            Yii::app()->clientScript->registerScriptFile($this->introjsPath.'/js/intro.min.js');
            Yii::app()->clientScript->registerScriptFile($this->introjsPath.'/js/YiiIntroJS.js');
            foreach($this->data as $introData){
                if (isset($introData['step']))
                    Yii::app()->clientScript->registerScript('introJs'.$introData['id'],"YiiIntroJS.set('".$introData['id']."',". $introData['step'] .",'". addslashes($introData['intro']) . "','" . addslashes($introData['position']) . "');");
                if (isset($introData['start']) AND $introData['start'] == TRUE){
                    if (!isset($introData['event']))
                        $introData['event'] = 'onclick';
                    Yii::app()->clientScript->registerScript('introJs'.$introData['id'],"YiiIntroJS.start('". $introData['id'] . "," . $introData['event'] ."')");}
                if (isset($introData['exit']) AND $introData['exit'] == TRUE){
                    if (!isset($introData['event']))
                        $introData['event'] = 'onclick';
                    Yii::app()->clientScript->registerScript('introJs'.$introData['id'],"YiiIntroJS.exit('". $introData['id'] . "," . $introData['event'] ."')");}
                
            }
	}
        
}

?>
