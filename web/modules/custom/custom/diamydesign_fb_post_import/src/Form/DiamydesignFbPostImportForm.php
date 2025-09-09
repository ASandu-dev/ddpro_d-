<?php
namespace Drupal\diamydesign_fb_post_import\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class DiamydesignFbPostImportForm extends ConfigFormBase {

/**
* {@inheritdoc}
*/
public function getFormId() {
return 'diamydesign_fb_post_import_settings_form';
}

/**
* {@inheritdoc}
*/
protected function getEditableConfigNames() {
return ['diamydesign_fb_post_import.settings'];
}

/**
* {@inheritdoc}
*/
public function buildForm(array $form, FormStateInterface $form_state) {
$config = $this->config('diamydesign_fb_post_import.settings');

$form['api_key'] = [
'#type' => 'textarea',
'#title' => $this->t('Facebook API Key'),
'#default_value' => $config->get('api_key'),
];

return parent::buildForm($form, $form_state);
}

/**
* {@inheritdoc}
*/
public function submitForm(array &$form, FormStateInterface $form_state) {
$config = $this->config('diamydesign_fb_post_import.settings');
$config->set('api_key', $form_state->getValue('api_key'));
$config->save();

parent::submitForm($form, $form_state);
}
}
