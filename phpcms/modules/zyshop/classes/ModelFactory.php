<?php
/**
 * Created by PhpStorm.
 * User: 徐强
 * Date: 2019/4/25
 * Time: 14:12
 */
//工厂模式取model文件
namespace  zyshop\classes;

interface model_List
{
    static function getModel($modelName);
}
class modelList implements model_List
{
    public function __construct()
    {
    }
    static function getModel($modelName = '')
    {
        switch ($modelName)
        {
            case "zyshop": return \pc_base::load_model("zyshop_model");
            default:\Res::Error("没有这个model");
        }
        // TODO: Implement getModel() method.
    }
}
class modelFactory
{
    public static function Create()
    {
        return new modelList();
    }
}