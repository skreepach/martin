<?php
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=heroku_35a63eb77fee245;host=eu-mm-auto-fra-02-c.cleardb.net''bfa11752c77b7d','77c43c35');

class Friends extends \atk4\data\Model {
  public $table = 'martin';
  function init() {
    parent::init();
    $this->addField('nickname');
    $this->addField('password');
    $this->addField('birthday',['type'=>'date']);
    $this->addField('age');
  }
}
