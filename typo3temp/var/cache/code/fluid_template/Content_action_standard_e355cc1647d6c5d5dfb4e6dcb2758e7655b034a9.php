<?php

class Content_action_standard_e355cc1647d6c5d5dfb4e6dcb2758e7655b034a9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
  'flux' => 
  array (
    0 => 'FluidTYPO3\\Flux\\ViewHelpers',
  ),
));
}

/**
 * section Configuration
 */
public function section_754164850f38c1ecdaf6b8ed894cb192bc36c5f4(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['name'] = NULL;
$arguments4['label'] = NULL;
$arguments4['default'] = NULL;
$arguments4['required'] = false;
$arguments4['exclude'] = false;
$arguments4['transform'] = NULL;
$arguments4['enabled'] = true;
$arguments4['requestUpdate'] = false;
$arguments4['displayCond'] = NULL;
$arguments4['inherit'] = true;
$arguments4['inheritEmpty'] = true;
$arguments4['clear'] = false;
$arguments4['variables'] = array (
);
$arguments4['extensionName'] = NULL;
$arguments4['config'] = array (
);
$arguments4['eval'] = 'trim';
$arguments4['size'] = 32;
$arguments4['maxCharacters'] = NULL;
$arguments4['minimum'] = NULL;
$arguments4['maximum'] = NULL;
$arguments4['placeholder'] = NULL;
$arguments4['name'] = 'textfield';
$arguments4['label'] = 'A simple text field';

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
return $output3;
};
$arguments1 = array();
$arguments1['id'] = NULL;
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['enabled'] = true;
$arguments1['variables'] = array (
);
$arguments1['options'] = NULL;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments1['extensionName'] = NULL;
$arguments1['id'] = 'default';
$arguments1['label'] = 'Default Flux Content Type';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
	<h1>Default Flux Content Type</h1>
	<p>Next steps:</p>
	<ol>
		<li>Edit the <code>design/Templates/Content/Default.html</code> file</li>
		<li>Or copy the file to another filename and adjust to your likings</li>
		<li>Consult the Flux documentation and ViewHelper reference to learn about things like adding fields and creating nested content areas</li>
	</ol>
	<p>Enjoy!</p>
';
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['name'] = NULL;
$arguments7['name'] = 'Default';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output6 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
	';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['name'] = NULL;
$arguments15['label'] = NULL;
$arguments15['default'] = NULL;
$arguments15['required'] = false;
$arguments15['exclude'] = false;
$arguments15['transform'] = NULL;
$arguments15['enabled'] = true;
$arguments15['requestUpdate'] = false;
$arguments15['displayCond'] = NULL;
$arguments15['inherit'] = true;
$arguments15['inheritEmpty'] = true;
$arguments15['clear'] = false;
$arguments15['variables'] = array (
);
$arguments15['extensionName'] = NULL;
$arguments15['config'] = array (
);
$arguments15['eval'] = 'trim';
$arguments15['size'] = 32;
$arguments15['maxCharacters'] = NULL;
$arguments15['minimum'] = NULL;
$arguments15['maximum'] = NULL;
$arguments15['placeholder'] = NULL;
$arguments15['name'] = 'textfield';
$arguments15['label'] = 'A simple text field';

$output14 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
	';
return $output14;
};
$arguments12 = array();
$arguments12['id'] = NULL;
$arguments12['label'] = NULL;
$arguments12['description'] = NULL;
$arguments12['enabled'] = true;
$arguments12['variables'] = array (
);
$arguments12['options'] = NULL;
$arguments12['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments12['extensionName'] = NULL;
$arguments12['id'] = 'default';
$arguments12['label'] = 'Default Flux Content Type';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output11 .= '
';
return $output11;
};
$arguments9 = array();
$arguments9['name'] = NULL;
$arguments9['name'] = 'Configuration';

$output6 .= NULL;

$output6 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return '
	<h1>Default Flux Content Type</h1>
	<p>Next steps:</p>
	<ol>
		<li>Edit the <code>design/Templates/Content/Default.html</code> file</li>
		<li>Or copy the file to another filename and adjust to your likings</li>
		<li>Consult the Flux documentation and ViewHelper reference to learn about things like adding fields and creating nested content areas</li>
	</ol>
	<p>Enjoy!</p>
';
};
$arguments17 = array();
$arguments17['name'] = NULL;
$arguments17['name'] = 'Main';

$output6 .= NULL;

$output6 .= '
';

return $output6;
}


}
#