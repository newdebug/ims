<?php
/**
 * Created by PhpStorm.
 * File: form_validation.php
 * User: Yuri
 * Date: 2018/1/3
 * Time: 0:31
 * Email: Yuri Young<yuri.young@qq.com>
 * @property ${NAME} $${NAME}
 */

$config = array(
    'customer_name' => array(
        array(
            'field' => 'customer_name',
            'label' => lang('customer_create_name_label'),
            'rules' => 'trim|required|regex_match[/^([\xe4-\xe9][\x80-\xbf]{2}){2,4}$/]',
            'errors' => array('required' => '{field} 不能为空。')
        ),
    ),
    'customer_idcard' => array(
        'field' => 'customer_idcard',
        'label' => lang('customer_create_idcard_label'),
        'rules' => 'trim|required|regex_match[/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x))$/]'
    ),
    'customer_phone' => array(
        'field' => 'customer_phone',
        'label' => lang('customer_create_phone_label'),
        'rules' => 'trim|required|regex_match[/^1[34578]\d{9}$/]'
    ),
    'customer_father' => array(
        'field' => 'customer_father',
        'label' => lang('customer_create_father_label'),
        'rules' => 'trim|regex_match[/^([\xe4-\xe9][\x80-\xbf]{2}){2,4}$/]'
    ),
    'customer_father_phone' => array(
        'field' => 'customer_father_phone',
        'label' => lang('customer_create_father_phone_label'),
        'rules' => 'trim|regex_match[/^1[34578]\d{9}$/]'
    ),
    'customer_mother' => array(
        'field' => 'customer_mother',
        'label' => lang('customer_create_mother_label'),
        'rules' => 'trim|regex_match[/^([\xe4-\xe9][\x80-\xbf]{2}){2,4}$/]'
    ),
    'customer_mother_phone' => array(
        'field' => 'customer_mother_phone',
        'label' => lang('customer_create_mother_phone_label'),
        'rules' => 'trim|regex_match[/^1[34578]\d{9}$/]'
    ),
    'customer_teacher' => array(
        'field' => 'customer_teacher',
        'label' => lang('customer_create_teacher_label'),
        'rules' => 'trim|regex_match[/^([\xe4-\xe9][\x80-\xbf]{2}){2,4}$/]'
    ),
    'customer_teacher_phone' => array(
        'field' => 'customer_teacher_phone',
        'label' => lang('customer_create_teacher_phone_label'),
        'rules' => 'trim|regex_match[/^1[34578]\d{9}$/]'
    ),
    'customer_qq' => array(
        'field' => 'customer_qq',
        'label' => lang('customer_create_qq_label'),
        'rules' => 'trim|integer'
    ),
);