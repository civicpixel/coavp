<?php
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<table border="0">
<tr>
  <td valign="top">

  <div class="views-field views-field-field-image">
	<div class="field-content"><a href="<?php print $row->_field_data['nid']['entity']->field_link['und']['0']['url']; ?>"><?php if (!empty($row->_field_data['nid']['entity']->field_image['und'][0]['uri'])) {
 echo theme('image_style', array('style_name' => '628x300', 'path' => file_build_uri($row->_field_data['nid']['entity']->field_image['und'][0]['filename'])));
}
?></a>
	
	</div>
  </div>

  </td>
  <td class="info-block" valign="top">
  <div class="info-block-inner"><div class="info-block-wrapper">
	<h2 class="slide-title"><a href="<?php print $row->_field_data['nid']['entity']->field_link['und']['0']['url']; ?>"><?php print $row->_field_data['nid']['entity']->title; ?></a></h2>
	<div class="slide-body"><?php print $row->_field_data['nid']['entity']->body['und']['0']['value']; ?></div>
	<div class="slide-link"><a href="<?php print $row->_field_data['nid']['entity']->field_link['und']['0']['url']; ?>"><?php print $row->_field_data['nid']['entity']->field_link['und']['0']['title']; ?></a></div>
  </div></div>
  </td>
</tr>
</table>