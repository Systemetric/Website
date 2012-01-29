<?php
class Form {
	// array('username' => array('message' => 'Please give a username', 'required' => true, 'length' => 6, 'match' => 'usernameConfirm'));
	private $action, $enctype, $id, $class, $fields, $html;

	// Initialise form, start output buffering
	public function __construct($action, $enctype = "", $class = "", $id = "") {
		$this->action = $action;
		$this->id = $id;
		$this->class = $class;

		if($enctype) {
			$this->enctype = $enctype;
		}

		ob_start();

		if(!$this->enctype) {
			echo '<form class="' . $this->class . '" id="' . $this->id . '" action="' . $this->action . '" method="post">';
		} else {
			echo '<form class="' . $this->class . '" id="' . $this->id . '" action="' . $this->action . '" enctype="' . $this->enctype . '" method="post">';
		}
	}

	// Flush form to client
	public function __destruct() {
		echo '</form>';

		$this->html = ob_get_contents();
		ob_clean();

		echo $this->html;
	}

	// Add a field to the form
	public function add($fieldType, $name, $label, $value = '', $placeholder = '', $remember = true) {
		$this->fields[] = array('type' => $fieldType, 'name' => $name, 'remember' => $remember, 'placeholder' => $placeholder, 'value' => $value, 'label' => $label);

		if(isset($_POST[$name]) && !empty($_POST[$name])) {
			$value = $_POST[$name];
		}

		echo '<div class="fieldContainer">';
		switch($fieldType) {
			case 'textarea':
				echo '<label>' . $label . '</label>
				<textarea placeholder="' . $placeholder . '" name="' . $name . '">' . $value . '</textarea>';
			break;
			case 'text':
				echo '<label>' . $label . '</label>
				<input placeholder="' . $placeholder . '" type="text" name="' . $name . '" value="' . $value . '">';
			break;
			case 'password':
				echo '<label>' . $label . '</label>
				<input placeholder="' . $placeholder . '" type="password" name="' . $name . '" value="' . $value . '">';
			break;
		}
		echo '</div>';
	}

	// This needs finishing. There aren't any rules yet.
	public function validate($fields, $rules) {
		foreach($rules as $fieldName => $fieldRules) {
			if(in_array('required', $fieldRules)) {
				if(!isset($_POST[$field]) || !length($_POST[$field])) {
					return array('message' => $fieldRules['message'], 'error' => 'required');
				}
			}
		}
	}

	// Gets current buffer contents, puts to client, keeps buffer contents
	public function render() {
		$this->html = ob_get_contents();

		echo $this->html;
	}
}
?>