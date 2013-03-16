Yii-IntroJS
==========

IntroJs Widget for Yii php framework

IntroJs is an open source project by <a href="http://usabli.ca/">usabli.ca</a> team.

It introduced itself by:

    Better introductions for websites and features with a step-by-step guide for your projects.

read more about IntroJs <a href="https://github.com/usablica/intro.js">here</a>.



##Setup:
extract introjs folder under protected/extentions folder

##Usage:
in view files

```php
$this->widget('application.extensions.introjs.IntroJs',array(
    'data'=>array(
        array('id'=>'introID1','step'=>1,'intro'=>'Hello World!'),
        array('id'=>'IntroID2','step'=>2,'intro'=>'Yii widget powered By Mohammad Moein Hosseini Manesh'),
        /* all step and data should be defined here*/
        array('id'=>'introIDStart','start'=>true), // define one element as starter
    )
));
```