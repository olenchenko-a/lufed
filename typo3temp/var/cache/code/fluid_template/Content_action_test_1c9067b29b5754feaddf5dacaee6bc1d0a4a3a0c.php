<?php

class Content_action_test_1c9067b29b5754feaddf5dacaee6bc1d0a4a3a0c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'LayoutContentElement';
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
    2 => 'TYPO3\\Fluid\\ViewHelpers',
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
return NULL;
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
$arguments1['id'] = 'Test';
$arguments1['label'] = 'Test';
// Rendering Array
$array3 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['languageKey'] = NULL;
$arguments4['alternativeLanguageKeys'] = NULL;
$arguments4['key'] = 'flux.Sections';
$array3['group'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
$arguments1['options'] = $array3;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '

        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SheetViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper
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
$arguments15['name'] = 'label';
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array17['0'] = 1;

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments15['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);

$output14 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
                    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['label'] = 'Select link';
$arguments24['hideParent'] = false;
$arguments24['variables'] = array (
);
$arguments24['extensionName'] = NULL;
$arguments24['activeTab'] = 'file';
$arguments24['width'] = 500;
$arguments24['height'] = 500;
$arguments24['allowedExtensions'] = false;
$arguments24['blindLinkOptions'] = '';
$arguments24['blindLinkFields'] = '';
$arguments24['activeTab'] = 'page';

$output23 .= FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                    ';
return $output23;
};
$arguments19 = array();
$arguments19['name'] = NULL;
$arguments19['label'] = NULL;
$arguments19['default'] = NULL;
$arguments19['required'] = false;
$arguments19['exclude'] = false;
$arguments19['transform'] = NULL;
$arguments19['enabled'] = true;
$arguments19['requestUpdate'] = false;
$arguments19['displayCond'] = NULL;
$arguments19['inherit'] = true;
$arguments19['inheritEmpty'] = true;
$arguments19['clear'] = false;
$arguments19['variables'] = array (
);
$arguments19['extensionName'] = NULL;
$arguments19['config'] = array (
);
$arguments19['eval'] = 'trim';
$arguments19['size'] = 32;
$arguments19['maxCharacters'] = NULL;
$arguments19['minimum'] = NULL;
$arguments19['maximum'] = NULL;
$arguments19['placeholder'] = NULL;
$arguments19['name'] = 'link';
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array21['0'] = 1;

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);

$output14 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output14 .= '
                ';
return $output14;
};
$arguments12 = array();
$arguments12['name'] = NULL;
$arguments12['label'] = NULL;
$arguments12['variables'] = array (
);
$arguments12['extensionName'] = NULL;
$arguments12['inherit'] = false;
$arguments12['inheritEmpty'] = false;
$arguments12['transform'] = NULL;
$arguments12['contentContainer'] = false;
$arguments12['name'] = 'item';

$output11 .= FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
            ';
return $output11;
};
$arguments9 = array();
$arguments9['name'] = NULL;
$arguments9['label'] = NULL;
$arguments9['variables'] = array (
);
$arguments9['extensionName'] = NULL;
$arguments9['inherit'] = false;
$arguments9['inheritEmpty'] = false;
$arguments9['gridMode'] = 'rows';
$arguments9['name'] = 'items';

$output8 .= FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
        ';
return $output8;
};
$arguments6 = array();
$arguments6['name'] = NULL;
$arguments6['label'] = NULL;
$arguments6['variables'] = array (
);
$arguments6['description'] = NULL;
$arguments6['shortDescription'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['name'] = 'optContent';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\Form\SheetViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '
    ';

return $output0;
}
/**
 * section Preview
 */
public function section_f1fbb2b43dca281d0138f4fcc92543ad143ef0b1(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output26 = '';

$output26 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['languageKey'] = NULL;
$arguments27['alternativeLanguageKeys'] = NULL;
$arguments27['key'] = 'flux.Menu';
$arguments27['extensionName'] = 'LufeditTemplate';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output26 .= '
    ';

return $output26;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output29 = '';

$output29 .= '
        <ul class="menu">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                <li><a href="';
$array34 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('slot.item.link', $array34)]);

$output33 .= '">';
$array35 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('slot.item.label', $array35)]);

$output33 .= '</a></li>
            ';
return $output33;
};
$arguments30 = array();
$arguments30['each'] = NULL;
$arguments30['as'] = NULL;
$arguments30['key'] = NULL;
$arguments30['reverse'] = false;
$arguments30['iteration'] = NULL;
$array32 = array (
);$arguments30['each'] = $renderingContext->getVariableProvider()->getByPath('items', $array32);
$arguments30['as'] = 'slot';

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
        </ul>
    ';

return $output29;
}
/**
 * section OriginalIntactHtml
 */
public function section_3f31de6830e0e27d195cfe858ce94c11c66c57ea(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output36 = '';

$output36 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return '
            <!--
                This section used to be used only for development purpose.
                Some behaviour might not work properly.
                Please don\'t change the content.
            -->
        ';
};
$arguments37 = array();

$output36 .= NULL;

$output36 .= '
    ';

return $output36;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output39 = '';

