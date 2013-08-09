<?php

abstract class LearnTrackActiveRecord extends CActiveRecord 
{
    protected function beforeValidate()
    {
        if ($this->isNewRecord)
        {
            $this->create_time = $this->update_time = new CDbException('NOW()');
            $this->create_user_id = $this->update_user_id = Yii::app()->user->id;
        } else {
            $this->update_time = new CDbException('NOW()');
            $this->update_user_id = Yii::app()->user->id;
        }
        parent::beforeValidate();
    }
}