<?php
namespace app\home\model;

use think\Model;

use think\model\concern\SoftDelete;

class Milaixian extends Model{
    
    use SoftDelete;
    
    protected $pk = 'id_milaixian';
    
    protected $table = 'al_milaixian';
    
    protected $type = [];
    
    protected static function init()
    {
        
    }
    
    
}