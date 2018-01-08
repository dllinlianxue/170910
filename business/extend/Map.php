<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/8
 * Time: 上午9:57
 */
//百度地图相关功能的封装
class Map {
    //根据行政地址获取经纬度的方法
    /**
     * @param $address地址信息 经纬度缩写LngLat
     */
    //静态(static)方法->调用的时候不用对象形式Map(),直接\Map::getLngLat,类名可以直接调用,不必创建对象
    public static function getLngLat($address){
      if (!$address){
          return '';
      }
      $data = [
         'address' => $address,
          'ak' => config('map.ak'),
          //文件的名字+点+配置的名字
          'output' => 'json'
          //最后形成的格式
      ];

      //组合形成完整的URL
        $url = config('map.baidu_map_url').config('map.geocoding_url').'?'.http_build_query($data);


        //发起请求
        $result = doCurl($url);
        return json_decode($result,true);
        //把json格式转化成数组
    }

    /**
     * 根据地理信息获取静态图(小地图图片)
     * @param $address
     *
     *
     */
    public static function getStaticImage($address){
        if (!$address){
            return '';
        }
        $data = [
            'center'=>$address,
            'ak'=>config('map.ak'),
            'height'=>config('map.height'),
            'width'=>config('map.width'),
            'zoom' => 14
        ];
        //组合形成完整的URL
        $url = config('map.baidu_map_url').config('map.static_image_url').'?'.http_build_query($data);

        //发起请求
        $result = doCurl($url);

        return $result;

    }

}
