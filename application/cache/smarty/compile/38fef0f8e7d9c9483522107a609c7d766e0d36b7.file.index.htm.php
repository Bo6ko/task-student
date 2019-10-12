<?php /* Smarty version Smarty-3.1.8, created on 2019-10-12 13:53:18
         compiled from "application/views\public\index\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:237425d813f8d953d76-17516187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38fef0f8e7d9c9483522107a609c7d766e0d36b7' => 
    array (
      0 => 'application/views\\public\\index\\index.htm',
      1 => 1570881197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237425d813f8d953d76-17516187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5d813f8d98af81_64857333',
  'variables' => 
  array (
    'deleteStudent' => 0,
    'students' => 0,
    'student' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d813f8d98af81_64857333')) {function content_5d813f8d98af81_64857333($_smarty_tpl) {?><div class="section">
    <h1>Student`s list:</h1>

    <a href="<?php echo @WEB_PATH;?>
create" class="btn btn-create">Create</a>

    <p><?php echo $_smarty_tpl->tpl_vars['deleteStudent']->value;?>
</p>

    <table class="grid" style="width: 100%; margin: 40px 0px;" border=1>
        <thead>
        <tr>
            <th>#</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Preferred comunication</th>
            <th>English level</th>
            <th>Start date</th>
            <th>Student skills</th>
            <th>Student presentation</th>
            <th>Study from home</th>
            <th></th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_firstname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_lastname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_age'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['preferred_comunication'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['english_level_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_start_date'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_skills'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_presentation'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['student']->value['study_from_home']==0){?>No<?php }else{ ?>Yes<?php }?></td>
            <td style="text-align: center; color: red;">
                <strong><a class="edit"
                           href="<?php echo @WEB_PATH;?>
update/<?php echo $_smarty_tpl->tpl_vars['student']->value['student_id'];?>
"></a></strong>
            </td>
            <td style="text-align: center; color: red;">
                <strong><a class="delete"
                           href="<?php echo @WEB_PATH;?>
delete/<?php echo $_smarty_tpl->tpl_vars['student']->value['student_id'];?>
"></a></strong>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

    <?php echo $_smarty_tpl->tpl_vars['data']->value['links'];?>


</div><?php }} ?>