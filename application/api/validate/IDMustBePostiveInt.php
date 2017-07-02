<?php
/**
 * Created by 好好地.
 * Author: 好好地
 * Date: 2017/4/18
 * Time: 3:11
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected function isPositiveInteger($value, $rule = '',
        $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }
        else{
            return $field.'必须是正整数';
        }
    }
}