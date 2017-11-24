<?php
namespace Storage\Framework\Files;

class GetThePathClass
{
    /*
     * ----------------------------------------------------
     * author:JoyBoy
     * time:2017年11月24日22:33:42
     * conteng:定义一个获取远程文件的雏形类
     * ----------------------------------------------------
     *
     * $files_addres:抓取的文件地址
     * $storage_location:抓取后存放的地点
     * $demand:按什么需求抓取
     */
    protected           $files_address = [];
    protected           $storage_location;
    protected           $demand;

    public function __construct()
    {

    }
    /*
     * 获取文件加载初始化信息方法
     */
    public function get_file($files_address, $storage_location, $demand)
    {

    }

    /*
     * url是否正确正确返回 "url"
     */
    public function is_file($url)
    {
        if (file_exists($url)) {
            return $url;
        }
        return false;
    }

    /*
     * 判断保存文件的文件夹是否存在正确返回 "url"
     * 如不存在自动创建文件夹
     */
    public function is_folder($url)
    {
        if (is_string($url)) {
            if (!file_exists($url)) {
                
            }
            return $url;
        }
    }
}