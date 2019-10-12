<?php /* Smarty version Smarty-3.1.8, created on 2019-10-12 11:37:44
         compiled from "application/views\public\index\create.htm" */ ?>
<?php /*%%SmartyHeaderCode:193405da0f8bed22db5-81777264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '471759d3ae88942f193ffb05a06d20455dfb9685' => 
    array (
      0 => 'application/views\\public\\index\\create.htm',
      1 => 1570872895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193405da0f8bed22db5-81777264',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5da0f8bf1ee218_88380612',
  'variables' => 
  array (
    'post' => 0,
    'response' => 0,
    'english_level_all' => 0,
    'english_level' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5da0f8bf1ee218_88380612')) {function content_5da0f8bf1ee218_88380612($_smarty_tpl) {?><div class="section">
    <h1 class="tcenter">Create a new student:</h1>

    <div class="tcenter" style="font-size: 22px;">
        <a href="<?php echo @WEB_PATH;?>
" class="btn">View student's information</a>
    </div>

    <form class="new-student" method="post" action="">

        <?php if (isset($_smarty_tpl->tpl_vars['post']->value)&&is_array($_smarty_tpl->tpl_vars['post']->value)&&!empty($_smarty_tpl->tpl_vars['post']->value)&&count($_smarty_tpl->tpl_vars['post']->value)>0){?>
            <?php echo $_smarty_tpl->tpl_vars['response']->value['message'];?>

        <?php }?>

        <div class="form-element">
            <label class="form-label" for="student_firstname">First name: </label>
            <input id="student_firstname" type="text" name="student_firstname" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['student_firstname'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['student_firstname'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="First name" />
        </div>

        <div class="form-element">
            <label class="form-label" for="student_lastname">Last name: </label>
            <input id="student_lastname" type="text" name="student_lastname" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['student_lastname'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['student_lastname'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="Last name" />
        </div>

        <div class="form-element">
            <label class="form-label" for="student_email">Email: </label>
            <input id="student_email" type="text" name="student_email" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['student_email'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['student_email'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="Email" />
        </div>

        <div class="form-element">
            <label class="form-label" for="student_age">Age: </label>
            <input id="student_age" type="text" name="student_age" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['student_age'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['student_age'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="Age" />
        </div>

        <div class="form-element">
            <label class="form-label" for="student_phone">Phone: </label>
            <input id="student_phone" type="text" name="student_phone" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['student_phone'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['student_phone'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="Phone" />
        </div>

        <div class="form-element">
            <label for="preferred_comunication" class="form-label">Preferred communication: </label>
            <input id="preferred_comunication" type="radio" name="preferred_comunication" value="email" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['preferred_comunication'])&&$_smarty_tpl->tpl_vars['post']->value['preferred_comunication']=='email'){?>checked<?php }?> /> Email
            <input type="radio" name="preferred_comunication" value="phone" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['preferred_comunication'])&&$_smarty_tpl->tpl_vars['post']->value['preferred_comunication']=='phone'){?>checked<?php }?>
            /> Phone
        </div>

        <div class="form-element">
        <label class="form-label" for="english_level_id">English level: </label>
            <select id="english_level_id" name="english_level_id">
                <option value=""> - choose - </option>

                <?php if (isset($_smarty_tpl->tpl_vars['english_level_all']->value)&&is_array($_smarty_tpl->tpl_vars['english_level_all']->value)&&count($_smarty_tpl->tpl_vars['english_level_all']->value)>0){?>
                    <?php  $_smarty_tpl->tpl_vars['english_level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['english_level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['english_level_all']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['english_level']->key => $_smarty_tpl->tpl_vars['english_level']->value){
$_smarty_tpl->tpl_vars['english_level']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['english_level']->value['english_level_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['english_level_id'])&&$_smarty_tpl->tpl_vars['post']->value['english_level_id']==$_smarty_tpl->tpl_vars['english_level']->value['english_level_id']){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['english_level']->value['english_level_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                    <?php } ?>
                <?php }?>

            </select>
        </div>

        <div class="form-element">
            <label class="form-label" for="student_start_date">Start date: </label>
            <input id="student_start_date" type="date" name="student_start_date" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['student_start_date'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['student_start_date'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
        </div>

        <div class="form-element">
            <label class="form-label" for="student_skills">Technical Skills and Courses</label>
            <textarea id="student_skills" name="student_skills" rows="4" cols="35"><?php if (isset($_smarty_tpl->tpl_vars['post']->value['student_skills'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['student_skills'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
        </div>

        <div class="form-element">
            <label class="form-label" for="student_presentation">Short Personal Presentation (e.g. reason for joining the
                program)</label>
            <textarea id="student_presentation" name="student_presentation" rows="4" cols="35"><?php if (isset($_smarty_tpl->tpl_vars['post']->value['student_presentation'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['student_presentation'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
        </div>

        <div class="form-element">
            <label class="form-label" for="study_from_home">Study from home</label>
            <input id="study_from_home" type="checkbox" name="study_from_home" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['study_from_home'])){?>checked<?php }?> />
        </div>

        <input class="btn" type="submit" value="Save" />

    </form>

</div><?php }} ?>