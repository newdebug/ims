<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - Chinese Simplified
*
* Author: Ben Edmunds
* 		  ben。edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Translation: Bruce Huang
*         	   @libruce
*
* Location: http://github。com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  Simplified Chinese language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = '该表单提交未通过我们的安全性检查。';

// Login
$lang['login_heading']         = '登录';
$lang['login_subheading']      = '请输入 邮箱/用户名 和 密码 进行登录。';
$lang['login_identity_label']  = '邮箱/用户名';
$lang['login_password_label']  = '密码';
$lang['login_remember_label']  = '记住我';
$lang['login_submit_btn']      = '登录';
$lang['login_forgot_password'] = '忘记密码?';

// Index
$lang['index_heading']           = '用户管理';
$lang['index_subheading']        = '下面是用户列表。';
$lang['index_fname_th']          = '名字';
$lang['index_lname_th']          = '姓氏';
$lang['index_email_th']          = '邮箱';
$lang['index_groups_th']         = '用户组';
$lang['index_status_th']         = '状态';
$lang['index_action_th']         = '操作';
$lang['index_active_link']       = '激活';
$lang['index_edit_user_link']    = '编辑';
$lang['index_inactive_link']     = '未激活';
$lang['index_create_user_link']  = '创建用户';
$lang['index_create_group_link'] = '创建用户组';
$lang['index_change_password_link'] = '修改密码';
$lang['index_logout_link']       = '注销';


// Deactivate User
$lang['deactivate_heading']                  = '冻结';
$lang['deactivate_subheading']               = '您确定要冻结用户 \'%s\' ?';
$lang['deactivate_confirm_y_label']          = '确定';
$lang['deactivate_confirm_n_label']          = '取消';
$lang['deactivate_submit_btn']               = '提交';
$lang['deactivate_validation_confirm_label'] = '确认';
$lang['deactivate_validation_user_id_label'] = '用户 ID';

// Create User
$lang['create_user_heading']                           = '创建用户';
$lang['create_user_subheading']                        = '为新用户填入以下信息。';
$lang['create_user_fname_label']                       = '名字:';
$lang['create_user_lname_label']                       = '姓氏:';
$lang['create_user_company_label']                     = '公司/单位:';
$lang['create_user_phone_label']                       = '电话:';
$lang['create_user_identity_label']                    = '用户名:';
$lang['create_user_identity_helper_label']             = '用于账号登录';
$lang['create_user_email_label']                       = '邮箱地址:';
$lang['create_user_email_helper_label']                = '用于账号登录/密码找回';
$lang['create_user_password_label']                    = '密码:';
$lang['create_user_password_confirm_label']            = '确认密码:';
$lang['create_user_submit_btn']                        = '创建用户';
$lang['create_user_validation_fname_label']            = '名字';
$lang['create_user_validation_lname_label']            = '姓氏';
$lang['create_user_validation_identity_label']         = '用户名';
$lang['create_user_validation_email_label']            = '邮箱地址';
$lang['create_user_validation_phone1_label']           = '电话号码第一部分';
$lang['create_user_validation_phone2_label']           = '电话号码第二部分';
$lang['create_user_validation_phone3_label']           = '电话号码第三部分';
$lang['create_user_validation_company_label']          = '公司/单位';
$lang['create_user_validation_password_label']         = '密码';
$lang['create_user_validation_password_confirm_label'] = '确认密码';

// Edit User
$lang['edit_user_heading']                           = '修改用户';
$lang['edit_user_subheading']                        = '请输入下列的用户信息。';
$lang['edit_user_fname_label']                       = '名字:';
$lang['edit_user_lname_label']                       = '姓氏:';
$lang['edit_user_company_label']                     = '公司/单位:';
$lang['edit_user_email_label']                       = '邮箱:';
$lang['edit_user_phone_label']                       = '电话号码:';
$lang['edit_user_password_label']                    = '密码:';
$lang['edit_user_password_placeholder']              = '如果需要修改请输入新密码，否则请留空。';
$lang['edit_user_password_confirm_label']            = '确认密码:';
$lang['edit_user_password_confirm_placeholder']      = '确认新密码。';
$lang['edit_user_groups_heading']                    = '所在用户组';
$lang['edit_user_submit_btn']                        = '保存用户';
$lang['edit_user_validation_fname_label']            = '名字';
$lang['edit_user_validation_lname_label']            = '姓氏';
$lang['edit_user_validation_email_label']            = '邮箱地址';
$lang['edit_user_validation_phone1_label']           = '电话号码第一部分';
$lang['edit_user_validation_phone2_label']           = '电话号码第二部分';
$lang['edit_user_validation_phone3_label']           = '电话号码第三部分';
$lang['edit_user_validation_company_label']          = '公司/单位';
$lang['edit_user_validation_groups_label']           = '用户组';
$lang['edit_user_validation_password_label']         = '密码';
$lang['edit_user_validation_password_confirm_label'] = '密码确认';

