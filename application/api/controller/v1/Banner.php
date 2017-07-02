<?php
/**
 * Created by 七月.
 * Author: 七月
 * Date: 2017/4/17
 * Time: 2:05
 */

namespace app\api\controller\v1;

use app\api\validate\TestValidate;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     *
     */
    public function getBanner($id)
    {
        //独立验证
        //验证器：封装性更好
        $data = [
            'name' => 'vendor',
            'email' => 'asdf@qq.com'
        ];
//        $validate = new Validate([
//            'name' => 'require|max:10',
//            'email'=> 'email'
//            ]);
        $validate = new TestValidate();
        $result = $validate->batch()
            ->check($data);
        var_dump($validate->getError());
    }


}