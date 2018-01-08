<?php
/**
 * Created by PhpStorm.
 * File: app_lang.php
 * User: Yuri
 * Date: 2017/12/19
 * Time: 6:04
 * Email: Yuri Young<yuri.young@qq.com>
 * @property ${NAME} $${NAME}
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Site
$lang['site_title_label']                   = '诚信助学管理系统';
$lang['site_description_label']             = '专业服务于高校学生';
$lang['site_welcome_label']                 = '欢迎';


// Actions
$lang['action_back_label']                  = '返回';
$lang['action_view_label']                  = '查看';
$lang['action_delete_label']                = '删除';
$lang['action_submit_label']                = '保存';
$lang['action_close_label']                 = '关闭';


// Navbar
$lang['nav_brand_label']                    = '诚信助学管理系统';
$lang['sidebar_search_placeholder_label']   = '搜索...';
$lang['nav_dashboard_label']                = '仪表盘';
$lang['nav_notice_label']                   = '公告';
$lang['nav_overview_label']                 = '概览';
$lang['nav_users_label']                    = '用户管理';
$lang['nav_users_list_label']               = '所有用户';
$lang['nav_users_create_user_label']        = '增加用户';
$lang['nav_users_create_group_label']       = '增加组';
$lang['nav_users_personal_label']           = '个人中心';
$lang['nav_customers_label']                = '客户管理';
$lang['nav_customer_list_label']            = '所有客户';
$lang['nav_customer_create_label']          = '增加客户';
$lang['nav_bills_label']                    = '借款管理';
$lang['nav_bill_list_label']                = '所有借款';
$lang['nav_bill_create_label']              = '添加借款';

// Customer info
$lang['customer_info_heading']              = '客户详细信息';
$lang['customer_info_subheading']              = '以下是客户的所有详细信息';

// Customer
$lang['customer_list_heading']               = '所有客户';
$lang['customer_list_subheading']            = '下面是所有的客户';
$lang['customer_info_label']                 = '客户信息';
$lang['customer_name_label']                 = '姓名';
$lang['customer_idcard_label']               = '身份证';
$lang['customer_phone_label']                = '手机号';
$lang['customer_phone_code_label']           = '手机密码';
$lang['customer_qq_label']                   = 'QQ';
$lang['customer_weixin_label']               = '微信';
$lang['customer_father_label']               = '父亲';
$lang['customer_father_phone_label']         = '父亲电话';
$lang['customer_mother_label']               = '母亲';
$lang['customer_mother_phone_label']         = '母亲电话';
$lang['customer_teacher_label']              = '辅导员';
$lang['customer_teacher_phone_label']        = '辅导员电话';
$lang['customer_home_address_label']         = '家庭地址';
$lang['customer_work_address_label']         = '学校/单位';
$lang['customer_career_label']               = '职业';
$lang['customer_remark_label']               = '备注';
$lang['customer_attachment_label']           = '附件';
$lang['customer_credit_level_label']         = '信用等级';
$lang['customer_status_label']               = '状态';
$lang['customer_created_on_label']           = '创建时间';
$lang['customer_last_update_label']          = '最后更新';
$lang['customer_operation_label']            = '操作';

// Create customer
$lang['customer_create_heading']                    = '新增客户';
$lang['customer_create_subheading']                 = '为新客户填写下列信息';
$lang['customer_create_name_label']                 = '姓名：';
$lang['customer_create_name_placeholder']           = '填入客户的姓名';
$lang['customer_create_idcard_label']               = '身份证：';
$lang['customer_create_idcard_placeholder']         = '填入客户的身份证号';
$lang['customer_create_phone_label']                = '手机号：';
$lang['customer_create_phone_placeholder']          = '填入手机号码';
$lang['customer_create_phone_code_label']           = '手机密码：';
$lang['customer_create_phone_code_placeholder']     = '填入手机密码（如果有）';
$lang['customer_create_qq_label']                   = 'QQ：';
$lang['customer_create_qq_placeholder']             = '填入QQ号码';
$lang['customer_create_weixin_label']               = '微信：';
$lang['customer_create_weixin_placeholder']         = '填入微信号';
$lang['customer_create_father_label']               = '父亲：';
$lang['customer_create_father_placeholder']         = '填入父亲的姓名';
$lang['customer_create_father_phone_label']         = '父亲电话：';
$lang['customer_create_father_phone_placeholder']   = '填入父亲的电话';
$lang['customer_create_mother_label']               = '母亲：';
$lang['customer_create_mother_placeholder']         = '填入母亲的姓名';
$lang['customer_create_mother_phone_label']         = '母亲电话：';
$lang['customer_create_mother_phone_placeholder']   = '填入母亲的电话';
$lang['customer_create_teacher_label']              = '辅导员：';
$lang['customer_create_teacher_placeholder']        = '填入辅导员的姓名';
$lang['customer_create_teacher_phone_label']        = '辅导员电话：';
$lang['customer_create_teacher_phone_placeholder']  = '填入辅导员的电话';
$lang['customer_create_home_address_label']         = '家庭地址：';
$lang['customer_create_home_address_placeholder']   = '填入家庭地址';
$lang['customer_create_work_address_label']         = '学校/单位：';
$lang['customer_create_work_address_placeholder']   = '填入学校/工作单位名称或地址';
$lang['customer_create_career_label']               = '职业：';
$lang['customer_create_career_placeholder']         = '填入职业/学历';
$lang['customer_create_remark_label']               = '备注：';
$lang['customer_create_remark_placeholder']         = '填入备注';
$lang['customer_create_status_label']               = '状态：';
$lang['customer_create_attachment_label']           = '附件：';
$lang['customer_create_attachment_placeholder']      = '选择照片上传...';

// Customer status
$lang['customer_status_unknown_label']              = '未知状态';
$lang['customer_status_no_complement_label']        = '需补充';
$lang['customer_status_no_verify_label']            = '未审核';
$lang['customer_status_in_review_label']            = '审核中';
$lang['customer_status_accept_label']               = '通过';
$lang['customer_status_reject_label']               = '拒绝';
$lang['customer_status_abandon_label']              = '放弃';
$lang['customer_status_has_lending_label']          = '已放款';

// Career selects
$lang['career_unknown_label']                       = '未知职业';
$lang['career_higher_vocational_label']             = '高职';
$lang['career_junior_college_label']                = '专科';
$lang['career_undergraduate_label']                 = '本科';
$lang['career_graduate_label']                      = '研究生';
$lang['career_doctor_label']                        = '博士';
$lang['career_worker_label']                        = '工人';
$lang['career_white_collar_label']                  = '白领';
$lang['career_farmer_label']                        = '务农';
$lang['career_freelance_label']                     = '自由职业者';

// Loan bill
$lang['bill_heading']                               = '借款单列表';
$lang['bill_subheading']                            = '下列是所有客户的借款单';
$lang['bill_customer_label']                        = '客户';
$lang['bill_borrow_amount_label']                   = '借款金额';
$lang['bill_repay_amount_label']                    = '还款金额';
$lang['bill_status_label']                          = '借款状态';
$lang['bill_borrow_on_label']                       = '借款日期';
$lang['bill_repay_on_label']                        = '还款日期';
$lang['bill_operation_label']                       = '操作';
$lang['bill_operation_button_label']                = '查看';

// Create loan bill
$lang['bill_create_heading']                        = '新增借款单';
$lang['bill_create_subheading']                     = '为新借款单填写下列信息';
$lang['bill_create_borrow_customer_label']          = '借款客户：';
$lang['bill_create_borrow_customer_placeholder']    = '选择借款的客户';
$lang['bill_create_borrow_amount_label']            = '借款金额：';
$lang['bill_create_borrow_amount_placeholder']      = '填入借款的金额数目';
$lang['bill_create_repay_amount_label']             = '还款金额：';
$lang['bill_create_repay_amount_placeholder']       = '填入需还款的金额数目';
$lang['bill_create_borrow_on_label']                = '借款日期：';
$lang['bill_create_borrow_on_placeholder']          = '选择借款的日期';
$lang['bill_create_repay_on_label']                 = '还款日期：';
$lang['bill_create_repay_on_placeholder']           = '选择还款的日期';
$lang['bill_create_bill_status_label']              = '借款单状态：';
$lang['bill_create_submit_btn']                     = '保存';

// Loan bill status
$lang['bill_status_unknown_label']                  = '未确定';
$lang['bill_status_has_lending_label']              = '已放款';
$lang['bill_status_has_repay_label']                = '已还款';
$lang['bill_status_renewal_label']                  = '续期';
$lang['bill_status_overdue_label']                  = '逾期';
$lang['bill_status_urging_payment_label']           = '催收中';
$lang['bill_status_urge_completed_label']           = '催收完成';
$lang['bill_status_obsolete_label']                 = '作废';
