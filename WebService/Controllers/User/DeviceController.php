<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 17.12.2019
 * Time: 23:08
 */

namespace WebService\Controllers\User;


use BusinessLayer\Concrete\DeviceManager;
use System\Exceptions\ResponseException;
use WebService\Controllers\BaseController\Init;

class DeviceController extends Init
{

    private $device_db;
    public function __construct()
    {
        parent::__construct();

        $this->device_db=new DeviceManager();
    }

    public function Info(){
        $model = [
            'user_id'          => $this->user["id"],
            'device_id'        => get_post('device_id'),
            'device_os'        => get_post('device_os'),
            'device_model'     => get_post('device_model'),
            'device_brand'     => get_post('brand'),
            'device_locale'    => get_post('device_locale'),
            'device_country'   => get_post('device_country'),
            'app_version'      => get_post('get_version'),
            'readable_version' => get_post('readable_version'),
            'is_emulator'      => get_post('isEmulator'),
            'is_tablet'        => get_post('isTablet'),
            'api_level'        => get_post('getAPILevel'),
            'user_agent'       => get_post('user_agent'),
            'build_number'     => get_post('build_number')
        ];

        try {
            $result=$this->device_db->Control($model);
            jsonresponse($result);
        } catch (ResponseException $e) {
            jsonresponse($e->getResponse());
        }

    }
}