// Create Group
$lang['create_group_title']                  = '创建用户组';
$lang['create_group_heading']                = '创建用户组';
$lang['create_group_subheading']             = '请输入下列用户组信息。';
$lang['create_group_name_label']             = '用户组名:';
$lang['create_group_name_placeholder']       = '输入用户组名（如：业务员）';
$lang['create_group_desc_label']             = '组描述:';
$lang['create_group_desc_placeholder']       = '输入用户组描述';
$lang['create_group_submit_btn']             = '创建用户组';
$lang['create_group_validation_name_label']  = '用户组名';
$lang['create_group_validation_desc_label']  = '用户组组描述';

// Edit Group
$lang['edit_group_title']                  = '修改用户组';
$lang['edit_group_saved']                  = '用户组已保存';
$lang['edit_group_heading']                = '修改用户组';
$lang['edit_group_subheading']             = '请输入下列用户名信息。';
$lang['edit_group_name_label']             = '用户组名:';
$lang['edit_group_desc_label']             = '用户组描述:';
$lang['edit_group_submit_btn']             = '保存';
$lang['edit_group_validation_name_label']  = '用户组名';
$lang['edit_group_validation_desc_label']  = '用户组描述';

// Change Password
$lang['change_password_heading']                               = '修改密码';
$lang['change_password_subheading']                            = '请为您的账户输入新的密码。';
$lang['change_password_old_password_label']                    = '当前密码:';
$lang['change_password_new_password_label']                    = '新密码:';
$lang['change_password_new_password_length_helper']            = '密码最少 %s 位。';
$lang['change_password_new_password_confirm_label']            = '确认新密码:';
$lang['change_password_submit_btn']                            = '修改';
$lang['change_password_validation_old_password_label']         = '当前密码';
$lang['change_password_validation_new_password_label']         = '新密码';
$lang['change_password_validation_new_password_confirm_label'] = '确认新密码';
$lang['change_password__password_placeholder']                 = '输入当前密码';
$lang['change_password_new_password_placeholder']              = '输入新密码';
$lang['change_password_confirm_password_placeholder']          = '确认新密码';

// Forgot Password
$lang['forgot_password_heading']                 = '忘记密码';
$lang['forgot_password_subheading']              = '请输入您的 %s 以便收取邮件重置密码。';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_username_label']          = '%s:';
$lang['forgot_password_submit_btn']              = '提交';
$lang['forgot_password_validation_email_label']  = '邮箱地址';
$lang['forgot_password_username_identity_label'] = '用户名';
$lang['forgot_password_email_identity_label']    = '邮箱地址';
$lang['forgot_password_email_not_found']         = '无此邮箱的记录。';
$lang['forgot_password_identity_not_found']      = '无此用户的记录。。';
$lang['forgot_password_email_placeholder']       = '输入您的邮箱地址';

// Reset Password
$lang['reset_password_heading']                               = '修改密码';
$lang['reset_password_new_password_label']                    = '新密码 (至少 %s 位):';
$lang['reset_password_new_password_confirm_label']            = '确认新密码:';
$lang['reset_password_submit_btn']                            = '修改';
$lang['reset_password_validation_new_password_label']         = '新密码';
$lang['reset_password_validation_new_password_confirm_label'] = '确认新密码';

// Activation Email
$lang['email_activate_heading']    = '激活用户 %s';
$lang['email_activate_subheading'] = '请点击连接跳转至 %s。';
$lang['email_activate_link']       = '激活您的账户';

// Forgot Password Email
$lang['email_forgot_password_heading']    = '重置 %s 的密码';
$lang['email_forgot_password_subheading'] = '请点击连接跳转至 %s。';
$lang['email_forgot_password_link']       = '重置您的密码';

// New Password Email
$lang['email_new_password_heading']    = '%s 的新密码';
$lang['email_new_password_subheading'] = '您的密码已经重置为: %s';

// Input placeholder
$lang['input_user_fname_placeholder']                       = '名字';
$lang['input_user_lname_placeholder']                       = '姓氏';
$lang['input_user_company_placeholder']                     = '公司/单位地址';
$lang['input_user_identity_placeholder']                    = '用户名';
$lang['input_user_email_placeholder']                       = '邮箱';
$lang['input_user_phone_placeholder']                       = '电话号码';
$lang['input_user_password_placeholder']                    = '密码';
$lang['input_user_password_confirm_placeholder']            = '确认密码';
