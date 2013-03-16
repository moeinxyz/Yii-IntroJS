Yii-IntroJS
==========

IntroJs Widget for Yii php framework

Setup:
extract introjs folder under protected/extentions folder

Usage:
in view files

```php
$this->widget('application.extensions.introjs.IntroJs',array(
    'data'=>array(
        array('id'=>'introID1','step'=>1,'intro'=>'Hello World!'),
        array('id'=>'IntroID2','step'=>2,'intro'=>'Yii widget powered By Mohammad Moein Hosseini Manesh'),
        /* all step and data defined here */
        array('id'=>'introIDStart','start'=>true), // define one element as starter
    )
));
```