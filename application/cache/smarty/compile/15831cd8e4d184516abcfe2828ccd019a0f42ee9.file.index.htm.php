<?php /* Smarty version Smarty-3.1.8, created on 2019-10-11 20:19:35
         compiled from "application/views\admin\index\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:104275da0c7b722c163-33335800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15831cd8e4d184516abcfe2828ccd019a0f42ee9' => 
    array (
      0 => 'application/views\\admin\\index\\index.htm',
      1 => 1568365556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104275da0c7b722c163-33335800',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5da0c7b766fd22_09900663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5da0c7b766fd22_09900663')) {function content_5da0c7b766fd22_09900663($_smarty_tpl) {?><div class="content-main">

	<div class="block-holder no-padding">
		<div class="block-title">Activity</div>
		<div class="block-content no-padding">

			<div class="info-library">

				<div class="field active">Clients <span>85</span></div>
				<div class="field">Books <span>119</span></div>
				<div class="field">Publishers <span>9</span></div>
				<div class="field">Categories <span>54</span></div>
				<div class="clear"></div>

			</div>

			<table>
				<thead>
				<tr>
					<th>Books <span id="book-filter" class="icon-filter"></span></th>
					<th>Authors</th>
					<th>Categories <span id="category-filter" class="icon-filter"></span></th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td><strong>Book 1</strong></td>
					<td>Author 1</td>
					<td><span class="category-dot bgcolor-violet-before color-violet">Mathematics</span></td>
				</tr>
				<tr>
					<td><strong>Book 2</strong></td>
					<td>Author 2</td>
					<td><span class="category-dot bgcolor-orange-before color-orange">Literature</span></td>
				</tr>
				<tr>
					<td><strong>Book 3</strong></td>
					<td>Author 3</td>
					<td><span class="category-dot bgcolor-blue-before color-blue">History</span></td>
				</tr>
				</tbody>
			</table>

		</div>
	</div>

</div>

<div class="content-right">

	<div class="block-holder">
		<div class="block-title">Title 1</div>
		<div class="block-content">

			<p>Book1</p>
			<p>Book2</p>
			<p>Book3</p>
			<p>Book4</p>
			<p>Book5</p>

		</div>
	</div>

	<div class="block-holder">
		<div class="block-title">Title 2</div>
		<div class="block-content">

			<div class="currenciue">
				<p>usd</p>
				<p>euro</p>
			</div>

		</div>
	</div>

	<div class="block-holder">
		<div class="block-title">Title 3</div>
		<div class="block-content">

			<p>Book1</p>
			<p>Book2</p>
			<p>Book3</p>
			<p>Book4</p>
			<p>Book5</p>

		</div>
	</div>

	<div class="block-holder">
		<div class="block-title">Title 4</div>
		<div class="block-content">

			<p>Book1</p>
			<p>Book2</p>
			<p>Book3</p>
			<p>Book4</p>
			<p>Book5</p>

		</div>
	</div>

	<div class="block-holder">
		<div class="block-title">Title 5</div>
		<div class="block-content">

			<p>Book1</p>
			<p>Book2</p>
			<p>Book3</p>
			<p>Book4</p>
			<p>Book5</p>

		</div>
	</div>

	<div class="block-holder">
		<div class="block-title">Title 6</div>
		<div class="block-content">

			<p>Book1</p>
			<p>Book2</p>
			<p>Book3</p>
			<p>Book4</p>
			<p>Book5</p>

		</div>
	</div>

</div>



<script type="text/javascript">

	var book_icon_filter = $('div.block-holder table span.icon-filter');
	book_icon_filter.on('click', function () {

		var item = $(this);
		if ( item.hasClass('icon-filter-up') ) {
			item.removeClass('icon-filter-up');
			item.addClass('icon-filter-down');
		} else {
			item.removeClass('icon-filter-down');
			item.addClass('icon-filter-up');
		}

	});

	var info_library_field = $('div.block-holder div.info-library div.field');
	info_library_field.on('click', function () {

		var item = $(this);
		$('.field').removeClass('active');
		item.addClass('active');

	});

	$('.tab').on('click', function () {

		if ( ($(window).width() < 1140) && ($(window).width() > 940) ) {

			var $holder                 = $('.header');
			var $holder_header_search   = $holder.find('.header-search');
			var $holder_form            = $holder_header_search.find('form');

			if ( $holder_form.hasClass('reduce-input') ) {
				$holder_form.removeClass('reduce-input');
			} else {
				$holder_form.addClass('reduce-input');
			}

		}

	});



</script><?php }} ?>