$output39 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['name'] = NULL;
$arguments40['name'] = 'LayoutContentElement';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output39 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['id'] = NULL;
$arguments45['label'] = NULL;
$arguments45['description'] = NULL;
$arguments45['enabled'] = true;
$arguments45['variables'] = array (
);
$arguments45['options'] = NULL;
$arguments45['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments45['extensionName'] = NULL;
$arguments45['id'] = 'Test';
$arguments45['label'] = 'Test';
// Rendering Array
$array47 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['languageKey'] = NULL;
$arguments48['alternativeLanguageKeys'] = NULL;
$arguments48['key'] = 'flux.Sections';
$array47['group'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);
$arguments45['options'] = $array47;

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= '

        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SheetViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
                    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['name'] = NULL;
$arguments59['label'] = NULL;
$arguments59['default'] = NULL;
$arguments59['required'] = false;
$arguments59['exclude'] = false;
$arguments59['transform'] = NULL;
$arguments59['enabled'] = true;
$arguments59['requestUpdate'] = false;
$arguments59['displayCond'] = NULL;
$arguments59['inherit'] = true;
$arguments59['inheritEmpty'] = true;
$arguments59['clear'] = false;
$arguments59['variables'] = array (
);
$arguments59['extensionName'] = NULL;
$arguments59['config'] = array (
);
$arguments59['eval'] = 'trim';
$arguments59['size'] = 32;
$arguments59['maxCharacters'] = NULL;
$arguments59['minimum'] = NULL;
$arguments59['maximum'] = NULL;
$arguments59['placeholder'] = NULL;
$arguments59['name'] = 'label';
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array61['0'] = 1;

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments59['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);

$output58 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
                    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['label'] = 'Select link';
$arguments68['hideParent'] = false;
$arguments68['variables'] = array (
);
$arguments68['extensionName'] = NULL;
$arguments68['activeTab'] = 'file';
$arguments68['width'] = 500;
$arguments68['height'] = 500;
$arguments68['allowedExtensions'] = false;
$arguments68['blindLinkOptions'] = '';
$arguments68['blindLinkFields'] = '';
$arguments68['activeTab'] = 'page';

$output67 .= FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
                    ';
return $output67;
};
$arguments63 = array();
$arguments63['name'] = NULL;
$arguments63['label'] = NULL;
$arguments63['default'] = NULL;
$arguments63['required'] = false;
$arguments63['exclude'] = false;
$arguments63['transform'] = NULL;
$arguments63['enabled'] = true;
$arguments63['requestUpdate'] = false;
$arguments63['displayCond'] = NULL;
$arguments63['inherit'] = true;
$arguments63['inheritEmpty'] = true;
$arguments63['clear'] = false;
$arguments63['variables'] = array (
);
$arguments63['extensionName'] = NULL;
$arguments63['config'] = array (
);
$arguments63['eval'] = 'trim';
$arguments63['size'] = 32;
$arguments63['maxCharacters'] = NULL;
$arguments63['minimum'] = NULL;
$arguments63['maximum'] = NULL;
$arguments63['placeholder'] = NULL;
$arguments63['name'] = 'link';
// Rendering Boolean node
// Rendering Array
$array65 = array();
$array65['0'] = 1;

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments63['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);

$output58 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output58 .= '
                ';
return $output58;
};
$arguments56 = array();
$arguments56['name'] = NULL;
$arguments56['label'] = NULL;
$arguments56['variables'] = array (
);
$arguments56['extensionName'] = NULL;
$arguments56['inherit'] = false;
$arguments56['inheritEmpty'] = false;
$arguments56['transform'] = NULL;
$arguments56['contentContainer'] = false;
$arguments56['name'] = 'item';

$output55 .= FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
            ';
return $output55;
};
$arguments53 = array();
$arguments53['name'] = NULL;
$arguments53['label'] = NULL;
$arguments53['variables'] = array (
);
$arguments53['extensionName'] = NULL;
$arguments53['inherit'] = false;
$arguments53['inheritEmpty'] = false;
$arguments53['gridMode'] = 'rows';
$arguments53['name'] = 'items';

$output52 .= FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
        ';
return $output52;
};
$arguments50 = array();
$arguments50['name'] = NULL;
$arguments50['label'] = NULL;
$arguments50['variables'] = array (
);
$arguments50['description'] = NULL;
$arguments50['shortDescription'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['name'] = 'optContent';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\Form\SheetViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output44 .= '
    ';
return $output44;
};
$arguments42 = array();
$arguments42['name'] = NULL;
$arguments42['name'] = 'Configuration';

$output39 .= NULL;

$output39 .= '
        
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['key'] = NULL;
$arguments73['id'] = NULL;
$arguments73['default'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['languageKey'] = NULL;
$arguments73['alternativeLanguageKeys'] = NULL;
$arguments73['key'] = 'flux.Menu';
$arguments73['extensionName'] = 'LufeditTemplate';

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output72 .= '
    ';
return $output72;
};
$arguments70 = array();
$arguments70['name'] = NULL;
$arguments70['name'] = 'Preview';

$output39 .= NULL;

$output39 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
        <ul class="menu">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                <li><a href="';
$array82 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('slot.item.link', $array82)]);

$output81 .= '">';
$array83 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('slot.item.label', $array83)]);

$output81 .= '</a></li>
            ';
return $output81;
};
$arguments78 = array();
$arguments78['each'] = NULL;
$arguments78['as'] = NULL;
$arguments78['key'] = NULL;
$arguments78['reverse'] = false;
$arguments78['iteration'] = NULL;
$array80 = array (
);$arguments78['each'] = $renderingContext->getVariableProvider()->getByPath('items', $array80);
$arguments78['as'] = 'slot';

$output77 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
        </ul>
    ';
return $output77;
};
$arguments75 = array();
$arguments75['name'] = NULL;
$arguments75['name'] = 'Main';

$output39 .= NULL;

$output39 .= '


    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return '
            <!--
                This section used to be used only for development purpose.
                Some behaviour might not work properly.
                Please don\'t change the content.
            -->
        ';
};
$arguments87 = array();

$output86 .= NULL;

$output86 .= '
    ';
return $output86;
};
$arguments84 = array();
$arguments84['name'] = NULL;
$arguments84['name'] = 'OriginalIntactHtml';

$output39 .= NULL;

$output39 .= '
';

return $output39;
}


}
#